@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.online-courses-indexes')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.online-courses-indexes')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-online-courses-indexes')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-online-courses-indexes')}}</h4>
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
                                        <form class="form" method="post" action="{{route('online-course-indexes.store')}}" enctype='multipart/form-data'>
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
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.online-courses-indexes')}}</h4>
                                                <div class="row">
                                                    <input type="text" name="online_course_id" hidden value="{{$id}}">
                                                    @foreach(config('translatable.locales') as $locale)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.title')}} ({{$locale}})</label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="{{$locale}}[title]">
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                    <div class="form-group row">
                                                        <button class="btn btn-info btn-flat btn-main" type="button" id="addRelatedProgram">{{__('dashboard.add-items')}} </button>
                                                    </div>

                                                    <div  id="relatedPrograms"></div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('onlineCourse.index',$id)}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
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
    <script>


        var y = 0;
        $(document).on('click', '#addRelatedProgram', function() {
            $('#relatedPrograms').append(`
                 <div class="well row" id="programTag${y}">
                <div class="col-12">
                    <a style="text-decoration: none" count="${y}" href="#" class="closeTag" data-dismiss="alert" aria-label="close">&times;</a>
                    <h5 ><b>item </b> </h5></br>
                </div>
                @foreach(config('translatable.locales') as $locale)
                    <div class="form-group col-6">
                    <label for="inputRelatedProgram"> name({{$locale}})</label>
                        <input type="text" class="form-control input-custom" required count="${y}" id="inputRelatedProgram" name="repeater[${y}][{{$locale}}][title]" >
                    </div>
                @endforeach
 `);

            y++;
        })
        $(document).on('click', '.close', function() {
            var count = $(this).attr('count');

            $(`#programItem${count}`).remove();
        })

        $(document).on('click', '.closeTag', function() {
            var count = $(this).attr('count');

            $(`#programTag${count}`).remove();
        })


    </script>





@endsection
