@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.send-emails')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.send-emails')}}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section id="configuration">
                        <form action="{{route('send.emails')}}" method="post">
                            @csrf
                            <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label   for="inputGroupFile20">{{__('dashboard.customers')}} </label>
                                    <select  required class="form-control js-example-basic-single" multiple id="inputGroupFile20"  name="customers[]">
                                        <option value="">{{__('dashboard.customers')}}</option>
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label   for="inputGroupFile22">{{__('dashboard.subject')}} </label>
                                        <input type="text"  required class="form-control  "  id="inputGroupFile22"   name="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label   for="inputGroupFile23">{{__('dashboard.message')}} </label>
                                        <textarea  required class="form-control "   id="inputGroupFile23"  name="message">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1">
                                    <a href="{{url('/dashboard')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-check-square-o"></i> {{__('dashboard.save')}}
                                </button>
                            </div>
                        </form>


                </section>
            </div>
        </div>
    </div>






@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

    </script>
    <script>
        CKEDITOR.replace('message' );
     </script>

@endsection
