<?php

    $sdt = $_GET['q'];
    include_once("dbconnect.php");
    $sql ="select sdtKH from khachhangshop";
    $result=mysqli_query($conn,$sql);
    
    while($row=mysqli_fetch_array($result)){
        if($sdt !== ""){
            foreach($row as $sdtKH){

            }
            if($sdt == $sdtKH){
                // echo'<span style="color: red;">
                // Số điện thoại tồn tại
                // </span>';
                echo"Số điện thoại tồn tại!";
            }
        }
    }

?>
