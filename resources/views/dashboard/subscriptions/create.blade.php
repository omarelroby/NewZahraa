@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.appointments')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.appointments')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-appointments')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-appointments')}}</h4>
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
                                        <form class="form" method="post" action="{{route('appointments.store')}}" enctype='multipart/form-data'>
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
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.add-appointments')}}</h4>
                                                <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.month')}} </label>
                                                            <input type="month" required id="projectinput1" class="form-control"   name="month">
                                                        </div>
                                                    </div>
                                                 </div>
                                                    <div class="form-group row">
                                                        <button class="btn btn-info btn-flat" type="button" id="addRelatedProgram">{{__('dashboard.add-day')}} </button>
                                                    </div>

                                                    <div  id="relatedPrograms"></div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1">
                                                    <a href="{{route('appointments.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                </button>
                                                <button type="submit" class="btn btn-primary">
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
                    <a style="text-decoration: none" count="${y}" href="#" class="closeTag" data-dismiss="alert" aria-label="close">&times;</a>

                    <div class="form-group col-md-4">
                        <label for="inputRelatedProgram"> Day</label>
                        <select type="file" class="form-control " count="${y}" id="inputRelatedProgram" name="repeater[${y}][day]" >
                        <option value="">Select the Day</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        </select>

                        </div>


                    <div class="form-group col-4"  ">
                        <label for="flexCheckDisabled"> Time</label>
                        <input type="time" class="form-control " id="flexCheckDisabled" value="1" count="${y}"  name="repeater[${y}][time]" >
                        </div>
</div>





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
