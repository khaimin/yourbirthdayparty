<header class="header">
<a href="{{ route('index') }}" class="logo">
<<<<<<< HEAD
   Quản Trị Viên
=======
    BLISS
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-right">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">Bạn có 4 tin nhắn mới !!</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li><!-- start message -->
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="{{ url('public/admin/img/user.jpg') }}" class="img-circle" alt="User Image"/>
                                    </div>
                                    <h4>
                                        Cảnh ca
                                    </h4>
                                    <p>Xin chào!! bạn có thê giúp mình không ...</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> 5 mins</small>
                                </a>
                            </li><!-- end message -->
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="{{ url('public/admin/img/avatar5.png') }}" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                       Đặt tiệc
                                    </h4>
                                    <p>Tại sao tôi không ....?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> 2 hours</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="{{ url('public/admin/img/avatar.png') }}" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                        Chọn món

                                    </h4>
                                    <p>chọn món như thê nào là hợp lý?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> Today</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="{{ url('public/admin/img/user.jpg') }}" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                       Khuyến mãi

                                    </h4>
                                    <p>Tôi có thể nhận khuyến mãi không?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> Yesterday</small>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
            </li>
         
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span>Hi, {{Auth::user()->name}} <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                    <li class="dropdown-header text-center">Tài khoản</li>
                    <li class="divider"></li>

                        <li>
                            <a href="{{ URL::route('admin.infoadmin.index') }}">
                            <i class="fa fa-user fa-fw pull-right"></i>
                               Thông tin các nhân
                            </a>
                            <a data-toggle="modal" href="#modal-user-settings">
                            <i class="fa fa-cog fa-fw pull-right"></i>
                                Cài đặt
                            </a>
                            </li>

                            <li class="divider"></li>

<<<<<<< HEAD
                           <li>
                                <a href="{{ URL::route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-ban fa-fw pull-right"></i> Đăng xuất 
=======
                            <li>
                                <a href="{{ URL::route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-ban fa-fw pull-right"></i> Logout 
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>