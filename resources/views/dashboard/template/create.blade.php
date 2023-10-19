@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.instructors-requests-email-template')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.instructors-requests-email-template')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-instructors-requests-email-template')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-instructors-requests-email-template')}}</h4>
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
                                        <form class="form" method="post" action="{{route('template.store')}}" enctype='multipart/form-data'>
                                            @csrf
                                             <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.instructors-requests-email-template')}}</h4>
                                                <div class="row align-items-end">
                                                     <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.subject')}}  </label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.body')}}  </label>
                                                            <textarea type="text" required id="projectinput1" class="form-control input-custom"   name="body">
                                                            </textarea>
                                                        </div>
                                                    </div>


                                                </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('template.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-main">
                                                    <i class="fa fa-check-square-o"></i> {{__('dashboard.save')}}
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

    <script>
        CKEDITOR.replace( 'body' );
    </script>

@endsection
