
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
    
        <!-- Title Page-->
        <title>User | dashboard</title>
    
        <!-- Fontfaces CSS-->
        <link href="/css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    
        <!-- Bootstrap CSS-->
        <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    
        <!-- Favicon -->
        <link href="img/sp.png" rel="shortcut icon"/>
    
    
        <!-- Vendor CSS-->
        <link href="{{url('/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{url('/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    
        <!-- Main CSS-->
        <link href="/css/theme.css" rel="stylesheet" media="all">
    
    </head>


    <body class="animsition">
        <div class="page-wrapper">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a href="/home">
                        <img style="width:50px" src="img/sp.png" alt="" />
                    </a>
                </div>
           
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="/home">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                 
                                </a>
                               
                            </li>
                            <li>
                                <a href="/dashboard.showinvestment">
                                    <i class="fas fa-chart-bar"></i>Investments</a>
                            </li>
                            <li>
                                <a href="/dashboard.referrals">
                                    <i class="fas fa-group"></i>Referrals</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-trophy"></i>Earnings
                                </a>
                            </li>
    
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Updates</a>
                            </li>
    
                            <li>
                                <a href="alert.html">
                                    <i class="far fa-bell"></i>Status</a>
                            </li>
    
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->    
      
      
            <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="" />
                                </a>
                            </div>
                            <div class="header-button2">
                        
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Profile</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                     
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#"href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 <i class="zmdi zmdi-power"></i> {{ __('Sign out') }} </a>
                                            
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                 @csrf
                                             </form>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
           


                        <div class="container">
                        <div class="row" style="margin:13px 0px 0px 20px">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Investments</th>
                                                <th>Referrals</th>
                                                <th>description</th>
                                                <th>status</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>FINANCIAL PLAN</td>
                                                <td>0/12</td>
                                                <td>-</td>
                                                <td class="process">In active</td>
                                                <td>₦000000000.00</td>
                                            </tr>
                                            <tr>
                                                <td>COOPORATIVE SYSTEM</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="process">Processed</td>
                                                <td>₦000000000.00</td>
                                            </tr>
                                            <tr>
                                                <td>NETWORKING SYSTEM</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="denied">Denied</td>
                                                <td>₦000000000.00</td>
                                            </tr>
                                            <tr>
                                                <td>INVESTMENT PLAN</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="denied">Denied</td>
                                                <td>₦000000.00</td>
                                            </tr>
                                            <tr>
                                                <td>MENTORING SYSTEM</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="process">Processed</td>
                                                <td>₦000000000</td>
                                            </tr>
                                            <tr>
                                                <td>BUSINESS PLAN</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="denied">Denied</td>
                                                <td>₦000000.00</td>
                                            </tr>
                                            <tr>
                                                <td>EDUCATIONAL PLAN</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="process">Processed</td>
                                                <td>₦000000000.00</td>
                                            </tr>
                                            <tr>
                                                <td>RETIREMENT PLAN</td>
                                                <td>NA</td>
                                                <td>-</td>
                                                <td class="process">Processed</td>
                                                <td>₦000000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 All rights reserved. Template by <a href="#">Supernaire</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>
        <script src="vendor/vector-map/jquery.vmap.js"></script>
        <script src="vendor/vector-map/jquery.vmap.min.js"></script>
        <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="vendor/vector-map/jquery.vmap.world.js"></script>
    
        <!-- Main JS-->
        <script src="js/user.js"></script>
    

</body>

</html>
<!-- end document-->

