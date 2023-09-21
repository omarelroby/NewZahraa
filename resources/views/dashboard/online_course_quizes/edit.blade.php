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
                                <li class="breadcrumb-item"><a href="#"> {{__('dashboard.quizes')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.edit-quiz')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.edit-quiz')}}</h4>
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
                                            <form class="form" method="post" action="{{route('online-course-quiz.update',$quiz->id)}}" enctype='multipart/form-data'>
                                                @csrf
                                                {{ method_field('put') }}
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
                                                    <h4 class="form-section"><i class="ft-align-right"></i> {{__('dashboard.edit-quiz')}}</h4>
                                                    <div class="row">
                                                        <input type="text" name="online_course_id" hidden value="{{$quiz->online_course_id}}">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.quiz_name')}}  </label>
                                                                <input type="text" required id="projectinput1" class="form-control"  value="{{$quiz->quiz_name}}" name="quiz_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.degree')}}  </label>
                                                                <input type="number" required id="projectinput1" class="form-control" value="{{$quiz->degree}}"  name="degree">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.instructors')}}  </label>
                                                                <select   required id="projectinput1" class="form-control"   name="instructor_id">
                                                                    <option>{{__('dashboard.select-instructors')}}</option>
                                                                    @foreach($instructors as $instructor)
                                                                        <option @if($instructor->id==$quiz->instructor_id) selected @endif value="{{$instructor->id}}">{{$instructor->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="inputName" class="control-label">{{__('dashboard.groups')}}</label>
                                                                <select id="group" required name="group_id" class="form-control">
                                                                   @foreach($groups as $group)
                                                                       <option @if($group->id==$quiz->group_id)selected @endif value="{{$group->id}}">{{$group->name}}</option>
                                                                   @endforeach
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.is_discount')}}  </label>
                                                                <input type="checkbox" style="width: 30px;"   id="projectinput1" class="form-control" value="1" @if($quiz->is_discount==1)checked @endif   name="is_discount">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.discount')}}  </label>
                                                                <input type="number"  required id="projectinput1" class="form-control"   value="{{$quiz->discount}}"   name="discount">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">{{__('dashboard.discount_score')}}  </label>
                                                                <input type="number"  required id="projectinput1" class="form-control"   value="{{$quiz->discount_score}}" name="discount_score">
                                                            </div>
                                                        </div>


                                                        <div class="form-actions">
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <a href="{{route('onlineCourse.quiz',$quiz->online_course_id)}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
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
                            $('select[name="group_id"]').empty(); //remove all elements in selects of product
                            $.each(data, function(key, value) { //.each mean for each element of data.
                                $('select[name="group_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });

                } else {
                    console.log('AJAX load did not work');
                }
            });

        });

    </script>

@endsection
