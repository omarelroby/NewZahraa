@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.coupon')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.add-coupon')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-coupon')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-coupon')}}</h4>
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
                                        <form class="form" method="post" action="{{route('coupon.store')}}" enctype='multipart/form-data'>
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.coupon')}}</h4>
                                                <div class="row">
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.code')}}  </label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="code">
                                                        </div>
                                                    </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label   for="inputGroupFile20"><span style="color: red;">*</span>{{__('dashboard.number_of_use')}} </label>
                                                        <input type="number"  required class="form-control input-custom" id="inputGroupFile20"  name="number_of_use">
                                                    </div>
                                                </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label   for="inputGroupFile20"><span style="color: red;">*</span>{{__('dashboard.discount')}} </label>
                                                            <input type="text"  required class="form-control input-custom" id="inputGroupFile20"  name="discount">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label   for="inputGroupFile20"><span style="color: red;">*</span>{{__('dashboard.select-type')}} </label>
                                                            <select    required class="form-control input-custom" id="inputGroupFile20"  name="type">
                                                             <option   value="percentage">percentage </option>
                                                            <option   value="amount">amount </option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('coupon.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-main">
                                                    <i class="fa fa-check-square-o"></i> {{__('dashboard.save')}}
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
        CKEDITOR.replace('ar[description]' );
        CKEDITOR.replace('en[description]' );
    </script>





@endsection
