<?php include 'v_create_app_header.php'?>
<form action="<?=base_url()?>create_app/platformSelection" method="post">
<div class="tab-pane fade in active" id="wizardContent2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Platform selection</h5>
        </div><br/><br/>
        <div class="panel-body no-padding">
            <div class="row">
                <?php
                foreach($platforms as $platform)
                {?>
                    <div class="col-md-2 text-center">
                        <label class="label-checkbox inline">
                            <input type="radio" checked value="<?=$platform->id?>" name="platform">
                            <span class="custom-radio"></span>
                            <?=$platform->platformName?>
                        </label>
                        <div class="gallery-item" style="margin-top:10px;">
                            <img src="<?=base_url().$platform->platformImage?>" alt="gallery4">
                        </div><!-- /gallery-item -->
                    </div><!-- /.col -->
                <?php
                }?>
            </div>
        </div>
    </div><!-- /panel -->
</div><!---Platform selection ends---->
    <!----Footer starts here---------->
</div>
<div class="panel-footer">
    <a href="<?=base_url()?>create_app/categorySelection" class="btn btn-success btn-sm enabled" id="prevStep" enabled>Previous</a>
    <button type="submit" class="btn btn-sm btn-success" id="nextStep">Next</button>

    <div class="pull-right" style="width:30%">
        <div class="progress progress-striped active m-top-sm m-bottom-none">
            <div class="progress-bar progress-bar-success" id="wizardProgress" style="width:<?=$step*25?>%;"></div>
        </div>
    </div>
</div>
</form>
</div><!-- /panel -->
</div><!-- /.padding20 -->
</div><!-- /main-container -->
</div><!-- /wrapper -->

<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>
<?php include 'v_create_app_footer.php' ?>