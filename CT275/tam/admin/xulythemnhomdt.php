<?php
if(isset($_POST['save'])){
    include_once(__DIR__.'/../dbconnect.php');
    $MNDT = $_POST['MNDT'];
    $TenNDT = $_POST['TenNDT'];
    
    $sql = "INSERT INTO nhomdienthoai
	(MNDT,TenNDT)
	VALUES ('$MNDT', '$TenNDT')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo'<script>
        alert("Thêm điện thoại thành công");
        </script>';
        header('location: nhomdienthoai.php');
    }else{
        echo'<script>
        alert("Thêm điện thoại không thành công");
        </script>';
        header("location: themnhomdienthoai.php");
    } 
}
?>
