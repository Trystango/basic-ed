<?php
require '../../../includes/conn.php';
session_start();

if (isset($_POST['submit'])) {

    $eay = mysqli_real_escape_string($conn, $_POST['eay']);

    $check_double = mysqli_query($conn, "SELECT * FROM tbl_efacadyears WHERE efacadyear = '$eay'");
    $result = mysqli_num_rows($check_double);

    if ($result > 0) {
        $_SESSION['year-exists'] = true;
        header('location: ../add.date.php');
    } else {
        $insert = mysqli_query($conn, "INSERT INTO tbl_efacadyears (efacadyear) VALUES ('$eay')") or die(mysqli_error($conn));
        $_SESSION['success'] = true;
        header('location: ../add.date.php');
    }
}