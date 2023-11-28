
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
ten <input type="text" name="ten" id="ten">
<button type="submid" id="save" name="save">lưu</button>
</form>
<?php
if(isset($_POST['save'])){
$id= $_GET['MSKH'];
$ten = $_POST['ten'];
include_once("dbconnect.php");
$sql=<<<EOT
UPDATE khachhangshop
SET
    HotenKH='$ten'
WHERE MSKH='$id'
EOT;
$result=mysqli_query($conn,$sql);
if($result){
    header("location: test.php");
}
}
?>
</body>
</html>