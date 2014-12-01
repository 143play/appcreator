<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="<?= base_url() ?>public/css/font-awesome.min.css" rel="stylesheet">

        <!-- Endless -->
        <link href="<?= base_url() ?>public/css/endless.min.css" rel="stylesheet">

    </head>

    <body>
        <div class="login-wrapper">
            <div class="text-center">
                <h2 class="fadeInUp animation-delay10" style="font-weight:bold">
                    <span class="text-success">App</span> <span style="color:#ccc; text-shadow:0 1px #fff">Creator</span>
                </h2>
            </div>
            <div class="login-widget animation-delay1">	
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle fa-lg"></i> Sign up
                        <?php
                        if(isset($validation_errors))
                        {?>
                        <div class="text-danger"><?=$validation_errors?></div>
                            <?php
                        }?>
                    </div>
                    <div class="panel-body">
                        <form class="form-login" method="post" action="<?=base_url()?>register">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" placeholder="Full Name" class="form-control input-sm bounceIn animation-delay1" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay3">
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password_conf" placeholder="Confirm password" class="form-control input-sm bounceIn animation-delay4">
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="email" placeholder="Email address" class="form-control input-sm bounceIn animation-delay5">
                            </div><!-- /form-group -->
                            <div class="form-group">
                                <label class="label-checkbox">
                                    <input name="agree" type="checkbox"/>
                                    <span class="custom-checkbox info bounceIn animation-delay6"></span>
                                    I accept the agreement.
                                </label>
                            </div><!-- /form-group -->

                            <div class="seperator"></div>
                            <div class="form-group">
                                <div class="controls">
                                    Already have an account? <a href="<?=  base_url()?>" class="primary-font login-link">Sign In</a>
                                </div>
                            </div><!-- /form-group -->

                            <hr/>
                            <div class="form-group">
                                <div class="controls text-right">
                                    <button type="submit" class="btn btn-success btn-sm bounceIn animation-delay7"><i class="fa fa-plus-circle"></i> Sign up</button>
                                </div>
                            </div><!-- /form-group -->
                        </form>
                    </div>
                </div><!-- /panel -->
            </div><!-- /login-widget -->
        </div><!-- /login-wrapper -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- Jquery -->
        <script src="<?= base_url() ?>public/js/jquery-1.10.2.min.js"></script>

        <!--Bootstrap-->
        <script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>

        <!-- Modernizr -->
        <script src='<?= base_url() ?>public/js/modernizr.min.js'></script>

        <!-- Pace -->
        <script src='<?= base_url() ?>public/js/pace.min.js'></script>

        <!-- Popup Overlay -->
        <script src='<?= base_url() ?>public/js/jquery.popupoverlay.min.js'></script>

        <!-- Slimscroll -->
        <script src='<?= base_url() ?>public/js/jquery.slimscroll.min.js'></script>

        <!--Cookie-->
        <script src='<?= base_url() ?>public/js/jquery.cookie.min.js'></script>

        <!--Endless-->
        <script src="<?= base_url() ?>public/js/endless/endless.js"></script>
    </body>
</html>

