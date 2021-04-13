<?php

if (!empty($_SESSION['role'])) {
    if ($_SESSION['role'] == "Master Key") {
        $mk_id = $_SESSION['mk_id'];
        if ($mk_id == false) {
            header("location: ../bed-login/login.php");
        }
    } elseif ($_SESSION['role'] == "Registrar") {
        $reg_id = $_SESSION['reg_id'];
        if ($reg_id == false) {
            header("location: ../bed-login/login.php");
        }
    } else {
        header("location: ../bed-login/login.php");
    }
} else {
    header("location: ../bed-login/login.php");
}