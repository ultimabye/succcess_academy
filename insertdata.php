<?php
session_start();
require_once("db_connection.php");
if(isset($_POST['insertBtn'])) {	
$rollNo = $_POST['inputRollno'];
$name = $_POST['inputStName'];
$fName =$_POST['inputFatherName'];
$duration =$_POST['inputDuration'];
$dated = $_POST['inputDate'];
$program =$_POST['inputProgram'];
$totalMarks =$_POST['inputTotalMarks'];
$obtailedMarks = $_POST['inputObtainedMarks'];


$result = mysqli_query($conn, "INSERT INTO students(rollno,stName,stFname,stDuration,stProgram,stTotalMarks,stObMarks,dated) VALUE
('$rollNo','$name','$fName','$duration','$program','$totalMarks','$obtailedMarks','$dated')");
if($result === 1){
    header("location:students_data.php?saved=Record is saved.");
}else{
    header("location:students_data.php?saved=Please enter the correct information.");
}

}

?>