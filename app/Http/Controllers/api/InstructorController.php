<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\EbooksResource;
use App\Http\Resources\FavouriteEbooksResource;
use App\Http\Resources\FavouriteFreeVideosResource;
use App\Http\Resources\FavouriteOnlineCoursesResource;
use App\Http\Resources\FavouriteVideosResource;
use App\Http\Resources\FreeVideosResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\OnlineCourseResource;
use App\Http\Resources\PagesResource;
use App\Http\Resources\VideosResource;
use App\Models\Appointments;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\Groups;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\MaterialGroups;
use App\Models\Materials;
use App\Models\OnlineCourse;
use App\Models\Page;
use App\Models\QuestionsOptions;
use App\Models\Quiz;
use App\Models\QuizGroups;
use App\Models\QuizQuestions;
use App\Models\StudenQuiz;
use App\Models\StudenQuizAnswer;
use App\Models\Videos;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;


class InstructorController extends Controller
{
    use response;
    public function instructor_onlineCourses()
    {
        $user = auth('instructor-api')->user()->email;
         $instructor=Instructor::where('email',$user)->first();
        if ($instructor)
        {
            return $this->success(OnlineCourseResource::collection($instructor->OnlineCourses));
        }
        else
        {
            return $this->error('Instructor Not Found');
        }


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
            'days.*' => 'date_format:Y-m-d H:i:s|before_or_equal:'.$request->end_date.'|after_or_equal:'.$request->start_date,
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($instructor)
        {
            $group=Groups::create([
                'instructor_id'=>$instructor->id,
                'name'=>$request->name,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                  'online_course_id'=>$request->online_course_id,
            ]);
            foreach ($request->days as $key=>$day)
            {
                 $meetings = (new \Jubaer\Zoom\Zoom)->createMeeting([
                "agenda" => $group->online_courses->title,
                "topic" => $group['name'].date("c", strtotime($request->days[$key])),
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
                    'group_id'=>$group->id,
                    'appointment_date'=>$day,
                    'join_link'=>$meetings['data']['join_url'],
                    'start_url'=>$meetings['data']['start_url'],
                    'meeting_id'=>$meetings['data']['id'],
                ]);
            }
            return $this->successMessage('Appointment Added Successfully');

        }
        else
        {
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
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        else
        {
            if ($instructor)
            {
                if ($request->has('file'))
                {
                    $file=$request->file('file')->getClientOriginalExtension();
                    $oValidatorRules['file']=$request->file('file')->move('public/Materials',time() . '_' . random_int(1, 100000) . '.' . $file);
                }

                $material=Materials::create([
                    'file_name'=>$request->file_name,
                    'file'=>$oValidatorRules['file'],
                    'online_course_id'=>intval($request->online_course_id),
                    'instructor_id'=>$instructor->id,
                ]);
                if ($request->has('group_id'))
                {
                    $oValidatorRules = [
                          'group_id' => 'required|exists:groups,id',
                    ];
                    $validator = Validator::make($request->all(), $oValidatorRules);
                    if ($validator->fails())
                    {
                        return $this->error($validator->messages());
                    }
                    $groups=Groups::where('instructor_id',$instructor->id)->pluck('id')->toArray();
                     foreach ($request->group_id as $group)
                    {
                        if(in_array($group, $groups)){
                                MaterialGroups::create([
                                'material_id'=>$material->id,
                                'group_id'=>$group,
                            ]);
                        }
                    }

                }
                return $this->successMessage('Materials Added Successfully');

            }
            else
            {
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
            'online_course_id' => 'required|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        else
        {
            if ($instructor)
            {
                if ($request->is_discount==1)
                {
                    $oValidatorRules = [
                        'discount_score' => 'required',
                        'discount' => 'required',
                    ];
                    $validator = Validator::make($request->all(), $oValidatorRules);
                    if ($validator->fails())
                    {
                        return $this->error($validator->messages());
                    }
                $quiz=Quiz::create([
                    'quiz_name'=>$request->quiz_name,
                    'degree'=>$request->degree,
                    'is_discount'=>$request->is_discount,
                    'discount'=>$request->discount,
                    'discount_score'=>$request->discount_score,
                     'online_course_id'=>intval($request->online_course_id),
                    'instructor_id'=>$instructor->id,
                ]);
                if ($request->has('group_id'))
                {
                    $oValidatorRules = [
                          'group_id' => 'required|exists:groups,id',
                    ];
                    $validator = Validator::make($request->all(), $oValidatorRules);
                    if ($validator->fails())
                    {
                        return $this->error($validator->messages());
                    }
                    $groups=Groups::where('instructor_id',$instructor->id)->pluck('id')->toArray();
                     foreach ($request->group_id as $group)
                    {
                        if(in_array($group, $groups))
                        {
                                 QuizGroups::create([
                                'quiz_id'=>$quiz->id,
                                'group_id'=>$group,
                            ]);
                        }
                    }

                }
                return $this->successMessage('Quiz Added Successfully');

            }
                else
                {

                    $quiz=Quiz::create([
                        'quiz_name'=>$request->quiz_name,
                        'degree'=>$request->degree,
                         'online_course_id'=>intval($request->online_course_id),
                        'instructor_id'=>$instructor->id,
                    ]);
                    if ($request->has('group_id'))
                    {
                        $oValidatorRules = [
                            'group_id' => 'required|exists:groups,id',
                        ];
                        $validator = Validator::make($request->all(), $oValidatorRules);
                        if ($validator->fails())
                        {
                            return $this->error($validator->messages());
                        }
                        $groups=Groups::where('instructor_id',$instructor->id)->pluck('id')->toArray();
                        foreach ($request->group_id as $group)
                        {
                            if(in_array($group, $groups))
                            {
                                QuizGroups::create([
                                    'quiz_id'=>$quiz->id,
                                    'group_id'=>$group,
                                ]);
                            }
                        }

                    }
                    return $this->successMessage('Quiz Added Successfully');

                }
            }
            else
            {
                return $this->error('Instructor Not Found');
            }
        }


    }
    public function delete_materials($id)
    {
        $instructor = auth('instructor-api')->user();
        $material=Materials::find($id);
        if ($material)
        {
            if ($material->instructor_id == $instructor->id)
            {
                $material->delete();
                return $this->error('Material Deleted Successfully');
            }
        }
        else
        {
            return $this->error('No material Found');
        }

    }
    public function delete_quiz($id)
    {
        $instructor = auth('instructor-api')->user();
        $quiz=Quiz::find($id);
        if ($quiz)
        {
            if ($quiz->instructor_id == $instructor->id)
            {
                $quiz->delete();
                return $this->error('Quiz Deleted Successfully');
            }
        }
        else
        {
            return $this->error('No Quiz Found');
        }

    }
 public function online_courses_groups($id)
    {
        $instructor = auth('instructor-api')->user();
        $groups=OnlineCourse::find($id);
        if ($instructor)
        {
            if ($groups)
            {
                return $this->success($groups->groups);
            }
            else
            {
                return $this->error('This Online Course Not Found');
            }
        }
        else
        {
            return $this->error('Instructor Not Found');

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
        if ($request->type == 'question_options')
        {
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

        }
        else
        {

                QuizQuestions::create([
                    'name'=>$request->name,
                    'type'=>$request->type,
                    'degree'=>$request->degree,
                    'correct_answer'=>$request->correct_answer,
                    'quiz_id'=>$request->quiz_id,
                ]);
                return $this->error('Data Saved Successfully');


        }
}
        public function quiz_answers(Request $request)
        {

//                 dd(auth('api')->user()->id);
            $online_course=Quiz::find($request->quiz_id)->online_course_id;
            $student_quiz=StudenQuiz::create([
                'total_degree'=>0,
                'users_id'=>auth('api')->user()->id,
                'online_course_id'=>$online_course,
                'quiz_id'=>$request->quiz_id,
            ]);
            foreach ($request->answers as $key=>$question)
            {
                $questions=QuizQuestions::find($question['question_id']);
                if ($questions)
                {
                $correct_answer=$questions->correct_answer;
//                dd($question['answer']);
                if ($correct_answer==$question['answer'])
                {
                    StudenQuizAnswer::create([
                        'degree'=>$questions->degree,
                        'answer'=>$question['answer'],
                        'student_quiz_id'=>$student_quiz->id,
                        'question_id'=>$questions->id,
                    ]);
                    $student_quiz->update(['total_degree'=>$questions->degree+$student_quiz->total_degree]);
                }
                else

                {
                    StudenQuizAnswer::create([
                        'degree'=>0,
                        'answer'=>$question['answer'],
                        'student_quiz_id'=>$student_quiz->id,
                        'question_id'=>$questions->id,
                    ]);
                }
                }
                else
                {
                    return $this->error('this qustion not found in quiz questions');
                }
            }
            return $this->success('Your Quiz Corrected Successfully');

        }
}
