<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dify-Admin Panel</title>
    <!-- plugins:css -->


    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/pwstabs/assets/jquery.pwstabs.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/icheck/skins/all.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/select2/dist/css/select2.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/dragula/dist/dragula.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/quill/dist/quill.snow.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/node_modules/simplemde/dist/simplemde.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">

    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(); ?>asset/images/logo.png" />

    <style type="text/css">
        @media screen and (max-width: 500px) {
            #mobileshow {
                display: none;
            }
        }
       
        .social-icon{
            width:250px;
            height:50px;
            padding:5px;
        }
        .social-icon ul li{
            list-style:none;
            display:inline-block;
            
        }
        .social-icon ul li a{
            padding:3px 7px;
            margin-left:10px;
        }
        
        .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link {
            background: #F4A52C;
            color: #8d9498;
        }
        .cusIcon{
            margin-top:10px;
             padding: 20px;
              font-size: 20px;
              width: 30px;
              text-align: center;
              text-decoration: none;
              border-radius: 50%;
        }
        .cusIcon:hover {
          opacity: 0.7;
        }
        
   
      
    </style>

</head>

<body>

    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color:#f2f2f2;">
                <a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>asset/images/logo.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center" style="background-color:#E96B2B;">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
                <div class="search-bar">
                    <input type="text" placeholder="Search..." style="padding:8px 80px; border-radius:50px; border:1px solid #fff; margin-left:200px;"><i class="fa fa-search" style="margin-left:-30px; color:black;"></i>
                </div>
                <div class="social-icon text-right mr-3">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-facebook cusIcon" style=" background: #3B5998;
                          color: white;"></a>
                        </li>
                         <li>
                            <a href="#" class="fa fa-twitter cusIcon" style=" background: #55ACEE;
                          color: white;"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus cusIcon" style=" background: #F43B2C;
                          color: white;"></a>
                        </li>
                          <li>
                            <a href="#" class="fa fa-instagram cusIcon" style=" background: #F43B2C;
                          color: white;"></a>
                        </li>

                    </ul>
                </div>
              <div class = "btn-group btn-outline-warning text-right" >
   <button type = "button" class = " dropdown-toggle" data-toggle = "dropdown" style="border:1px solid #fff; padding:5px;" ><i class="icon-user menu-icon" style="color:black; margin-right:10px; margin-left:10px;"></i> 
      Admin
      <span class = "caret"></span>
   </button>
   
   <ul class = "dropdown-menu" role = "menu" style="margin-left:5px;">
      <li><a href="<?= base_url(); ?>appsettings" class="btn btn-sm btn-outline-secondary"><i class="fa fa-cog ml-2" aria-hidden="true"></i> App setting</a></li>
      <li><a href="<?= base_url(); ?>profile" class="btn btn-sm btn-outline-secondary"><i class="fa fa-user ml-2" aria-hidden="true"></i> Profile</a></li>
      <li><a href="<?= base_url(); ?>login/logout"" class="btn btn-sm btn-outline-secondary"><i class=" fa fa-sign-out ml-2" aria-hidden="true"></i> Logout</a></li>
     
     
   </ul>
   
</div>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:../../partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color:#f2f2f2;box-shadow:3px 5px 7px #ccc; ">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <div class="nav-link">
                                <div style="text-align:center;">
                                <a href="<?= base_url(); ?>" >
                                    <img src="<?= base_url(); ?>images/admin/<?= $this->session->userdata('image') ?>" onerror="this.onerror=null;this.src='<?= base_url(); ?>asset/images/logo.png';"  style="max-width:115px;"/>
                                    </a>
                                    <span class="online-status online"></span>
                                    <!--change class online to offline or busy as needed-->
                                </div>
                                <div class="profile-name">
                                    <p class="name">
                                        <?= ucfirst($this->session->userdata('user_name')) ?>
                                    </p>
                                   
                                   
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>transaction">
                               <i class="fa fa-money" aria-hidden="true"></i>
                                <span class="menu-title text-dark">&nbsp; Transaction</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>">
                                <i class="fa fa-clone text-dark"></i>
                                <span class="menu-title text-dark">&nbsp; Dashboard</span>

                            </a>
                        </li>
                       
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#cate" aria-expanded="false" aria-controls="cate">
                                   <i class="fa fa-tasks" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Catelog Management</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="cate">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>product_category/add">Add Category</a>
                                    </li> <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>product_category">Categories</a></li>
                                  
                                </ul>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
                                   <i class="fa fa-tasks" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Product Management</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="product">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>product/add">Add Product</a>
                                    </li> <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>product">Products</a></li>
                                  
                                </ul>
                            </div>
                        </li>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                                <i class="fa fa-google-wallet" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Wallet Management</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>wallet">Wallet</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>wallet/tambahtopup">Manual Top Up</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>wallet/tambahwithdraw">Manual Withdraw</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#drivers" aria-expanded="false" aria-controls="drivers">
                                <i class="fa fa-motorcycle" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Drivers  Managenent</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="drivers">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>driver">Drivers</a></li>
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>newregistration">New Registration Driver</a></li>
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>driver/tracking_driver">Tracking Driver</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>users">
                               <i class="fa fa-users" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">User management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tables2" aria-expanded="false" aria-controls="tables2">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>&nbsp;
                                    <span class="menu-title text-dark">Merchant management</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="tables2">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>categorymerchant">Merchant Category</a></li>
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>mitra">All Merchant</a></li>
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>mitra/newregmitra">New Registration Merchant</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="tables2">
                                <i class="fa fa-files-o" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Service management</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="service">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>services">Service</a></li>
                                    <li class="nav-item text-dark"> <a class="nav-link" href="<?= base_url(); ?>partnerjob">Vehicle Type</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>promocode">
                                <i class="fa fa-money" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Promo Code management</span>
                            </a>
                        </li>
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="<?= base_url(); ?>promoslider">-->
<!--                               <i class="fa fa-sliders" aria-hidden="true"></i>-->
<!--&nbsp;-->
<!--                                <span class="menu-title text-dark"> Slider management</span>-->
<!--                            </a>-->
<!--                        </li>-->
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="tables">
                                <i class="fa fa-sliders" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Slider management</span>
                                <span class="badge badge-white"><i class="mdi mdi-menu-down mdi-24px text-primary"></i></span>
                            </a>
                            <div class="collapse" id="slider">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>promoslider">Primary Slider</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>promoslider2">Secondary Slider</a></li>
                                    <!--<li class="nav-item"> <a class="nav-link" href="<?= base_url(); ?>wallet/tambahwithdraw">Manual Withdraw</a></li>-->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>news">
                                <i class="fa fa-files-o" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>sendemail">
                               <i class="fa fa-envelope" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Send Email</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>appnotification">
                                <i class="fa fa-comment" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">App Notification</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>appsettings">
                                <i class="fa fa-cog" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">App Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>profile">
                                <i class="fa fa-user" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Admin Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>login/logout">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
&nbsp;
                                <span class="menu-title text-dark">Logout</span>
                            </a>
                        </li>

                    </ul>
                </nav>