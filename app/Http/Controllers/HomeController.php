<?php

namespace App\Http\Controllers;

use App\DataTables\SubscriptionsDataTable;
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

}
