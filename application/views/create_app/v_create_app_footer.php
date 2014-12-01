

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

<script>
    var jq1102 = jQuery.noConflict(true);

    jq1102(function() {
        var currentStep = 1;

        $('#wizardTab li a').click(function() {
            return false;
        });

        $('#nextStep').click(function() {

            currentStep++;

            if (currentStep == 2) {
                $('#wizardTab li:eq(1) a').tab('show');
                $('#wizardProgress').css("width", "66%");

                $('#prevStep').attr('disabled', false);
                $('#prevStep').removeClass('disabled');
            }
            else if (currentStep == 3) {
                $('#wizardTab li:eq(2) a').tab('show');
                $('#wizardProgress').css("width", "100%");

                $('#nextStep').attr('disabled', true);
                $('#nextStep').addClass('disabled');
            }

            return false;
        });

        $('#prevStep').click(function() {

            currentStep--;

            if (currentStep == 1) {

                $('#wizardTab li:eq(0) a').tab('show');
                $('#wizardProgress').css("width", "66%");

                $('#prevStep').attr('disabled', true);
                $('#prevStep').addClass('disabled');

                $('#wizardProgress').css("width", "33%");
            }
            else if (currentStep == 2) {

                $('#wizardTab li:eq(1) a').tab('show');
                $('#wizardProgress').css("width", "66%");

                $('#nextStep').attr('disabled', false);
                $('#nextStep').removeClass('disabled');

                $('#wizardProgress').css("width", "66%");
            }

            return false;
        });
    });
</script>



<!-- Colorbox -->
<script src='<?=base_url()?>public/js/jquery.colorbox.min.js'></script>

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

</body>
</html>
