<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once(APPPATH .'views/include/admin/include_admin_style.php'); ?>
    <style type="text/css" media="screen">
        .label-under-input {
            text-transform: initial;
            font-style: italic;
            color: #666;
        }
    </style>
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
                    Categories
                </h3>
                <span class="sub-title">Create categories posts</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <form role="form">
                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title here">
                                        <span class="label-under-input">The name is how it appears on your site</span>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="control-label">Slug</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title here">
                                        <span class="label-under-input">The "slug" is the URL-friendly version of the name. It is usally all lowercase
                                        and contains only letters, number, and hypens.</span>
                                    </div> -->
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary">Add New Category</button>
                                    </div>
                                </header>
                            </section>
                        </div>
                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading">
                                   
                                </header>
                                <div class="panel-body">
                                    <section class="panel">
                                        <table class="table responsive-data-table data-table">
                                        <thead>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Slug
                                            </th>
                                            <th>
                                                
                                            </th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_categori as $dt_categori): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $dt_categori->nama_kategori; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dt_categori->create_at ?>
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                   
                                                </tr>
                                        <?php endforeach ?>
                                        </tbody>
                                        </table>
                                    </section>
                                </div>
                            </section>
                        </div>
                    </form>
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
