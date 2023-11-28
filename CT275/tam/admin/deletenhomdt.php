<?php
session_start();
include_once(__DIR__.'/../dbconnect.php');
$MNDT=$_GET['MNDT'];
$sql="delete from nhomdienthoai where MNDT='$MNDT'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: nhomdienthoai.php");
}
?>