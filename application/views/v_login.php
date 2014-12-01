<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <link type="text/css" href="<?=  base_url()?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link type="text/css" href="<?=  base_url()?>public/css/font-awesome.min.css" rel="stylesheet">
        <!-- Endless -->
        <link type="text/css" href="<?=  base_url()?>public/css/endless.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="login-wrapper">
            <div class="text-center">
                <h2 class="fadeInUp animation-delay8" style="font-weight:bold">
                    <span class="text-success">App</span> <span style="color:#ccc; text-shadow:0 1px #fff">Creator</span>
                </h2>
            </div>
            <div class="login-widget animation-delay1">	
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <div class="pull-left">
                            <i class="fa fa-lock fa-lg"></i> Login
                        </div>
                        <div class="pull-right">
                            <span style="font-size:11px;">Don't have any account?</span>
                            <a class="btn btn-default btn-xs login-link" href="<?=  base_url()?>register" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php
                        if(isset($loginErrors))
                        {?>
                        <p class="text-danger"><?=$loginErrors?></p>
                            <?php
                        }?>
                        <form class="form-login" action="<?=  base_url()?>welcome/login" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Username" class="form-control input-sm bounceIn animation-delay2" >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
                            </div>
                            <div class="form-group">
                                <label class="label-checkbox inline">
                                    <input type="checkbox" class="regular-checkbox chk-delete" />
                                    <span class="custom-checkbox info bounceIn animation-delay4"></span>
                                </label>
                                Remember me		
                            </div>
                            <div class="seperator"></div>
                            <div class="form-group">
                                Forgot your password?<br/>
                                Click <a href="#">here</a> to reset your password
                            </div>
                            <hr/>
                            <button type="submit" class="btn btn-success btn-sm bounceIn animation-delay5 pull-right"><i class="fa fa-sign-in"></i> Sign in</button>
                        </form>
                    </div>
                </div><!-- /panel -->
            </div><!-- /login-widget -->
        </div><!-- /login-wrapper -->
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- Jquery -->
        <script src="<?=  base_url()?>public/js/jquery-1.10.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?=  base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
        <!-- Modernizr -->
        <script src='<?=  base_url()?>public/js/modernizr.min.js'></script>
        <!-- Pace -->
        <script src='<?=  base_url()?>public/js/pace.min.js'></script>
        <!-- Popup Overlay -->
        <script src='<?=  base_url()?>public/js/jquery.popupoverlay.min.js'></script>
        <!-- Slimscroll -->
        <script src='<?=  base_url()?>public/js/jquery.slimscroll.min.js'></script>
        <!-- Cookie -->
        <script src='<?=  base_url()?>public/js/jquery.cookie.min.js'></script>
        <!-- Endless -->
        <script src="<?=  base_url()?>public/js/endless/endless.js"></script>
    </body>
</html>
