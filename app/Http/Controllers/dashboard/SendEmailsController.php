<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Mail\CustomersMail;
use App\Mail\CustomersMailMail;
use App\Models\Category;
use App\Models\Country;
use App\Models\Customers;
use App\Models\Instructor;
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
         $instructors=Instructor::all();
         return view('dashboard.send_emails.index',compact('customers','instructors'));
    }
    public function sending_emails(Request $request)
    {
        if ($request->customers=='all_customers')
        {
            $emails[]=\App\Models\Customers::pluck('email')->toArray();

        }
        elseif ($request->customers='all_instructors')
        {
            $emails[]=\App\Models\Instructor::pluck('email')->toArray();
        }
        else
        {
            foreach ($request->customers as $key=>$customer)
            {
                $emails[]=Customers::find($customer)->email;
            }
        }

        $data=[
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];
        foreach ($emails as $email)
        {
            Mail::to($email)->send(new CustomersMail($data));

        }
        return redirect()->route('send-emails.index');

    }


}
