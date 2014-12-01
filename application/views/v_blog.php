
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

    <!-- Datatable -->
    <link href="<?=base_url()?>public/css/jquery.dataTables_themeroller.css" rel="stylesheet">

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
            <li><i class="fa fa-home"></i><a href="<?=  base_url()?>public/index.html"> Home</a></li>	 
            <li class="active">Blog</li>	 
        </ul>
    </div><!--breadcrumb-->
    <ul class="tab-bar grey-tab">
        <li class="active">
            <a href="#allblog" data-toggle="tab" style="padding: 10px 25px;">
                <span class="block text-center">
                    <i class="fa fa-qrcode fa-2x"></i> 
                </span>
                All Blog
            </a>
        </li>
        <li>
            <a href="#overview" data-toggle="tab" style="padding: 10px 25px;">
                <span class="block text-center">
                    <i class="fa fa-qrcode fa-2x"></i> 
                </span>
                Overview
            </a>
        </li>
        <li>
            <a href="#editblog" data-toggle="tab" style="padding: 10px 25px;">
                <span class="block text-center">
                    <i class="fa fa-group fa-2x"></i> 
                </span>
                Edit Blog
            </a>
        </li>
    </ul>

    <div class="padding-md">
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="allblog">
                    <div class="row">
                        <div class="col-md-11">	
                            <h3 class="headline m-top-md">
                                Welcome To Our Blog
                                <span class="line"></span>
                            </h3>
                            <div class="row">	
                                <div class="col-md-8">
                                    <div class="panel blog-container">
                                        <div class="panel-body">
                                            <a class="image-wrapper image-zoom" href="<?=  base_url()?>public/img/movie/preview1.jpg">
                                                <img src="<?=  base_url()?>public/img/movie/preview1.jpg" alt="Photo of Blog">
                                                <div class="image-overlay"></div>	
                                            </a>

                                            <h4>Responsive Design</h4>
                                            <small class="text-muted">By <a href="#"><strong> John Doe</strong></a> |  Post on Aug 15, 2013  | 3 comments</small>
                                            <p class="m-top-sm m-bottom-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                                            </p>
                                            <a href="#singlepost" role="button" data-toggle="modal" class="btn btn-sm btn-info"  style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Continue Reading</a>
                                            <span class="post-like text-muted tooltip-test" data-toggle="tooltip" data-original-title="I like this post!">
                                                <i class="fa fa-heart"></i> <span class="like-count">8</span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="panel blog-container">
                                        <div class="panel-body">
                                            <div class="image-wrapper">
                                                <a class="image-wrapper image-zoom" href="<?=  base_url()?>public/img/movie/preview4.jpg">
                                                    <img src="<?=  base_url()?>public/img/movie/preview4.jpg" alt="Photo of Blog">
                                                    <div class="image-overlay"></div>	
                                                </a>
                                            </div>

                                            <h4>Flat Design</h4>
                                            <small class="text-muted">By <a href="#"><strong> Admin</strong></a> |  Post on Feb 21, 2013  | 46 comments</small>

                                            <p class="m-top-sm m-bottom-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                                            </p>
                                            <a href="#singlepost" role="button" data-toggle="modal" class="btn btn-sm btn-info"  style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Continue Reading</a>
                                            <span class="post-like text-muted tooltip-test" data-toggle="tooltip" data-original-title="I like this post!">
                                                <i class="fa fa-heart"></i> <span class="like-count">12</span>
                                            </span>
                                        </div>
                                    </div>

                                    <ul class="pagination pagination-split m-bottom-md">
                                        <li><a href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">9</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div><!-- /.col -->
                                <div class="col-md-4">
                                    <h4 class="headline">
                                        POPULAR POST
                                        <span class="line"></span>
                                    </h4>
                                    <div class="media popular-post">
                                        <a class="pull-left" href="single_post.html">
                                            <img src="i<?=  base_url()?>public/mg/gallery1.jpg" alt="Popular Post">
                                        </a>
                                        <div class="media-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </div>
                                    </div>
                                    <div class="media popular-post">
                                        <a class="pull-left" href="<?=  base_url()?>public/single_post.html">
                                            <img src="<?=  base_url()?>public/img/gallery2.jpg" alt="Popular Post">
                                        </a>
                                        <div class="media-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                    <div class="media popular-post">
                                        <a class="pull-left" href="<?=  base_url()?>public/single_post.html">
                                            <img src="<?=  base_url()?>public/img/gallery3.jpg" alt="Popular Post">
                                        </a>
                                        <div class="media-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                    </div>
                                    <h4 class="headline">
                                        CATEGORY
                                        <span class="line"></span>
                                    </h4>
                                    <ul class="category">
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Music</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Videos</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Photography</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Food</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Uncategorized</a></li>
                                    </ul>
                                    <h4 class="headline">
                                        ABOUT THE BLOG
                                        <span class="line"></span>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                                    </p>
                                    <h4 class="headline">
                                        PHOTO STREAM
                                        <span class="line"></span>
                                    </h4>
                                    <ul class="photo-stream">
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery1.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery2.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery3.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery4.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery5.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery6.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery7.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?=  base_url()?>public/img/gallery8.jpg" alt="Photo Stream">
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.col -->
                    </div><!-- /row -->
                </div><!-- /tab1 -->

                <div class="tab-pane fade" id="overview">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-overview fadeInUp animation-delay1">
                                <div class="overview-icon bg-warning">
                                    <i class="fa fa-qrcode"></i>
                                </div>
                                <div class="overview-value">
                                    <div class="h2">301</div>
                                    <div class="text-muted">Blog</div>
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
                                    <div class="text-muted">Blogger</div>
                                </div>
                            </div><!--/ panel -->
                        </div><!-- /.col -->
                        <div class="col-md-4">
                            <div class="panel panel-overview fadeInUp animation-delay3">
                                <div class="overview-icon bg-danger">
                                    <i class="fa fa-usd"></i>
                                </div>
                                <div class="overview-value">
                                    <div class="h2">731</div>
                                    <div class="text-muted">Comments</div>
                                </div>
                            </div><!--/ panel -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <form class="form-horizontal form-border">
                                    <div class="panel-heading">
                                        Add Blog Details
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-2">About</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2"></textarea>
                                            </div><!-- /.col -->
                                        </div><!-- /form-group -->
                                        <div class="panel-footer">
                                            <div class="text-right">
                                                <button class="btn btn-sm btn-success">Update</button>
                                                <button class="btn btn-sm btn-success" type="reset">Reset</button>
                                            </div>
                                        </div>
                                    </div><!-- /panel -->
                                </form>
                            </div><!-- /panel -->
                        </div><!-- /col -->
                        <div class="col-md-8">
                            <div class="panel panel-default table-responsive">
                                <div class="panel-heading">
                                    About Blog
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.</p>
                                </div>
                            </div><!-- /panel -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <form class="form-horizontal form-border">
                                    <div class="panel-heading">
                                        Add Category
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control input-sm" placeholder="Category Name EX. Restaurant" value="">
                                            </div><!-- /.col -->
                                        </div><!-- /form-group -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Details</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="3"></textarea>
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
                                    All Category
                                    <span class="label label-danger pull-right">3 Category</span>
                                </div>
                                <table class="table table-striped" id="dataTable_allcategory">
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
                                                Restaurant
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
                                                Restaurant
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
                </div><!-- /tab2 -->

                <div class="tab-pane fade" id="editblog">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <form class="form-horizontal form-border">
                                    <div class="panel-heading">
                                        Add Blog
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Name</label>												
                                            <div class="col-md-10">
                                                <input type="text" class="form-control input-sm" placeholder="Blog Name" value="">
                                            </div><!-- /.col -->
                                        </div><!-- /form-group -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Author</label>												
                                            <div class="col-md-10">
                                                <input type="text" class="form-control input-sm" placeholder="Author Name" value="Jhon Doe" disabled="">
                                            </div><!-- /.col -->
                                        </div><!-- /form-group -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Short Details</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2"></textarea>
                                            </div><!-- /.col -->
                                        </div><!-- /form-group -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Long Details</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="8"></textarea>
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
                                            <label class="control-label col-lg-2">Image</label>
                                            <div class="col-lg-10">
                                                <div class="upload-file">
                                                    <input type="file" id="upload-demo" class="upload-demo">
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
                                            <button class="btn btn-sm btn-success">Update</button>
                                            <button class="btn btn-sm btn-success" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /panel -->
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-default table-responsive">
                                <div class="panel-heading">
                                    All Blogs
                                    <span class="label label-danger pull-right">3 Items</span>
                                </div>
                                <table class="table table-striped" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Category</th>
                                            <th class="text-center">Author</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Comments</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center" style="width: 200px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center hidden-xs">
                                                <img data-src="holder.js/60x60" alt="Product Image" src=".">
                                            </td>
                                            <td class="text-center">
                                                Downtown Cafe
                                            </td>
                                            <td class="text-center">
                                                Restuarant
                                            </td>
                                            <td class="text-center">
                                                Jhon Doe
                                            </td>
                                            <td class="text-center">
                                                10/10/2014
                                            </td>
                                            <td class="text-center">
                                                <a href="#comments" role="button" data-toggle="modal" class="btn btn-sm btn-info"  style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Comments</a>
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
                                                <img data-src="holder.js/60x60" alt="Product Image" src=".">
                                            </td>
                                            <td class="text-center">
                                                Downtown Cafe
                                            </td>
                                            <td class="text-center">
                                                Restuarant
                                            </td>
                                            <td class="text-center">
                                                Jhon Doe
                                            </td>
                                            <td class="text-center">
                                                10/10/2014
                                            </td>
                                            <td class="text-center">
                                                <a href="#comments" role="button" data-toggle="modal" class="btn btn-sm btn-info" style="padding: 2px 5px; border-radius: 0px; margin: 2px;">Comments</a>
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
                </div><!-- /tab3 -->
            </div><!-- /tab-content -->
        </div><!-- /.row -->			
    </div><!-- /.padding-md -->
</div><!-- /main-container -->


<!--Modal for single post-->
<div class="modal fade" id="singlepost">
    <div class="modal-dialog" style="width: auto;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Responsive Design</h4>
            </div>
            <div class="modal-body">
                <div class="row">	
                    <div class="col-md-8">
                        <div class="panel blog-container">
                            <div class="panel-body">
                                <div class="image-wrapper">
                                    <a class="image-wrapper image-zoom" href="<?=  base_url()?>public/img/movie/preview1.jpg">
                                        <img src="<?=  base_url()?>public/img/movie/preview1.jpg" alt="Photo of Blog">
                                        <div class="image-overlay"></div>	
                                    </a>
                                </div><!-- /image-wrapper -->

                                <p class="m-top-sm m-bottom-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                                </p>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <p class="m-top-sm m-bottom-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                                </p>
                                <p class="m-top-sm m-bottom-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi. Integer luctus accumsan tellus. Vivamus quis elit sit amet nibh lacinia suscipit eu quis purus. Vivamus tristique est non ipsum dapibus lacinia sed nec metus.
                                </p>
                            </div>
                        </div><!-- /panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <div class="share-blog clearfix">
                                    <span class="pull-left" style="line-height: 25px;">Share this story</span>
                                    <div class="pull-right">
                                        <a href="#" class="social-connect tooltip-test facebook-hover" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-connect tooltip-test twitter-hover" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-connect tooltip-test google-plus-hover" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-connect tooltip-test rss-hover" data-toggle="tooltip" data-original-title="Rss feed"><i class="fa fa-rss"></i></a>
                                        <a href="#" class="social-connect tooltip-test tumblr-hover" data-toggle="tooltip" data-original-title="Tumblr"><i class="fa fa-tumblr"></i></a>
                                        <a href="#" class="social-connect tooltip-test dribbble-hover" data-toggle="tooltip" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a>
                                        <a href="#" class="social-connect tooltip-test linkedin-hover" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" class="social-connect tooltip-test pinterest-hover" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /panel -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                        <h4 class="headline">
                            About The Author
                            <span class="line"></span>
                        </h4>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img src="<?=  base_url()?>public/img/user.jpg" alt="Author" class="img-rounded" style="height:50px; width:50px;">
                                    </a>
                                    <div class="media-heading">
                                        John Doe<br>
                                    </div>
                                    <div class="media-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eros nibh, viverra a dui a, gravida varius velit. Nunc vel tempor nisi. Aenean id pellentesque mi, non placerat mi.
                                    </div>
                                </div>
                            </div>
                        </div><!-- /panel -->
                        <h4 class="headline">
                            Comments (3)
                            <span class="line"></span>
                        </h4>
                        <ul class="media-list comment-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="<?=  base_url()?>public/img/user.jpg" alt="User Avatar" style="width: 40px; height: 40px;">
                                </a>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#">John Doe</a>
                                        <small class="text-muted">
                                            Oct 10, 2013 at 1:23 pm / <a href="#">Reply</a>
                                        </small>
                                    </div>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                    <!-- Nested media object -->
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="<?=  base_url()?>public/img/user2.jpg" alt="User Avatar" style="width: 40px; height: 40px;">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#">Jane Doe</a>
                                                <small class="text-muted">
                                                    Oct 10, 2013 at 1:30 am
                                                </small>
                                            </div>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="<?=  base_url()?>public/img/user.jpg" alt="User Avatar" style="width: 40px; height: 40px;">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="#">John Doe</a>
                                                <small class="text-muted">
                                                    Oct 10, 2013 at 1:32 am
                                                </small>
                                            </div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="<?=  base_url()?>public/img/user2.jpg" alt="User Avatar" style="width: 40px; height: 40px;">
                                </a>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#">Jane Doe</a>
                                        <small class="text-muted">
                                            Oct 11, 2013 at 9:06 pm / <a href="#">Reply</a>
                                        </small>
                                    </div>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="<?=  base_url()?>public/img/user.jpg" alt="User Avatar" style="width: 40px; height: 40px;">
                                </a>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#">John Doe</a>
                                        <small class="text-muted">
                                            Oct 13, 2013 at 7:51 am / <a href="#">Reply</a>
                                        </small>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                </div>
                            </li>
                        </ul><!-- /media-list -->					
                        <h4 class="headline">
                            Add Comment
                            <span class="line"></span>
                        </h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>												
                                        <input type="text" class="form-control input-sm" placeholder="Name">
                                    </div><!-- /form-group -->
                                </div><!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control input-sm" placeholder="Website Url">
                                    </div><!-- /form-group -->
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            <textarea class="form-control" rows="10"></textarea>
                            <div class="seperator"></div>
                            <div class="text-right m-bottom-md">
                                <button class="btn btn-success">Post Comment</button>
                            </div>
                        </form>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for comments-->
<div class="modal fade" id="comments">
    <div class="modal-dialog" style="width: auto; text-align: center;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Comments</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <form class="form-horizontal form-border">
                                <div class="panel-heading">
                                    Add Comment
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Name</label>												
                                        <div class="col-md-10">
                                            <input type="text" class="form-control input-sm" placeholder="commentors Name" value="Jhon Doe" disabled="">
                                        </div><!-- /.col -->
                                    </div><!-- /form-group -->
                                    <div class="form-group">
                                        <label class="control-label col-md-2">Comment</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="2"></textarea>
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
                                        <button class="btn btn-sm btn-success">Update</button>
                                        <button class="btn btn-sm btn-success" type="reset">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /panel -->
                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-default table-responsive">
                            <div class="panel-heading">
                                All Comments 
                                <span class="label label-danger pull-right">3 Items</span>
                            </div>
                            <table class="table table-bordered table-condensed table-hover table-striped table-vertical-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Commenter</th>
                                        <th class="text-center">comments</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            Someone
                                        </td>
                                        <td class="text-center">
                                            It is a nice blog
                                        </td>
                                        <td class="text-center">
                                            Published
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger">Delete</a>
                                            <a class="btn btn-sm btn-success">Unpublish</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            Someone
                                        </td>
                                        <td class="text-center">
                                            It is a nice blog
                                        </td>
                                        <td class="text-center">
                                            Published
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger">Delete</a>
                                            <a class="btn btn-sm btn-success">Unpublish</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /panel -->
                    </div><!-- /col -->
                </div><!-- /row -->
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
        $('#dataTable').dataTable({
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