<?php
require('../bed-fpdf/fpdf.php');




class PDF extends FPDF
{

    // Page header

}

$pdf = new PDF('L', 'mm', array(165, 139));
//left top right
$pdf->SetLeftMargin(13);
$pdf->SetRightMargin(10);
$pdf->SetAutoPageBreak(true, 8);
$pdf->AddPage();

// Logo(x axis, y axis, height, width)
$pdf->Image('../../../assets/img/logo.png', 33, 9, 10, 10);
// text color
$pdf->SetTextColor(255, 0, 0);
// font(font type,style,font size)
$pdf->SetFont('Arial', 'B', 11);
// Dummy cell
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(151, 5, 'SAINT FRANCIS OF ASSISI COLLEGE', 0, 1, 'C');
// Line break
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 11, 'C');
// dummy cell
// //cell(width,height,text,border,end line,[align])
$test = utf8_decode("");
$pdf->Cell(151, 5, '96 Bayanan ' . $test . ', City of Bacoor, Cavite', 0, 1, 'C');
// Line break
$pdf->Ln(1);
$pdf->SetFont('Arial', '', 11);
// dummy cell
// //cell(width,height,text,border,end line,[align])
$pdf->Ln(2);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(140, 4, 'STUDENTS COPY', 0, 1, 'R');
$pdf->Cell(140, 5, 'CERTIFICATE OF REGISTRATION AND STUDENTS INFORAMTION', 1, 0, 'C');
$pdf->Cell(10, 5, '', 0, 1);

$pdf->Ln(2);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(25, 4, 'Academic Year: ', 0, 0);
$pdf->Cell(40, 4, '', 'B', 0, 'C');
$pdf->Cell(28, 4, 'STUDENT TYPE: ', 0, 0);
$pdf->Cell(40, 4, '', 'B', 0, 'C');
$pdf->Cell(10, 5, '', 0, 1);
$pdf->Cell(25, 4, 'GRADE LEVEL: ', 0, 0);
$pdf->Cell(30, 4, '', 'B', 0, 'C');
$pdf->Cell(17, 4, 'SECTION: ', 0, 0);
$pdf->Cell(23, 4, '', 'B', 1, 'C');
$pdf->Cell(18, 4, 'STRAND: ', 0, 0);
$pdf->Cell(23, 4, '', 'B', 0, 'C');
$pdf->Cell(10, 5, '', 0, 1);

$pdf->Ln(1);
$pdf->Cell(13, 1, 'Name:', 0, 0);
$pdf->Cell(0, 1, '', 'B', 1, 'C');

$pdf->Ln(1);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(13, 3, '', 0, 0);
$pdf->Cell(35, 3, '(Family Name)', 0, 0, 'C');
$pdf->Cell(35, 3, '(First Name)', 0, 0, 'C');
$pdf->Cell(35, 3, '(Middle Name)', 0, 0, 'C');

$pdf->Ln(4);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(40, 4, 'COURSE NUMBER', 'T,L', 0, 'C');
$pdf->Cell(15, 7, 'Units', 'T,L,B', 0, 'C');
$pdf->Cell(15, 7, 'Days', 'T,L,B', 0, 'C');
$pdf->Cell(15, 7, 'Time', 'T,L,B', 0, 'C');
$pdf->Cell(10, 7, 'Room', 'T,L,R,B', 0, 'C');
$pdf->Cell(17, 4, 'Final', 'T', 0, 'C');
$pdf->Cell(0, 7, 'Professor', 1, 0, 'C');
$pdf->Cell(0, 4, '', 0, 1);

$pdf->Cell(40, 3, '(SUBJECTS)', 'L,B', 0, 'C');
$pdf->Cell(55, 3, '', 0, 0);
$pdf->Cell(17, 3, 'Rating', 'B', 0, 'C');


$pdf->Rect(13, 55, 40, 50);
$pdf->Rect(68, 55, 15, 50);
$pdf->Rect(98, 55, 10, 50);
$pdf->Rect(125, 55, 30, 50);

$pdf->SetXY(13, 100);
$pdf->Cell(0, 1, '', 1, 0);

$pdf->SetXY(13, 105);
$pdf->Cell(18, 4.5, 'No. of class', 'L,T', 0, 'C');
$pdf->Cell(15, 8, '', 1, 0, 'C');
$pdf->Cell(15, 4.5, 'Course', 'T', 0, 'C');
$pdf->Cell(15, 4.5, 'Total Fees', 'L,T', 0, 'C');
$pdf->Cell(40, 4.5, 'Adviser\'s Signature', 'R,L,T', 0, 'C');
$pdf->Cell(0, 4.5, 'VERIFIED BY:', 'R,T', 1, 'C');

$pdf->Cell(18, 3.5, 'cards issued:', 'L,B', 0, 'C');
$pdf->Cell(15, 3.5, '', 0, 0, 'C');
$pdf->Cell(15, 3.5, '', 'B', 0, 'C');
$pdf->Cell(15, 3.5, '', 'L,B', 0, 'C');
$pdf->Cell(40, 3.5, 'Over Printed Name', 'R,L', 0, 'C');
$pdf->Cell(0, 3.5, '', 'R', 1, 'C');

$pdf->Cell(18, 7, 'cards issued:', 'L,B', 0, 'C');
$pdf->Cell(15, 7, '', 'B,L,R', 0, 'C');
$pdf->Cell(15, 7, '', 'B', 0, 'C');
$pdf->Cell(15, 7, '', 'L,B', 0, 'C');
$pdf->Cell(40, 7, '', 'R,L,B', 0, 'C');
$pdf->Cell(0, 4, '', 'R', 1, 'C');

$pdf->Cell(103);
$pdf->Cell(0, 3, 'Dean/Chairperson', 'R,B', 1, 'C');





$pdf->SetFont('Arial', 'B', 4.5);
$pdf->SetTopMargin(13);
$pdf->SetLeftMargin(13);
$pdf->AddPage();
$pdf->Cell(0, 2.3, 'RULES CONCERNING FEES:', 0, 1, 'L');
$pdf->Cell(0, 2.3, '', 0, 1, 'L');
$pdf->Cell(0, 2.3, 'PAYMENT OF FEES:', 0, 1, 'L');
$pdf->SetFont('Arial', '', 4.5);
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'All fees are computed on the semestral or school term basis and are payable in upon registration. The total fees may be paid by installment under the terms', 0, 1, 'L');
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'but is should not be interpreted, however, that the fees are payable on the month-to-month basis:', 0, 1, 'L');
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '1. Down payment 40% of the total fees to be paid upon registration.', 0, 1, 'L');
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '2. Second installment 70% of the total fees to be paid on or beore the first periodic examination', 0, 1, 'L');
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '3. Third installment 100% of the total fees to be paid on or before the mid semestral examination.', 0, 1, 'L');
$pdf->Cell(0, 2.3, '', 0, 1, 'L');
$pdf->SetFont('Arial', 'B', 4.5);
$pdf->Cell(0, 2.3, 'DISCOUNT PRIVILEGE:', 0, 1, 'L');

$pdf->SetFont('Arial', '', 4.5);
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'Discount on tuition fee only, may be given under the following conditions.', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '1. 5% discount is given if the total fees is paid in full upon registration,', 0, 1, 'L');
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '2. 5%, 10%, 15%, 20%, and 25% is given to second, third, fourth, fifth, and six brothers/sisters respectively', 0, 1, 'L');
$pdf->Cell(0, 2.3, '', 0, 1, 'L');

$pdf->SetFont('Arial', 'B', 4.5);
$pdf->Cell(0, 2.3, 'ADJUSTMENT OF FEES DUE TO WITHDRAWAL OF ENROLLMENT:', 0, 1, 'L');

$pdf->SetFont('Arial', '', 4.5);
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'Section VI, paragrap 137 & 139 of Manual of Regulations of Private Schools, Seventh Edition, 1970 of the Bureau of Private Schools, which is quoted below govern the refund or', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'adjustment of fees:', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '"137, When a student registers in a school, it is understood that he is enrolling for the entire school year for elementary and secondary courses, and for the entire semester for the collegiate', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'courses. A student who transfers on otherwise withdraws, In writing, within two weeks after the beginning of classes and who has already paid the pertinent tuition and other school fees', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'in full on any length longer than one month may be charged ten percent (10%) of the total amount due for the term if the withdraws within the first week of classes, or twenty percent (20%)', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'if within the second week of classes, regardless of whether or not he has actually attended classes. The student may be charged all the school fees in full if the withdraw anytime after the', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'second week of classes. However, if the transfer on withdrawal is due to a justifiable reason, the student shall be charged the pertinent fees up to an including the last month of', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, '"139. Full refund of fees shall be made for any course or level which has been discontinued by the school or not', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'credited by the office thru no fault of the student."', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'The fees paid for registration and identification card are not refundable.', 0, 1, 'L');
$pdf->Cell(0, 2.3, '', 0, 1, 'L');

$pdf->SetFont('Arial', 'B', 4.5);
$pdf->Cell(0, 2.3, 'NON-PAYMENT OF ACCOUNT:', 0, 1, 'L');

$pdf->SetFont('Arial', '', 4.5);
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'The administration reserves the right to suspend or drop from the rolls any student who has not paid in full his/her financial obligations on or before the scheduled dated of the third', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'periodic examination. It is also reserves the right to withhold from a student the issuance of report card (form 138), honorable dismissal, certification, or other on other records, unless the', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'student has fully settled his/her financial obligation or property with the collage.', 0, 1, 'L');

$pdf->Cell(0, 2.3, '', 0, 1, 'L');


$pdf->SetFont('Arial', 'B', 4.5);
$pdf->Cell(0, 2.3, 'CHANGE OF SUBJECT, LOAD, SECTION OR COURSE:', 0, 1, 'L');

$pdf->SetFont('Arial', '', 4.5);
$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'Any student who have desires to change his subkect load section, or course must secure an application from the Registrar\'s Office accomplish it and have it approved by the Registrar\'s Office', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'within seven days after the first day of classes in order to entitle him to the corresponding adjustment fees.', 0, 1, 'L');


$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'If the dropping of any subjects is made after the said period, even if it is approved by the Registrar, the student is no longer entitled to the corresponding reduction fees.', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'If the change in the subject load or section is recommended by the Registrar or proper authorities, corresponding adjustment of fees will be made regardless of the date when affected.', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'Except when the change of subject load, section, or course is recommended by the Registrar or proper authorities application thereof shall no longer be entertained after seven (7) days from', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'start of classes', 0, 1, 'L');

$pdf->Cell(7, 2.3, '', 0, 0);
$pdf->Cell(0, 2.3, 'During the summer term, application for change of subkect load shall no longer be entertained after three (3) days from the start of the classes.', 0, 1, 'L');

$pdf->Cell(0, 2.3, '', 0, 1, 'L');

$pdf->SetFont('Arial', 'B', 5);
$pdf->Cell(0, 2.3, 'PLEASE RECORD YOUR PAYMENTS BELOW FOR REFERENCES', 0, 1, 'L');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(29, 3, 'Date', 1, 0, 'C');
$pdf->Cell(24, 3, 'O.R. No.', 1, 0, 'C');
$pdf->Cell(22, 3, 'Amount Paid', 1, 0, 'C');
$pdf->Cell(24, 3, 'Date', 1, 0, 'C');
$pdf->Cell(21, 3, 'O.R. No.', 1, 0, 'C');
$pdf->Cell(23, 3, 'Amount Paid', 1, 1, 'C');

$pdf->Cell(29, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(22, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(21, 3, '', 1, 0, 'C');
$pdf->Cell(23, 3, '', 1, 1, 'C');
$pdf->Cell(29, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(22, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(21, 3, '', 1, 0, 'C');
$pdf->Cell(23, 3, '', 1, 1, 'C');
$pdf->Cell(29, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(22, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(21, 3, '', 1, 0, 'C');
$pdf->Cell(23, 3, '', 1, 1, 'C');
$pdf->Cell(29, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(22, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(21, 3, '', 1, 0, 'C');
$pdf->Cell(23, 3, '', 1, 1, 'C');
$pdf->Cell(29, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(22, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(21, 3, '', 1, 0, 'C');
$pdf->Cell(23, 3, '', 1, 1, 'C');
$pdf->Cell(29, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(22, 3, '', 1, 0, 'C');
$pdf->Cell(24, 3, '', 1, 0, 'C');
$pdf->Cell(21, 3, '', 1, 0, 'C');
$pdf->Cell(23, 3, '', 1, 1, 'C');


$pdf->Output();



?>





<?php
require('../fpdf/fpdf.php');




class PDF extends FPDF
{

    // Page header

}

$pdf = new PDF('P', 'mm', 'Legal');
//left top right
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

// Logo(x axis, y axis, height, width)
$pdf->Image('../../assets/img/logo.png', 50, 5, 15, 15);
// text color
$pdf->SetTextColor(255, 0, 0);
// font(font type,style,font size)
$pdf->SetFont('Arial', 'B', 18);
// Dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(110, 5, 'Saint Francis of Assisi College', 0, 0, 'C');
// Line break
$pdf->Ln(5);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 10, 'C');
// dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(90, 3, '96 Bayanan, City of Bacoor, Cavite', 0, 0, 'C');
// Line break
$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 10, 'C');
// dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(90, 4, 'Senior High School Department', 0, 0, 'C');
// Line break
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10, 'C');
// dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(90, 4, 'Track:Academic', 0, 0, 'C');
// Line break
$pdf->Ln(4);
$pdf->SetFont('Arial', 'B', 10, 'C');
// dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(90, 4, 'Accountancy, Business and Management (ABM)', 0, 1, 'C');

// Line break

$pdf->SetFont('Arial', '', 10, 'C');
// dummy cell
$pdf->Cell(50);
// //cell(width,height,text,border,end line,[align])
$pdf->Cell(90, 4, '(Effective Academic Year 2018-2019)', 0, 1, 'C');
// Line break
$pdf->Ln(4);




//cell(width,height,text,border,end line,[align])
//student name
$pdf->Cell(15, 5, 'Name:', 0, 0);
$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(115, 5, '', 'B', 0); //end of line


//student no
$pdf->SetFont('Arial', '', '10');
$pdf->Cell(25, 5, 'Student No:', 0, 0);
$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(30, 5, '', 'B', 1); //end of line

//dummy cells
$pdf->Cell(20, 5, '', 0, 1);
$pdf->Cell(20, 5, '', 0, 0);

$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(20, 5, 'CODE', 0, 0);
$pdf->Cell(90, 5, 'Description', 0, 0, 'C');
$pdf->Cell(34, 5, 'UNITS', 0, 0, 'C');
$pdf->Cell(60, 5, 'Pre-Requisites', 0, 1);


//YEAR , SEMESTER
$pdf->Cell(10, 5, '', 0, 1);
$pdf->Cell(10, 5, '', 0, 1);
$pdf->Cell(10, 5, '', 0, 0);


$pdf->Cell(45, 5, 'Grade 11, First Semester', 0, 1);
$pdf->SetFont('Arial', '', '9');
// SUBJECTS

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ENG', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'Oral Communication', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'FIL', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'Komunikasyon at Panaliksik at Wikang Filipino at Kulturang Pilipino', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'HUM', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'Contemporary Philippine Arts from the Regions', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'MAT', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'General Mathematics', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'SCI', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'Earth and Life Science(Lec/Lab)', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'SOC', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->SetFont('Arial', '', '8');
$pdf->Cell(90, 4, 'Personal Development', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'PEH', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'Physical Education and Health 1', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '113', 0, 0);
$pdf->Cell(90, 4, 'Fundamental of Accountancy, Bus. and Mgt. 1', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'CHL', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'Christioan Living', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

// LAST LINE PER SEM
$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '112', 0, 0);
$pdf->Cell(90, 4, 'Organization and Management', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(9, 4, '', 'B', 0);
$pdf->Cell(7, 4, '', 'B', 1);


$pdf->Cell(20, 5, '', 0, 0);

$pdf->SetFont('Arial', '', '10');
$pdf->Cell(102, 5, '', 0, 0);
$pdf->Cell(32, 6, 'TOTAL', 0, 0);

$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(10, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);









//YEAR , SEMESTER
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(45, 5, 'Grade 11, Second Semester', 0, 1);


// SUBJECTS
$pdf->SetFont('Arial', '', '9');

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'FIL', 0, 0);
$pdf->Cell(15, 4, '102', 0, 0);
$pdf->Cell(90, 4, 'Pagbasa at Pagsulat Tungo sa Pananaliksik', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ENG', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->Cell(90, 4, 'Reading and Writing', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);



$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'HUM', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->Cell(90, 4, '21st Century Literature from the Philippine and the World', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->Cell(90, 4, 'Business Math', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'MAT', 0, 0);
$pdf->Cell(15, 4, '122', 0, 0);
$pdf->Cell(90, 4, 'Statistics and Probability', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '122', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'Fundamental of Accountancy, Business & Management', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'RES', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'Qualitative Research in Daily Life', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'PHY', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->Cell(90, 4, 'Physical Science', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'PEH', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->Cell(90, 4, 'Physical Education and Health 2', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

// LAST LINE PER SEM
$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'CHL', 0, 0);
$pdf->Cell(15, 4, '121', 0, 0);
$pdf->Cell(90, 4, 'Christian Living', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(9, 4, '', 'B', 0);
$pdf->Cell(7, 4, '', 'B', 1);



$pdf->Cell(20, 5, '', 0, 0);

$pdf->SetFont('Arial', '', '10');
$pdf->Cell(102, 5, '', 0, 0);
$pdf->Cell(32, 6, 'TOTAL', 0, 0);
$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(10, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);










//YEAR , SEMESTER
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(45, 5, 'Grade 12, First Semester', 0, 1);

// SUBJECTS

$pdf->SetFont('Arial', '', '9');
$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ENG', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->Cell(90, 4, 'English for Academic and Professional Purposes', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'FIL', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->Cell(90, 4, 'Pagsulat sa Filipino sa Piling Larangan', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);



$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'SOC', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->Cell(90, 4, 'Understanding Culture, Society and Politics', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'PHI', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->Cell(90, 4, 'Introduction to Philosophy of the Human Person', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'CHL', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->Cell(90, 4, 'Christian Living 3', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'PEH', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'Physical Education and Health 3', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'RES', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'Quantitative Research in Daily Life', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ENT', 0, 0);
$pdf->Cell(15, 4, '211', 0, 0);
$pdf->Cell(90, 4, 'Entrepreneurship', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '111', 0, 0);
$pdf->Cell(90, 4, 'Principles in Marketing', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

// LAST LINE PER SEM
$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '212', 0, 0);
$pdf->Cell(90, 4, 'Business Finance', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(9, 4, '', 'B', 0);
$pdf->Cell(7, 4, '', 'B', 1);

$pdf->Cell(20, 5, '', 0, 0);

$pdf->SetFont('Arial', '', '10');
$pdf->Cell(102, 5, '', 0, 0);
$pdf->Cell(32, 6, 'TOTAL', 0, 0);
$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(10, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);






//YEAR , SEMESTER
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(45, 5, 'Grade 12, Second Semester', 0, 1);
$pdf->SetFont('Arial', '', '9');

// SUBJECTS
$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'COM', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->Cell(90, 4, 'Media and Information Literacy', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ECO', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->Cell(90, 4, 'Applied Economincs', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);



$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'PEH', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->Cell(90, 4, 'Physical Education and Health 4', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'CHL', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->Cell(90, 4, 'Christian Living 4', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'COM', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->Cell(90, 4, 'Empowerment Technologies', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'RES', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'inquiries,  Investigation and Immersion', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);

$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'RES', 0, 0);
$pdf->Cell(15, 4, '223', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(90, 4, 'Business Enterprise Simulation', 0, 0);
$pdf->SetFont('Arial', '', '9');
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 0, 1);


// LAST LINE PER SEM
$pdf->Cell(5, 4, '', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(15, 4, 'ABM', 0, 0);
$pdf->Cell(15, 4, '221', 0, 0);
$pdf->Cell(90, 4, 'Business Ethics and Social Responsibility', 0, 0);
$pdf->Cell(10, 4, '', 'B', 0);
$pdf->Cell(9, 4, '', 'B', 0);
$pdf->Cell(7, 4, '', 'B', 1);

$pdf->Cell(20, 5, '', 0, 0);

$pdf->SetFont('Arial', '', '10');
$pdf->Cell(102, 5, '', 0, 0);
$pdf->Cell(32, 6, 'TOTAL', 0, 0);
$pdf->SetFont('Arial', 'B', '10');
$pdf->Cell(10, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);
$pdf->Cell(180, 6, '', 0, 1);


$pdf->Output();
?>