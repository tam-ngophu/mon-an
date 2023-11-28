<?php
session_start();
if(isset($_SESSION['sdtNV'])){
    unset($_SESSION['sdtNV']);
    session_destroy();
    header("Location: loginadmin.php");
}
?>