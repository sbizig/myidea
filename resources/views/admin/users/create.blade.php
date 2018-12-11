@extends('layouts/master')

{{-- Page title --}}
@section('title')
Add Role -
@parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- plugin styles-->
<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/switchery/css/switchery.min.css')}}" />

<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/izitoast/css/iziToast.min.css')}}" />

<link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/checkbox_css/css/checkbox.min.css')}}" />

<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
<header class="head">
    <div class="main-bar row">
        <div class="col-lg-6">
            <h4 class="nav_top_align skin_txt">
                <i class="fa fa-user"></i>
                Add User
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
                    <h4>Personal Information</h4>
                </div>



                <div class="card-block" id="tabs">
                    <ul class="nav nav-tabs m-t-35">
                        <li class="nav-item">
                            <a class="nav-link active" href="#pers_info" data-toggle="tab">Personnal information</a>
                        </li>
                        <li class="nav-item" id="themify_icon">
                            <a class="nav-link" href="#perso_details" data-toggle="tab">Details</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div  class="tab-pane active" id="pers_info">





                            <form class="form-horizontal login_validator" id="tryitForm">
                                <!--<form role="form" id="tryitForm" action="add_user" class="form-horizontal" method="post" auete="on">-->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row m-t-25">
                                                <div class="col-lg-3 text-xs-center text-lg-right">
                                                    <label class="form-control-label">Profile Pic</label>
                                                </div>
                                                <div class="col-lg-6 text-xs-center text-lg-left">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new img-thumbnail text-xs-center">
                                                            <img src="#" data-src="holder.js/100%x100%"  alt="not found"></div>
                                                            <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                            <div class="m-t-20 text-xs-center">
                                                                <span class="btn btn-primary btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="..."></span>
                                                                    <a href="#" class="btn btn-warning fileinput-exists"
                                                                    data-dismiss="fileinput">Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group gender_message row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label class="form-control-label">Civility *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio1" type="radio" name="civility"
                                                                    class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Mrs</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio2" type="radio" name="civility"
                                                                    class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Mme</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="u-name" class="form-control-label">
                                                            First Name *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                                                </span>
                                                                <input type="text" name="fname" id="u-name"
                                                                class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="u-name" class="form-control-label">
                                                            Last Name *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                                                </span>
                                                                <input type="text" name="lname" id="u-name"
                                                                class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 input_field_sections">
                                            <form>
                                                <div class="input-group input-append  date" id="dpYears"  data-date-format="yyyy/mm/dd" data-date-viewmode="years">
                                                    <input class="form-control" type="text" placeholder="yyyy/mm/dd">
                                                    <span class="input-group-addon add-on">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                </div>
                                            </form>
                                        </div>
                                                     <div class="form-group row m-t-25">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="date_birthday" class="form-control-label">
                                                            Date Birthday *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                                                </span>
                                                                <input type="text" name="date_birthday" id="date_birthday"
                                                                class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="email" class="form-control-label">Email
                                                            *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                                                <input type="text" placeholder=" " id="email" name="email"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="pwd" class="form-control-label">Password
                                                            *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                                <input type="password" name="password" id="pwd"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="cpwd" class="form-control-label">Confirm
                                                            Password *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                                                <input type="password" name="confirmpassword" placeholder=" " id="cpwd"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="phone" class="form-control-label">Phone
                                                            *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                                                <input type="text" placeholder=" " id="phone" name="cell"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group gender_message row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label class="form-control-label">Gender *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio1" type="radio" name="gender"
                                                                    class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Male</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input id="radio2" type="radio" name="gender"
                                                                    class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Female</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="address" class="form-control-label">Address
                                                            *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                                <input type="text" placeholder=" "  id="address" name="address1"  class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="city" class="form-control-label">City
                                                            *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                                <input type="text" placeholder=" " name="city" id="city"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-3 text-lg-right">
                                                            <label for="postale_code" class="form-control-label">Postal code
                                                            *</label>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-plus text-primary"></i></span>
                                                                <input type="text" placeholder=" " name="postale_code" id="pincode"
                                                                class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-xl-6 col-lg-8 add_user_checkbox_error push-lg-3">
                                                            <div>
                                                                <label class="custom-control custom-checkbox">
                                                                    <input id="checkbox1" type="checkbox" name="check_active"
                                                                    class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description">Activate your account</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 push-lg-3">
                                                            <button class="btn btn-primary" type="submit">
                                                                <i class="fa fa-user"></i>
                                                                Add User
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
                                    <div  class="tab-pane" id="perso_details">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="cin" class="form-control-label">
                                                CIN </label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"> <i class="fa fa-credit-card text-primary"></i>
                                                    </span>
                                                    <input type="text" name="cin" id="cin"
                                                    class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="num_passport" class="form-control-label">
                                                Num passport </label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="num_passport" id="num_passport"
                                                    class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="company" class="form-control-label">
                                                Company </label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"> <i class="fa fa-institution text-primary"></i>
                                                    </span>
                                                    <input type="text" name="company" id="company"
                                                    class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="isblacklist" class="form-control-label">
                                                is blacklist </label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <div class="form-group radio_basic_swithes_padbott">
                                                        <input id="isblacklist" name="isblacklist" class="make-switch-radio" data-on-text="YES" data-off-text="NO" type="checkbox">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- /.inner -->
            </div>

            @stop

            {{-- page level scripts --}}
            @section('footer_scripts')
            <!-- plugin scripts-->
            <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/vendors/switchery/js/switchery.min.js')}}"></script>

            <script type="text/javascript" src="{{asset('assets/js/pluginjs/jasny-bootstrap.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/vendors/holderjs/js/holder.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>

            <script type="text/javascript" src="{{asset('assets/js/pages/validation.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/js/pages/radio_checkbox.js')}}"></script>

            <script type="text/javascript">

            </script>
            <!-- end of plugin scripts-->
            @stop