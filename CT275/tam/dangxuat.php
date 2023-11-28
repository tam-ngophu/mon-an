<?php
session_start();
if(isset($_SESSION['HotenKH'])){
    unset($_SESSION['HotenKH']);
    header("location: index.php");
    // echo"ok";
}
?>