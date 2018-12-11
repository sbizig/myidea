@extends('layouts/master')

{{-- Page title --}}
@section('title')
    Add Role -
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
            <header class="head">
                <div class="main-bar row">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-user"></i>
                            Add Role
                        </h4>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">

                        <div class="card-block m-t-35">
                            <div>
                                <h4>Role Information</h4>
                            </div>
                            <form method="post" action="{{url('admin/roles/edit/'.$role->id)}}" class="form-horizontal login_validator" id="tryitForm">
                                <input type="hidden" name="_method" value="PUT">
                                <!--<form role="form" id="tryitForm" action="add_user" class="form-horizontal" method="post" auete="on">-->
                                    {{csrf_field()}}
                                <div class="row">
                                    <div class="col-xs-12">
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="name" class="form-control-label">Name
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group @if($errors->get('name')) has-danger @endif">
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" placeholder=" "  id="name" name="name"  class="form-control" value="{{$role->name}}">
                                                </div>
                                                @if($errors->get('name'))
                                                        @foreach($errors->get('name') as $message)
                                                            <span style="color:red;">{{$message}}</span>
                                                        @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="display_name" class="form-control-label">Display name
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group @if($errors->get('display_name')) has-danger @endif">
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" placeholder=" " name="display_name" id="display_name" value="{{$role->display_name}}" 
                                                           class="form-control">
                                                </div>
                                                @if($errors->get('display_name'))
                                                        @foreach($errors->get('display_name') as $message)
                                                            <span style="color:red;">{{$message}}</span>
                                                        @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="description" class="form-control-label">Description
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group @if($errors->get('description')) has-danger @endif">
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" placeholder=" " name="description" id="description"
                                                           class="form-control" value="{{$role->description}}">
                                                </div>
                                                 @if($errors->get('description'))
                                                        @foreach($errors->get('description') as $message)
                                                            <span style="color:red;">{{$message}}</span>
                                                        @endforeach
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-9 push-lg-3">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-user"></i>
                                                    Edit Role
                                                </button>
                                                <button class="btn btn-warning" type="reset" id="clear">
                                                    <i class="fa fa-refresh"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /.inner -->
            </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- plugin scripts-->
<script type="text/javascript" src="{{asset('assets/js/pluginjs/jasny-bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/holderjs/js/holder.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<!-- end of plugin scripts-->
@stop