<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\CustomersDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\IndexDataTable;
use App\DataTables\IndexVideosDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesIndexRequest;
use App\Http\Requests\CoursesIndexVideosRequest;
use App\Http\Requests\CustomersRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use function PHPUnit\Framework\countOf;


class IndexVideosController extends Controller
{


    public function index(IndexVideosDataTable $dataTable, $id)
    {
        return $dataTable->with('index_id', $id)->render('dashboard.index_videos.index', compact('id'));
    }


    public function create_index($id)
    {

        return view('dashboard.index.create', compact('id'));
    }


    public function store(CoursesIndexRequest $request)
    {
//        dd($request->course_id);
        $index = CourseIndexes::create($request->all());
        foreach ($request->repeater as $key => $input) {


            if (isset($input['video']))
            {
                $file=$request->file('video')->getClientOriginalExtension();
                $path = Storage::disk('s3')->put('VideosIndex/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->video, 'public');
                $data['video'] = Storage::disk('s3')->url($path);
            }
            $input['course_indexes_id'] = $index->id;
            $input['is_free'] = $input['is_free'] ?? 0;

            CourseIndexesVideos::create($input);
        }
        Alert::success('Success', __('dashboard.success'));
        return redirect()->route('index.index', $request->course_id);


    }

    public
    function show($id)
    {
        //
    }


    public function destroy($id)
    {
        $course=CourseIndexes::find($id);
         $course->delete();
        Alert::error('Deleted', __('dashboard.deleted'));
        return redirect()->route('index.index', $course->course_id);
    }
}
