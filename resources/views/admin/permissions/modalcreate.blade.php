

                             <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"> 
                                    </span>
                                </div>
                                <div class="modal-body">

<form method="post" action="{{url('admin/permissions/create')}}" class="form-horizontal login_validator" id="tryitForm">
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
                                                    <div id="errorname"></div>
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
                                                <div id="errordisplay_name"></div>

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
                                                <div id="errordescription"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                </div>
                                <div class="modal-footer">
                                     <button class="btn btn-primary" type="submit" onclick="storePermission()">
                                                    <i class="fa fa-user"></i>
                                                    @lang('app.permissions.addpermission')
                                     </button>
                                      <button type="button" class="btn default" data-dismiss="modal">Close</button>

                                </div>