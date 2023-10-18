<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\CourseOrdersDataTable;
use App\DataTables\CustomersDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\EbooksOrdersDataTable;
use App\DataTables\IndexDataTable;
use App\DataTables\IndexOfIndexVideosDataTable;
use App\DataTables\IndexVideosDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\OnlineCourseOrdersDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesIndexRequest;
use App\Http\Requests\CoursesIndexVideosRequest;
use App\Http\Requests\CustomersRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\IndexOfVideosRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\CourseOrders;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\IndexesVideo;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\OnlineCourseOrders;
use App\Models\Page;
use App\Models\VideosIndexes;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use function PHPUnit\Framework\countOf;


class OnlineCourseOrdersController extends Controller
{


    public function index(OnlineCourseOrdersDataTable $dataTable)
    {
        $requests=OnlineCourseOrders::where('read',0)->pluck('id')->toArray();
        if(count($requests)>0)
        {
            foreach ($requests as $request)
            {
                $r=OnlineCourseOrders::find($request);
                $r->update(['read'=>1]);
            }
        }
        return $dataTable->render('dashboard.online_course_orders.index');
    }


    public function create($id)
    {
        $indexes_video_id=$id;
        return view('dashboard.index_of_videos.create', compact('indexes_video_id'));
    }
    public function edit($id)
    {
        $index=IndexesVideo::find($id);

        return view('dashboard.index_of_videos.edit',compact('index'));
    }


    public function store(IndexOfVideosRequest $request)
    {
        IndexesVideo::create($request->all());
        Alert::success('Success', __('dashboard.success'));
        return redirect()->route('indexes-videos', $request->indexes_video_id);


    }

    public function update(IndexOfVideosRequest $request,$id)
    {
       $index=IndexesVideo::find($id);
       $index->update($request->all());
        Alert::success('Updated', __('dashboard.update'));
        return redirect()->route('indexes-videos', $request->indexes_video_id);

    }


    public function destroy($id)
    {
        $index=IndexesVideo::find($id);
        $index->delete();
        Alert::error('Deleted', __('dashboard.deleted'));
        return redirect()->route('indexes-videos', $index->indexes_video_id);
    }
}
