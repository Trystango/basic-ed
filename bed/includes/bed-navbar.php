<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link pt-1" data-toggle="dropdown" href="#">
            <div class="user-panel d-flex">
                <div class="image">
                    <?php
                    if ($_SESSION['role'] == "Master Key") {
                        $get_user = mysqli_query($conn, "SELECT * FROM tbl_master_key WHERE mk_id = '$mk_id'");
                        while ($row = mysqli_fetch_array($get_user)) {
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '" class="img-circle elevation-0 mb-3" alt="User Image">';
                        }
                    }
                    ?>

                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <!-- <span class="dropdown-item dropdown-header"> </span> -->
            <a href="../bed-login/controllerLogin/ctrl.logout.php" class="dropdown-item">
                Logout

            </a>

        </div>
    </li>
</ul>
</nav>
<!-- /.navbar -->