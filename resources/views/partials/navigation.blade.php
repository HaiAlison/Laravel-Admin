        <!-- Navigation Bar-->
        <header id="topnav" style="background-color:#56c2d6">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="d-none d-sm-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">
                                                <i class="fe-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>
            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="" class="text-muted">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div class="slimscroll noti-scroll">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/user-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img @if(Auth::user()->anh_dai_dien=="") src="{{ asset('assets/images/quan-tri-vien/user-empty.png') }}" @else src="{{ asset('assets/images/quan-tri-vien/'.Auth::user()->anh_dai_dien) }}" @endif width="150px" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Admin: {{Auth::user()->ho_ten}} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        Welcome !
                                    </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="{{route('quan-tri-vien.doi-mat-khau')}}" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Đổi mật khẩu</span>
                                </a>

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a> -->

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="{{route('dang-xuat')}}" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="26">
                                <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">X</span> -->
                                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="28">
                            </span>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu" >
                <div class="container-fluid " >
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="">
                                <a href="{{ route('dashboard')}}">
                                    <i class="la la-dashboard"></i>Trang chủ</a>
                            </li>

                            <li class="">
                                <a href="{{ route('linh-vuc.danh-sach')}}">
                                    <i class="la la-cube"></i>Lĩnh Vực </a>
                            </li>

                            <li class="">
                                <a href="{{ route('cau-hoi.danh-sach')}}"> <i class="la la-question"></i>Câu hỏi</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="la la-users"></i>Người chơi <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="{{ route('nguoi-choi.danh-sach')}}">Tài khoản</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('luot-choi.danh-sach')}}">Lượt chơi</a>
                                            </li>
                                            <li>
                                                <a href="{{route('chi-tiet-luot-choi.danh-sach')}}">Chi tiết lượt chơi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="la la-diamond"></i>Credit<div class="arrow-down"></div></a>
                                    <ul class="submenu">
                                            <li>
                                                <a href="{{route('goi-credit.danh-sach')}}">Gói credit</a>
                                            </li>
                                            <li>
                                                <a href="{{route('lich-su-mua-credit.danh-sach')}}">Lịch sử mua credit</a>
                                            </li>
                                    </ul>
                            </li>

                            <li class="">
                                <a href="{{route('quan-tri-vien.danh-sach')}}"> <i class="mdi mdi-account-card-details"></i>Quản trị viên</a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="#"> <i class="la la-cog"></i>Cấu hình <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                   <li>
                                       <ul>
                                            <li>
                                                <a href="{{route('cau-hinh-app.danh-sach')}}">App</a>
                                            </li>
                                            <li>
                                                <a href="{{route('cau-hinh-tro-giup.danh-sach')}}">Trợ giúp</a>
                                            </li>
                                            <li>
                                                <a href="{{route('cau-hinh-diem-cau-hoi.danh-sach')}}">Điểm cho câu hỏi</a>
                                            </li>
                                       </ul>
                                   </li>
                                </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->