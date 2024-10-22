<?php
require '../../../includes/conn.php';
session_start();

$sub_id = $_SESSION['get_subID'];

if (isset($_POST['submit'])) {

    $sub_code = mysqli_real_escape_string($conn, $_POST['subject_code']);
    $sub_desc = mysqli_real_escape_string($conn, $_POST['subject_description']);
    $units = mysqli_real_escape_string($conn, $_POST['units']);
    $prereq = mysqli_real_escape_string($conn, $_POST['prerequisites']);
    $sem = mysqli_real_escape_string($conn, $_POST['semester']);
    $grd_lvl = mysqli_real_escape_string($conn, $_POST['grade_level']);
    $strand = mysqli_real_escape_string($conn, $_POST['strand_name']);
    $eay = mysqli_real_escape_string($conn, $_POST['eay']);

    $check_double = mysqli_query($conn, "SELECT * FROM tbl_subjects_senior 
    -- LEFT JOIN tbl_grade_levels ON tbl_grade_levels.grade_level_id = tbl_subjects_senior.grade_level_id
    -- LEFT JOIN tbl_semesters ON tbl_semesters.semester_id = tbl_subjects_senior.semester_id
    -- LEFT JOIN tbl_strands ON tbl_strands.strand_id = tbl_subjects_senior.strand_id
    WHERE subject_code = '$sub_code' AND subject_description = '$sub_desc' AND units = '$units' AND pre_requisites='$prereq' AND grade_level_id = '$grd_lvl' AND semester_id = '$sem' AND strand_id = '$strand' AND efacadyear_id = '$eay'") or die(mysqli_error($conn));

    $result = mysqli_num_rows($check_double);

    if ($result > 0) {
        $_SESSION['subject_exists'] = true;
        header('location: ../edit.subjectSH.php?sub_id=' . $sub_id);
    } else {
        $update = mysqli_query($conn, "UPDATE tbl_subjects_senior SET subject_code = '$sub_code', subject_description = '$sub_desc', units = '$units', pre_requisites = '$prereq',  grade_level_id = '$grd_lvl', semester_id = '$sem', strand_id = '$strand', efacadyear_id = '$eay' WHERE subject_id = '$sub_id'") or die(mysqli_error($conn));
        $_SESSION['success-sub'] = true;
        header('location: ../edit.subjectSH.php?sub_id=' . $sub_id);
    }
}