<?php
session_start();
if(!isset($_SESSION['HoTenKH'])){
    // header("Location: dangnhap.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST['sublienhe'])){
    if(isset($_SESSION['HotenKH'])){
        // $hoten = $_SESSION['HotenKH'];
        
        $hoten1 = htmlentities($_POST['txtHovaten']);
        $email1=htmlentities($_POST['txte-mail']);
        $sdt1=htmlentities($_POST['txtdienthoai']);
        $noidung1=htmlentities($_POST['textearend']);

        include_once("dbconnect.php");

        $sql="select * from khachhangshop where sdtKH= '".$_SESSION['HotenKH']."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        // echo $row['MSKH'];
        $sql1="insert into phanhoi (MSKH,noidung,sdtKHLH,emailLH,hotenKHLH) 
        values('".$row['MSKH']."','$noidung1','$sdt1','$email1','$hoten1')";
        $result1 = mysqli_query($conn,$sql1);
        
        if($result1){
            // header("location: lienhe.php");
            echo'<script>
            alert("Ý kiến của bạn đã được gữi đi, chúng tôi sẽ phản hồi sớm nhất cho bạn, cảm ơn bạn!!!");
            </script>';
            header("refresh:0.5;url=lienhe.php");
        }else {
            // header("location: lienhe.php");
            echo'<script>
            alert("Bạn đã gửi phản hồi đến chúng tôi trước đó vui lòng để chúng tôi duyệt rồi hãy gửi tiếp, cảm ơn ");
            </script>';
            header("refresh:0.5;url=lienhe.php");
        }
    }else{
        echo'<script>
        alert("vui lòng đăng nhập trước khi gửi phản hồi đến chúng tôi, cảm ơn bạn!!!");
        </script>';
        header("refresh:0.5;url=dangnhap.html");
    }
}
    ?>
    
</body>
</html>