<?php
require '../../../includes/conn.php';
session_start();


if (isset($_POST['submit'])) {

    $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);
    $subject_description = mysqli_real_escape_string($conn, $_POST['subject_description']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $grade_level = mysqli_real_escape_string($conn, $_POST['grade_level']);
    $strand_name = mysqli_real_escape_string($conn, $_POST['strand_name']);

    $check_double = mysqli_query($conn, "SELECT * FROM tbl_subjects_senior 
    LEFT JOIN tbl_grade_levels ON tbl_grade_levels.grade_level_id = tbl_subjects_senior.grade_level_id
    LEFT JOIN tbl_semesters ON tbl_semesters.semester_id = tbl_subjects_senior.semester_id
    LEFT JOIN tbl_strands ON tbl_strands.strand_id = tbl_subjects_senior.strand_id
    WHERE tbl_subjects_senior.subject_code = '$subject_code' AND tbl_subjects_senior.subject_description = '$subject_description' AND tbl_subjects_senior.grade_level_id = '$grade_level' AND tbl_subjects_senior.semester_id = '$semester' AND tbl_subjects_senior.strand_id = '$strand_name'") or die(mysqli_error($conn));

    $result = mysqli_num_rows($check_double);


    if ($result == 0) {
        $insertUser = mysqli_query($conn, "INSERT INTO tbl_subjects_senior (subject_code, subject_description, semester_id, grade_level_id, strand_id) VALUES ('$subject_code', '$subject_description', '$semester', '$grade_level', '$strand_name')") or die(mysqli_error($conn));
        $_SESSION['success'] = true;
        header('location: ../add.sub.senior.php');
    } else {
        $_SESSION['subject_exists'] = true;
        header('location: ../add.sub.senior.php');
    }
}