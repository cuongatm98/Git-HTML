<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">

                    <img src="{{asset('master/images/faces/face1.jpg')}}" alt="profile">

                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Thịnh_Ngọc_Cường</span>
                    <span class="text-secondary text-small">Quản lí dự án</span>

                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">

            <a class="nav-link" href="{{route('dashboard')}}">

                <span class="menu-title">Trang chủ</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
               aria-controls="page-layouts">
                <span class="menu-title"><Layouts>Quản lí sản phẩm</Layouts></span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-apps menu-icon"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('products.index')}}">Danh sách sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('products.create')}}">Thêm</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
               aria-controls="sidebar-layouts">

                <span class="menu-title">Quản lí thể loại</span>

                <i class="menu-arrow"></i>
                <i class="mdi mdi-playlist-play menu-icon"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('categories.index')}}">Danh sách thể loại</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('categories.create')}}">Thêm</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
