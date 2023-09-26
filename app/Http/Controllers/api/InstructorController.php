<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentsResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryInstructorResource;
use App\Http\Resources\GroupChartResource;
use App\Http\Resources\GroupNew2Resource;
use App\Http\Resources\GroupNewResource;
use App\Http\Resources\InstructorProfileResource;
use App\Http\Resources\OnlineCourseInstructorResource;
use App\Http\Resources\OnlineCourseResource;

use App\Http\Resources\QuizInstructorResource;
use App\Models\Appointments;
use App\Models\Country;

use App\Models\Groups;

use App\Models\Instructor;
use App\Models\MaterialGroups;
use App\Models\Materials;
use App\Models\OnlineCourse;
use App\Models\OnlineCourseOrders;
use App\Models\QuestionsOptions;
use App\Models\Quiz;
use App\Models\QuizGroups;
use App\Models\QuizQuestions;
use App\Models\StudenQuiz;
use App\Models\StudenQuizAnswer;
use App\Models\WithDrawRequest;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class InstructorController extends Controller
{
    use response;

    public function instructor_onlineCourses()
    {
        return $this->success(OnlineCourseInstructorResource::collection(auth('instructor-api')->user()->OnlineCourses));


    }

    public function instructor_onlineCourse($slug)
    {
        $online_course = OnlineCourse::whereHas('course_instructor')->where('slug', $slug)->first();
        if ($online_course) {
            $groups = Groups::where('instructor_id', auth('instructor-api')->user()->id)->where('online_course_id', $online_course->id)->get();
            $quizes=Quiz::with('online_courses','instructors','questions')->where('instructor_id', auth('instructor-api')->user()->id)->where('online_course_id', $online_course->id)->get();
            return $this->success(['online_course' => new OnlineCourseInstructorResource($online_course), 'groups' => GroupNewResource::collection($groups), 'quizes' => QuizInstructorResource::collection($quizes)]);
        } else {
            return $this->error('Course Not Found', [], 404);

        }

    }

    public function instructor_profile()
    {
        $countries = Country::whereHas('students')->get();
        return $this->success(['instructor' => new InstructorProfileResource(auth('instructor-api')->user()), 'countries' => CountryInstructorResource::collection($countries)]);

    }

    public function logout()
    {
        $user = auth('instructor-api')->user();
        $user->token()->revoke();
        return $this->successMessage('Logout Done');
    }

    public function groups(Request $request)
    {
        $instructor = auth('instructor-api')->user();
        $oValidatorRules = [
            'online_course_id' => 'required|exists:online_courses,id',
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'zoom_link' => 'nullable',
            'days' => 'array|required',
            'days.*' => 'date_format:Y-m-d H:i:s|before_or_equal:' . $request->end_date . '|after_or_equal:' . $request->start_date,
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($instructor) {
            $group = Groups::create([
                'instructor_id' => $instructor->id,
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'online_course_id' => $request->online_course_id,
            ]);
            foreach ($request->days as $key => $day) {
                $meetings = (new \Jubaer\Zoom\Zoom)->createMeeting([
                    "agenda" => $group->online_courses->title,
                    "topic" => $group['name'] . date("c", strtotime($request->days[$key])),
                    "type" => 2, // 1 => instant, 2 => scheduled, 3 => recurring with no fixed time, 8 => recurring with fixed time
                    "duration" => 60, // in minutes
                    "timezone" => 'Asia/Kuwait', // set your timezone
                    "start_time" => date("c", strtotime($request->days[$key])), // set your start time
                    "template_id" => 'set your template id', // set your template id  Ex: "Dv4YdINdTk+Z5RToadh5ug==" from https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingtemplates
                    "pre_schedule" => false,  // set true if you want to create a pre-scheduled meeting
                    "settings" => [
                        'join_before_host' => false, // if you want to join before host set true otherwise set false
                        'host_video' => false, // if you want to start video when host join set true otherwise set false
                        'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                        'mute_upon_entry' => false, // if you want to mute participants when they join the meeting set true otherwise set false
                        'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                        'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                        'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                        'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
                    ],
                ]);
                Appointments::create([
                    'group_id' => $group->id,
                    'appointment_date' => $day,
                    'join_link' => $meetings['data']['join_url'],
                    'start_url' => $meetings['data']['start_url'],
                    'meeting_id' => $meetings['data']['id'],
                ]);
            }
            return $this->successMessage('Appointment Added Successfully');

        } else {
            return $this->error('Instructor Not Found');
        }


    }

    public function materials(Request $request)
    {
        $instructor = auth('instructor-api')->user();
        $oValidatorRules = [
            'file_name' => 'required',
            'file' => 'required',
            'online_course_id' => 'required|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        } else {
            if ($instructor) {
                if ($request->has('file')) {
                    $file = $request->file('file')->getClientOriginalExtension();
                    $oValidatorRules['file'] = $request->file('file')->move('public/Materials', time() . '_' . random_int(1, 100000) . '.' . $file);
                }

                $material = Materials::create([
                    'file_name' => $request->file_name,
                    'file' => $oValidatorRules['file'],
                    'online_course_id' => intval($request->online_course_id),
                    'instructor_id' => $instructor->id,
                ]);
                if ($request->has('group_id')) {
                    $oValidatorRules = [
                        'group_id' => 'required|exists:groups,id',
                    ];
                    $validator = Validator::make($request->all(), $oValidatorRules);
                    if ($validator->fails()) {
                        return $this->error($validator->messages());
                    }
                    $groups = Groups::where('instructor_id', $instructor->id)->pluck('id')->toArray();
                    foreach ($request->group_id as $group) {
                        if (in_array($group, $groups)) {
                            MaterialGroups::create([
                                'material_id' => $material->id,
                                'group_id' => $group,
                            ]);
                        }
                    }

                }
                return $this->successMessage('Materials Added Successfully');

            } else {
                return $this->error('Instructor Not Found');
            }
        }
    }

    public function quizes(Request $request)
    {
        $instructor = auth('instructor-api')->user();
        $oValidatorRules = [
            'quiz_name' => 'required',
            'degree' => 'required',
            'pass_score' => 'required',
            'online_course_id' => 'required|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        } else {
            if ($instructor) {
                if ($request->is_discount == 1) {
                    $oValidatorRules = [
                        'discount_score' => 'required',
                        'discount' => 'required',
                    ];
                    $validator = Validator::make($request->all(), $oValidatorRules);
                    if ($validator->fails()) {
                        return $this->error($validator->messages());
                    }
                    $quiz = Quiz::create([
                        'quiz_name' => $request->quiz_name,
                        'degree' => $request->degree,
                        'is_discount' => $request->is_discount,
                        'discount' => $request->discount,
                        'discount_score' => $request->discount_score,
                        'online_course_id' => intval($request->online_course_id),
                        'instructor_id' => $instructor->id,
                        'pass_score' => $request->pass_score,

                    ]);
                    if ($request->has('group_id')) {
                        $oValidatorRules = [
                            'group_id' => 'required|exists:groups,id',
                        ];
                        $validator = Validator::make($request->all(), $oValidatorRules);
                        if ($validator->fails()) {
                            return $this->error($validator->messages());
                        }
                        $groups = Groups::where('instructor_id', $instructor->id)->pluck('id')->toArray();
                        foreach ($request->group_id as $group) {
                            if (in_array($group, $groups)) {
                                QuizGroups::create([
                                    'quiz_id' => $quiz->id,
                                    'group_id' => $group,
                                ]);
                            }
                        }

                    }
                    return $this->successMessage('Quiz Added Successfully');

                } else {

                    $quiz = Quiz::create([
                        'quiz_name' => $request->quiz_name,
                        'degree' => $request->degree,
                        'online_course_id' => intval($request->online_course_id),
                        'instructor_id' => $instructor->id,
                        'pass_score' => $request->pass_score,
                    ]);
                    if ($request->has('group_id')) {
                        $oValidatorRules = [
                            'group_id' => 'required|exists:groups,id',
                        ];
                        $validator = Validator::make($request->all(), $oValidatorRules);
                        if ($validator->fails()) {
                            return $this->error($validator->messages());
                        }
                        $groups = Groups::where('instructor_id', $instructor->id)->pluck('id')->toArray();
                        foreach ($request->group_id as $group) {
                            if (in_array($group, $groups)) {
                                QuizGroups::create([
                                    'quiz_id' => $quiz->id,
                                    'group_id' => $group,
                                ]);
                            }
                        }

                    }
                    return $this->successMessage('Quiz Added Successfully');

                }
            } else {
                return $this->error('Instructor Not Found');
            }
        }


    }

    public function delete_materials($id)
    {
        $instructor = auth('instructor-api')->user();
        $material = Materials::find($id);
        if ($material) {
            if ($material->instructor_id == $instructor->id) {
                $material->delete();
                return $this->error('Material Deleted Successfully');
            }
        } else {
            return $this->error('No material Found');
        }

    }

    public function delete_quiz($id)
    {
        $instructor = auth('instructor-api')->user();
        $quiz = Quiz::find($id);
        if ($quiz) {
            if ($quiz->instructor_id == $instructor->id) {
                $quiz->delete();
                return $this->error('Quiz Deleted Successfully');
            }
        } else {
            return $this->error('No Quiz Found');
        }

    }

    public function online_courses_groups($id, Request $request)
    {
        $groups = Groups::where('instructor_id', auth('instructor-api')->user()->id)
            ->where('online_course_id', $id);
        if ($request->month) {
            $groups->WhereMonth('start_date', $request->month)->orWhereMonth('end_date', $request->month);
        }
        $groups = $groups->get();
        if ($groups) {
            return $this->success(GroupNew2Resource::collection($groups));
        } else {
            return $this->error('This Online Course Not Found');
        }


    }

    public function instructor_group($id)
    {
        $group = Groups::find($id);

        if ($group) {
            return $this->success(new GroupNew2Resource($group));
        } else {
            return $this->error('This Online Course Not Found');
        }


    }

    public function quiz_questions(Request $request)
    {
        $oValidatorRules = [
            'quiz_id' => 'required|exists:quiz,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($request->type == 'question_options') {
            $question = QuizQuestions::create([
                'name' => $request->name,
                'type' => $request->type,
                'degree' => $request->degree,
                'correct_answer' => $request->correct_answer,
                'quiz_id' => $request->quiz_id,
            ]);
            foreach ($request->answer as $key => $answer) {
                QuestionsOptions::create
                ([
                    'answer' => $answer,
                    'answer_number' => ++$key,
                    'quiz_question_id' => $question->id,
                ]);
            }
            return $this->successMessage('Quize Question Added Successfully');

        } else {

            QuizQuestions::create([
                'name' => $request->name,
                'type' => $request->type,
                'degree' => $request->degree,
                'correct_answer' => $request->correct_answer,
                'quiz_id' => $request->quiz_id,
            ]);
            return $this->error('Data Saved Successfully');


        }
    }

    public function quiz_answers(Request $request)
    {
        $oValidatorRules = [
            'answers.*.question_id' => 'required',
            'answers.*.answer' => 'required',

        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }

//                 dd(auth('api')->user()->id);
        $online_course = Quiz::find($request->quiz_id)->online_course_id;
        $totalQuestionDegree = QuizQuestions::where('quiz_id', $request->quiz_id)->first()->degree;
        $student_quiz = StudenQuiz::create([
            'total_degree' => 0,
            'users_id' => auth('api')->user()->id,
            'online_course_id' => $online_course,
            'quiz_id' => $request->quiz_id,
        ]);
        foreach ($request->answers as $key => $question) {
            $questions = QuizQuestions::find($question['question_id']);
            if ($questions) {
                $correct_answer = $questions->correct_answer;
                if ($correct_answer == $question['answer']) {
                    StudenQuizAnswer::create([
                        'degree' => $questions->degree,
                        'answer' => $question['answer'],
                        'student_quiz_id' => $student_quiz->id,
                        'question_id' => $questions->id,
                    ]);
                    $student_quiz->update(['total_degree' => $questions->degree + $student_quiz->total_degree]);
                } else {
                    StudenQuizAnswer::create([
                        'degree' => 0,
                        'answer' => $question['answer'],
                        'student_quiz_id' => $student_quiz->id,
                        'question_id' => $questions->id,
                    ]);
                }
            } else {
                return $this->error('this qustion not found in quiz questions');
            }
        }

        $data = ['question_degree' => $student_quiz->total_degree . "/" . intval($totalQuestionDegree)];
        return $this->successMessage('Your Quiz Corrected Successfully', $data);

    }

    public function get_group_appointments(Request $request)
    {
        $appointment = Appointments::whereDate('appointment_date', $request->date)
            ->whereHas('instructor_group')->get();
        if ($request->date) {
            return $this->success(AppointmentsResource::collection($appointment));
        } else {
            return $this->error('this appointment not found');
        }
    }

    public function get_course_appointments(Request $request)
    {
        $oValidatorRules = [
            'online_course_id' => 'nullable|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($request->online_course_id) {
            $appointments = Appointments::whereHas('instructor_group', function ($query) use ($request) {
                $query->where('online_course_id', $request->online_course_id);
            });
            $groups=Groups::where('instructor_id',auth('instructor-api')->user()->id)->where('online_course_id', $request->online_course_id)->get();
        }
        else {
            $appointments = Appointments::whereHas('instructor_group');
            $groups=Groups::where('instructor_id',auth('instructor-api')->user()->id)->get();

        }
        if ($request->month) {
            $appointments = $appointments->whereMonth('appointment_date', $request->month);
        }
        $appointments = $appointments->get();
        return $this->success(['appointments'=>AppointmentsResource::collection($appointments),'groups'=>GroupChartResource::collection($groups)]);
    }

    public function get_month_group(Request $request)
    {
        $month = Groups::where('instructor_id', auth('instructor-api')->user()->id)
            ->WhereMonth('start_date', $request->month)->orWhereMonth('end_date', $request->month)->get();
        if ($request->month) {
            return $this->success(GroupNewResource::collection($month));
        } else {
            return $this->error('Month Not Found');
        }


    }

    public function get_course_students(Request $request)
    {
        $course_orders = OnlineCourseOrders::where('instructor_id', auth('instructor-api')->user()->id)->whereYear('created_at', date('Y'))->get()->groupBy(function ($d) {
            return \Carbon\Carbon::parse($d->created_at)->format('M');
        });
        $arr = [];
        $counter = 0;
        foreach ($course_orders as $key => $orders) {
            $arr[$counter]['month'] = $key;
            $arr[$counter]['number_of_students'] = count($orders);
            $counter++;
        }
        return $this->success($arr);


    }

    public function withdraw_request(Request $request)
    {
        $oValidatorRules = [
            'cash' => 'required',

        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        $instructor_id = auth('instructor-api')->user()->id;
        $instructor = Instructor::find($instructor_id);
        $balance = $instructor->balance;
        if (intval($request->cash) > intval($balance)) {
            return $this->error('Sorry You Don\'t have enough balance ');
        } else {
            WithDrawRequest::create([
                'cash' => $request->cash,
                'instructor_id' => $instructor_id,

            ]);
            return $this->successMessage(__('dashboard.success'));
        }

    }
}
