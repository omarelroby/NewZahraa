<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AppointmentsDataTable;
use App\DataTables\AttachmentsDataTable;
use App\DataTables\BookingAppointmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CouponDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\BookingAppointments;
use App\Models\Category;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\OnlineCourseOrders;
use App\Models\Page;
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



class BookingAppointmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BookingAppointmentsDataTable $dataTable)
    {
        $requests=BookingAppointments::where('read',0)->pluck('id')->toArray();
        if(count($requests)>0)
        {
            foreach ($requests as $request)
            {
                $r=BookingAppointments::find($request);
                $r->update(['read'=>1]);
            }
        }
        return $dataTable->render('dashboard.booking_appointments.index');
    }



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
         $appointment=SessionAppointments::find($id);
         return  view('dashboard.appointments.edit',compact('appointment' ));
    }
    public function create()
    {
         return  view('dashboard.appointments.create');
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
        $first_day = date('Y-m-01',strtotime($request->month));
        $last_day = date('Y-m-t',strtotime($request->month));
        for ($first_day;$first_day<=$last_day;$first_day++)
        {
            foreach ($request->repeater as $key=>$input)
            {
                if($input['day']==date("l", strtotime($first_day)))
                {
                    SessionAppointments::create([
                        'month'=>$request->month,
                        'date'=>$request->month.'-'.date("d", strtotime($first_day)).' '.$input['time'],
                    ]);
                }
            }
        }
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('appointments.index');
    }
    public function update(Request $request, $id)
    {
        $appointment=SessionAppointments::find($id);
        $appointment->update(['date'=>$request->date]);
        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('appointments.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookingAppointments::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('booking-appointments.index');
    }
}
