<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController

{
    public function index(){
        return view('dashboard.home');
    }
    public function create(){
        return view('dashboard.create');
    }
    public function show(){
        return view('dashboard.index');
    }


}
