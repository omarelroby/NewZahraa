@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">CUSTOMERS</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">customers</a>
                                </li>
                                <li class="breadcrumb-item active">Edit customer
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Edit Country</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">

                                        <form class="form" autocomplete="off" method="post" action="{{url("customers/{$customer->id}")}}" enctype='multipart/form-data'>
                                            @csrf
                                            {{ method_field('put') }}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i>Country</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Name</label>
                                                            <input type="text" required id="projectinput1" value="{{$customer->name}}" class="form-control"   name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Phone</label>
                                                            <input type="text" required id="projectinput2" value="{{$customer->phone}}" class="form-control"   name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput3">Email</label>
                                                            <input type="text" required id="projectinput3" value="{{$customer->email}}" class="form-control"   name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"> <div class="form-group">
                                                            <label for="projectinput4">password</label>
                                                            <input type="password"   id="projectinput4" class="form-control"   name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Country</label>
                                                            <select  required id="projectinput4" class="form-control"   name="country_id">
                                                                <option value="">select country</option>
                                                                @foreach($countries as $country)
                                                                    <option @if($country->id==$customer->country_id) selected @endif value="{{$country->id}}">{{$country->translate('ar')->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <a href="{{route('customers.index')}}" style="color: white"> <i class="ft-x"></i>Cancel</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                     </div>








                 </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
@section('script')



@endsection
