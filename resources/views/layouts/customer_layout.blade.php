<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>Nazteknik OSGB</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css"/>
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{url('/assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{url('/assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{url('/assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-md">
<!-- BEGIN CONTAINER -->
<div class="wrapper" style="margin-top: 0">
    <!-- BEGIN HEADER -->
    <header class="page-header">
        <nav class="navbar mega-menu" role="navigation">
            <div class="container-fluid">

                <!-- BEGIN HEADER MENU -->
                <div style="float: left;margin-left:2rem "><a id="index" class="page-logo" href="{{url('/')}}">
                        <img src="{{url('/assets/img/logo_yazisiz.png')}}" alt="Logo"> </a></div>
                <div class="clearfix navbar-fixed-top nav-collapse collapse navbar-collapse navbar-responsive-collapse"
                     style="padding:0;margin: 0;">
                    <ul class="nav navbar-nav" style="float: right;">
                        <li class="dropdown dropdown-fw dropdown-fw-disabled open">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-home"></i> Anasayfa </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li>
                                    <a name="dashboard-buttons">
                                        <i class="icon-bar-chart"></i> Genel Bilgiler </a>
                                </li>
                            </ul>
                        </li>
                        <li id="selector-visits" class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-cursor"></i> Ziyaretler </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li>
                                    <a name="visit-buttons"
                                            {{--href="{{url('/projects/visits/content?type='.'Uzman Ziyareti')}}"--}}>
                                        <i class="icon-briefcase"></i> Uzman Ziyareti </a>
                                </li>
                                <li>
                                    <a name="visit-buttons"
                                            {{--href="{{url('/projects/visits/content?type='.'Doktor Ziyareti')}}"--}}>
                                        <i class="icon-chemistry"></i> Doktor Ziyareti </a>
                                </li>
                                <li>
                                    <a name="visit-buttons"
                                            {{--href="{{url('/projects/visits/content?type='.'Portföy Yön. Ziyareti')}}"--}}>
                                        <i class="icon-list"></i> Portföy Yön. Ziyareti </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a class="text-uppercase">
                                <i class="icon-bulb"></i> Projeler </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li>
                                    <a id="projects-button">
                                        <i class="icon-bulb"></i> Proje Detayları </a>
                                </li>
                            </ul>

                        </li>
                        {{--<li class="dropdown dropdown-fw dropdown-fw-disabled  ">
                            <a href="javascript:;" class="text-uppercase">
                                <i class="icon-briefcase"></i> Dosyalar </a>
                            <ul class="dropdown-menu dropdown-menu-fw">
                                <li>
                                    <a href="table_static_basic.html"> Proje Dosyaları </a>
                                </li>
                            </ul>
                        </li>--}}
                    </ul>
                </div>
                <!-- END HEADER MENU -->
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- END HEADER -->
    <div class="container-fluid">
        <div class="page-content">
            <!-- BEGIN BREADCRUMBS -->
        {{--<div class="breadcrumbs">
            <h1>Blank Page Layout</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li class="active">System</li>
            </ol>
            <!-- Sidebar Toggle Button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-sidebar">
                <span class="sr-only">Toggle navigation</span>
                <span class="toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
            </button>
            <!-- Sidebar Toggle Button -->
        </div>--}}
        <!-- END BREADCRUMBS -->
            <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
            <div class="page-content-container">
                <div class="page-content-row">
                    <!-- BEGIN PAGE SIDEBAR -->
                    <div class="page-sidebar">
                        <div class="portlet">
                            <div class="portlet-title" style="text-align: center"><h3>Kullanıcı Bilgileri</h3></div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-right: 20px;padding-left: 20px">
                                        <div class="mt-widget-3" style="box-shadow: 2px 2px 5px grey;">

                                            <div class="mt-head bg-green-seagreen">
                                                <div class="mt-element-ribbon bg-red-soft">
                                                    <div id="user-data-balance"
                                                         class="ribbon ribbon-border-hor ribbon-clip ribbon-color-danger ribbon-shadow uppercase">
                                                        <div class="ribbon-sub ribbon-clip"></div>
                                                                    Bakiyeniz:
                                                    </div>
                                                </div>
                                                <div class="mt-head-icon" style="padding-top: 50px">
                                                    <i class=" icon-user"
                                                       style="line-height: inherit;display: block"></i>
                                                </div>
                                                <div id="user-data-name" class="mt-head-desc">
                                                </div>
                                                <span id="user-data-client-name" class="mt-head-date">  </span>
                                                <div class="mt-head-button">
                                                    <button id="user-data-danger-level" type="button"
                                                            class="btn btn-block btn-outline white"
                                                            style="min-width: 12rem;pointer-events: none;margin-left: 2.5rem">
                                                        Tehlikesiz
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="mt-body-actions-icons">
                                                <div class="btn-group btn-group btn-group-justified">
                                                    <a name="Şikayet" class="btn user-card-tools">
                                                            <span class="mt-icon">
                                                                <i class="glyphicon glyphicon-bullhorn"></i>
                                                            </span>Şikayet</a>
                                                    <a name="Talep" href="" class="btn user-card-tools ">
                                                            <span class="mt-icon">
                                                                <i class="glyphicon glyphicon-plus"></i>
                                                            </span>Talep</a>
                                                    <a name="Öneri" href="" class="btn user-card-tools ">
                                                            <span class="mt-icon">
                                                                <i class="glyphicon glyphicon-envelope"></i>
                                                            </span>Öneri</a>
                                                    <a name="logout" class="btn user-card-tools ">
                                                            <span class="mt-icon">
                                                                <i class="glyphicon glyphicon-log-out"></i>
                                                            </span>Çıkış</a>

                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="mt-widget-3">
                                            <div class="mt-img-container" style="background-color: #ffffff">

                                            </div>
                                            <div class="mt-container bg-red-soft">
                                                <div class="mt-element-ribbon bg-red-soft">
                                                    <div class="ribbon ribbon-border-hor ribbon-clip ribbon-color-danger ribbon-shadow uppercase">
                                                        <div class="ribbon-sub ribbon-clip"></div>
                                                        Bakiye: 400TL
                                                    </div>
                                                </div>

                                                <div class="mt-head-title"> Burak Bircanoglu</div>


                                                <div class="mt-body-icons">
                                                    <h3>AZAL EMLAK OTO.İNŞ.SAN.TİC.LTD.ŞTİ
                                                    </h3>
                                                </div>


                                            </div>
                                        </div>--}}


                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <!-- Collect the nav links, forms, and other content for toggling -->


                        {{--<div class="mt-body-actions-icons">
                            <div class="btn-group btn-group btn-group-justified">
                                <a href="javascript:;" class="btn ">
                                                    <span class="mt-icon">
                                                        <i class="glyphicon glyphicon-align-justify"></i>
                                                    </span>RECORD </a>
                                <a href="javascript:;" class="btn ">
                                                    <span class="mt-icon">
                                                        <i class="glyphicon glyphicon-camera"></i>
                                                    </span>PHOTO </a>
                                <a href="javascript:;" class="btn ">
                                                    <span class="mt-icon">
                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                    </span>DATE </a>
                                <a href="javascript:;" class="btn ">
                                                    <span class="mt-icon">
                                                        <i class="glyphicon glyphicon-record"></i>
                                                    </span>RANC </a>
                            </div>
                        </div>--}}
                        {{-- <div class="mt-widget-4">
                             <div class="mt-img-container" style="background-color: #333333">

                             </div>
                             <div class="mt-container bg-red-flamingo">
                                 <div class="mt-head-title"> Burak Bircanoglu</div>
                                 <div class="mt-body-icons">

                                 </div>
                                 <div class="mt-element-ribbon bg-red-flamingo">
                                     <div class="ribbon ribbon-border-hor ribbon-clip ribbon-color-danger uppercase">
                                         <div class="ribbon-sub ribbon-clip"></div>
                                         Bakiye: 400TL
                                     </div>
                                 </div>

                             </div>
                         </div>--}}
                    </div>
                    <!-- END PAGE SIDEBAR -->
                    <div class="page-content-col">
                        <!-- BEGIN PAGE BASE CONTENT -->
                    {{--<div class="note note-info">
                        <p> A black page template with a minimal dependency assets to use as a base for any custom
                            page you create </p>
                    </div>--}}
                    @yield('content')
                    <!-- END PAGE BASE CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR CONTENT LAYOUT -->
        </div>
        <!-- BEGIN FOOTER -->
        <p class="copyright"> 2017 &copy; Tüm hakkı saklıdır.
            <a target="_blank" href="http://www.mobilevreni.com">Nazteknik OSGB</a> &nbsp;|&nbsp;
            <a href="http://www.nazteknikosgb.com/" target="_blank">Mobilevreni</a>
        </p>
        <a href="#index" class="go2top">
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END FOOTER -->
    </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                    <span class="badge badge-success">7</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-bell"></i> Alerts </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-info"></i> Notifications </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-speech"></i> Activities </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-settings"></i> Settings </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd"
                     data-wrapper-class="page-quick-sidebar-list">
                    <h3 class="list-heading">Staff</h3>
                    <ul class="media-list list-items">
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success">8</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Bob Nilson</h4>
                                <div class="media-heading-sub"> Project Manager</div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Nick Larson</h4>
                                <div class="media-heading-sub"> Art Director</div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-danger">3</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Deon Hubert</h4>
                                <div class="media-heading-sub"> CTO</div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Ella Wong</h4>
                                <div class="media-heading-sub"> CEO</div>
                            </div>
                        </li>
                    </ul>
                    <h3 class="list-heading">Customers</h3>
                    <ul class="media-list list-items">
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-warning">2</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Lara Kunis</h4>
                                <div class="media-heading-sub"> CEO, Loop Inc</div>
                                <div class="media-heading-small"> Last seen 03:10 AM</div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="label label-sm label-success">new</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Ernie Kyllonen</h4>
                                <div class="media-heading-sub"> Project Manager,
                                    <br> SmartBizz PTL
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Lisa Stone</h4>
                                <div class="media-heading-sub"> CTO, Keort Inc</div>
                                <div class="media-heading-small"> Last seen 13:10 PM</div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success">7</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Deon Portalatin</h4>
                                <div class="media-heading-sub"> CFO, H&D LTD</div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Irina Savikova</h4>
                                <div class="media-heading-sub"> CEO, Tizda Motors Inc</div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-danger">4</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Maria Gomez</h4>
                                <div class="media-heading-sub"> Manager, Infomatic Inc</div>
                                <div class="media-heading-small"> Last seen 03:10 AM</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="page-quick-sidebar-item">
                    <div class="page-quick-sidebar-chat-user">
                        <div class="page-quick-sidebar-nav">
                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                <i class="icon-arrow-left"></i>Back</a>
                        </div>
                        <div class="page-quick-sidebar-chat-user-messages">
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> When could you send me the report ? </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Its almost done. I will be sending it shortly </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Alright. Thanks! :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:16</span>
                                    <span class="body"> You are most welcome. Sorry for the delay. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> No probs. Just take your time :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Alright. I just emailed it to you. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Great! Thanks. Will check it right away. </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Please let me know if you have any comment. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                </div>
                            </div>
                        </div>
                        <div class="page-quick-sidebar-chat-user-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type a message here...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn green">
                                        <i class="icon-paper-clip"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                <div class="page-quick-sidebar-alerts-list">
                    <h3 class="list-heading">General</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now</div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-danger">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins</div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins</div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins</div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-warning"> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours</div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <h3 class="list-heading">System</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now</div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins</div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins</div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins</div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-default "> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours</div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                <div class="page-quick-sidebar-settings-list">
                    <h3 class="list-heading">General Settings</h3>
                    <ul class="list-items borderless">
                        <li> Enable Notifications
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li> Allow Tracking
                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="info"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li> Log Errors
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li> Auto Sumbit Issues
                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li> Enable SMS Alerts
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                    </ul>
                    <h3 class="list-heading">System Settings</h3>
                    <ul class="list-items borderless">
                        <li> Security Level
                            <select class="form-control input-inline input-sm input-small">
                                <option value="1">Normal</option>
                                <option value="2" selected>Medium</option>
                                <option value="e">High</option>
                            </select>
                        </li>
                        <li> Failed Email Attempts
                            <input class="form-control input-inline input-sm input-small" value="5"/></li>
                        <li> Secondary SMTP Port
                            <input class="form-control input-inline input-sm input-small" value="3560"/></li>
                        <li> Notify On System Error
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                        <li> Notify On SMTP Error
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning"
                                   data-on-text="ON" data-off-color="default" data-off-text="OFF"></li>
                    </ul>
                    <div class="inner-content">
                        <button class="btn btn-success">
                            <i class="icon-settings"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--modals-->
<div class="modal fade draggable-modal" id="commentModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Sizi Dinlemekten Mutluluk Duyarız...</h4>
            </div>
            <div class="modal-body">
                <textarea id="comment" style="width:100%;min-height:250px; "></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Vazgeç</button>
                <button id="postMailButton" type="button" class="btn green">Kaydet</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--modals-->
<!-- END QUICK SIDEBAR -->
<!--[if lt IE 9]>
<script src="{{url('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{url('/assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{url('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{url('/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>

<script src="{{url('/js/sweetalert2.min.js')}}" type="text/javascript"></script>
@yield('script')
<script type="text/javascript">
    var type = null;
    function startLoadingObj() {
        $.blockUI();
        $('.blockUI.blockMsg.blockPage').css('display', 'none')
        App.startPageLoading({animate: true});
        $('.bounce1,.bounce2,.bounce3').css('background', '#4bccd8')
    }
    function endLoadingObj() {
        window.setTimeout(function () {
            App.stopPageLoading();
            $.unblockUI();
        }, 1000);
    }
    $(document).ajaxStart(function () {
        startLoadingObj();
    });
    $(document).ajaxComplete(function () {
        endLoadingObj();
    });
    $(document).on('ready', function () {
        $.ajax({
            url: "{{url('/users/profile/content')}}",
            type: "POST",
            data: {
                "_token": "{{csrf_token()}}",
            },
            success: function (data, textStatus, jqXHR) {

                if (data.result) {
                    console.log(data)
                    $('#user-data-balance').html("<div class='ribbon-sub ribbon-clip' ></div>Bakiyeniz: " + data.data.balance);
                    $('#user-data-name').html(data.data.user_name);
                    $('#user-data-client-name').html(data.data.client_name);
                    $('#user-data-danger-level').html(data.data.tehlike_sinif);
                    $('#user-data-danger-level').css('background-color', '#E35B5A');
                }

            }
        });
        $("a[name='visit-buttons']").on('click', function () {

            var type = $(this).text();
            type = type.trim();
            startLoadingObj();
            $('#frame').attr('src', "{{url('/projects/visits/content?type=')}}" + type);
        })
        $("a[name='dashboard-buttons']").on('click', function () {
            startLoadingObj();
            $('#frame').attr('src', "{{url('/dashboard/content')}}");
        })
        $('#projects-button').on("click", function () {
            startLoadingObj();
            $('#frame').attr('src', "{{url('/projects/content')}}");
        });

        $('.btn.user-card-tools').on('click', function () {
            event.preventDefault();
            if (this.name == "logout") {
                //logout
                $.post("{{url('/session/logout')}}", {
                    _token: "{{csrf_token()}}",
                }, function (data, status) {
                    if (data.result) {
                        window.location.reload();
                    }
                })
            } else {
                type = this.name;
                $('#commentModal').modal('show');
                if (type == 'Talep') {
                    $('#comment').attr('placeholder', 'Talebiniz...');
                }
                $('#comment').attr('placeholder', type + 'iniz...');
            }
        });

        $('#postMailButton').on('click', function () {
            $.ajax({
                url: "https://mobilevreni.com/service/naz_teknik_router.php",
                type: "POST",
                data: JSON.stringify({
                    subject: "Nazteknik Web " + type + " Maili",
                    contactid: contactid,
                    token: token,
                    comment: $('#comment').val(),
                }),
                contentType: "application/json; charset=utf-8",
                success: function (data, textStatus, jqXHR) {
                    if (data.result) {
                        setTimeout(function () {
                            swal({
                                title: 'Teşekkürler!',
                                text: "En kısa sürede dönüş yapılacaktır.",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Tamam'
                            }).then(function () {
                            })
                        }, 1000);
                        $('#commentModal').modal('hide');
                    }
                }
            })
        })
    });
</script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>