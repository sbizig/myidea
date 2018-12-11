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
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/multiselect/css/multi-select.css')}}"/>

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
                            <form method="post" action="{{url('admin/roles/create')}}" class="form-horizontal login_validator" id="tryitForm">
                      <!--   {!! Form::open(['id'=>'createRole','class'=>'ajax-form','method'=>'POST']) !!} -->

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
                                                <div class="input-group @if($errors->get('name')) has-danger @endif" >
                                                    <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" placeholder=" "  id="name" name="name"  class="form-control" value="{{old('name')}}">
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
                                                    <input type="text" placeholder=" " name="display_name" id="display_name"
                                                      value="{{old('display_name')}}" class="form-control">
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
                                                    value="{{old('description')}}" class="form-control">
                                                </div>
                                                @if($errors->get('description'))
                                                        @foreach($errors->get('description') as $message)
                                                            <span style="color:red;">{{$message}}</span>
                                                        @endforeach
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-6 m-t-35">
                                            <h5>Set Permissions</h5>
                                            <select class="form-control" multiple id="multi_select4" name="permissions[]">
                                                <option disabled selected>Choose Permission</option>
                                                <?php foreach ($permissions as $key => $value): ?>
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-9 push-lg-3">
                                                <button id="save-form" class="btn btn-primary" type="submit">
                                                    <i class="fa fa-user"></i>
                                                    Add Role
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
                          <!-- {!! Form::close() !!} -->
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


<script type="text/javascript" src="{{asset('assets/vendors/multiselect/js/jquery.multi-select.js')}}"></script>
<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/izitoast/css/iziToast.min.css')}}" />

<script type="text/javascript">

        $('#multi_select4').multiSelect({
        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        afterInit: function (ms) {
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function (e) {
                    if (e.which === 40) {
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function (e) {
                    if (e.which == 40) {
                        that.$selectionUl.focus();
                        return false;
                    }
                });
        },
        afterSelect: function () {
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function () {
            this.qs1.cache();
            this.qs2.cache();
        }
    });
 
</script>
<!-- end of plugin scripts-->
@stop