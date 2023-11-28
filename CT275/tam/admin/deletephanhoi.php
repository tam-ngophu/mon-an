<?php
include_once(__DIR__.'/../dbconnect.php');
$MSPH=$_GET['MSPH'];
$sql="delete from phanhoi where MSPH='$MSPH'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: phanhoi.php");
}
?>