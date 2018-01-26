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
                   Posts &nbsp; <a class="btn btn-default" href="<?php echo base_url('admin/new_post'); ?> " role="button">Add New</a>
                </h3>
                <span class="sub-title"></span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Posts List
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Author
                                </th>
                                <th>
                                    Categories
                                </th>
                                <th>
                                    Tags
                                </th>
                                <th>
                                    Date Published
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1/6/10
                                </td>
                                <td>
                                    Quebec
                                </td>
                                <td>
                                    Jones
                                </td>
                                <td>
                                    Pencil
                                </td>
                                <td>
                                    95
                                </td>
                            </tr>
                            </tbody>
                            </table>
                        </section>
                    </div>

                </div>
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
