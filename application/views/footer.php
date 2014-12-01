
</div><!-- /wrapper -->

<a href="" id="scroll-to-top" class="hidden-print"><i class="fa fa-chevron-up"></i></a>

<!-- Logout confirmation -->
<div class="custom-popup width-100" id="logoutConfirm">
    <div class="padding-md">
        <h4 class="m-top-none"> Do you want to logout?</h4>
    </div>
    <div class="text-center">
        <a class="btn btn-success m-right-sm" href="<?= base_url()?>welcome/logout">Logout</a>
        <a class="btn btn-danger logoutConfirm_close">Cancel</a>
    </div>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery -->
<script src="<?= base_url() ?>public/js/jquery-1.10.2.min.js"></script>

<!-- Bootstrap -->
<script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
<!-- Flot -->
<script src='<?= base_url() ?>public/js/jquery.flot.min.js'></script>

<!-- Morris -->
<script src='<?= base_url() ?>public/js/rapheal.min.js'></script>	
<script src='<?= base_url() ?>public/js/morris.min.js'></script>

<!-- Colorbox -->
<script src='<?=  base_url()?>public/js/jquery.colorbox.min.js'></script>

<!-- Sparkline -->
<script src='<?= base_url() ?>public/js/jquery.sparkline.min.js'></script>

<!-- Pace -->
<script src='<?= base_url() ?>public/js/pace.min.js'></script>

<!-- Popup Overlay -->
<script src='<?= base_url() ?>public/js/jquery.popupoverlay.min.js'></script>

<!-- Slimscroll -->
<script src='<?= base_url() ?>public/js/jquery.slimscroll.min.js'></script>

<!-- Modernizr -->
<script src='<?= base_url() ?>public/js/modernizr.min.js'></script>

<!-- Cookie -->
<script src='<?= base_url() ?>public/js/jquery.cookie.min.js'></script>

<!-- Endless -->
<script src="<?= base_url() ?>public/js/endless/endless_dashboard.js"></script>
<script src="<?= base_url() ?>public/js/endless/endless.js"></script>

<!-- Dropzone -->
<script src='<?= base_url() ?>public/js/dropzone.min.js'></script>

<!-- holder -->
<script src='<?= base_url() ?>public/js/uncompressed/holder.js'></script>

<!-- Datatable -->
<script src='<?= base_url() ?>public/js/jquery.dataTables.min.js'></script>

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
<script>
    $(function() {
        //Colorbox 
        $('.gallery-zoom').colorbox({
            rel: 'gallery',
            maxWidth: '90%',
            width: '800px'
        });
    });
</script>
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