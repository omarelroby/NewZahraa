<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AppointmentsDataTable;
use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CouponDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\DataTables\PaymentMethodsDataTable;
use App\DataTables\PopupDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\HomeSection;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use App\Models\PaymentMethod;
use App\Models\Popup;
use App\Models\SessionAppointments;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class PopupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PopupDataTable $dataTable,$id)
    {
        return $dataTable->render('dashboard.popup.index',compact('id'));
    }




    public function edit($id)
    {
        $popup=Popup::find($id);
        return  view('dashboard.popup.edit',compact('popup' ));
    }
    public function create($id)
    {

         return  view('dashboard.popup.create',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        if($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('popup/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        if ($request->status=='active')
        {
            $data['status']='active';
        }
        else
        {
            $data['status']='inactive';
        }
        Popup::create($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('popup.index',$request->home_section_id);
    }
    public function update(Request $request, $id)
    {
        $popup=Popup::find($id);
        $data=$request->all();
        if($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('popup/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        if ($request->status=='active')
        {
            $data['status']='active';
        }
        else
        {
            $data['status']='inactive';
        }
        $popup->update($data);
        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('popup.index',$popup->home_section_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup=Popup::find($id);
        $popup->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('popup.index',$popup->home_section_id);
    }
}
