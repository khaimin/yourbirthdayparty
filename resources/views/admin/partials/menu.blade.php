<aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src=" {{asset('resources/upload/avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image" />
                                    
                                </div>
                                <div class="pull-left info">
<<<<<<< HEAD
                                    <p>   <a href="{{ URL::route('admin.infoadmin.index') }}">{{Auth::user()->name}}</a></p>
=======
                                    <p>Hello, {{Auth::user()->name}}</p>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0

                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            <!-- form tim kiem -->
                            <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                  
                           
                                <li class="active">
                                    <a href="{{ route('admin.thongke.index') }}">
                                        <i class="fa fa fa-dashboard"></i> <span>Thống kê</span>
                                    </a>
                                </li>
<<<<<<< HEAD
                             @if(Auth::user()->rule==1001)
                               <li >
                                    <a href="{{ route('admin.quanliuser.index') }}">
                                        <i class="fa fa-users"></i> <span>Quản lí người dùng</span>
                                    </a>
                                </li>
                                <li >
=======
                                @if(Auth::user()->rule==1)
                                <li>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
                                    <a href="{{ route('admin.loaisanpham.index') }}">
                                        <i class="fa fa-gavel"></i> <span>Loại sản phẩm</span>
                                    </a>
                                </li>
<<<<<<< HEAD
                            @endif
                                <li >
=======
                                @endif
                                <li>
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
                                    <a href="{{ route('admin.sanpham.index') }}">
                                        <i class="fa fa-globe"></i> <span>Sản phẩm</span>
                                    </a>
                                </li>
<<<<<<< HEAD
                           
                                <li >
                                    <a href="{{ route('admin.blog.index') }}">
                                        <i class="fa fa-glass"></i> <span>Bài viết</span>
                                    </a>
                                </li>
                         
                            @if(Auth::user()->rule==1001)
                                <li >
                                    <a href="{{ route('admin.nhacc.index') }}">
                                        <i class="fa fa-home"></i> <span>Nhà cung cấp</span>
                                    </a>
                                </li>
                            @endif
=======
                                @if(Auth::user()->rule==1)
                                <li>
                                    <a href="simple.html">
                                        <i class="fa fa-glass"></i> <span>Bài viết</span>
                                    </a>
                                </li>
                                @endif
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                        
                    </aside>