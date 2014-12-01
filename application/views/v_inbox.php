<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>App Creator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?=base_url()?>public/css/font-awesome.min.css" rel="stylesheet">

    <!-- Pace -->
    <link href="<?=base_url()?>public/css/pace.css" rel="stylesheet">

    <!-- Endless -->
    <link href="<?=base_url()?>public/css/endless.min.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/endless-skin.css" rel="stylesheet">

</head>
<?php include 'navbar.php' ?>
<div id="main-container">
    <div class="row row-merge">
        <div class="col-sm-3 bg-primary custom-grid menu-grid">
            <button type="button" class="navbar-toggle" id="inboxMenuToggle" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="menu-header">
                Folder
                <a class="btn btn-sm pull-right" href="#newFolder" data-toggle="modal"><i class="fa fa-plus"></i></a>
            </div>
            <ul class="inbox-menu" id="inboxMenu">
                <li>
                    <a href="#">
                        <i class="fa fa-inbox fa-lg"></i>
                        <span class="m-left-xs">Inbox</span>
                        <span class="badge badge-success pull-right">19</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-star fa-lg"></i>
                        <span class="m-left-xs">Starred</span>
                        <span class="badge badge-warning pull-right">2</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bookmark-o fa-lg"></i><span class="m-left-sm">Important</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope fa-lg"></i>
                        <span class="m-left-xs">Sent Mail</span>
                        <span class="badge badge-danger pull-right">1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pencil fa-lg"></i><span class="m-left-xs">Drafts</span>
                    </a>
                </li>
                <li>
                    <a class="collapsed" href="#secondLevel" data-toggle="collapse">
                        More <span class="m-left-xs"><i class="fa fa-chevron-down"></i></span>
                    </a>
                    <ul class="collapse submenu" id="secondLevel">
                        <li><a href="#">Chats</a></li>
                        <li><a href="#">Spam<span class="badge badge-info pull-right">1</span></a></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.col -->
        <div class="col-sm-9">
            <div class="panel panel-default inbox-panel">
                <div class="panel-heading">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Search here...">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
                <div class="panel-body">
                    <label class="label-checkbox inline">
                        <input type="checkbox" id="chk-all">
                        <span class="custom-checkbox"></span>
                    </label>
                    <a class="btn btn-sm btn-danger"><i class="fa fa-plus"></i> Write Mail</a>
                    <a class="btn btn-sm btn-default"><i class="fa fa-trash-o"></i> Delete</a>

                    <div class="pull-right">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>			
                        <div class="btn-group" id="inboxFilter">
                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                All
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Read</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Starred</a></li>
                                <li><a href="#">Unstarred</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="starred"><i class="fa fa-star fa-lg"></i></span>
                        <span class="from">John Doe</span>		

                        <span class="detail">
                            <span class="label label-danger">Important</span>		
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
                        </span>
                        <span class="inline-block pull-right">
                            <span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
                            <span class="time">2:32 Am</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="starred"><i class="fa fa-star fa-lg"></i></span>
                        <span class="from">Jane Doe</span>		
                        <span class="detail">
                            <span class="label label-info">Work</span>		
                            Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.
                        </span>		
                        <span class="inline-block pull-right">
                            <span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
                            <span class="time">1:17 Am</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">My business</span>		
                        <span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">Yesterday</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">John Doe</span>		
                        <span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">Oct 10</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">Bill Doe</span>	
                        <span class="detail">
                            <span class="label label-danger">Important</span>												
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
                        </span>		
                        <span class="inline-block pull-right">
                            <span class="time">Oct 9</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">My friend</span>		
                        <span class="detail">
                            <span class="label label-warning">Private</span>												
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.
                        </span>		
                        <span class="inline-block pull-right">
                            <span class="time">Oct 9</span>			
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">John Doe</span>		
                        <span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>
                        <span class="inline-block pull-right">
                            <span class="attachment"><i class="fa fa-paperclip fa-lg"></i></span>							
                            <span class="time">Sep 27</span>		
                        </span>							
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="starred"><i class="fa fa-star fa-lg"></i></span>
                        <span class="from">Jane Doe</span>		
                        <span class="detail">Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">Sep 25</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">My business</span>		
                        <span class="detail">
                            <span class="label label-info">Work</span>		
                            Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        </span>		
                        <span class="inline-block pull-right">
                            <span class="time">Sep 1</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">John Doe</span>		
                        <span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>
                        <span class="inline-block pull-right">								
                            <span class="time">Aug 30</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="starred"><i class="fa fa-star fa-lg"></i></span>
                        <span class="from">Bill Doe</span>		
                        <span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">Aug 18</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">My friend</span>		
                        <span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">Aug 17</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="starred"><i class="fa fa-star fa-lg"></i></span>
                        <span class="from">Jane Doe</span>		
                        <span class="detail">Nunc vel lorem volutpat, placerat erat ut, pulvinar mi.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">July 13</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">My business</span>		
                        <span class="detail">Phasellus ac feugiat mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">July 13</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">John Doe</span>		
                        <span class="detail">Suspendisse tristique ullamcorper sapien id pulvinar.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">July 11</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">Bill Doe</span>		
                        <span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">July 8</span>		
                        </span>
                    </li>
                    <li class="list-group-item clearfix inbox-item">
                        <label class="label-checkbox inline">
                            <input type="checkbox" class="chk-item">
                            <span class="custom-checkbox"></span>
                        </label>
                        <span class="not-starred"><i class="fa fa-star-o fa-lg"></i></span>
                        <span class="from">My friend</span>		
                        <span class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis.</span>		
                        <span class="inline-block pull-right">
                            <span class="time">July 4</span>		
                        </span>
                    </li>
                </ul><!-- /list-group -->
                <div class="panel-footer clearfix">
                    <div class="pull-left">112 messages</div>
                    <div class="pull-right">
                        <span class="middle">Page 1 of 8 </span>
                        <ul class="pagination middle">
                            <li class="disabled"><a href="#"><i class="fa fa-step-backward"></i></a></li>
                            <li class="disabled"><a href="#"><i class="fa fa-caret-left large"></i></a></li>
                            <li><a href="#"><i class="fa fa-caret-right large"></i></a></li>
                            <li><a href="#"><i class="fa fa-step-forward"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /panel -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /main-container -->

<!--Modal-->
<div class="modal fade" id="newFolder">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Create new folder</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="folderName">Folder Name</label>
                        <input type="text" class="form-control input-sm" id="folderName" placeholder="Folder name here...">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
                <a href="#" class="btn btn-danger btn-sm">Save changes</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /wrapper -->

<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

<!-- Logout confirmation -->
<div class="custom-popup width-100" id="logoutConfirm">
    <div class="padding-md">
        <h4 class="m-top-none"> Do you want to logout?</h4>
    </div>

    <div class="text-center">
        <a class="btn btn-success m-right-sm" href="<?=base_url()?>welcome/logout">Logout</a>
        <a class="btn btn-danger logoutConfirm_close">Cancel</a>
    </div>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="<?=base_url()?>public/js/jquery-1.10.2.min.js"></script>

<!-- Bootstrap -->
<script src="<?=base_url()?>public/bootstrap/js/bootstrap.min.js"></script>

<!-- Modernizr -->
<script src='<?=base_url()?>public/js/modernizr.min.js'></script>

<!-- Pace -->
<script src='<?=base_url()?>public/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='<?=base_url()?>public/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='<?=base_url()?>public/js/jquery.slimscroll.min.js'></script>

<!-- Cookie -->
<script src='<?=base_url()?>public/js/jquery.cookie.min.js'></script>

<!-- Endless -->
<script src="<?=base_url()?>public/js/endless/endless.js"></script>

</body>
</html>
