<?php
$sname = "127.0.0.1";
$uname = "root";
$password = "1122";
$db_name = "successor_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Connection Failed";
    exit();
}

?>