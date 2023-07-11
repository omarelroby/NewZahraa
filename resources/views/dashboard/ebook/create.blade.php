@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">E-Books</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">E-Books</a>
                                </li>
                                <li class="breadcrumb-item active">Create Ebook
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-4 col-12">
                    <div class="btn-group float-md-right">
                        <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings mr-1"></i>Action</button>
                        <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
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
                                    <h4 class="card-title" id="basic-layout-form">Create E-Book</h4>
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

                                        <form class="form" method="post" action="{{route('ebook.store')}}" enctype='multipart/form-data'>
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i> E-books</h4>
                                                <div class="row">
                                                    @foreach(config('translatable.locales') as $locale)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">title ({{$locale}})</label>
                                                            <input type="text" required id="projectinput1" class="form-control"   name="{{$locale}}[title]">
                                                        </div>
                                                    </div>
                                                @endforeach

                                                </div>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="custom-file-label" for="inputGroupFile01">Sample File </label>
                                                        <input type="file"   class="custom-file-input" id="inputGroupFile01"  name="sample_file">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="custom-file-label" for="inputGroupFile01">Complete File </label>
                                                        <input type="file"   class="custom-file-input" id="inputGroupFile01"  name="complete_file">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="custom-file-label" for="inputGroupFile01">Image </label>
                                                        <input type="file" required  class="custom-file-input" id="inputGroupFile01"  name="image">
                                                    </div>
                                                </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label    for="projectinput1">Writer </label>
                                                        <input type="text"   id="projectinput1" class="form-control"  name="writer">
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label    for="projectinput1">type </label>
                                                        <select  required   id="type" class="form-control"  name="type">
                                                            <option value="">select type</option>
                                                            <option value="internal">internal</option>
                                                            <option value="amazon">amazon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label   for="projectinput1">price </label>
                                                        <input type="text" required id="projectinput1" class="form-control"  name="price">
                                                    </div>
                                                </div>
                                                    <div class="col-md-12" style="display: none"  id="amazon_url">
                                                    <div class="form-group">
                                                        <label   for="projectinput1">amazon url </label>
                                                        <input type="text"  class="form-control"  name="amazon_url">
                                                    </div>
                                                </div>

                                                    @foreach(config('translatable.locales') as $locale)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                 <label for="projectinput1">summary ({{$locale}})</label>
                                                                <textarea required id="projectinput1" class="form-control"   name="{{$locale}}[summary]">
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    @endforeach


                                                </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <a href="{{route('customers.index')}}" style="color: white"> <i class="ft-x"></i>Cancel</a>
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
@section('script')


    <script>
        CKEDITOR.replace('ar[summary]' );
        CKEDITOR.replace('en[summary]' );
    </script>



        <script>
            $(document).ready(function(){
            $("#type").change(function(){
                if($( "#type option:selected" ).text()=='amazon')
                {
                    $('#amazon_url').show();
                }
                else{
                    $('#amazon_url').hide();
                }
            });

        });

    </script>

@endsection
