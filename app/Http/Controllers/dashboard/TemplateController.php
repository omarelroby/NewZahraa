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
use App\DataTables\TemplateDataTable;
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
use App\Models\Template;
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



class TemplateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TemplateDataTable $dataTable)
    {
        return $dataTable->render('dashboard.template.index');
    }




    public function edit($id)
    {
        $template=Template::find($id);
        return  view('dashboard.template.edit',compact('template' ));
    }
    public function create()
    {
        $template=Template::first();
        if($template)
        {
            return  view('dashboard.template.edit',compact('template' ));

        }
         else
         {
             return  view('dashboard.template.create');

         }

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
        Template::create($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('template.index');
    }
    public function update(Request $request, $id)
    {
        $template=Template::find($id);
        $data=$request->all();
        $template->update($data);
        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('template.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $template=Template::find($id);
        $template->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('template.index');
    }
}
