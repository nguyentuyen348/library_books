<style>
    .dropdown-item{
        color: black!important;
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="margin: 16px 0 0 0!important;">
            <div class="image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @if(auth()->user())
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
                @endif
            </div>

        </div>
        <div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('login')}}">Login</a>
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    <a class="dropdown-item" href="{{route('pages.register')}}">Register</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Profile</a>
                </div>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <form action="{{route('books.search')}}" method="get" >
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        </form>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column show" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Quản lý người dùng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sach người dùng</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Quản lý sinh viên
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('students.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách sinh viên</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quản lý sách
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('books.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách sách</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quản lý tác giả
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('authors.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách tác giả</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Quản lý thể loại sách
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách thể loại sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới thể loại</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Quản lý mượn trả
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('borrows.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách phiếu mượn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('borrows.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới phiếu mượn</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
