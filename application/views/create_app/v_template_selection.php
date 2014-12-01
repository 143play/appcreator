<?php include 'v_create_app_header.php'?>
<div class="tab-pane fade in active" id="wizardContent3">
    <div class="panel-heading">
        <h5>Template selection</h5>
    </div><br/><br/>
    <div class="panel-body no-padding">
        <div class="row">
            <?php
            foreach($templates as $template)
            {?>
                <div class="col-md-2 text-center">
                    <label class="label-checkbox inline">
                        <input type="radio" value="<?=$template->id?>" name="template">
                        <span class="custom-radio"></span>
                        <?=$template->templateName?>
                    </label>
                    <div class="gallery-item" style="margin-top:10px;">
                        <a class="image-wrapper gallery-zoom" href="img/3.png">
                            <img src="<?=base_url().$template->templateImage?>" alt="gallery4">
                            <div class="image-overlay">
                                <div class="image-info">
                                    <div class="h3"><?=$template->templateName?></div>
                                    <span><?=$template->details?></span>
                                    <div class="image-time" style="margin-bottom: 20px; text-align: center;">2013-10-22</div>
                                    <div class="image-like">
                                        <i class="fa fa-heart"></i>
                                        26 Likes
                                    </div>
                                </div>
                            </div>
                        </a><!-- /image-wrapper -->
                    </div><!-- /gallery-item -->
                </div><!-- /.col -->
            <?php
            }?>
        </div><!-- /.row -->
    </div><!-- /.panel-body -->
</div><!---Template selection ends---->
</div>
<!----Footer starts here---------->
<div class="panel-footer">
    <button class="btn btn-success btn-sm disabled" id="prevStep" disabled>Previous</button>
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