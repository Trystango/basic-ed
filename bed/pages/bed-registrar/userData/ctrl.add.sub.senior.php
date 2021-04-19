<?php
require '../../../includes/conn.php';
session_start();


if (isset($_POST['submit'])) {

    $subject_code = mysqli_real_escape_string($conn, $_POST['subject_code']);
    $subject_description = mysqli_real_escape_string($conn, $_POST['subject_description']);
    $semester = mysqli_real_escape_string($conn, $_POST['semester']);
    $grade_level = mysqli_real_escape_string($conn, $_POST['grade_level']);
    $strand_name = mysqli_real_escape_string($conn, $_POST['strand_name']);

    $check = mysqli_query($conn, "SELECT *, tbl_grade_levels.grade_level_id FROM tbl_subjects
        LEFT JOIN tbl_semesters.semester_id = tbl_subjects_senior.semester_id,
        LEFT JOIN tbl_grade_levels.grade_level_id = tbl_subjects_senior.grade_level_id,
        LEFT JOIN tbl_strands.strand_id = tbl_subjects_senior.strand_id
        WHERE subject_code = '$subject_code' AND subject_description = '$subject_description' AND semester = '$semester' AND grade_level = '$grade_level' AND strand_name = '$strand_name'");
    $input = mysqli_num_rows($check);

    if ($input == 0) {
        $insertUser = mysqli_query($conn, "INSERT INTO tbl_subjects_senior (subject_code, subject_description, semester_id, grade_level_id, strand_id) VALUES ('$subject_code', '$subject_description', '$semester', '$grade_level', '$strand_name')");
        $_SESSION['success'] = true;
        header('location: ../add.sub.senior.php');
    } else {
        $_SESSION['subject_exists'] = true;
        header('location: ../add.sub.senior.php');
    }
}