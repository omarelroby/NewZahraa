<?php

namespace App\Http\Controllers;

use App\DataTables\SubscriptionsDataTable;
use App\DataTables\WithdrawDataTable;
use App\Models\BookingAppointments;
use App\Models\Subscription;
use App\Models\WithDrawRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function subscriptions(SubscriptionsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.subscriptions.index');

    }
    public function delete_subscription($id)
    {
        Subscription::find($id)->delete();
        return back();
    }
    public function withdraw(WithdrawDataTable $dataTable)
    {
        $requests=WithDrawRequest::where('read',0)->pluck('id')->toArray();
        if(count($requests)>0)
        {
            foreach ($requests as $request)
            {
                $r=WithDrawRequest::find($request);
                $r->update(['read'=>1]);
            }
        }
        return $dataTable->render('dashboard.withdraw.index');

    }

}
