<?php
require '../../includes/conn.php';
ob_start();
session_start();

// Submit button <-- login.php 
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    // Username Verify
    $master_key = mysqli_query($conn, "SELECT * FROM tbl_master_key WHERE username = '$username'");
    $numrow_mk = mysqli_num_rows($master_key);


    //End Username Verify

    //password verify
    if ($numrow_mk > 0) {
        while ($row = mysqli_fetch_array($master_key)) {
            $checkPWDhash = password_verify($password, $row['password']);
            if ($checkPWDhash == false) {
                $_SESSION['pwd-error'] = true;
                header("location: login.php");
            } elseif ($checkPWDhash == true) {
                header("Location: ../../index.php");
            }
        }
    } else {
        $_SESSION['no-input'] = true;
        header("location: login.php");
    }
}
// End password verify