@extends('layouts/master')

{{-- Page title --}}
@section('title')
    Roles
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dataTables.bootstrap.css')}}"/>
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/tables.css')}}"/>
    <!-- end of page level styles -->

@stop
@section('content')
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    User Grid
                </h4>
            </div>

            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index1">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Roles</a>
                    </li>
                    <li class="active breadcrumb-item">User Grid</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container"> 
            @if(isset($messages))
            <div class="{{$messages['alert']}}">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{$messages['message']}}
            </div>
            @endif           
            <div class="card">
                <div class="card-header bg-white">
                    List Roles
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <a href="{{url('admin/roles/create')}}" id="editable_table_new" class=" btn btn-default">
                                Add Role <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group float-xs-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                   id="editable_table" role="grid">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">ID</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Name</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">display name</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">description</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">created at</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($listroles as $role)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->display_name}}</td>
                                    <td class="center">{{$role->description}}</td>
                                    <td class="center">{{$role->created_at}}</td>
                                    <td>
                                        <form action="{{url('admin/roles/'.$role->id)}}" method="post">
                                            <a href="{{url('admin/roles/edit/'.$role->id)}}" class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user"><i class="fa fa-pencil text-warning"></i></a>
                                                {{csrf_field()}}
                                               <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" ><i
                                                    class="fa fa-trash text-danger"></i></a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->

@stop
