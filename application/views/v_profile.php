
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
    <div id="breadcrumb">
        <ul class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?=base_url()?>"> Home</a></li>
            <li>Page</li>	 
            <li class="active">Profile</li>	 
        </ul>
    </div><!--breadcrumb-->
    <ul class="tab-bar grey-tab">
        <li class="active">
            <a href="#overview" data-toggle="tab">
                <span class="block text-center">
                    <i class="fa fa-home fa-2x"></i> 
                </span>
                Overview
            </a>
        </li>
        <li>
            <a href="#edit" data-toggle="tab">
                <span class="block text-center">
                    <i class="fa fa-edit fa-2x"></i> 
                </span>
                Edit Profile
            </a>
        </li>
    </ul>
    <?php
        if(isset($successMessage))
        {?>
            <div class="alert alert-success" role="alert">
<!--                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>-->
                <?=$successMessage?>
            </div>
           <?php
        }
        if(isset($errorMessage))
        {?>
            <div class="alert alert-danger" role="alert">
                <!--                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>-->
                <?=$errorMessage?>
            </div>
        <?php
        }
    ?>

    <div class="padding-md">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="row">
                    <div class="col-xs-6 col-sm-12 col-md-6 text-center">
                        <a href="#">
                            <img src="<?= base_url().$user->photo ?>" alt="User Avatar" class="img-thumbnail">
                        </a>
                        <div class="seperator"></div>
                        <div class="seperator"></div>
                    </div><!-- /.col -->
                    <div class="col-xs-6 col-sm-12 col-md-6">
                        <strong class="font-14"><?=$user->name?></strong>
                        <small class="block text-muted">
                            <?=$user->email?>
                        </small> 
                        <small class="block text-muted">
                            <?=$user->phone?>
                        </small>
                        <small class="block text-muted">
                            <?=$user->country?>
                        </small>
                        <div class="seperator"></div>
                        <div class="seperator"></div>
                        <div class="seperator"></div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel-heading">
                                About Me
                            </div>
                            <div class="panel-body">
                                <p><?=$user->about?></p>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div><!-- /panel -->
            </div><!-- /.col -->
            <div class="col-md-9 col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="overview">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-overview fadeInUp animation-delay1">
                                    <div class="overview-icon bg-warning">
                                        <i class="fa fa-qrcode"></i>
                                    </div>
                                    <div class="overview-value">
                                        <div class="h2">301</div>
                                        <div class="text-muted">Apps</div>
                                    </div>
                                </div><!--/ panel -->
                            </div><!-- /.col -->
                            <div class="col-md-4">
                                <div class="panel panel-overview fadeInUp animation-delay2">
                                    <div class="overview-icon bg-success">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="overview-value">
                                        <div class="h2">129</div>
                                        <div class="text-muted">Sales</div>
                                    </div>
                                </div><!--/ panel -->
                            </div><!-- /.col -->
                            <div class="col-md-4">
                                <div class="panel panel-overview fadeInUp animation-delay3">
                                    <div class="overview-icon bg-danger">
                                        <i class="fa fa-usd"></i>
                                    </div>
                                    <div class="overview-value">
                                        <div class="h2">$2731</div>
                                        <div class="text-muted">Incomes</div>
                                    </div>
                                </div><!--/ panel -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                        <div class="panel panel-default table-responsive">
                            <div class="panel-heading">
                                Apps
                                <span class="label label-danger pull-right">3 Items</span>
                            </div>
                            <table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Total Sales</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center hidden-xs">
                                            <img data-src="holder.js/60x60" alt="Product Image" src=".">
                                        </td>
                                        <td class="text-center">
                                            Coffee Shop
                                        </td>
                                        <td class="text-center">
                                            $50
                                        </td>
                                        <td class="text-center">
                                            102
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center hidden-xs">
                                            <img data-src="holder.js/60x60" alt="Product Image" src=".">
                                        </td>
                                        <td class="text-center">
                                            Education
                                        </td>
                                        <td class="text-center">
                                            $80
                                        </td>
                                        <td class="text-center">
                                            310
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center hidden-xs">
                                            <img data-src="holder.js/60x60" alt="Product Image" src=".">
                                        </td>
                                        <td class="text-center">
                                            Ecommerce
                                        </td>
                                        <td class="text-center">
                                            $35
                                        </td>
                                        <td class="text-center">
                                            89
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /panel -->
                    </div><!-- /tab1 -->

                    <div class="tab-pane fade" id="edit">
                        <div class="row">
                            <div class="panel panel-info pull-right">
                                <div class="panel-body">
                                    Last Update on 12 Oct,2013
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /.row -->
                        <div class="panel panel-default">
                            <form action="<?=base_url()?>profile/editProfile" class="form-horizontal form-border" method="post" enctype="multipart/form-data">
                                <div class="panel-heading">
                                    Basic Information
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Name</label>												
                                        <div class="col-md-10">
                                            <input type="text" name="name" class="form-control input-sm" placeholder="name" value="<?=$user->name?>">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" required="required" name="password" class="form-control input-sm" value="">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" name="email" class="form-control input-sm" value="<?=$user->email?>">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">Image</label>
                                        <div class="col-lg-10">
                                            <div class="">
                                                <input type="file" name="image" id="upload-demo" class="upload-demo">
                                                <label data-title="Select file" for="upload-demo">
                                                    <span data-title="No file selected..."></span>
                                                </label>
                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Country</label>
                                        <div class="col-lg-10">
                                            <select name="country" class="form-control chzn-select">
                                                <option <?php if($user->country == "Alabama"){echo "selected";}?> value="Alabama">Alabama</option>
                                                <option <?php if($user->country == "Alaska"){echo "selected";}?> value="Alaska">Alaska</option>
                                                <option <?php if($user->country == "Arizona"){echo "selected";}?> value="Arizona">Arizona</option>
                                                <option <?php if($user->country == "Arkansas"){echo "selected";}?> value="Arkansas">Arkansas</option>
                                                <option <?php if($user->country == "California"){echo "selected";}?> value="California">California</option>
                                                <option <?php if($user->country == "Colorado"){echo "selected";}?> value="Colorado">Colorado</option>
                                                <option <?php if($user->country == "Bangladesh"){echo "selected";}?> value="Bangladesh">Bangladesh</option>
                                                <option <?php if($user->country == "Delaware"){echo "selected";}?> value="Delaware">Delaware</option>
                                                <option <?php if($user->country == "District Of Columbia"){echo "selected";}?> value="District Of Columbia">District Of Columbia</option>
                                                <option <?php if($user->country == "Florida"){echo "selected";}?> value="Florida">Florida</option>
                                                <option <?php if($user->country == "Georgia"){echo "selected";}?> value="Georgia">Georgia</option>
                                                <option <?php if($user->country == "Hawaii"){echo "selected";}?> value="Hawaii">Hawaii</option>
                                                <option <?php if($user->country == "Idaho"){echo "selected";}?> value="Idaho">Idaho</option>
                                                <option <?php if($user->country == "Illinois"){echo "selected";}?> value="Illinois">Illinois</option>
                                                <option <?php if($user->country == "Indiana"){echo "selected";}?> value="Indiana">Indiana</option>
                                                <option <?php if($user->country == "Iowa"){echo "selected";}?> value="Iowa">Iowa</option>
                                            </select>
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Phone</label>
                                        <div class="col-md-10">
                                            <input name="phone" type="text" class="form-control input-sm" value="<?=$user->phone?>">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-md-2">About</label>
                                        <div class="col-md-10">
                                            <textarea name="about" class="form-control" rows="3"><?=$user->about?></textarea>
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                </div>
                                <div class="panel-footer">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-sm btn-success">Add</button>
<!--                                        <button class="btn btn-sm btn-success" type="reset">Clear</button>-->
                                    </div>
                                </div>
                            </form>
                        </div><!-- /panel -->
                    </div><!-- /tab2 -->
                </div><!-- /tab-content -->
            </div><!-- /.col -->
        </div><!-- /.row -->			
    </div><!-- /.padding-md -->
</div><!-- /main-container -->
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

<!-- holder -->
<script src='<?=base_url()?>public/js/uncompressed/holder.js'></script>

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
