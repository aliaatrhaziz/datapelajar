<?php
//sambung ke pangkalan data 
include "config.php";
?>
<?php
 $id = $_GET['id'];
 $samb= mysqli_connect($host, $user, $password, $database);
 $sql = "DELETE FROM info_pelajar WHERE id = '$id'";
 $result = mysqli_query($samb, $sql);
 if ($result){
     echo "<script>alert('Padam pelajar berjaya!')
     window.location='index.php'</script>";
 }else {
   echo "<script>alert('Padam pelajar tidak berjaya')</script>";
 }
?>
