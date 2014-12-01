
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

    <!-- Font Awesome-->
    <link href="<?=base_url()?>public/css/font-awesome.min.css" rel="stylesheet">

    <!-- Pace -->
    <link href="<?=base_url()?>public/css/pace.css" rel="stylesheet">

    <!-- Color box-->
    <link href="<?=base_url()?>public/css/colorbox/colorbox.css" rel="stylesheet">

    <!-- Endless -->
    <link href="<?=base_url()?>public/css/endless.min.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/endless-skin.css" rel="stylesheet">

</head>
<?php include 'navbar.php' ?>

<div id="main-container">
    <div class="padding-md">
        <div class="timeline-wrapper">
            <div class="timeline-item timeline-start">
                <div class="panel bg-success">
                    <div class="panel-body text-center">
                        <div class="timeline-icon bg-success">
                            <i class="fa fa-bell"></i>
                        </div>
                        <strong class="font-14">
                            Wake up
                        </strong>
                        <div class="time">
                            05:00 Am
                        </div>
                    </div>
                </div><!-- /panel -->
            </div><!-- /timeline-item -->
            <div class="timeline-item">
                <div class="timeline-info">
                    <div class="timeline-icon bg-grey">
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <div class="time">
                        06:50 Am
                    </div>
                </div>
                <div class="panel panel-default timeline-panel">
                    <div class="panel-heading">
                        John Doe created a new article
                        <small class="pull-right text-muted">
                            <i class="fa fa-clock-o"></i> 5m ago
                        </small>
                    </div>
                    <div class="panel-body">
                        <p>
                            Wake up early in the morning. IMPORTANT!!!
                        </p>
                        <a class="btn btn-xs btn-default">Read more</a>
                        <a class="btn btn-xs btn-default"><i class="fa fa-reply"></i> Reply</a>
                    </div>
                </div><!-- /panel -->
            </div><!-- /timeline-item -->
            <div class="timeline-item">
                <div class="timeline-info">
                    <div class="timeline-icon bg-grey">
                        <i class="fa fa-picture-o"></i>
                    </div>
                    <div class="time">
                        07:15 Am
                    </div>
                </div>
                <div class="panel panel-default timeline-panel">
                    <div class="panel-heading">
                        John Doe Added photos to the album <a href="#">NewPhoto</a>
                    </div>
                    <div class="panel-body">
                        <a class="timeline-img" href="img/gallery2.jpg">
                            <img src="<?=  base_url()?>public/img/gallery2.jpg" alt="Timeline Photo">
                        </a>
                        <a class="timeline-img" href="img/gallery7.jpg">
                            <img src="<?=  base_url()?>public/img/gallery7.jpg" alt="Timeline Photo">
                        </a>
                    </div>
                </div><!-- /panel -->
            </div><!-- /timeline-item -->
            <div class="timeline-item">
                <div class="timeline-info">
                    <div class="timeline-icon bg-warning">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="time">
                        08:30 Am
                    </div>
                </div>
                <div class="panel panel-default timeline-panel">
                    <div class="panel-heading">
                        Meeting 
                        <span class="label label-danger m-left-xs">IMPORTANT</span>
                    </div>
                    <div class="panel-body">
                        <h4>My office</h4> 
                        <span>08:30 Am</span>
                        <div class="seperator"></div>
                        <div class="seperator"></div>
                        <p>Need to go office for meeting and presentation</p>
                    </div>
                </div><!-- /panel -->
            </div><!-- /timeline-item -->
            <div class="timeline-item">
                <div class="timeline-info">
                    <div class="timeline-icon bg-success">
                        <i class="fa fa-comment"></i>
                    </div>
                    <div class="time">
                        10:49 Am
                    </div>
                </div>
                <div class="panel panel-default timeline-panel">
                    <div class="panel-heading">
                        <span class="label label-success m-left-xs">NEW</span> John Doe comments on your post <a href="#">#1211</a>
                    </div>
                    <div class="panel-body">
                        <p>Present the presentation to make the client to sign the deal</p>
                        <div class="seperator"></div>
                        <a class="btn btn-xs btn-success">Reply</a>
                        <a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                    </div>
                </div><!-- /panel -->
            </div><!-- /timeline-item -->

            <div class="timeline-date">
                3 Oct 2013
            </div>

            <div class="timeline-item">
                <div class="timeline-info">
                    <div class="timeline-icon bg-warning">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="time">
                        3:05 Pm
                    </div>
                </div>
                <div class="panel panel-default timeline-panel">
                    <div class="panel-heading">
                        Fly to <strong class="font-14">London</strong>
                    </div>
                    <div class="panel-body">
                        <p>Chittagong for a meeting.</p>
                    </div>
                </div><!-- /panel -->
            </div><!-- /timeline-item -->
            <div class="timeline-item clearfix">
                <div class="timeline-info">
                    <div class="timeline-icon bg-grey">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
            </div><!-- /timeline-item -->
        </div><!-- /timeline-wrapper -->
    </div><!-- /.padding -->
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

<!--Bootstrap-->
<script src="<?=base_url()?>public/bootstrap/js/bootstrap.min.js"></script>

<!--Colorbox-->
<script src='<?=base_url()?>public/js/jquery.colorbox.min.js'></script>

<!-- Modernizr -->
<script src='<?=base_url()?>public/js/modernizr.min.js'></script>

<!-- Pace -->
<script src='<?=base_url()?>public/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='<?=base_url()?>public/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='<?=base_url()?>public/js/jquery.slimscroll.min.js'></script>

<!--Cookie-->
<script src='<?=base_url()?>public/js/jquery.cookie.min.js'></script>

<!--Endless-->
<script src="<?=base_url()?>public/js/endless/endless.js"></script>

<script>
    $(function() {
        //Timeline color box
        $('.timeline-img').colorbox({
            rel: 'group1',
            width: "90%",
            maxWidth: '800px'
        });
    });
</script>

</body>
</html>