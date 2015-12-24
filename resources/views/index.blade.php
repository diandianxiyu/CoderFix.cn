<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>CoderFix.cn</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}} " type="text/css"  rel="stylesheet" >
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/global/plugins/morris/morris.css')}} " type="text/css"  rel="stylesheet" >
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="{{ asset('assets/admin/pages/css/tasks.css')}} "  rel="stylesheet"  type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="{{ asset('assets/global/css/components-md.css')}} "  rel="stylesheet"  id="style_components"  type="text/css">
    <link href="{{ asset('assets/global/css/plugins-md.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/admin/layout3/css/layout.css')}} " type="text/css"  rel="stylesheet" >
    <link href="{{ asset('assets/admin/layout3/css/themes/default.css')}} " type="text/css" id="style_color"  rel="stylesheet" >
    <link href="{{ asset('assets/admin/layout3/css/custom.css')}} " type="text/css"  rel="stylesheet" >
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('assets/global/css/csshake.min.css')}} " type="text/css"  rel="stylesheet" >
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md">
<a href="https://github.com/diandianxiyu/SimpleWebPage"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>

<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo shake">
                <a href="index.html"><img src="{{ asset("assets/admin/layout3/img/logo-default.png")}} " alt="logo" class="logo-default"></a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->

        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                            Features <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 710px">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>eCommerce</h3>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_index.html" class="iconify">
                                                        <i class="icon-home"></i>
                                                        eCommerce </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders.html" class="iconify">
                                                        <i class="icon-basket"></i>
                                                        Manage Orders </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders_view.html" class="iconify">
                                                        <i class="icon-tag"></i>
                                                        Order View </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products.html" class="iconify">
                                                        <i class="icon-handbag"></i>
                                                        Manage Products </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products_edit.html" class="iconify">
                                                        <i class="icon-pencil"></i>
                                                        Product Edit </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Layouts</h3>
                                                </li>
                                                <li>
                                                    <a href="layout_fluid.html" class="iconify">
                                                        <i class="icon-cursor-move"></i>
                                                        Fluid Layout </a>
                                                </li>
                                                <li>
                                                    <a href="layout_mega_menu_fixed.html" class="iconify">
                                                        <i class="icon-pin"></i>
                                                        Fixed Mega Menu </a>
                                                </li>
                                                <li>
                                                    <a href="layout_top_bar_fixed.html" class="iconify">
                                                        <i class="icon-bar-chart"></i>
                                                        Fixed Top Bar </a>
                                                </li>
                                                <li>
                                                    <a href="layout_light_header.html" class="iconify">
                                                        <i class="icon-paper-plane"></i>
                                                        Light Header Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="layout_blank_page.html" class="iconify">
                                                        <i class="icon-doc"></i>
                                                        Blank Page Layout </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>More Layouts</h3>
                                                </li>
                                                <li>
                                                    <a href="layout_click_dropdowns.html" class="iconify">
                                                        <i class="icon-speech"></i>
                                                        Click vs. Hover Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="layout_fontawesome_icons.html" class="iconify">
                                                        <i class="icon-link"></i>
                                                        Layout with Fontawesome </a>
                                                </li>
                                                <li>
                                                    <a href="layout_glyphicons.html" class="iconify">
                                                        <i class="icon-settings"></i>
                                                        Layout with Glyphicon </a>
                                                </li>
                                                <li>
                                                    <a href="layout_language_bar.html" class="iconify">
                                                        <i class="icon-globe"></i>
                                                        Language Switch Bar </a>
                                                </li>
                                                <li>
                                                    <a href="layout_disabled_menu.html" class="iconify">
                                                        <i class=" icon-lock"></i>
                                                        Disabled Menu Links </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                            UI Components <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>UI Components</h3>
                                                </li>
                                                <li>
                                                    <a href="ui_general.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        General </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Buttons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_icons.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Font Icons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_colors.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Flat UI Colors </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Typography </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs_accordions_navs.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Tabs, Accordions & Navs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Tree View </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_1.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Page Progress Bar <span class="badge badge-roundless badge-warning">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="ui_blockui.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Block UI </a>
                                                </li>
                                                <li>
                                                    <a href="ui_bootstrap_growl.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Bootstrap Growl Notifications <span class="badge badge-roundless badge-warning">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="ui_notific8.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Notific8 Notifications </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>More UI Components</h3>
                                                </li>
                                                <li>
                                                    <a href="ui_toastr.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Toastr Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_alert_dialog_api.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Alerts & Dialogs API <span class="badge badge-roundless badge-danger">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="ui_session_timeout.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Session Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_idle_timeout.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        User Idle Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_modals.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_extended_modals.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Extended Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tiles.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Tiles </a>
                                                </li>
                                                <li>
                                                    <a href="ui_datepaginator.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Date Paginator </a>
                                                </li>
                                                <li>
                                                    <a href="ui_nestable.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Nestable List </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Form Stuff</h3>
                                                </li>
                                                <li>
                                                    <a href="form_controls_md.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Material Design<br>
                                                        Form Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_controls.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Bootstrap<br>
                                                        Form Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_icheck.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        iCheck Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_layouts.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Layouts </a>
                                                </li>
                                                <li>
                                                    <a href="form_editable.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form X-editable <span class="badge badge-roundless badge-success">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="form_wizard.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Wizard </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Validation </a>
                                                </li>
                                                <li>
                                                    <a href="form_image_crop.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Image Cropping </a>
                                                </li>
                                                <li>
                                                    <a href="form_fileupload.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Multiple File Upload </a>
                                                </li>
                                                <li>
                                                    <a href="form_dropzone.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Dropzone File Upload </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Form Components</h3>
                                                </li>
                                                <li>
                                                    <a href="components_pickers.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Date & Time Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_context_menu.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Context Menu </a>
                                                </li>
                                                <li>
                                                    <a href="components_dropdowns.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Custom Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Widgets & Tools </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Widgets & Tools 2 </a>
                                                </li>
                                                <li>
                                                    <a href="components_editors.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Markdown & WYSIWYG Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_ion_sliders.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Ion Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_noui_sliders.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        NoUI Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_jqueryui_sliders.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        jQuery UI Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_knob_dials.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Knob Circle Dials </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            Extra <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-briefcase"></i>
                                    Data Tables </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="table_basic.html">
                                            Basic Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_tree.html">
                                            Tree Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_responsive.html">
                                            Responsive Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_managed.html">
                                            Managed Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_editable.html">
                                            Editable Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_advanced.html">
                                            Advanced Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_ajax.html">
                                            Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-wallet"></i>
                                    Portlets </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="portlet_general.html">
                                            General Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general2.html">
                                            New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general3.html">
                                            New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_ajax.html">
                                            Ajax Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_draggable.html">
                                            Draggable Portlets </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-bar-chart"></i>
                                    Charts </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="charts_amcharts.html">
                                            amChart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flotcharts.html">
                                            Flotchart </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-pointer"></i>
                                    Maps </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="maps_google.html">
                                            Google Maps </a>
                                    </li>
                                    <li class=" ">
                                        <a href="maps_vector.html">
                                            Vector Maps </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-puzzle"></i>
                                    Multi Level </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-settings"></i>
                                            Item 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-user"></i>
                                            Item 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-globe"></i>
                                            Item 3 </a>
                                    </li>
                                    <li class=" dropdown-submenu">
                                        <a href="#">
                                            <i class="icon-folder"></i>
                                            Sub Items </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 2 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 3 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 4 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-share"></i>
                                            Item 4 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-bar-chart"></i>
                                            Item 5 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                            Pages <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>User Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page_timeline.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        New Timeline <span class="badge badge-warning">2</span></a>
                                                </li>
                                                <li>
                                                    <a href="extra_profile.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        New User Profile <span class="badge badge-success badge-roundless">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_todo.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Todo & Tasks <span class="badge badge-danger">4</span></a>
                                                </li>
                                                <li>
                                                    <a href="inbox.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        User Inbox <span class="badge badge-success">4</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_calendar.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        User Calendar <span class="badge badge-warning">14</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_timeline_old.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Old Timeline <span class="badge badge-warning">2</span></a>
                                                </li>
                                                <li>
                                                    <a href="extra_profile_old.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Old User Profile </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>General Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="extra_faq.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        FAQ Page </a>
                                                </li>
                                                <li>
                                                    <a href="page_portfolio.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Portfolio </a>
                                                </li>
                                                <li>
                                                    <a href="page_timeline.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Timeline <span class="badge badge-info">4</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_coming_soon.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Coming Soon </a>
                                                </li>
                                                <li>
                                                    <a href="extra_invoice.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Invoice </a>
                                                </li>
                                                <li>
                                                    <a href="page_blog.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Blog </a>
                                                </li>
                                                <li>
                                                    <a href="page_blog_item.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Blog Post </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Custom Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page_news.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        News <span class="badge badge-success">9</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_news_item.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        News View </a>
                                                </li>
                                                <li>
                                                    <a href="page_about.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        About Us </a>
                                                </li>
                                                <li>
                                                    <a href="page_contact.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Contact Us </a>
                                                </li>
                                                <li>
                                                    <a href="extra_search.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Search Results </a>
                                                </li>
                                                <li>
                                                    <a href="extra_pricing_table.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Pricing Tables </a>
                                                </li>
                                                <li>
                                                    <a href="login.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 1 </a>
                                                </li>
                                                <li>
                                                    <a href="login_2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 2 </a>
                                                </li>
                                                <li>
                                                    <a href="login_3.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 3 </a>
                                                </li>
                                                <li>
                                                    <a href="login_soft.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 4 </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Miscellaneous</h3>
                                                </li>
                                                <li>
                                                    <a href="extra_lock.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Lock Screen 1 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_lock2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Lock Screen 2 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_404_option1.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        404 Page Option 1 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_404_option2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        404 Page Option 2 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_404_option3.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        404 Page Option 3 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_500_option1.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        500 Page Option 1 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_500_option2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        500 Page Option 2 </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="angularjs" target="_blank" class="tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="AngularJS version demo">
                            AngularJS Version </a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Dashboard <small>statistics & reports</small></h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">Home</a><i class="fa fa-circle"></i>
                </li>
                <li class="active">
                    Dashboard
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row margin-top-10">
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject theme-font bold uppercase">Sales Summary</span>
                                <span class="caption-helper hide">weekly stats...</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row list-separated">
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="font-grey-mint font-sm">
                                        Total Sales
                                    </div>
                                    <div class="uppercase font-hg font-red-flamingo">
                                        13,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="font-grey-mint font-sm">
                                        Revenue
                                    </div>
                                    <div class="uppercase font-hg theme-font">
                                        4,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="font-grey-mint font-sm">
                                        Expenses
                                    </div>
                                    <div class="uppercase font-hg font-purple">
                                        11,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="font-grey-mint font-sm">
                                        Growth
                                    </div>
                                    <div class="uppercase font-hg font-blue-sharp">
                                        9,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-separated list-inline-xs hide">
                                <li>
                                    <div class="font-grey-mint font-sm">
                                        Total Sales
                                    </div>
                                    <div class="uppercase font-hg font-red-flamingo">
                                        13,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </li>
                                <li>
                                </li>
                                <li class="border">
                                    <div class="font-grey-mint font-sm">
                                        Revenue
                                    </div>
                                    <div class="uppercase font-hg theme-font">
                                        4,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <div class="font-grey-mint font-sm">
                                        Expenses
                                    </div>
                                    <div class="uppercase font-hg font-purple">
                                        11,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <div class="font-grey-mint font-sm">
                                        Growth
                                    </div>
                                    <div class="uppercase font-hg font-blue-sharp">
                                        9,760 <span class="font-lg font-grey-mint">$</span>
                                    </div>
                                </li>
                            </ul>
                            <div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 260px">
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject theme-font bold uppercase">Member Activity</span>
                                <span class="caption-helper hide">weekly stats...</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                    <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row number-stats margin-bottom-30">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stat-left">
                                        <div class="stat-chart">
                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                            <div id="sparkline_bar"></div>
                                        </div>
                                        <div class="stat-number">
                                            <div class="title">
                                                Total
                                            </div>
                                            <div class="number">
                                                2460
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="stat-right">
                                        <div class="stat-chart">
                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                            <div id="sparkline_bar2"></div>
                                        </div>
                                        <div class="stat-number">
                                            <div class="title">
                                                New
                                            </div>
                                            <div class="number">
                                                719
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                    <tr class="uppercase">
                                        <th colspan="2">
                                            MEMBER
                                        </th>
                                        <th>
                                            Earnings
                                        </th>
                                        <th>
                                            CASES
                                        </th>
                                        <th>
                                            CLOSED
                                        </th>
                                        <th>
                                            RATE
                                        </th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Brain</a>
                                        </td>
                                        <td>
                                            $345
                                        </td>
                                        <td>
                                            45
                                        </td>
                                        <td>
                                            124
                                        </td>
                                        <td>
                                            <span class="bold theme-font">80%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="../../assets/admin/layout3/img/avatar5.jpg">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Nick</a>
                                        </td>
                                        <td>
                                            $560
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            24
                                        </td>
                                        <td>
                                            <span class="bold theme-font">67%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Tim</a>
                                        </td>
                                        <td>
                                            $1,345
                                        </td>
                                        <td>
                                            450
                                        </td>
                                        <td>
                                            46
                                        </td>
                                        <td>
                                            <span class="bold theme-font">98%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Tom</a>
                                        </td>
                                        <td>
                                            $645
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            89
                                        </td>
                                        <td>
                                            <span class="bold theme-font">58%</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light tasks-widget">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject theme-font bold uppercase">TASKS</span>
                                <span class="caption-helper">16 pending</span>
                            </div>
                            <div class="inputs">
                                <div class="portlet-input input-small input-inline">
                                    <div class="input-icon right">
                                        <i class="icon-magnifier"></i>
                                        <input type="text" class="form-control form-control-solid" placeholder="search...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="task-content">
                                <div class="scroller" style="height: 282px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                    <!-- START TASK LIST -->
                                    <ul class="task-list">
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="hidden" value="1" name="test"/>
                                                <input type="checkbox" class="liChild" value="2" name="test"/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Present 2013 Year IPO Statistics at Board Meeting </span>
                                                <span class="label label-sm label-success">Company</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Hold An Interview for Marketing Manager Position </span>
                                                <span class="label label-sm label-danger">Marketing</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												AirAsia Intranet System Project Internal Meeting </span>
                                                <span class="label label-sm label-success">AirAsia</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Technical Management Meeting </span>
                                                <span class="label label-sm label-warning">Company</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Kick-off Company CRM Mobile App Development </span>
                                                <span class="label label-sm label-info">Internal Products</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Prepare Commercial Offer For SmartVision Website Rewamp </span>
                                                <span class="label label-sm label-danger">SmartVision</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Sign-Off The Comercial Agreement With AutoSmart </span>
                                                <span class="label label-sm label-default">AutoSmart</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												Company Staff Meeting </span>
                                                <span class="label label-sm label-success">Cruise</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="last-line">
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="liChild" value=""/>
                                            </div>
                                            <div class="task-title">
												<span class="task-title-sp">
												KeenThemes Investment Discussion </span>
                                                <span class="label label-sm label-warning">KeenThemes </span>
                                            </div>
                                            <div class="task-config">
                                                <div class="task-config-btn btn-group">
                                                    <a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                        <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-check"></i> Complete </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-pencil"></i> Edit </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-trash-o"></i> Cancel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- END START TASK LIST -->
                                </div>
                            </div>
                            <div class="task-footer">
                                <div class="btn-arrow-link pull-right">
                                    <a href="javascript:;">See All Tasks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject theme-font bold uppercase">Customer Support</span>
                                <span class="caption-helper">45 pending</span>
                            </div>
                            <div class="inputs">
                                <div class="portlet-input input-inline input-small ">
                                    <div class="input-icon right">
                                        <i class="icon-magnifier"></i>
                                        <input type="text" class="form-control form-control-solid" placeholder="search...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                <div class="general-item-list">
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                <span class="item-label">3 hrs ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-success"></span> Open</span>
                                        </div>
                                        <div class="item-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar3.jpg">
                                                <a href="" class="item-name primary-link">Mark</a>
                                                <span class="item-label">5 hrs ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-warning"></span> Pending</span>
                                        </div>
                                        <div class="item-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                <span class="item-label">8 hrs ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-primary"></span> Closed</span>
                                        </div>
                                        <div class="item-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
                                                <a href="" class="item-name primary-link">Nick Larson</a>
                                                <span class="item-label">12 hrs ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-danger"></span> Pending</span>
                                        </div>
                                        <div class="item-body">
                                            Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar9.jpg">
                                                <a href="" class="item-name primary-link">Richard Stone</a>
                                                <span class="item-label">2 days ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-danger"></span> Open</span>
                                        </div>
                                        <div class="item-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar8.jpg">
                                                <a href="" class="item-name primary-link">Dan</a>
                                                <span class="item-label">3 days ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-warning"></span> Pending</span>
                                        </div>
                                        <div class="item-body">
                                            Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-head">
                                            <div class="item-details">
                                                <img class="item-pic" src="../../assets/admin/layout3/img/avatar2.jpg">
                                                <a href="" class="item-name primary-link">Larry</a>
                                                <span class="item-label">4 hrs ago</span>
                                            </div>
                                            <span class="item-status"><span class="badge badge-empty badge-success"></span> Open</span>
                                        </div>
                                        <div class="item-body">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN REGIONAL STATS PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject theme-font bold uppercase">Regional Stats</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;">
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="region_statistics_loading">
                                <img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
                            </div>
                            <div id="region_statistics_content" class="display-none">
                                <div class="btn-toolbar margin-bottom-10">
                                    <div class="btn-group btn-group-circle" data-toggle="buttons">
                                        <a href="" class="btn grey-salsa btn-sm active">
                                            Users </a>
                                        <a href="" class="btn grey-salsa btn-sm">
                                            Orders </a>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            Select Region <span class="fa fa-angle-down">
										</span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" id="regional_stat_world">
                                                    World </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" id="regional_stat_usa">
                                                    USA </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" id="regional_stat_europe">
                                                    Europe </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" id="regional_stat_russia">
                                                    Russia </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" id="regional_stat_germany">
                                                    Germany </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="vmap_world" class="vmaps display-none">
                                </div>
                                <div id="vmap_usa" class="vmaps display-none">
                                </div>
                                <div id="vmap_europe" class="vmaps display-none">
                                </div>
                                <div id="vmap_russia" class="vmaps display-none">
                                </div>
                                <div id="vmap_germany" class="vmaps display-none">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END REGIONAL STATS PORTLET-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject theme-font bold uppercase">Feeds</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">
                                        System </a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">
                                        Activities </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <!--BEGIN TABS-->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                        <ul class="feeds">
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                You have 4 pending tasks. <span class="label label-sm label-info">
																Take action <i class="fa fa-share"></i>
																</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New version v1.4 just lunched!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            20 mins
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-bolt"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Database server #12 overloaded. Please fix the issue.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        24 mins
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New order received and pending for process.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        30 mins
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New payment refund and pending approval.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        40 mins
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-warning">
                                                                <i class="fa fa-plus"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New member registered. Pending approval.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        1.5 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
																Overdue </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        2 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Prod01 database server is overloaded 90%.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        3 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-warning">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New group created. Pending manager review.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        5 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Order payment failed.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        18 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New application received.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        21 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Dev90 web server restarted. Pending overall system check.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        22 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New member registered. Pending approval
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        21 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                L45 Network failure. Schedule maintenance.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        22 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Order canceled with failed payment.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        21 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Web-A2 clound instance created. Schedule full scan.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        22 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Member canceled. Schedule account review.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        21 hours
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New order received. Please take care of it.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        22 hours
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_1_2">
                                    <div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                        <ul class="feeds">
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New order received
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            10 mins
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-bolt"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
																Take action <i class="fa fa-share"></i>
																</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        24 mins
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc">
                                                                    New user registered
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date">
                                                            Just now
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END TABS-->
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>

        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-login"></i></a>
        <div class="page-quick-sidebar-wrapper">
            <div class="page-quick-sidebar">
                <div class="nav-justified">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#quick_sidebar_tab_1" data-toggle="tab">
                                Users <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#quick_sidebar_tab_2" data-toggle="tab">
                                Alerts <span class="badge badge-success">7</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                More<i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">8</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub">
                                                Project Manager
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub">
                                                Art Director
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub">
                                                CTO
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Wong</h4>
                                            <div class="media-heading-sub">
                                                CEO
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Customers</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">2</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lara Kunis</h4>
                                            <div class="media-heading-sub">
                                                CEO, Loop Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 03:10 AM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="label label-sm label-success">new</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub">
                                                Project Manager,<br>
                                                SmartBizz PTL
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lisa Stone</h4>
                                            <div class="media-heading-sub">
                                                CTO, Keort Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 13:10 PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">7</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub">
                                                CFO, H&D LTD
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub">
                                                CEO, Tizda Motors Inc
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Maria Gomez</h4>
                                            <div class="media-heading-sub">
                                                Manager, Infomatic Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 03:10 AM
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
												<span class="body">
												When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
												<span class="body">
												Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
												<span class="body">
												Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
												<span class="body">
												You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
												<span class="body">
												No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
												<span class="body">
												Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
												<span class="body">
												Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
												<span class="body">
												Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
												<span class="body">
												Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
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
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        New order received with <span class="label label-sm label-danger">
														Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                30 mins
                                            </div>
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
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
														Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                2 hours
                                            </div>
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
                                                        <div class="desc">
                                                            IPO Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
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
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                30 mins
                                            </div>
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
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
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
                                                    <div class="desc">
                                                        Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                2 hours
                                            </div>
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
                                                        <div class="desc">
                                                            IPO Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
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
                                    <li>
                                        Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                </ul>
                                <h3 class="list-heading">System Settings</h3>
                                <ul class="list-items borderless">
                                    <li>
                                        Security Level
                                        <select class="form-control input-inline input-sm input-small">
                                            <option value="1">Normal</option>
                                            <option value="2" selected>Medium</option>
                                            <option value="e">High</option>
                                        </select>
                                    </li>
                                    <li>
                                        Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                    </li>
                                    <li>
                                        Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                    </li>
                                    <li>
                                        Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                </ul>
                                <div class="inner-content">
                                    <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>关于</h2>
                <p>
                    PHP开发工程师,独立开发者
                </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>关注我</h2>
                <ul class="social-icons">

                    <li>
                        <a href="https://github.com/diandianxiyu" data-original-title="github" class="github" target="_blank"></a>
                    </li>
                    <li>
                        <a href="http://blog.coderfix.cn/" data-original-title="wordpress" class="wordpress" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>联系</h2>
                <address class="margin-bottom-40">
                    >
                    Email: <a href="mailto: 316708138@qq.com">316708138@qq.com</a>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="container">
        2015 &copy; CoderFix.cn
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('assets/global/plugins/jquery.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js')}} " type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.cokie.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}} " type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}} " type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{ asset('assets/global/plugins/morris/morris.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/morris/raphael-min.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js')}} " type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/metronic.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout3/scripts/layout.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout2/scripts/quick-sidebar.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout3/scripts/demo.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/index3.js')}} " type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/tasks.js')}} " type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo(theme settings page)
        QuickSidebar.init(); // init quick sidebar
        Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>