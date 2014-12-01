
<body class="overflow-hidden">
<!-- Overlay Div -->
<div id="overlay" class="transparent"></div>

<a href="" id="theme-setting-icon"><i class="fa fa-cog fa-lg"></i></a>
<div id="theme-setting">
    <div class="title">
        <strong class="no-margin">Skin Color</strong>
    </div>
    <div class="theme-box">
        <a class="theme-color" style="background:#323447" id="default"></a>
        <a class="theme-color" style="background:#efefef" id="skin-1"></a>
        <a class="theme-color" style="background:#a93922" id="skin-2"></a>
        <a class="theme-color" style="background:#3e6b96" id="skin-3"></a>
        <a class="theme-color" style="background:#635247" id="skin-4"></a>
        <a class="theme-color" style="background:#3a3a3a" id="skin-5"></a>
        <a class="theme-color" style="background:#495B6C" id="skin-6"></a>
    </div>
    <div class="title">
        <strong class="no-margin">Sidebar Menu</strong>
    </div>
    <div class="theme-box">
        <label class="label-checkbox">
            <input type="checkbox" checked id="fixedSidebar">
            <span class="custom-checkbox"></span>
            Fixed Sidebar
        </label>
    </div>
</div><!-- /theme-setting -->

<div id="wrapper" class="preload">
<div id="top-nav" class="skin-6 fixed">
    <div class="brand">
        <span>App</span>
        <span class="text-toggle"> Creator</span>
    </div><!-- /brand -->
    <button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <ul class="nav-notification clearfix">
        <li style="background-color: #9ad268;">
            <a href="<?=  base_url()?>create_app"  style="color: #fff; font-weight: bolder;">
                <strong>CREATE</strong>
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-lg"></i>
                <span class="notification-label bounceIn animation-delay4">7</span>
            </a>
            <ul class="dropdown-menu message dropdown-1">
                <li><a>You have 4 new unread messages</a></li>
                <li>
                    <a class="clearfix" href="#">
                        <img src="<?= base_url() ?>public/img/user1.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>John Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="clearfix" href="#">
                        <img src="<?= base_url() ?>public/img/user2.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Jane Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="clearfix" href="#">
                        <img src="<?= base_url() ?>public/img/user.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Bill Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="clearfix" href="#">
                        <img src="<?= base_url() ?>public/img/user2.jpg" alt="User Avatar">
                        <div class="detail">
                            <strong>Baby Doe</strong>
                            <p class="no-margin">
                                Lorem ipsum dolor sit amet...
                            </p>
                            <small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
                        </div>
                    </a>
                </li>
                <li><a href="inbox.html">View all messages</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-lg"></i>
                <span class="notification-label bounceIn animation-delay6">5</span>
            </a>
            <ul class="dropdown-menu notification dropdown-3">
                <li><a href="#">You have 5 new notifications</a></li>
                <li>
                    <a href="#">
                                    <span class="notification-icon bg-warning">
                                        <i class="fa fa-warning"></i>
                                    </span>
                        <span class="m-left-xs">Server #2 not responding.</span>
                        <span class="time text-muted">Just now</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                    <span class="notification-icon bg-success">
                                        <i class="fa fa-plus"></i>
                                    </span>
                        <span class="m-left-xs">New user registration.</span>
                        <span class="time text-muted">2m ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                    <span class="notification-icon bg-danger">
                                        <i class="fa fa-bolt"></i>
                                    </span>
                        <span class="m-left-xs">Application error.</span>
                        <span class="time text-muted">5m ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                    <span class="notification-icon bg-success">
                                        <i class="fa fa-usd"></i>
                                    </span>
                        <span class="m-left-xs">2 items sold.</span>
                        <span class="time text-muted">1hr ago</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                                    <span class="notification-icon bg-success">
                                        <i class="fa fa-plus"></i>
                                    </span>
                        <span class="m-left-xs">New user registration.</span>
                        <span class="time text-muted">1hr ago</span>
                    </a>
                </li>
                <li><a href="#">View all notifications</a></li>
            </ul>
        </li>
        <li class="profile dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <strong><?=$user->name?></strong>
                <span><i class="fa fa-chevron-down"></i></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="clearfix" href="#">
                        <img
                            <?php
                            if($user->photo == "")
                            {
                                echo 'src="'. base_url().'public/img/user1.jpg"';
                            }
                            else{
                                echo 'src="'.base_url().$user->photo.'"';
                            }?> alt="User Avatar"
                            >
                        <div class="detail">
                            <strong><?=$user->name?></strong>
                            <p class="grey"><?=$user->email?></p>
                        </div>
                    </a>
                </li>
                <li><a tabindex="-1" href="<?=  base_url()?>profile" class="main-link"><i class="fa fa-edit fa-lg"></i> Edit profile</a></li>
                <li><a tabindex="-1" href="#" class="theme-setting"><i class="fa fa-cog fa-lg"></i> Setting</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" class="main-link logoutConfirm_open" href="#logoutConfirm"><i class="fa fa-lock fa-lg"></i> Log out</a></li>
            </ul>
        </li>
    </ul>
</div><!-- /top-nav-->

<aside class="fixed skin-6">
    <div class="sidebar-inner scrollable-sidebar">
        <div class="size-toggle">
            <a class="btn btn-sm" id="sizeToggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
                <i class="fa fa-power-off"></i>
            </a>
        </div><!-- /size-toggle -->
        <div class="user-block clearfix">
            <img
                <?php
                if($user->photo == "")
                {
                    echo 'src="'. base_url().'public/img/user1.jpg"';
                }
                else{
                    echo 'src="'.base_url().$user->photo.'"';
                }?> alt="User Avatar"
                >
            <div class="detail">
                <strong><?=$user->name?></strong>
                <ul class="list-inline">
                    <li><a href="<?=  base_url()?>profile">Profile</a></li>
                    <li><a href="#" class="no-margin">Settings</a></li>
                </ul>
            </div>
        </div><!-- /user-block -->
        <div class="main-menu">
            <ul>
                <li>
                    <a href="<?=  base_url()?>">
                                    <span class="menu-icon">
                                        <i class="fa fa-desktop fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Dashboard
                                    </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="<?=  base_url()?>creator">
                                    <span class="menu-icon">
                                        <i class="fa fa-tasks fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Creator
                                    </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="<?=  base_url()?>timeline">
                                    <span class="menu-icon">
                                        <i class="fa fa-clock-o fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Timeline
                                    </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="<?=  base_url()?>gallery">
                                    <span class="menu-icon">
                                        <i class="fa fa-picture-o fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Gallery
                                    </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="<?=  base_url()?>inbox">
                                    <span class="menu-icon">
                                        <i class="fa fa-envelope fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Inbox
                                    </span>
                        <span class="badge badge-danger bounceIn animation-delay6">4</span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="<?=  base_url()?>blog">
                                    <span class="menu-icon">
                                        <i class="fa fa-edit fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Blog
                                    </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
                <li>
                    <a href="<?=  base_url()?>invoice">
                                    <span class="menu-icon">
                                        <i class="fa fa-book fa-lg"></i> 
                                    </span>
                                    <span class="text">
                                        Invoice
                                    </span>
                        <span class="menu-hover"></span>
                    </a>
                </li>
            </ul>
        </div><!-- /main-menu -->
    </div><!-- /sidebar-inner scrollable-sidebar -->
</aside>