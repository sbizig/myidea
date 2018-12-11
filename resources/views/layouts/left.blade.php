
        <div id="left">
            <div class="menu_scroll">
                <div class="left_media">
                    <div class="media user-media bg-dark dker">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper bg-dark">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3"
                                     alt="User Picture"
                                     src="{{asset('assets/img/admin.jpg')}}">
                                <p class="user-info menu_hide">Welcome {{Auth::user()->name}}</p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                <ul id="menu">

                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; @lang('app.menu.manage')</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li >
                                <a href="{{url('admin/roles')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; @lang('app.menu.role')
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/permissions')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; @lang('app.menu.permission')
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/users')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; @lang('app.menu.users')
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->