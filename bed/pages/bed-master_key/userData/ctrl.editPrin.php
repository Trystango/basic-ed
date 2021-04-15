<?php
require '../../../includes/conn.php';
session_start();

$prin_id = $_SESSION['get-prinID'];

if (isset($_POST['upload'])) {

    if (empty($_FILES['image']['tmp_name'])) {
        $_SESSION['no-img'] = true;
        header('location: ../edit.principals.php?prin_id=' . $prin_id);
    } else {
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $set_userInfo = mysqli_query($conn, "UPDATE tbl_principals SET img = '$image' WHERE prin_id = '$prin_id'");
        $_SESSION['success-prinEdit'] = true;
        header('location: ../edit.principal.php?prin_id=' . $prin_id);
    }
} elseif (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $midname = mysqli_real_escape_string($conn, $_POST['midname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

    if (empty($password) && empty($password2)) {
        $_SESSION['no-pwd'] = true;
        header('location: ../edit.principal.php?prin_id=' . $prin_id);
    } else {
        if ($password != $password2) {
            $_SESSION['error-pass'] = true;
            header('location: ../edit.principal.php?prin_id=' . $prin_id);
        } else {
            $hashpwd = password_hash($password, PASSWORD_BCRYPT);
            $insertUser = mysqli_query($conn, "UPDATE tbl_principals SET prin_fname = '$firstname', prin_lname = '$lastname', prin_mname = '$midname', email = '$email', username = '$username', password = '$hashpwd' WHERE prin_id = '$prin_id'");
            $_SESSION['success-prinEdit'] = true;
            header('location: ../edit.principal.php?prin_id=' . $prin_id);
        }
    }
}