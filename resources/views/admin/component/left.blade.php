<!-- Brand Logo -->
<a href="{{route('admin')}}" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
                <a href="{{route('admin.local.categorisviuv',['local'=>$local])}}" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                        კატეგორია
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.local.menus',['local'=>$local])}}" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                        მენიუ
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.local.group',['local'=>$local])}}" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                        ჯგუფი
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
