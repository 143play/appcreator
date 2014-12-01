
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

    <!-- Color box -->
    <link href="<?=base_url()?>public/css/colorbox/colorbox.css" rel="stylesheet">

    <!-- Morris -->
    <link href="<?=base_url()?>public/css/morris.css" rel="stylesheet"/>

    <!-- Endless -->
    <link href="<?=base_url()?>public/css/endless.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/endless-skin.css" rel="stylesheet">

</head>
<?php include 'navbar.php' ?>

<div id="main-container">
    <div id="breadcrumb">
        <ul class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html"> Home</a></li>
            <li class="active">Dashboard</li>	 
        </ul>
    </div><!-- /breadcrumb-->
    <div class="main-header clearfix">
        <div class="page-title">
            <h3 class="no-margin">Dashboard</h3>
            <span>Welcome back Mr.John Doe</span>
        </div><!-- /page-title -->

        <ul class="page-stats">
            <li>
                <div class="value">
                    <span>New visits</span>
                    <h4 id="currentVisitor">4256</h4>
                </div>
                <span id="visits" class="sparkline"></span>
            </li>
            <li>
                <div class="value">
                    <span>My balance</span>
                    <h4>$<strong id="currentBalance">32153</strong></h4>
                </div>
                <span id="balances" class="sparkline"></span>
            </li>
        </ul><!-- /page-stats -->
    </div><!-- /main-header -->

    <div class="padding-md">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding-bottom: 0px;">
                        <div class="panel-stat3 bg-danger">
                            <h2 class="m-top-none" id="userCount">362</h2>
                            <h5>Registered users</h5>
                            <i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">5% Higher than last week</span>
                            <div class="stat-icon">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="refresh-button">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="loading-overlay">
                                <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
                            </div>
                        </div>
                        <div class="panel-stat3 bg-success">
                            <h2 class="m-top-none" id="visitorCount">7214</h2>
                            <h5>Total Visitors</h5>
                            <i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">15% Higher than last week</span>
                            <div class="stat-icon">
                                <i class="fa fa-bar-chart-o fa-3x"></i>
                            </div>
                            <div class="refresh-button">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="loading-overlay">
                                <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
                            </div>
                        </div>
                        <div class="panel-stat3 bg-danger">
                            <h2 class="m-top-none" id="userCount">362</h2>
                            <h5>Logged In users</h5>
                            <i class="fa fa-arrow-circle-o-up fa-lg"></i><span class="m-left-xs">5% Higher than last week</span>
                            <div class="stat-icon">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="refresh-button">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="loading-overlay">
                                <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
                            </div>
                        </div>
                    </div></div>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body" style="padding-bottom: 0px;">
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-warning">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-magic"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">58</div>
                                        <div class="title">Total Apps</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-info">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-cogs"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">58</div>
                                        <div class="title">New Apps</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-warning">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">41</div>
                                        <div class="title">Sold Apps</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-info">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-thumbs-up"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">41</div>
                                        <div class="title">Total Likes</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-warning">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-comments"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">41</div>
                                        <div class="title">Total Comments</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-info">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">41</div>
                                        <div class="title">Blog</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-warning">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">58</div>
                                        <div class="title">FAQ</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-info">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">58</div>
                                        <div class="title">Invoice</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default panel-stat2 bg-warning">
                                <div class="panel-body">
                                    <span class="stat-icon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <div class="pull-right text-right">
                                        <div class="value">41</div>
                                        <div class="title">Email</div>
                                    </div>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.col -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel-->
            </div><!-- /.col -->
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="donutChart" style="height: 250px;"></div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            IN-STORE Sales
                                            <span class="badge badge-success pull-right">75%</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
                                    </div>
                                </div>
                            </div><!-- panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            DOWMLOAD Sales
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
                                    </div>
                                </div>
                            </div><!-- panel -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            MAIL-ORDER Sales 
                                            <span class="badge badge-danger pull-right"><i class="fa fa-arrow-down"></i> 3%</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
                                    </div>
                                </div>
                            </div><!-- panel -->
                        </div><!-- panel-group -->
                    </div>
                </div><!-- /panel -->
                <div class="panel bg-success fadeInDown animation-delay5">
                    <div class="panel-body">
                        <div id="barChart" style="height: 150px;"></div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4 class="no-margin">Total Earnings</h4>
                            </div><!-- /.col -->
                            <div class="col-xs-6 text-right">
                                <h4 class="no-margin">$17,531</h4>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                </div><!-- /panel -->
            </div><!-- /.col -->
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-lg"></i> Website Traffic
                        <ul class="tool-bar">
                            <li><a href="#" class="refresh-widget" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a></li>
                        </ul>
                    </div>
                    <div class="panel-body" id="trafficWidget">
                        <div id="placeholder" class="graph" style="height:250px"></div>
                    </div>
                    <div class="panel-footer">
                        <div class="row row-merge">
                            <div class="col-xs-3 text-center border-right">
                                <h4 class="no-margin">1232</h4>
                                <small class="text-muted">Visitors</small>
                            </div>
                            <div class="col-xs-3 text-center border-right">
                                <h4 class="no-margin">5421</h4>
                                <small class="text-muted">Orders</small>
                            </div>
                            <div class="col-xs-3 text-center border-right">
                                <h4 class="no-margin">3021</h4>
                                <small class="text-muted">Tickets</small>
                            </div>
                            <div class="col-xs-3 text-center">
                                <h4 class="no-margin">7098</h4>
                                <small class="text-muted">Customers</small>
                            </div>
                        </div><!-- ./row -->
                    </div>
                    <div class="loading-overlay">
                        <i class="loading-icon fa fa-refresh fa-spin fa-lg"></i>
                    </div>
                </div><!-- /panel -->
                <div class="panel bg-info fadeInDown animation-delay4">
                    <div class="panel-body">
                        <div id="lineChart" style="height: 150px;"></div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-4">
                                Sales in June
                                <strong class="block">$664</strong>
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                Sales in July
                                <strong class="block">$731</strong>
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                Sales in August
                                <strong class="block">$912</strong>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                </div><!-- /panel -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.padding-md -->
</div><!-- /main-container -->
<!-- Footer
================================================== -->
<footer>
    <div class="row">
        <div class="col-sm-6">
            <span class="footer-brand">
                <strong class="text-danger">Endless</strong> Admin
            </span>
            <p class="no-margin">
                &copy; 2013 <strong>143play</strong>. ALL Rights Reserved. 
            </p>
        </div><!-- /.col -->
    </div><!-- /.row-->
</footer>


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
<script src="<?=base_url()?>public/bootstrap/js/bootstrap.js"></script>

<!-- Flot -->
<script src='<?=base_url()?>public/js/jquery.flot.min.js'></script>

<!-- Morris -->
<script src='<?=base_url()?>public/js/rapheal.min.js'></script>
<script src='<?=base_url()?>public/js/morris.min.js'></script>

<!-- Colorbox -->
<script src='<?=base_url()?>public/js/jquery.colorbox.min.js'></script>

<!-- Sparkline -->
<script src='<?=base_url()?>public/js/jquery.sparkline.min.js'></script>

<!-- Pace -->
<script src='<?=base_url()?>public/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='<?=base_url()?>public/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='<?=base_url()?>public/js/jquery.slimscroll.min.js'></script>

<!-- Modernizr -->
<script src='<?=base_url()?>public/js/modernizr.min.js'></script>

<!-- Cookie -->
<script src='<?=base_url()?>public/js/jquery.cookie.min.js'></script>

<!-- Endless -->
<script src="<?=base_url()?>public/js/endless/endless_dashboard.js"></script>
<script src="<?=base_url()?>public/js/endless/endless.js"></script>

</body>
</html>
