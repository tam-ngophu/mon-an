<?php
include_once(__DIR__.'/../dbconnect.php');
$MSDT=$_GET['MSDT'];
$sql="delete from dienthoai where MSDT='$MSDT'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location: dienthoai.php");
}
?>