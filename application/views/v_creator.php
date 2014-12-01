
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

    <!-- Dropzone -->
    <link href='<?=base_url()?>public/css/dropzone/dropzone.css' rel="stylesheet"/>

    <!-- Datatable -->
    <link href="<?=base_url()?>public/css/jquery.dataTables_themeroller.css" rel="stylesheet">

    <!-- Pace -->
    <link href="<?=base_url()?>public/css/pace.css" rel="stylesheet">

    <!-- Endless -->
    <link href="<?=base_url()?>public/css/endless.min.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/endless-skin.css" rel="stylesheet">

</head>
<?php include 'navbar.php'?>
<div id="main-container">
<div id="breadcrumb">
    <ul class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="<?=base_url()?>"> Home</a></li>
        <li class="active">Creator</li>
    </ul>
</div><!--breadcrumb-->
<ul class="tab-bar grey-tab">
    <li class="active">
        <a href="#apps" data-toggle="tab" style="padding: 10px 25px;">
                            <span class="block text-center">
                                <i class="fa fa-qrcode fa-2x"></i>
                            </span>
            Apps
        </a>
    </li>
    <li>
        <a href="#users" data-toggle="tab" style="padding: 10px 25px;">
                            <span class="block text-center">
                                <i class="fa fa-group fa-2x"></i>
                            </span>
            Users
        </a>
    </li>
    <li>
        <a href="#category" data-toggle="tab" style="padding: 10px 25px;">
                            <span class="block text-center">
                                <i class="fa fa-sitemap fa-2x"></i>
                            </span>
            Category
        </a>
    </li>
    <li>
        <a href="#platform" data-toggle="tab" style="padding: 10px 25px;">
                            <span class="block text-center">
                                <i class="fa fa-tablet fa-2x"></i>
                            </span>
            Platform
        </a>
    </li>
    <li>
        <a href="#template" data-toggle="tab" style="padding: 10px 25px;">
                            <span class="block text-center">
                                <i class="fa fa-tablet fa-2x"></i>
                            </span>
            Template
        </a>
    </li>
    <li>
        <a href="#creator" data-toggle="tab" style="padding: 10px 25px;">
                            <span class="block text-center">
                                <i class="fa fa-tablet fa-2x"></i>
                            </span>
            Creator
        </a>
    </li>
</ul>

<div class="padding-md">
<div class="row">
<div class="tab-content">
<div class="tab-pane fade in active" id="apps">
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-overview fadeInUp animation-delay1">
            <div class="overview-icon bg-warning">
                <i class="fa fa-qrcode"></i>
            </div>
            <div class="overview-value">
                <div class="h2">6</div>
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
                <div class="h2">0</div>
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
                <div class="h2">$0</div>
                <div class="text-muted">Incomes</div>
            </div>
        </div><!--/ panel -->
    </div><!-- /.col -->
</div><!-- /.row -->
    <?php
        if(isset($successMessage))
        {?>
            <div class="success"><?=$successMessage?></div>
            <?php
        }?>
<div class="row">
<div class="col-md-4">
    <div class="panel panel-default">
        <form class="form-horizontal form-border" action="<?=base_url()?>creator/addApp" method="post" enctype="multipart/form-data">
            <div class="panel-heading">
                Add Apps
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" name="name" class="form-control input-sm" placeholder="App Name EX. Entertainment only Editable" value="">
                    </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                    <label class="control-label col-md-2">Details</label>
                    <div class="col-md-10">
                        <textarea name="about" class="form-control" rows="3"></textarea>
                    </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                    <label class="col-lg-2 control-label">Category</label>
                    <div class="col-lg-10">
                        <select name="category" class="form-control chzn-select">
                            <?php
                            foreach($categories as $category)
                            {?>
                               <option value="<?=$category->id?>"><?=$category->categoryName?></option>
                                <?php
                            }?>
                        </select>
                    </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                    <label class="col-lg-2 control-label">Template</label>
                    <div class="col-lg-10">
                        <select name="template" class="form-control chzn-select">
                            <?php
                            foreach($templates as $template)
                            {?>
                                <option value="<?=$template->id?>"><?=$template->templateName?></option>
                            <?php
                            }?>
                        </select>
                    </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                    <label class="control-label col-lg-2">Image</label>
                    <div class="col-lg-10">
                        <div class="">
                            <input name="image" type="file" id="upload-demo" class="upload-demo">
                            <label data-title="Select file" for="upload-demo">
                                <span data-title="No file selected..."></span>
                            </label>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                    <label class="control-label col-md-2">Price</label>
                    <div class="col-md-10">
                        <input type="text" name="price" class="form-control input-sm" placeholder="App Price" value="">
                    </div><!-- /.col -->
                </div><!-- /form-group -->
                <div class="form-group">
                    <label class="control-label col-md-2">Status</label>
                    <div class="col-md-10">
                        <label class="label-radio inline">
                            <input value="1" name="status" type="radio" checked>
                            <span class="custom-radio"></span>
                            Published
                        </label>
                        <label class="label-radio inline">
                            <input value="0" type="radio" name="status">
                            <span class="custom-radio"></span>
                            Unpublished
                        </label>
                    </div><!-- /.col -->
                </div><!-- /form-group -->
            </div>
            <div class="panel-footer">
                <div class="text-right">
                    <button type="submit" class="btn btn-sm btn-success">Add</button>
                    <button class="btn btn-sm btn-success" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div><!-- /panel -->
</div>
<div class="col-md-8">
    <div class="panel panel-default table-responsive">
        <div class="panel-heading">
            All Apps
            <span class="label label-danger pull-right">3 Items</span>
        </div>
        <table class="table table-striped" id="dataTable_allapps">
            <thead>
            <tr>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Category</th>
                <th class="text-center">Price</th>
                <th class="text-center">Like</th>
                <th class="text-center">Status</th>
                <th class="text-center" style="width: 200px">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($apps as $app)
            {?>
                <tr>
                    <td class="text-center hidden-xs">
                        <img alt="Product Image" src="<?=base_url().$app->background_image?>" width="60" height="60">
                    </td>
                    <td class="text-center">
                        <?=$app->appName?>
                    </td>
                    <td class="text-center">
                        <?=$app->categoryName?>
                    </td>
                    <td class="text-center">
                        $<?=$app->price?>
                    </td>
                    <td class="text-center">
                        <?=$app->like?>
                    </td>
                    <td class="text-center">
                        <?php
                        if($app->status == 1) echo "Published";
                        else echo "Unpublished";
                        ?>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a href="<?=base_url()?>creator/deleteApp/<?=$app->id?>" class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;" onclick="return confirm('Are you sure to delete this app?')">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
               <?php
            }?>
            </tbody>
        </table>
    </div><!-- /panel -->
</div><!-- /col -->
</div><!-- /row -->
</div><!-- /tab1 -->

<div class="tab-pane fade" id="users">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <form action="<?=base_url()?>creator/addUser" class="form-horizontal form-border" method="post" enctype="multipart/form-data">
                    <div class="panel-heading">
                        Add Users
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Name</label>
                            <div class="col-md-10">
                                <input required="required"  name="name" type="text" class="form-control input-sm" placeholder="User Name EX. John Doe" value="">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Username</label>
                            <div class="col-md-10">
                                <input required="required"  name="username" type="text" class="form-control input-sm" value="">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Password</label>
                            <div class="col-md-10">
                                <input required="required"  name="password" type="password" class="form-control input-sm" value="Password">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Email</label>
                            <div class="col-md-10">
                                <input required="required"  name="email" type="text" class="form-control input-sm" value="">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <div class="">
                                    <input required="required"  name="image" type="file" id="upload-demo" class="upload-demo">
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
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="District Of Columbia">District Of Columbia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                </select>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Phone</label>
                            <div class="col-md-10">
                                <input required="required"  name="phone" type="text" class="form-control input-sm">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">About</label>
                            <div class="col-md-10">
                                <textarea name="about" class="form-control" rows="3"></textarea>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            <button class="btn btn-sm btn-success">Add</button>
                            <button class="btn btn-sm btn-success" type="reset">Clear</button>
                        </div>
                    </div>
                </form>
            </div><!-- /panel -->
        </div>
        <div class="col-md-8">
            <div class="panel panel-default table-responsive">
                <div class="panel-heading">
                    All Users
                    <span class="label label-danger pull-right">3 User</span>
                </div>
                <table class="table table-striped" id="dataTable_allusers">
                    <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Country</th>
                        <th class="text-center" style="width: 200px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($users as $user)
                        {?>
                            <tr>
                                <td class="text-center hidden-xs">
                                    <img alt="Product Image"
                                        <?php
                                        if($user->photo == ''){?> src="<?=base_url()?>public/img/user1.jpg" <?php }
                                        else{?> src="<?=base_url().$user->photo?>" <?php }?>
                                         width="80" height="80">
                                </td>
                                <td class="text-center">
                                    <?=$user->name?>
                                </td>
                                <td class="text-center">
                                    <?=$user->email?>
                                </td>
                                <td class="text-center">
                                    <?=$user->phone?>
                                </td>
                                <td class="text-center">
                                    <?=$user->country?>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                                    <a href="<?=base_url()?>creator/deleteUser/<?=$user->id?>" onclick="return confirm('Are you sure to delete the user?')" class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                                </td>
                            </tr>
                           <?php
                        }?>
                    </tbody>
                </table>
            </div><!-- /panel -->
        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /tab2 -->

<div class="tab-pane fade" id="category">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <form action="<?=base_url()?>creator/addCategory" method="post" enctype="multipart/form-data" class="form-horizontal form-border">
                    <div class="panel-heading">
                        Add Category
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Name</label>
                            <div class="col-md-10">
                                <input type="text" required="required" name="name" class="form-control input-sm" placeholder="Category Name EX. Restaurant" value="">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Details</label>
                            <div class="col-md-10">
                                <textarea name="details" class="form-control" rows="3"></textarea>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <div class="">
                                    <input required="required" name="file" type="file" id="upload-demo" class="upload-demo">
                                    <label data-title="Select file" for="upload-demo">
                                        <span data-title="No file selected..."></span>
                                    </label>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Status</label>
                            <div class="col-md-10">
                                <label class="label-radio inline">
                                    <input required="required" type="radio" value="1" name="status" checked>
                                    <span class="custom-radio"></span>
                                    Published
                                </label>
                                <label class="label-radio inline">
                                    <input required="required" type="radio" value="0" name="status">
                                    <span class="custom-radio"></span>
                                    Unpublished
                                </label>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            <button class="btn btn-sm btn-success">Add</button>
                            <button class="btn btn-sm btn-success" type="reset">Clear</button>
                        </div>
                    </div>
                </form>
            </div><!-- /panel -->
        </div>
        <div class="col-md-8">
            <div class="panel panel-default table-responsive">
                <div class="panel-heading">
                    All Category
<!--                    <span class="label label-danger pull-right">3 Category</span>-->
                </div>
                <table class="table table-striped" id="dataTable_allcategory">
                    <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 200px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($categories as $category)
                    {?>
                        <tr>
                            <td class="text-center hidden-xs">
                                <img alt="Product Image" src="<?=base_url().$category->categoryImage?>" width="80" height="80">
                            </td>
                            <td class="text-center">
                                <?=$category->categoryName?>
                            </td>

                            <td class="text-center">
                                <?php
                                if($category->publicationStatus == 1) echo "Published";
                                else echo "Unpublished";
                                ?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                                <a href="<?=base_url()?>creator/deleteCategory/<?=$category->id?>" class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;" onclick="return confirm('Are you sure to delete the category')">Delete</a>
                                <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                            </td>
                        </tr>
                       <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div><!-- /panel -->
        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /tab3 -->

<div class="tab-pane fade" id="platform">
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <form class="form-horizontal form-border">
                <div class="panel-heading">
                    Add Platform
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label col-md-2">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control input-sm" placeholder="Platform Name EX. Android" value="">
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-md-2">Status</label>
                        <div class="col-md-10">
                            <label class="label-radio inline">
                                <input type="radio" name="inline-radio" checked>
                                <span class="custom-radio"></span>
                                Published
                            </label>
                            <label class="label-radio inline">
                                <input type="radio" name="inline-radio">
                                <span class="custom-radio"></span>
                                Unpublished
                            </label>
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <button class="btn btn-sm btn-success">Add</button>
                        <button class="btn btn-sm btn-success" type="reset">Clear</button>
                    </div>
                </div>
            </form>
        </div><!-- /panel -->
    </div>
    <div class="col-md-8">
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">
                All Platform
                <span class="label label-danger pull-right">3 Platform</span>
            </div>
            <table class="table table-striped" id="dataTable_allplatform">
                <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="width: 200px">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">
                        Android
                    </td>

                    <td class="text-center">
                        Published
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        iPhone
                    </td>

                    <td class="text-center">
                        Published
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        windows
                    </td>

                    <td class="text-center">
                        Published
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div><!-- /panel -->
    </div><!-- /col -->
</div><!-- /row1 -->

<div class="seperator"></div><div class="seperator"></div>
<div class="seperator"></div><div class="seperator"></div>

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <form class="form-horizontal form-border">
                <div class="panel-heading">
                    Add Category Based Platform
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <select class="form-control chzn-select">
                                <option>Restaurant</option>
                                <option>Education</option>
                                <option>Ecommerce</option>
                            </select>
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Platform</label>
                        <div class="col-lg-10">
                            <select class="form-control chzn-select">
                                <option>Android</option>
                                <option>iPhone</option>
                                <option>Windows</option>
                            </select>
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <div class="upload-file">
                                <input type="file" id="upload-demo" class="upload-demo">
                                <label data-title="Select file" for="upload-demo">
                                    <span data-title="Single file selection..."></span>
                                </label>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                    <div class="form-group">
                        <label class="control-label col-md-2">Status</label>
                        <div class="col-md-10">
                            <label class="label-radio inline">
                                <input type="radio" name="inline-radio" checked>
                                <span class="custom-radio"></span>
                                Published
                            </label>
                            <label class="label-radio inline">
                                <input type="radio" name="inline-radio">
                                <span class="custom-radio"></span>
                                Unpublished
                            </label>
                        </div><!-- /.col -->
                    </div><!-- /form-group -->
                </div>
                <div class="panel-footer">
                    <div class="text-right">
                        <button class="btn btn-sm btn-success">Add</button>
                        <button class="btn btn-sm btn-success" type="reset">Clear</button>
                    </div>
                </div>
            </form>
        </div><!-- /panel -->
    </div>
    <div class="col-md-8">
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">
                All Category Based Platform
                <span class="label label-danger pull-right">3 Platform</span>
            </div>
            <table class="table table-striped" id="dataTable_cbp">
                <thead>
                <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Platform</th>
                    <th class="text-center">Status</th>
                    <th class="text-center" style="width: 200px">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center hidden-xs">
                        <img alt="Product Image" src="img/android1.png" width="80" height="120">
                    </td>
                    <td class="text-center">
                        Restaurant
                    </td>
                    <td class="text-center">
                        Android
                    </td>
                    <td class="text-center">
                        Published
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center hidden-xs">
                        <img alt="Product Image" src="img/iphone1.png" width="80" height="120">
                    </td>
                    <td class="text-center">
                        Restaurant
                    </td>
                    <td class="text-center">
                        iPhone
                    </td>
                    <td class="text-center">
                        Published
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center hidden-xs">
                        <img alt="Product Image" src="img/windows-phone2.png" width="80" height="120">
                    </td>
                    <td class="text-center">
                        Restaurant
                    </td>
                    <td class="text-center">
                        windows
                    </td>
                    <td class="text-center">
                        <?php
                        if($app->status == 1) echo "Published";
                        else echo "Unpublished";
                        ?>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                        <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                        <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div><!-- /panel -->
    </div><!-- /col -->
</div><!-- /row 2-->
</div><!-- /tab4 -->

<div class="tab-pane fade" id="template">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <form action="<?=base_url()?>creator/addTemplate" method="post" enctype="multipart/form-data" class="form-horizontal form-border">
                    <div class="panel-heading">
                        Add Template
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Name</label>
                            <div class="col-md-10">
                                <input name="name" type="text" class="form-control input-sm" placeholder="Template name EX. Coffee Shop" value="">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Details</label>
                            <div class="col-md-10">
                                <textarea name="details" class="form-control" rows="3"></textarea>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Category</label>
                            <div class="col-lg-10">
                                <select name="category" class="form-control chzn-select">
                                    <?php
                                        foreach($categories as $category)
                                        {?>
                                            <option value="<?=$category->id?>"><?=$category->categoryName?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <div class="">
                                    <input name="file" type="file" id="upload-demo" class="upload-demo">
                                    <label data-title="Select file" for="upload-demo">
                                        <span data-title="No file selected..."></span>
                                    </label>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-md-2">Status</label>
                            <div class="col-md-10">
                                <label class="label-radio inline">
                                    <input type="radio" name="status" checked>
                                    <span class="custom-radio"></span>
                                    Published
                                </label>
                                <label class="label-radio inline">
                                    <input type="radio" name="status">
                                    <span class="custom-radio"></span>
                                    Unpublished
                                </label>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            <button type="submit" class="btn btn-sm btn-success">add</button>
                            <button class="btn btn-sm btn-success" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div><!-- /panel -->

        </div>
        <div class="col-md-8">
            <div class="panel panel-default table-responsive">
                <div class="panel-heading">
                    All Templates
                    <span class="label label-danger pull-right">3 Items</span>
                </div>
                <table class="table table-striped" id="dataTable_alltemplate">
                    <thead>
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 200px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($templates as $template)
                    {?>
                        <tr>
                            <td class="text-center hidden-xs">
                                <img alt="Product Image" src="<?=base_url().$template->templateImage?>" width="80" height="120">
                            </td>
                            <td class="text-center">
                                <?=$template->templateName?>
                            </td>
                            <td class="text-center">
                                <?=$template->categoryName?>
                            </td>
                            <td class="text-center">
                                <?php
                                if($template->publicationStatus == 1) echo "Published";
                                else echo "Unpublished";
                                ?>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                                <a href="<?=base_url()?>creator/deleteTemplate/<?=$template->id?>" class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;" onclick="return confirm('Are you user to delete the template?')">Delete</a>
                                <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                            </td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </div><!-- /panel -->
        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /tab5 -->

<div class="tab-pane fade" id="creator">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Creator elements
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <fieldset class="form-horizontal form-border">
                        <div class="form-group">
                            <label class="control-label col-md-2">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control input-sm" placeholder="App name EX. CoffeeShop" value="">
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Category</label>
                            <div class="col-lg-10">
                                <select class="form-control chzn-select">
                                    <option>Restaurant</option>
                                    <option>Education</option>
                                    <option>Ecommerce</option>
                                </select>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-lg-2">Logo</label>
                            <div class="col-lg-10">
                                <form action="." class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                    </fieldset>
                </div><!-- /.col -->
                <div class="col-md-6">
                    <fieldset class="form-horizontal form-border">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Background</label>
                            <div class="col-lg-10">
                                <div class="upload-file">
                                    <input type="file" id="upload-demo" class="upload-demo">
                                    <label data-title="Select file" for="upload-demo">
                                        <span data-title="Single File Selection..."></span>
                                    </label>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Template</label>
                            <div class="col-lg-10">
                                <select class="form-control chzn-select">
                                    <option>Coffee Shop</option>
                                    <option>Fastfood</option>
                                    <option>Sushi</option>
                                </select>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label class="control-label col-lg-2">Menu</label>
                            <div class="col-lg-10">
                                <form action="." class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div><!-- /.col -->
                        </div><!-- /form-group -->
                    </fieldset>
                </div><!-- /.col -->
            </div><!-- /panel-body -->
            <div class="panel-footer">
                <div class="text-right">
                    <button class="btn btn-sm btn-success">Update</button>
                    <button class="btn btn-sm btn-success" type="reset">Reset</button>
                </div>
            </div>
        </div><!-- /panel -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default table-responsive">
                <div class="panel-heading">
                    All Elements
                    <span class="label label-danger pull-right">3 Items</span>
                </div>
                <table class="table table-striped" id="dataTable_elements">
                    <thead>
                    <tr>
                        <th class="text-center">App Name</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Template</th>
                        <th class="text-center">Background</th>
                        <th class="text-center">Logo</th>
                        <th class="text-center">Menu</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" style="width: 200px">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">
                            Burger House
                        </td>
                        <td class="text-center">
                            Restuarant
                        </td>
                        <td class="text-center">
                            Fastfood
                        </td>
                        <td class="text-center hidden-xs">
                            <img alt="Product Image" src="background.jpg" height="100" width="100">
                        </td>
                        <td class="text-center">
                            <a href="#logo" role="button" data-toggle="modal" class="btn btn-sm btn-info">Logo</a>
                        </td>
                        <td class="text-center">
                            <a href="#menu" role="button" data-toggle="modal" class="btn btn-sm btn-info">Menu</a>
                        </td>
                        <td class="text-center">
                            Published
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                            <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                            <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            Ice Cream Parlour
                        </td>
                        <td class="text-center">
                            Restuarant
                        </td>
                        <td class="text-center">
                            Ice Cream Parlour
                        </td>
                        <td class="text-center hidden-xs">
                            <img alt="Product Image" src="background1.jpg" height="100" width="100">
                        </td>
                        <td class="text-center">
                            <a href="#logo" role="button" data-toggle="modal" class="btn btn-sm btn-info">Logo</a>
                        </td>
                        <td class="text-center">
                            <a href="#menu" role="button" data-toggle="modal" class="btn btn-sm btn-info">Menu</a>
                        </td>
                        <td class="text-center">
                            Published
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Edit</a>
                            <a class="btn btn-sm btn-danger" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Delete</a>
                            <a class="btn btn-sm btn-success" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Unpublish</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- /panel -->
        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /tab6 -->

</div><!-- /tab-content -->
</div><!-- /.row -->
</div><!-- /.padding-md -->
</div><!-- /main-container -->

<!--Modal for logo-->
<div class="modal fade" id="logo">
    <div class="modal-dialog" style="width: auto; text-align: center;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Modal header</h4>
            </div>
            <div class="modal-body">
                <img alt="Product Image" src="elements/logo_1.png" width="180">
                <img alt="Product Image" src="elements/logo_2.png" width="180">
                <img alt="Product Image" src="elements/logo_3.png" width="180">
                <img alt="Product Image" src="elements/logo_4.png" width="180">
                <img alt="Product Image" src="elements/logo_5.png" width="180">
                <img alt="Product Image" src="elements/logo_6.png" width="180">
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Modal for menu-->
<div class="modal fade" id="menu">
    <div class="modal-dialog" style="width: auto; text-align: center;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Modal header</h4>
            </div>
            <div class="modal-body">
                <img alt="Product Image" src="elements/menu_1.png" width="180" style="padding: 5px;">
                <img alt="Product Image" src="elements/menu_2.png" width="180" style="padding: 5px;">
                <img alt="Product Image" src="elements/menu_3.png" width="180" style="padding: 5px;">
                <img alt="Product Image" src="elements/menu_4.png" width="180" style="padding: 5px;">
                <img alt="Product Image" src="elements/menu_5.png" width="180" style="padding: 5px;">
                <img alt="Product Image" src="elements/menu_6.png" width="180" style="padding: 5px;">
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
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

<!-- holder -->
<script src='<?=base_url()?>public/js/uncompressed/holder.js'></script>

<!-- Dropzone -->
<script src='<?=base_url()?>public/js/dropzone.min.js'></script>

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

<!-- Datatable -->
<script src='<?=base_url()?>public/js/jquery.dataTables.min.js'></script>

<script>
    $(function() {
        $('#dataTable_allapps').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
        $('#dataTable_allusers').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
        $('#dataTable_allcategory').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
        $('#dataTable_allplatform').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
        $('#dataTable_cbp').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
        $('#dataTable_alltemplate').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });
        $('#dataTable_elements').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers"
        });

        $('#chk-all').click(function() {
            if ($(this).is(':checked')) {
                $('#responsiveTable').find('.chk-row').each(function() {
                    $(this).prop('checked', true);
                    $(this).parent().parent().parent().addClass('selected');
                });
            }
            else {
                $('#responsiveTable').find('.chk-row').each(function() {
                    $(this).prop('checked', false);
                    $(this).parent().parent().parent().removeClass('selected');
                });
            }
        });
    });
</script>

</body>
</html>