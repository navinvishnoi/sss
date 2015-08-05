        <!-- jQuery 2.0.2 -->
        <script src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo asset_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo asset_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo asset_url(); ?>js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="<?php echo asset_url(); ?>js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="<?php echo asset_url(); ?>js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="<?php echo asset_url(); ?>js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

            });
        </script>
