<?php

    $MSDT = $_GET['q'];
    include_once("../dbconnect.php");
    $sql ="select MSDT from dienthoai";
    $result=mysqli_query($conn,$sql);
    
    while($row=mysqli_fetch_array($result)){
        if($MSDT !== ""){
            foreach($row as $MSDT1){

            }
            if($MSDT == $MSDT1){
                // echo'<span style="color: red;">
                // Số điện thoại tồn tại
                // </span>';
                echo"Mã số điện thoại tồn tại!";
            }
        }
    }

?>