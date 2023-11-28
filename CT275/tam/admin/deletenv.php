<?php
include_once(__DIR__.'/../dbconnect.php');
$msnv=$_GET['MSNV'];
$sql="delete from nhanvienshop where MSNV='$msnv'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: nhanvien.php");
}
?>
