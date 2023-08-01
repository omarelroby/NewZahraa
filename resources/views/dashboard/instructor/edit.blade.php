@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">INSTRUCTORS</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> instructors</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Instructor
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
                                    <h4 class="card-title" id="basic-layout-form">Edit Pages</h4>
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
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form class="form" autocomplete="off" method="post" action="{{route("instructors.update", $instructor->id )}}" enctype='multipart/form-data'>
                                            @csrf
                                            {{ method_field('put') }}

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i>INSTRUCTORS</h4>

                                                            <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">name </label>
                                                                            <input type="text" required id="projectinput1" class="form-control" value="{{$instructor->name}}"   name="name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput2">phone </label>
                                                                            <input type="text" required id="projectinput2"  value="{{$instructor->phone}}" class="form-control"   name="phone">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="projectinput2">brief </label>
                                                                            <input type="text" required id="projectinput2" value="{{$instructor->brief}}" class="form-control"   name="brief">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">email </label>
                                                                            <input type="text" required id="projectinput1" class="form-control" value="{{$instructor->email}}"   name="email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">password </label>
                                                                            <input type="password" autocomplete="off"  id="projectinput1" class="form-control"   name="password">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">Categories </label>
                                                                            <select type="text" required id="projectinput1" class="form-control"   name="category_id">
                                                                                <option value="">select category</option>
                                                                                @foreach($categories as $category)
                                                                                    <option @if($category->id==$instructor->category_id)selected @endif value="{{$category->id}}">{{$category->translate('ar')->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="projectinput1">Countries </label>
                                                                            <select type="text" required id="projectinput1" class="form-control"   name="country_id">
                                                                                <option value="">select country</option>
                                                                                @foreach($countries as $country)
                                                                                    <option @if($country->id==$instructor->country_id)selected @endif value="{{$country->id}}">{{$country->translate('ar')->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="custom-file-label" for="inputGroupFile01">Image </label>
                                                                            <input type="file"     class="custom-file-input" id="inputGroupFile01"  name="image">
                                                                        </div>
                                                                    </div>

                                                                </div>



                                                    <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <a href="{{route('instructors.index')}}" style="color: white"> <i class="ft-x"></i>Cancel</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
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

