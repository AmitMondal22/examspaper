<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="<?php base_url(); ?>main_file/img/logo.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>admin/img/logo.png" type="image/gif" sizes="16x16">
    <title>examspaper</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>admin/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        <?php $this->load->view('admin_view/ins_admin/style.php') ?>
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            <?php $this->load->view('admin_view/ins_admin/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('admin_view/ins_admin/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-4 text-gray-800">All quastion</h1> -->
                    <table class="table table-hover table-striped table-bordered" >
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Upload Date</th>
                            <th>Institute</th>
                            <th>stream</th>
                            <th>year</th>
                            <th>subject</th>
                            <th>quastion</th>
                            <!-- <th>Publish</th> -->
                            <th>POST</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  foreach ($a_dataz as $d) { if ($d->publish=='deactive') {  ?>
                            <tr>
                                <td><?php echo $d->sq_id; ?></td>
                                <td><?php echo $d->q_post_date; ?></td>
                                <td><?php echo $d->institute_name; ?></td>
                                <td><?php echo $d->stream_name; ?></td>
                                <td><?php echo $d->year; ?></td>
                                <td><?php echo $d->subject_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>all_file/quastion_paper/<?php echo $d->q_file; ?>" class="btn btn-info">Open&Download</a>
                                </td>
                        <form action="act_action" method="post">
                                <td>
                                    <label class="switch" onchange='if(this.value != 0) { this.form.submit(); }'>
                                        <input type="checkbox" name="publi" value="active" <?php $a=$d->publish; $b="active"; if ($a==$b) {
                                            echo "checked";
                                        }
                                         ?> >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <input type="hidden" name="qust_id" value="<?php echo $d->sq_id; ?> ">

                                <!-- <td><input type="submit" value="POST" class="btn btn-primary"></td> -->
                        </form>
                                <td>
                                    <a href="<?php echo base_url(); ?>update-quastion/<?php echo $d->sq_id; ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>remove-quastion/<?php echo $d->sq_id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Quastion');">Remove</a>
                                </td>
                            </tr>
                            <?php }} ?>
                        
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>admin/js/sb-admin-2.min.js"></script>

</body>

</html>