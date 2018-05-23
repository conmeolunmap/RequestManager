<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('/admin') }}"><i class="fa fa-dashboard fa-fw"></i>  Bảng điều khiển</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>  Quản Lý Phòng Ban<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('role.index') }}"> Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="{{ route('role.create') }}"> Thêm mới sản phẩm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Quản Lý Tài Khoản<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=""> Danh sách</a>
                    </li>
                    <li>
                        <a href=""> Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i>  Quản Lý Loại Yêu Cầu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=> Danh sách </a>
                    </li>
                    <li>
                        <a href="">Thêm mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>