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
    <title>SFAC | Add Student</title>
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
                                <h3 class="card-title">Add Subjects for Primary to Junior High School Deparment</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="userData/ctrl.add.sub.k-10.php" enctype="multipart/form-data" method="POST">
                                <div class="card-body">

                                    <div class="row mb-4 mt-4">
                                        <div class="input-group col-sm-3 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="subject_code"
                                                placeholder="Subject Code" required>
                                        </div>


                                        <div class="input-group col-sm-6 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="subject_description"
                                                placeholder="Subject Description" required>
                                        </div>
                                        <div class="input-group col-sm-3 mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                            </div>
                                            <select class="form-control" name="grade_level">
                                                <option disabled selected>Grade Level</option>
                                                <?php
                                                $query = mysqli_query($conn, "SELECT * from tbl_grade_levels LIMIT 13");
                                                    while ($row2 = mysqli_fetch_array($query)){
                                                        echo '<option value="'.$row2['grade_level_id'].'">'.$row2['grade_level'].'</option>';
                                                    }
                                                ?>
                                            </select>
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