<?php
require_once("db_connection.php");
if(isset($_GET['stRollNo'])){
    $rollNo = $_GET['stRollNo'];
    $result = mysqli_query($conn, "SELECT * FROM students WHERE rollno='$rollNo'");
    while ($res = mysqli_fetch_array($result)) {
        $studentName = $res['stName'];
       
    }
    
}?>

