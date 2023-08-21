<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Mail\CustomersMailMail;
use App\Models\Category;
use App\Models\Country;
use App\Models\Customers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use Illuminate\Support\Facades\Storage;



class SendEmailsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customers=Customers::all();
         return view('dashboard.send_emails.index',compact('customers'));
    }
    public function sending_emails(Request $request)
    {
        foreach ($request->customers as $key=>$customer)
        {
             $emails[]=Customers::find($customer)->email;
        }
        $data=[
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];
        foreach ($emails as $email)
        {
            Mail::to($email)->send(new CustomersMailMail($data));

        }

    }


}
