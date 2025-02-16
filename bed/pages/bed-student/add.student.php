<?php
require '../../includes/conn.php';
session_start();
ob_start();


require '../../includes/bed-session.php';
?>


<!DOCTYPE html>
<html lang="en">

<!-- Head and links -->

<head>
    <title>SFAC | Add Students</title>
    <?php include '../../includes/bed-head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link disabled text-light">Add Student</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link disabled text-light">Basic Education</a>
                </li>
            </ul>
            <?php include '../../includes/bed-navbar.php'; ?>

            <!-- sidebar menu -->
            <?php include '../../includes/bed-sidebar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper pt-4">


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid pl-5 pr-5 pb-3">
                        <div class="card card-info shadow-lg">
                            <div class="card-header">
                                <h3 class="card-title">Student Sign up Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="userData/ctrl.addStud.php" enctype="multipart/form-data" method="POST">
                                <div class="card-body">

                                    <div class="row mb-4 mt-4 justify-content-center">
                                        <div class="input-group col-sm-5 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="studno"
                                                placeholder="Student ID" required>
                                        </div>


                                        <div class="input-group col-sm-5 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="lrn"
                                                placeholder="Learner Reference Number(LRN)" required>
                                        </div>

                                    </div>


                                    <div class="row mb-4">


                                        <!-- <div class="form-group col-sm-6 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                                <select class="form-control select2 select2-info"
                                                    data-placeholder="Select Grade Level"
                                                    data-dropdown-css-class="select2-info" style="width: 100%;">
                                                    <option selected="selected">
                                                        Select Grade Level
                                                    </option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- /.form-group -->


                                        <div class="input-group col-sm-5 mb-2 ml-auto mr-auto">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="username"
                                                placeholder="Username" required>
                                        </div>
                                    </div>


                                    <div class="row mb-4 justify-content-center">
                                        <div class="input-group col-sm-5 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                        </div>


                                        <div class="input-group col-sm-5 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" name="password2"
                                                placeholder="Confirm Password" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="submit" class="btn btn-info"><i
                                            class="fa fa-user-plus"></i> Add</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->


            <!-- Footer and script -->
            <?php include '../../includes/bed-footer.php';  ?>



</body>

</html>