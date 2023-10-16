@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.ebooks')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.ebooks')}}</a>
                                </li>
                                <li class="breadcrumb-item active">{{__('dashboard.edit-ebooks')}}
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('dashboard.edit-ebooks')}}</h4>
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
                                        <form class="form" method="post" action="{{url("ebook/{$ebook->id}")}}" enctype='multipart/form-data'>
                                            @csrf
                                            {{ method_field('put') }}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-align-right"></i>{{__('dashboard.ebooks')}}</h4>
                                                <div class="row align-items-end">
                                                    @foreach(config('translatable.locales') as $locale)
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.title')}} ({{$locale}})</label>
                                                            <input type="text" required id="projectinput1" class="form-control input-custom" value="{{$ebook->translate($locale)->title}}"  name="{{$locale}}[title]">
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label    for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.type')}} </label>
                                                                <select  required   id="type" class="form-control input-custom"  name="type">
                                                                    <option value="">{{__('dashboard.select-type')}}</option>
                                                                    <option @if($ebook->type=='internal')selected @endif value="internal">internal</option>
                                                                    <option @if($ebook->type=='amazon')selected @endif value="amazon">amazon</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-3" id="sample_file">
                                                        <div class="form-group">
                                                            <label class="custom-file-label" for="inputGroupFile01">{{__('dashboard.sample-file')}} </label>
                                                            <input type="file"   class="custom-file-input" id="inputGroupFile01"  name="sample_file">
                                                        </div>
                                                    </div>
                                                        <div class="col-md-3" id="complete_file">
                                                            <div class="form-group">
                                                                <label class="custom-file-label" for="inputGroupFile01">{{__('dashboard.complete-file')}} </label>
                                                                <input type="file"   class="custom-file-input" id="inputGroupFile01"  name="complete_file">
                                                            </div>
                                                        </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.categories')}} </label>
                                                            <select type="text" required id="projectinput1" class="form-control input-custom"   name="category_id">
                                                                <option value="">{{__('dashboard.select-category')}}</option>
                                                                @foreach($categories as $category)
                                                                    <option @if($category->id==$ebook->category_id)selected @endif value="{{$category->id}}">{{$category->translate('ar')->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label    for="projectinput1">{{__('dashboard.writer')}} </label>
                                                            <input type="text" value="{{$ebook->writer ??''}}"   id="projectinput1" class="form-control input-custom"  name="writer">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="custom-file-label" for="inputGroupFile01">{{__('dashboard.image')}} </label>
                                                            <input type="file"    class="custom-file-input" id="inputGroupFile01"  name="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label    for="projectinput12">{{__('dashboard.pages_number')}} </label>
                                                            <input type="number" value="{{$ebook->pages_number ??''}}"  id="projectinput12" class="form-control input-custom"  name="pages_number">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label   for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.price')}} </label>
                                                            <input type="text" required id="projectinput1" value="{{$ebook->price}}" class="form-control input-custom"  name="price">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="display: none"  id="amazon_url">
                                                        <div class="form-group">
                                                            <label   for="projectinput1">amazon url </label>
                                                            <input type="text"  class="form-control"  name="amazon_url">
                                                        </div>
                                                    </div>

                                                    @foreach(config('translatable.locales') as $locale)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"><span style="color: red;">*</span>{{__('dashboard.summary')}} ({{$locale}})</label>
                                                                <textarea required id="projectinput1" class="form-control"   name="{{$locale}}[summary]">
                                                                    {!! $ebook->translate($locale)->summary !!}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="form-actions">
                                                        <button type="button" class="btn btn-warning mr-1 rounded-10">
                                                            <a href="{{route('customers.index')}}" style="color: white"> <i class="ft-x"></i>{{__('dashboard.cancel')}}</a>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary btn-main">
                                                            <i class="fa fa-check-square-o"></i> {{__('dashboard.save')}}
                                                        </button>
                                                    </div>
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
                    $('#complete_file').hide();
                    $('#sample_file').hide();
                }
                else{
                    $('#amazon_url').hide();
                    $('#complete_file').show();
                    $('#sample_file').show();
                }
            });

        });

    </script>

@endsection
