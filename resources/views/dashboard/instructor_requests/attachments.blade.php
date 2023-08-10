@extends('dashboard.layouts.master')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">{{__('dashboard.instructor-attachments')}}</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">{{__('dashboard.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('dashboard.instructor-attachments')}}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body"><!-- Default styling start -->
                <!-- Default styling end -->
                <!-- Table header styling start -->
                <div class="row" id="header-styling">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('dashboard.instructor-attachments')}}</h4>
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-success white">
                                        <tr>
                                            <th>#id</th>
                                            <th>{{__('dashboard.file')}}</th>
                                            <th>{{__('dashboard.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($attachs as $attach)
                                        <tr>
                                            <td>{{$attach->id}}</td>
                                            <td><a href="{{asset($attach->file)}}">{{__('dashboard.view')}}</a></td>
                                            <td>
                                                <div class="btn-group float-md-left">
                                                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="icon-settings mr-1"></i>{{__('dashboard.action')}}</button>
                                                    <div class="dropdown-menu">

                                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteModal{{ $attach->id }}">
                                                            <i class="fa fa-cart-plus mr-1"></i> {{__('dashboard.delete')}}</a>
                                                        {{--                <div class="dropdown-divider"></div>--}}
                                                        <a class="dropdown-item" href="{{ url("/attachments/{$attach->id}/edit") }}">
                                                            <i class="fa fa-cog mr-1"></i> {{__('dashboard.edit')}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <div id="deleteModal{{ $attach->id }}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">{{__('dashboard.delete')}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{__('dashboard.delete-message')}} </p>
                                                    </div>
                                                    <form action="{{ url("/attachments/{$attach->id}") }}" method="POST">
                                                        @method('delete') @csrf
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">{{__('dashboard.close')}}</button>
                                                            <button type="submit" class="btn btn-danger btn-flat">{{__('dashboard.delete')}}</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>

                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table header styling end -->

            </div>
        </div>
    </div>






@endsection

