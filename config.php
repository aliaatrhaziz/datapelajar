<?php
$host="localhost";
$user="root";
$password="";
//nama pangkalan data
$database="datapelajar";
$samb= mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Proses sambung ke pangkalan data gagal";
    exit();
}
?>
