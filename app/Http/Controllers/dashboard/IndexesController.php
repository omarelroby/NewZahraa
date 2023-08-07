<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\CustomersDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\IndexDataTable;
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
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use function PHPUnit\Framework\countOf;


class IndexesController extends Controller
{


    public function index(IndexDataTable $dataTable,$id)
    {
         return $dataTable->with('course_id',$id)->render('dashboard.index.index',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_index($id)
    {

         return  view('dashboard.index.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursesIndexRequest $request)
    {
//        dd($request->course_id);
        $index=CourseIndexes::create($request->all());
        dd($request->repeater);

        foreach ($request->inputs as $key=>$input) {
                $file = 'courseVideosIndex';
                $file2 = $request->file('video')[1]->getClientOriginalName();
                $name[] = $request->file('video')[1]->move($file, $file2);
                if ($request->is_free == 1) {
                    CourseIndexesVideos::create([
                        'course_indexes_id' => $index->id,
                        'is_free' => 1,
                        'video' => $name,
                        'title.en' => $request->en['title'][1],
                        'title.ar' => $request->ar['title'][1]
                    ]);
                } else {
                    CourseIndexesVideos::create([
                        'course_indexes_id' => $index->id,
                        'is_free' => 0,
                        'video' => $name,
                        'inputs[]en[title]' => $request->en['title'][1],
                        'inputs[]ar[title]' => $request->ar['title'][1]
                    ]);

                }
            }

        Alert::success('Success','تم إضافة البيانات بنجاح');
        return redirect()->route('index.index',$request->course_id);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customers::find($id);
        $countries=Country::with('translations')->get();
        return  view('dashboard.customers.edit',compact('customer','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomersRequest $request, $id)
    {
        $customer=Customers::find($id);
        if($request->has('password')){
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'country_id'=>$request->country_id,
            ];
            $customer->update($data);

        }
        else{
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'brief'=>$request->brief,
                'category_id'=>$request->category_id,
                'country_id'=>$request->category_id,
            ];

            $customer->update($data);

        }
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('customers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customers::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');
        return redirect()->route('customers.index');
    }
}
