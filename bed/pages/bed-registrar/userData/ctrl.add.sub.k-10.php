<?php
require '../../../includes/conn.php';
session_start();


if (isset($_POST['submit'])) {

    $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);
    $subject_description = mysqli_real_escape_string($conn, $_POST['subject_description']);
    $grade_level = mysqli_real_escape_string($conn, $_POST['grade_level']);

    $check = mysqli_query($conn, "SELECT *, tbl_grade_levels.grade_level_id FROM tbl_subjects LEFT JOIN tbl_grade_levels.grade_level_id = tbl_subjects.grade_level_id WHERE subject_code = '$subject_code' AND subject_description = '$subject_description' AND grade_level = '$grade_level'");
    $input = mysqli_num_rows($check);

    if ($input == 0) {
        $insertUser = mysqli_query($conn, "INSERT INTO tbl_subjects (subject_code, subject_description, grade_level_id) VALUES ('$subject_code', '$subject_description', '$grade_level')");
        $_SESSION['success'] = true;
        header('location: ../add.sub.k-10.php');
    } else {
        $_SESSION['subject_exists'] = true;
        header('location: ../add.sub.k-10.php');
    }
}