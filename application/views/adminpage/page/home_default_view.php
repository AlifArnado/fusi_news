<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(APPPATH .'views/include/admin/include_admin_style.php'); ?>
</head>

<body class="sticky-header">

    <section>
        <?php $this->load->view('adminpage/sidebar_left'); ?>

        <!-- body content start-->
        <div class="body-content" >

            <?php $this->load->view('adminpage/header'); ?>

            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Dashboard
                </h3>
                <span class="sub-title">Welcome to Fusi dashboard</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2015 &copy; Fusi by Oranye Second Staff.
            </footer>
            <!--footer section end-->

        </div>
        <!-- body content end-->
    </section>

</body>
<?php require_once(APPPATH .'views/include/admin/include_admin_script.php'); ?>

<script type="text/javascript">
</script>
</html>
