<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
            Rent car management
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <!-- end of global styles-->
    @yield('header_styles')
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>

</head>

<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="bg-dark" id="wrap">
    @include('layouts.top')
  <div class="wrapper">
    @include('layouts.left')

        <div id="content" class="bg-container">
            <!-- Content -->
        @yield('content')
        <!-- Content end -->
        </div>
        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <form>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group search_bar_small">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#content -->
    @include('layouts.right_sidebar')

</div>
<!-- /#wrap -->
<!-- global scripts--> 
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('assets/js/pluginjs/froiden-helper/helper.js') }}"></script>



<!-- end of global scripts-->

<!-- page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>