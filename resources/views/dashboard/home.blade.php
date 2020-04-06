
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
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="/images/icon/avatar-big-01.jpg" alt="John Doe" />
                    </div>
                  
                    <h4 class="name">{{ Auth::user()->name }}</h4>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    <button type="submit" style="margin-left:120px" class="dropdown-item" href="{{ route('logout') }}">
                        {{ __('Sign out') }}
                    </button>
                </form>
               
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
                                <i class="fas fa-trophy"></i>Earnings/Award
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-database"></i>Withdraw
                            </a>
                        </li>

                        <li>
                            <a href="#">
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
           

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">Welcome</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">to your</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- Plans-->

            <div>
                <h3 class="text-center" style="margin-top:30px; color:#045427;">Available Investments</h3>
            </div>
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($investments as $investment)
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">₦{{ $investment->amount }}</h2>                           
                                    <span class="desc">{{ $investment->name }}</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <form>
                                        @csrf
                                        <button style="margin-top:25px; float:left; padding:4px; border:0px; background-color:#ffcc00; color:#000" type="button" onclick="payWithPaystack(<?php echo $investment->id;?>, <?php echo $investment->amount.(00);?>)">Invest</button>
                                      </form>
                                    </div>
                            </div>
                            @endforeach
                           
                    </div>
                </div>
            </div>
        </section>
        <!-- END Plans-->


            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Supernaire. All rights reserved. <a href="#">Supernaire</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
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



    <script src="https://js.paystack.co/v1/inline.js"></script>
      <script >
        var orderObj = {
          email_prepared_for_paystack: "<?php echo \Auth::user()->email;?>"
        
        //   other params you want to save
        };
        
        //function submit(form, event){
          //  event.preventDefault();
           // payWithPaystack();
       // }

        
      
        function payWithPaystack($investmentId, $amount){
           console.log($investmentId);
           console.log($amount); 
          var handler = PaystackPop.setup({
            key: 'pk_test_f9c5fbf1abaef428f6b1b09a3affc7d81a90a3a2',
            email: orderObj.email_prepared_for_paystack,
            amount: $amount,
            
            callback: function(response){
                var posting = $.post( '/processInvestment', orderObj );

                posting.done(function( data ) {
         
                    payWithPaystack(data);
                        });
             posting.fail(function( data ) { /* and if it failed... */ }); 
              var verifying = $.get( '/verify.php?reference=' + response.reference);
              verifying.done(function( data ) { /* give value saved in data */ });
              document.getElementById("submitInvest").submit();

            },

            onClose: function(){
              alert('Click "Pay now" to retry payment.');
            }
          });
          handler.openIframe();
        }
      </script>


</body>

</html>
<!-- end document-->

