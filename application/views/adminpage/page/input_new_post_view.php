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
                    Add New Posts
                </h3>
                <span class="sub-title">You can create posts</span>
                <div class="state-information">
                    <ol class="breadcrumb m-b-less bg-less">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Posts</a></li>
                        <li class="active">Add New Posts</li>
                    </ol>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <form role="form">
                        <div class="col-lg-9">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter title here</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter title here">
                                    </div>
                                </header>
                                <div class="panel-body">
                                    <div class="summernote"></div>  
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3">
                            <section class="panel">
                                <header class="panel-heading">
                                    Cover Post & Publish
                                </header>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="text-danger">Please Cover Post Not Empty Images</label>
                                         <input id="file-4" class="file" type="file" name="cover_post">
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Publish</button>
                                </div>
                                <div class="panel-footer">
                                    
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3">
                            <section class="panel">
                                <header class="panel-heading">
                                    Categories
                                </header>
                                <div class="panel-body">
                                    <label class="text-danger">Please Selected Categories Post</label>
                                    <select class="form-control m-b-10" name="categories_post" required>
                                        <option value="">-- Select Categories --</option>
                                        <?php foreach ($data_categori as $dt_categori): ?>
                                            <option value="<?php echo $dt_categori->kode_kategori ?>"><?php echo $dt_categori->nama_kategori ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3">
                            <section class="panel">
                                <header class="panel-heading">
                                    Tags
                                </header>
                                <div class="panel-body">
                                    <input type="text" name="tag_post" class="tags tags-input" data-type="tags" value=""/>
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

<script>

    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();

        $('.summernote').summernote({
            height: 500,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

</script>
</html>
