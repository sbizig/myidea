@extends('layouts/master')

{{-- Page title --}}
@section('title')
    @lang('app.permissions.permissions')
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
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/izitoast/css/iziToast.min.css')}}" />

    <!-- end of page level styles -->

@stop
@section('content')


    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                    List Permissions
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
                        <a href="#">@lang('app.permissions.permissions')</a>
                    </li>
                    <li class="active breadcrumb-item">User Grid</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-header bg-white">
                        @lang('app.permissions.listpermissions')
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <button class=" btn btn-success" onclick="showAdd()" data-toggle="modal"  data-id="editable_table_new" data-post="data-php" data-action="add" >
                                @lang('app.permissions.addpermission') <i class="fa fa-plus"></i>
                            </button>
                            
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
                                    @foreach($listpermissions as $permission)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$permission->id}}</td>
                                    <td>{{$permission->name}}</td>
                                    <td>{{$permission->display_name}}</td>
                                    <td class="center">{{$permission->description}}</td>
                                    <td class="center">{{$permission->created_at}}</td>
                                    <td>
                                            <a href="{{url('admin/permissions/edit/'.$permission->id)}}" class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user"><i class="fa fa-pencil text-warning"></i></a>
                                            <a onclick="destroy({{$permission->id}})" class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="fa fa-trash text-danger"></i></a>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content load_modal"></div>
    </div>
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
    <script type="text/javascript" src="{{asset('assets/vendors/izitoast/js/iziToast.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/izi_toastr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/users.js')}}"></script>
    <!-- end page level scripts -->

        <script type="text/javascript">
        // function destroy 
        function destroy(id) {
            event.preventDefault();
            console.log("hello");
            iziToast.show({
                timeout: 20000,
                close: false,
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                title: 'Delete',
                message: 'Are you sure to delete this record?',
                position: 'center',
                buttons: [
                    ['<button>YES</button>', function (instance, toast) {
                    var url = "{{ url('admin/permissions/:id') }}";
                    url = url.replace(':id', id);

                    var token = "{{ csrf_token() }}";

                    $.easyAjax({
                        type: 'POST',
                        url: url,
                        data: {'_token': token, '_method': 'DELETE'},
                        success : function(response){
                            console.log(response);
                        }
                    });
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
             
                    }, true],
                    ['<button>NO</button>', function (instance, toast) {
             
                        instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
             
                    }],
                ],
                onClosing: function(instance, toast, closedBy){
                    console.info('Closing | closedBy: ' + closedBy);
                },
                onClosed: function(instance, toast, closedBy){
                    console.info('Closed | closedBy: ' + closedBy);
                }
            });

        }
        // Show Create Permission Modal
        function showAdd() {
            var url = "{{ url('admin/permissions/create') }}";
            $.ajaxModal('#myModal', url);
        }
        // store permission
        function storePermission(){
        $('#errorname').html('');
        $('#errordisplay_name').html('');
        $('#errordescription').html('');
        var url = "{{ url('admin/permissions/create') }}";
        $.easyAjax({
            type: 'POST',
            url: url,
            container: '#tryitForm',
            data: $('#tryitForm').serialize(),
            success: function (response) {
                console.log([response, 'success']);
                event.preventDefault();
                iziToast.show({
                            title: response.status,
                            message: response.message,
                            color:'#00cc99',
                            position: 'bottomCenter',
                            timeout : '6000'
                        });

                $('#myModal').modal('hide');
            },error: function (response) {
                var r = jQuery.parseJSON(response.responseText);
                console.log(response)

                if(response.status == '422'){
                    for (var key in r.errors){
                        console.log(key);
                        $('#error'+key).html('<span style="color:red" id="error"'+key+'>'+r.errors[key]+'</span>');
                    }  
                }
        }
      });
    }
    </script>
@stop