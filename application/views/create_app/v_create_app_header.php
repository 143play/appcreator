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

    <!-- Endless -->
    <link href="<?=base_url()?>public/css/endless.min.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/endless-skin.css" rel="stylesheet">

    <!---Dropzone---->
    <link href="<?=base_url()?>public/css/dropzone/dropzone.css" rel="stylesheet">

    <!-- creator -->
    <link type="text/css" href="<?=base_url()?>public/css/jquery.ui.theme.css" rel="stylesheet" />
    <link type="text/css" href="<?=base_url()?>public/css/jquery.ui.core.css" rel="stylesheet" />
    <link type="text/css" href="<?=base_url()?>public/css/jquery.ui.resizable.css" rel="stylesheet" />
    <link type="text/css" href="<?=base_url()?>public/css/jquery.ui.slider.css" rel="stylesheet" />
    <link type="text/css" href="<?=base_url()?>public/css/style1.css" rel="stylesheet" />
    <script type="text/javascript" src="<?=base_url()?>public/json2.js"></script>

    <!-- text edit -->
    <script type="text/javascript" src="<?=base_url()?>public/js/textedit/jquery-1.4.2.min.js"></script>
<!--    <script type="text/javascript" src="--><?//=base_url()?><!--public/js/textedit/easy-editable-text.js"></script>-->
<!--    <style type="text/css">-->
<!--        input[type=text],input[type=textarea]-->
<!--        {-->
<!--            margin-top:5px;-->
<!--            font-size:12px;-->
<!--            color:#545454;-->
<!--            -moz-border-radius: 2px;-->
<!--            -webkit-border-radius: 2px;-->
<!--            -border-radius: 2px;-->
<!--            display:none;-->
<!--            width:200px;-->
<!--        }-->
<!---->
<!--        label-->
<!--        {-->
<!--            margin-top:5px;-->
<!--            font-size:12px;-->
<!--            color:#545454;-->
<!--            -moz-border-radius: 2px;-->
<!--            -webkit-border-radius: 2px;-->
<!--            -border-radius: 2px;-->
<!--        }-->
<!---->
<!--        .edit-->
<!--        {-->
<!--            float:right;-->
<!--            background:url(images/edit.png) no-repeat;-->
<!--            width:32px;-->
<!--            height:32px;-->
<!--            display:block;-->
<!--            cursor: pointer;-->
<!--            margin-left:10px;-->
<!--        }-->
<!--    </style>-->
</head>
<?php include 'navbar.php';?>
<div id="main-container">
    <div class="padding-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create New Project
            </div>
            <div class="panel-tab">
                <ul class="wizard-steps" id="wizardTab">
                    <li <?php if($activeStep == "category"){echo ' class="active"';}?>>
<!--                        <a href="#wizardContent1" data-toggle="tab">Step 1</a>-->
                        <a href="" data-toggle="">Step 1</a>
                    </li>
                    <li <?php if($activeStep == "platform"){echo ' class="active"';}?>>
<!--                        <a href="#wizardContent2" data-toggle="tab">Step 2</a>-->
                        <a href="" data-toggle="">Step 2</a>
                    </li>
                    <li <?php if($activeStep == "template"){echo ' class="active"';}?>>
<!--                        <a href="#wizardContent3" data-toggle="tab">Step 3</a>-->
                        <a href="" data-toggle="">Step 3</a>
                    </li>
                    <li <?php if($activeStep == "dragable"){echo ' class="active"';}?>>
<!--                        <a href="#wizardContent4" data-toggle="tab">Step 4</a>-->
                        <a href="" data-toggle="">Step 4</a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
