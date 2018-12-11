@extends('layouts/master')

{{-- Page title --}}
@section('title')
    Dashboard-2
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')

    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
@stop
@section('content')

            <header class="head">
                <div class="main-bar row">
                    <div class="col-xs-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
            </header>
           
@stop
@section('footer_scripts')
<!--  plugin scripts -->
<script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
<script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
<!--end of plugin scripts-->

<script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
