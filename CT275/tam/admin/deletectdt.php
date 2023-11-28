<?php
include_once(__DIR__.'/../dbconnect.php');
$MSCTDT=$_GET['MSCTDT'];
$sql="delete from chitietdienthoai where MSCTDT='$MSCTDT'";
$result=mysqli_query($conn,$sql);
if($result){
    // echo'<script>
    // alert("Xoa thanh cong");
    // </script>';
    // header("reset:2,url=CTdienthoai.php");
    header("location: CTdienthoai.php");
}else {
    header("location: dienthoai.php");
}
?>
