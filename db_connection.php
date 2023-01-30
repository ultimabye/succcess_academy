<?php
$sname = "localhost";
$uname = "root";
$password = "DD84aa83bb";
$db_name = "successor_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Connection Failed";
    exit();
}

?>