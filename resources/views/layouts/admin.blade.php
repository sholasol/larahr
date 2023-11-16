<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="" />
    <!-- Page Title -->
    <title>LaraHR | Admin</title>
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet"
        href="{{ url('public/assets/plugins/font-awesome/css/font-awesome.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/flag-icon/flag-icon.min.css')}}" />
    <link type="text/css" rel="stylesheet"
        href="{{ url('public/assets/plugins/simple-line-icons/css/simple-line-icons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/ionicons/css/ionicons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/toastr/toastr.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/apex-chart/apexcharts.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/css/app.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/css/style.min.css')}}" />
    <!-- Favicon -->
    <link rel="icon" href="{{ url('public/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- HTML5 shim and Respond.js' for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js' doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
      <![endif]-->
</head>

<body>
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="index.html">
                    <img class="desktop-logo" src="{{ url('public/assets/images/logo.png')}}" alt="">
                    <img class="small-logo" src="{{ url('public/assets/images/small-logo.png')}}" alt="">
                </a>
                <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->


            @include('partials._sidebar')

            <!--/ Sidebar Menu End -->
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <footer!--================================-->
                @include('partials._side_footer')
                <!--/ Sidebar Footer End -->
        </div>
        <!--/ Page Sidebar End -->
        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input class="form-control search-input" name="search" placeholder="Type something..."
                                type="text" />
                            <span class="input-group-btn">
                                <span id="close-search"><i class="ion-ios-close-empty"></i></span>
                            </span>
                        </div>
                    </form>
                </div>
                <!--================================-->
                <!-- Page Header  Start -->
                <!--================================-->
                @include('partials._page_header')
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
                <!-- Main Wrapper -->
                @yield('content')
                <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->
            <!--================================-->
            <footer class="page-footer">
                <div class="pd-t-4 pd-b-0 pd-x-20">
                    <div class="tx-10 tx-uppercase">
                        <p class="pd-y-10 mb-0">Copyright&copy; 2021 | All rights reserved. | Created By <a
                                href="http://wrapcoders.xyz/" target="_blank">WRAPCODERS</a></p>
                    </div>
                </div>
            </footer>
            <!--/ Page Footer End -->
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!--/ Scroll To Top End -->
    <!--================================-->
    <!-- Setting Sidebar Start -->
    <!--================================-->
    <div class="setting-sidebar" id="settingSidebar">
        <div class="wrapper" id="settingSidebarScroll">
            <ul class="nav nav-tabs nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nav-notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#nav-activity">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nav-setting">Setting</a>
                </li>
            </ul>
            <!-- Notification -->
            <div class="tab-content">
                <div class="tab-pane fade" id="nav-notifications">
                    <div class="card-activities mg-t-40-force">
                        <div class="media-list">
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-primary op-6">
                                    <i class="icon ion-stats-bars"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Report has been updated</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-success op-6">
                                    <i class="icon ion-trophy"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-purple op-6">
                                    <i class="icon ion-image"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Added new images</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-danger op-6">
                                    <i class="icon ion-stats-bars"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Report has been updated</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-warning op-6">
                                    <i class="icon ion-trophy"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-purple op-6">
                                    <i class="icon ion-image"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Added new images</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-danger op-6">
                                    <i class="icon ion-stats-bars"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Report has been updated</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-warning op-6">
                                    <i class="icon ion-trophy"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Achievement Unlocked</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                            <div class="media pd-b-30">
                                <div class="activity-icon bg-teal op-6">
                                    <i class="icon ion-image"></i>
                                </div>
                                <div class="ml-3 align-items-center">
                                    <h6 class="tx-13 tx-dark">Added new images</h6>
                                    <p class="tx-12 mb-0">Aenean vulputate eleifend tellus ligula, porttitor.</p>
                                    <span class="small">05:00 PM Sun, 02 Feb 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Activity -->
                <div class="tab-pane fade active show" id="nav-activity">
                    <div class="activity mg-t-40-force">
                        <i class="icon-check bg-soft-primary"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Task finished</h6>
                                    <span class="small">02 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-teal"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Video conference</h6>
                                    <span class="small">04 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-warning"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                                    <span class="small">06 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-danger"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Added your friend list</h6>
                                    <span class="small">07 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-success"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                                    <span class="small">09 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-primary"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Submit a blog</h6>
                                    <span class="small">11 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-teal"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">New Request</h6>
                                    <span class="small">12 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                        <i class="icon-check bg-soft-warning"></i>
                        <div class="time-item">
                            <div class="item-info ">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="tx-dark tx-13 mb-0">Task Overdue</h6>
                                    <span class="small">19 Feb 2019</span>
                                </div>
                                <p class="mt-2 tx-12 mg-b-5">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                                <div><span class="badge bg-soft-primary tx-uppercase">Design</span> <span
                                        class="badge bg-soft-danger  tx-uppercase">HTML</span> <span
                                        class="badge bg-soft-success  tx-uppercase">Css</span> <span
                                        class="badge bg-soft-teal  tx-uppercase">Dashboard</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Setting -->
                <div class="tab-pane fade" id="nav-setting">
                    <h5 class="tx-dark tx-13 tx-semibold mg-t-30">Notification Setting</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Notify when receive email</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Receive calls in meeting</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Update on task completion</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>New user registration</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Files uploaded successfully</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                    </ul>
                    <h5 class="tx-dark tx-13 tx-semibold mg-t-50">File Sharing Setting</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Notify when receive email</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Receive calls in meeting</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Update on task completion</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>New user registration</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Files uploaded successfully</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                    </ul>
                    <h5 class="tx-dark tx-13 tx-semibold mg-t-50">Reports Setting</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Generate Reports</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Receive calls in meeting</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Enable Report Export</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>New user registration</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Allow Data Collection</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                    </ul>
                    <h5 class="tx-dark tx-13 tx-semibold mg-t-50">System Setting</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Automatic updates</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Receive calls in meeting</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>Current statistics</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>New user registration</span>
                            <input type="checkbox" checked data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                        <li class="d-flex justify-content-between mg-y-20">
                            <span>User suggestions</span>
                            <input type="checkbox" data-toggle="toggle" data-size="xs" data-onstyle="primary">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/ Setting Sidebar End  -->
    <!--================================-->
    <!-- Demo Sidebar Start -->
    <!--================================-->
    <div class="setting-sidebar" id="demoSettingSidebar">
        <div class="wrapper" id="demoSettingSidebarScroll">
            <a class="demo-settings-icon" id="demoSettingSidebarTrigger" href="" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="icon-settings tx-16"></i>
            </a>
            <ul class="nav nav-tabs nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#nav-dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nav-frontend">Frontend</a>
                </li>
            </ul>
            <!-- Backend Dashboard -->
            <div class="tab-content">
                <div class="tab-pane fade active show" id="nav-dashboard">
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Default Version</h5>
                        <img src="assets/images/demo/dashboard/index1.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/light/index.html" target="_blank"
                                class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Semi-Dark Version</h5>
                        <img src="assets/images/demo/dashboard/dark-index1.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/semi-dark/index.html" target="_blank"
                                class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Dark Version</h5>
                        <img src="assets/images/demo/dashboard/full-dark-index1.png" alt=""
                            class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/dark/index.html" target="_blank"
                                class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Boxed Version</h5>
                        <img src="assets/images/demo/dashboard/boxed-index1.png" alt=""
                            class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/boxed/index.html" target="_blank"
                                class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30">
                        <a href="https://wrapcoders.xyz/metrical/" target="_blank"
                            class="btn btn-lg btn-primary btn-block">Download Now</a>
                    </div>
                </div>
                <!-- Frontend Templates -->
                <div class="tab-pane fade" id="nav-frontend">
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Ecommerce</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/ecommerce/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Cryptocurrency</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/cryptocurrency/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Helpdesk Center</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/helpdesk/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Project Management</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/project/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Server Management</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/server/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Education</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/education/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Event Management</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/event/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30 tx-center bd">
                        <h5 class="tx-dark tx-13 pd-y-10 bd-b mb-0">Social Activity</h5>
                        <img src="assets/images/demo/frontend/coming-soon.png" alt="" class="img-fluid d-block m-auto">
                        <span class="d-block pd-10 bd-t">
                            <a href="http://themes.wrapcoders.xyz/html/metrical/templates/social/index.html"
                                target="_blank" class="btn btn-sm btn-primary">Live Preview</a>
                        </span>
                    </div>
                    <div class="mg-y-30">
                        <a href="https://wrapcoders.xyz/metrical/" target="_blank"
                            class="btn btn-lg btn-primary btn-block">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Demo Sidebar End  -->
    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <script src="{{ url('public/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ url('public/assets/plugins/popper/popper.js')}}"></script>
    <script src="{{ url('public/assets/plugins/feather-icon/feather.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/pace/pace.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/countup/counterup.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/apex-chart/apexcharts.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js')}}">
    </script>
    <script src="{{ url('public/assets/js/dashboard/projects-dashboard-init.js')}}"></script>
    <script src="{{ url('public/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ url('public/assets/js/highlight.min.js')}}"></script>
    <script src="{{ url('public/assets/js/app.js')}}"></script>
    <script src="{{ url('public/assets/js/custom.js')}}"></script>
</body>

</html>