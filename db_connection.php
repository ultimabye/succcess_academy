<?php
$sname = "localhost";
$uname = "root";
$password = "1122";
$db_name = "successor_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Connection Failed";
    exit();
}

?>