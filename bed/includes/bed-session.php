<?php
$mk_id = $_SESSION['mk_id'];
if ($_SESSION['role'] != "Master Key") {
    header("location: ../bed-login/login.php");
}