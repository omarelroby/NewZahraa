<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class LoginController extends Controller
{
    public function get() {
        return view('dashboard.auth.login');
    }

    public function post() {
//       dd(request()->all());


        $this->validate(request(),[
            'email' => 'required|email|max:225',
            'password' => 'required|string|max:191',
        ]);
        $user = Admin::where('email',request()->email)->first();
        if (!$user) {
            return back()->with('error','البيانات غير صحيحة');
        }

        $remember = request()->has('remember')? true:false;
        $credentials = array('email' => request()->email, 'password' => request()->password);
        $checkLogin = Auth::guard('admin')->attempt($credentials,$remember);

        if (!$checkLogin){
//            dd('ss');
            session()->flash('error','البيانات غير صحيحة');
            return redirect('/login');

        }
        return redirect()->route('dashboard');

    }

    public function logout () {
        auth()->guard('admin')->logout();
        return redirect('/login');
    }

}
