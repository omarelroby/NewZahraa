@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.quizes')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.quizes')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.add-quiz')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.add-quiz')}}</h4>
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
                                        <form class="form" method="post" action="{{route('online-course-quiz.store')}}" enctype='multipart/form-data'>
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
                                                <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.add-quiz')}}</h4>
                                                <div class="row">
                                                    <input type="text" name="online_course_id" hidden value="{{$id}}">
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.quiz_name')}}  </label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom"   name="quiz_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.degree')}}  </label>
                                                            <input type="number" required id="projectinput1" class="form-control input-custom"   name="degree">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.instructors')}}  </label>
                                                            <select   required id="projectinput1" class="form-control input-custom"   name="instructor_id">
                                                                <option>{{__('dashboard.select-instructors')}}</option>
                                                                @foreach($instructors as $instructor)
                                                                <option value="{{$instructor->id}}">{{$instructor->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"  >
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.pass-score')}}  </label>
                                                            <input type="text"  required id="projectinput1" class="form-control input-custom"     name="pass_score">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="inputName" class="control-label">{{__('dashboard.groups')}}</label>
                                                            <select id="group" multiple required name="group_id[]" class="form-control">
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.is_discount')}}  </label>
                                                            <input type="checkbox" style="width: 150px;height: 20px;" onclick="ShowAndHide()"   id="is_discount"   value="1"   name="is_discount">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5"  style="display: none;" id="discount">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.discount')}}  </label>
                                                            <input type="number"    id="projectinput1" class="form-control input-custom"     name="discount">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" style="display: none;" id="discount_score">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('dashboard.discount_score')}}  </label>
                                                            <input type="number"     id="projectinput1" class="form-control input-custom"     name="discount_score">
                                                        </div>
                                                    </div>



                                                <br>
                                            <div class="form-actions col-md-12">
                                                <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                    <a href="{{route('onlineCourse.quiz',$id)}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
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
        <!-- ajax by jquery-->
        $(function () {
            $('select[name="instructor_id"]').change(function() {  //when select list any change on it
                var InstructorId = $(this).val();   //make SectionId value =the value of this selected option
                if (InstructorId) {
                    $.ajax({
                        url: "{{ URL::to('get-group') }}/" + InstructorId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) { //data is the result & success run when request successed.
                            $('#group').empty(); //remove all elements in selects of product
                            $.each(data, function(key, value) { //.each mean for each element of data.
                                $('#group').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });

                } else {
                    console.log('AJAX load did not work');
                }
            });

        });

    </script>
    <script>
        function ShowAndHide()
        {
            if($('#is_discount').is(':checked')){
                 $('#discount_score').show();
                $('#discount').show();
            }  else{
                $('#discount_score').hide();
                $('#discount').hide();
            }
        }

    </script>



@endsection
