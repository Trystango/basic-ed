<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-red elevation-4">
    <!-- Brand Logo -->
    <a href="../bed-dashboard/index.php" class="brand-link text-md text-light pt-3 pb-3">
        <img src="../../../assets/img/logo.png" alt="SFAC Logo" class="brand-image img-circle elevation-3"
            style="opacity: .9">
        <span class="brand-text font-weight-light">SFAC Bacoor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php
                if ($_SESSION['role'] == "Master Key") {
                    $get_user = mysqli_query($conn, "SELECT * FROM tbl_master_key WHERE mk_id = '$mk_id'");
                    while ($row = mysqli_fetch_array($get_user)) {
                        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" class="img-circle elevation-2 zoom" alt="User image">
                        </div>
                    <div class="info">
                     <a href="#" class="d-block">' . $row['name'];
                    }
                } ?>


                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <?php if ($_SESSION['role'] == "Master Key") {
                    echo '<li class="nav-item menu-open">
                    <a href="../bed-dashboard/index.php" id="loadfile" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../bed-master_key/list.registrar.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Registrars List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../bed-master_key/list.principal.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Principals List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../bed-master_key/list.adviser.php" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Advisers List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../bed-master_key/add.registrar.php" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Registrar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../bed-master_key/add.principal.php" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Principal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../bed-master_key/add.adviser.php" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Adviser
                        </p>
                    </a>
                </li>';
                } ?>
                <!--  End Master Key  -->



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>