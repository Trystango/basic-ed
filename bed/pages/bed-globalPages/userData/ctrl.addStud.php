<?php
require '../../../includes/conn.php';
session_start();


if (isset($_POST['submit'])) {

    $studno = mysqli_real_escape_string($conn, $_POST['studno']);
    $lrn = mysqli_real_escape_string($conn, $_POST['lrn']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

    if ($password != $password2) {
        $_SESSION['error-pass'] = true;
        header('location: ../add.student.php');
    } else {
        $hashpwd = password_hash($password, PASSWORD_BCRYPT);
        $insertUser = mysqli_query($conn, "INSERT INTO tbl_students (stud_no, lrn, username, password) VALUES ('$studno', '$lrn', '$username', '$hashpwd')");
        $_SESSION['success'] = true;
        header('location: ../add.student.php');
    }
}