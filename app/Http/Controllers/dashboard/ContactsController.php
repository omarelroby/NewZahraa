<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\ContactsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\InstructorsRequestsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Contacts;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\InstructorRequests;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class ContactsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContactsDataTable $dataTable)
    {
         return $dataTable->render('dashboard.contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function destroy($id)
    {
        Contacts::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('contacts.index');
    }
}
