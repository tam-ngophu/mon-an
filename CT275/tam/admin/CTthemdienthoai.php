<?php
session_start();
if(!isset($_SESSION['sdtNV'])){
	header("Location: loginadmin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm chi tiết điện thoại</title>

    <script>
        function kiemtra(str) {
            if (str.length == 0) {
                document.getElementById("MSCTDT").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
    
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loi1").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ktrathemctdt.php?q=" + str, true);
            xmlhttp.send();
            }
        }
    </script> 
</head>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/cs.css">
    <link rel="shortcut icon" href="../asset/img/logo/logo3.PNG">
    <style>
        .container{
            border: 1px solid #ccc;
        }
       .color{
           color: red;
           padding-left: 20px;
           
       }
       .dong{
           margin:auto 350px;
       }
       body{
           background-color: #ccc;
       }
       #themctsp{
           margin: 0px 10px;
           width: 10rem;
           height: 3rem;
           font-size: 20px
       }
       .canphai{
            margin-left: 275px;
        }
        .mau{
            font-weight: bold;
            color: RebeccaPurple;
            line-height: 2;
        }
        .dam{
            font-weight: bold;
        }
        .img{
            width: 5rem;
            height: 5rem;
        }
        .width{
            width: 160px;
        }
        .bg{
          background-color: black;
          
        }
        .bg a{
          color: white;
        }
        body{
          background-color: #7f165f59;
        }
    </style>
<body>
<?php include_once(__DIR__.'/thanhnav.php'); ?>


    <!-- Đăng ký -->
    <div id="dangky" class="dong">
        <div class="container backgroudnencontainer ">
            <form name="frmthemctdienthoai" id="frmthemctdienthoai" method="post" action="xulythemctdt.php" novalidate="true" onsubmit="return test()" enctype="multipart/form-data">
                <div class="alert-danger">
                    <!-- <p id="loi1"class="color"></p>
                    <p id="loi2"class="color"></p>
                    <p id="loi3"class="color"></p>
                    <p id="loi4"class="color"></p>
                    <p id="loi5"class="color"></p>
                    <p id="loi6"class="color"></p>
                    <p id="loi7"class="color"></p>
                    <p id="loi8"class="color"></p>
                    <p id="loi9"class="color"></p>  
                    <p id="loi10"class="color"></p>  
                    <p id="loi11"class="color"></p>  
                    <p id="loi12"class="color"></p>  
                    <p id="loi13"class="color"></p>   -->
                </div>
                
                <div class="form-row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 style="color: red;">Thêm chi tiết điện thoại mới</h1>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="MSCTDT" class="col-sm-2 col-form-label">MSCTDT</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="MSCTDT" name="MSCTDT" onkeyup="kiemtra(this.value)">
                                    <small id="loi1" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="ManHinh" class="col-sm-2 col-form-label">Màn hình</label>
                                    <div class="col-sm-10">
                                    <textarea cols="60" rows="3" id="ManHinh" name="ManHinh"></textarea>
                                    <small id="loi2" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="Camerasau" class="col-sm-2 col-form-label">Camerasau</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Camerasau" name="Camerasau" v-model="nhapht">
                                    <small id="loi3" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="CameraSelfile" class="col-sm-2 col-form-label">CameraSelfile</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="CameraSelfile" name="CameraSelfile" v-model="nhapht">
                                    <small id="loi4" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="RAM" class="col-sm-2 col-form-label">RAM</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="RAM" name="RAM" v-model="nhapht">
                                    <small id="loi5" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="BoNhoTrong" class="col-sm-2 col-form-label">Bộ nhớ trong</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="BoNhoTrong" name="BoNhoTrong" v-model="nhapht">
                                    <small id="loi6" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="CHIPCPU" class="col-sm-2 col-form-label">Chip CPU</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="CHIPCPU" name="CHIPCPU" v-model="nhapht">
                                    <small id="loi7" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="GPU" class="col-sm-2 col-form-label">GPU</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="GPU" name="GPU" v-model="nhapht">
                                    <small id="loi8" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="PIN" class="col-sm-2 col-form-label">PIN</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="PIN" name="PIN" v-model="nhapht">
                                    <small id="loi9" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="SMS" class="col-sm-2 col-form-label">SMS</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="SMS" name="SMS" v-model="nhapht">
                                    <small id="loi10" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="HeDieuHanh" class="col-sm-2 col-form-label">Hê điều hành</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="HeDieuHanh" name="HeDieuHanh" v-model="nhapht">
                                    <small id="loi11" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="XuatXu" class="col-sm-2 col-form-label">Xuất xứ</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="XuatXu" name="XuatXu" v-model="nhapht">
                                    <small id="loi12" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="NamSX" class="col-sm-2 col-form-label">NămSX</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="NamSX" name="NamSX" v-model="nhapht">
                                    <small id="loi13" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-left: 230px">
                                    <button type="submit" name="themctsp" id="themctsp" class="btn btn-outline-primary">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../asset/js/app.js"></script>
    <script src="../vendor/vuejs/vue.js"></script>

<script>
function test(){
    var check =true;
    
    if(document.getElementById("MSCTDT").value ==""){
        document.getElementById("loi1").innerHTML="Vui lòng nhập mã số chi tiết điện thoại!";
        check=false;
    }else if(document.getElementById("MSCTDT").length < 2){
        document.getElementById("loi1").innerHTML="Vui lòng nhập mã số chi tiết điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi1").innerHTML="";
    }
    
    if(document.getElementById("ManHinh").value ==""){
        document.getElementById("loi2").innerHTML="Vui lòng nhập màn hình!";
        check=false;
    }else if(document.getElementById("ManHinh").length < 5){
        document.getElementById("loi2").innerHTML="Vui lòng nhập màn hình ít nhất 5 ký tự!";
        check=false;
    }else {
        document.getElementById("loi2").innerHTML="";
    }
    
    if(document.getElementById("Camerasau").value ==""){
        document.getElementById("loi3").innerHTML="Vui lòng nhập Camerasau";
        check=false;
    }else if(document.getElementById("Camerasau").length < 2){
        document.getElementById("loi3").innerHTML="Vui lòng nhập Camerasau ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi3").innerHTML="";
    }
    
    if(document.getElementById("CameraSelfile").value ==""){
        document.getElementById("loi4").innerHTML="Vui lòng nhập CameraSelfile!";
        check=false;
    }else if(document.getElementById("CameraSelfile").length < 2){
        document.getElementById("loi4").innerHTML="Vui lòng nhập CameraSelfile ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi4").innerHTML="";
    }
    
    if(document.getElementById("RAM").value ==""){
        document.getElementById("loi5").innerHTML="Vui lòng nhập RAM!";
        check=false;
    }else if(document.getElementById("RAM").length < 2){
        document.getElementById("loi5").innerHTML="Vui lòng nhập RAM ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi5").innerHTML="";
    }
    
    if(document.getElementById("BoNhoTrong").value ==""){
        document.getElementById("loi6").innerHTML="Vui lòng nhập bộ nhớ trong!";
        check=false;
    }else if(document.getElementById("BoNhoTrong").length < 2){
        document.getElementById("loi6").innerHTML="Vui lòng nhập bộ nhớ trong ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi6").innerHTML="";
    }

    if(document.getElementById("CHIPCPU").value ==""){
        document.getElementById("loi7").innerHTML="Vui lòng nhập Chip CPU!";
        check=false;
    }else if(document.getElementById("CHIPCPU").length < 2){
        document.getElementById("loi7").innerHTML="Vui lòng nhập Chip CPU ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi7").innerHTML="";
    }

    if(document.getElementById("GPU").value ==""){
        document.getElementById("loi8").innerHTML="Vui lòng nhập GPU!";
        check=false;
    }else if(document.getElementById("GPU").length < 2){
        document.getElementById("loi8").innerHTML="Vui lòng nhập GPU ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi8").innerHTML="";
    }
    if(document.getElementById("PIN").value ==""){
        document.getElementById("loi9").innerHTML="Vui lòng nhập PIN!";
        check=false;
    }else if(document.getElementById("PIN").length < 2){
        document.getElementById("loi9").innerHTML="Vui lòng nhập PIN ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi9").innerHTML="";
    }

    if(document.getElementById("SMS").value ==""){
        document.getElementById("loi10").innerHTML="Vui lòng nhập SMS!";
        check=false;
    }else if(document.getElementById("SMS").length < 2){
        document.getElementById("loi10").innerHTML="Vui lòng nhập SMS ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi10").innerHTML="";
    }

    if(document.getElementById("HeDieuHanh").value ==""){
        document.getElementById("loi11").innerHTML="Vui lòng nhập hệ điều hành!";
        check=false;
    }else if(document.getElementById("HeDieuHanh").length < 2){
        document.getElementById("loi11").innerHTML="Vui lòng nhập hệ điều hành ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi11").innerHTML="";
    }

    if(document.getElementById("XuatXu").value ==""){
        document.getElementById("loi12").innerHTML="Vui lòng nhập xuất xứ!";
        check=false;
    }else if(document.getElementById("XuatXu").length <2){
        document.getElementById("loi12").innerHTML="Vui lòng nhập xuất xứ ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi12").innerHTML="";
    }
    
    if(document.getElementById("NamSX").value ==""){
        document.getElementById("loi13").innerHTML="Vui lòng nhập năm sản xuất!";
        check=false;
    }else if(document.getElementById("NamSX").length < 2){
        document.getElementById("loi13").innerHTML="Vui lòng nhập năm sản xuất ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi13").innerHTML="";
    }

    
    if(check==true){
        alert("Thêm chi tiết điện thoại thành công");
    }else{
        alert("Thêm chi tiết điện thoại không thành công, vui lòng kiểm tra lỗi của bạn");
    }
    return check;
    
}
function ktraemail(email){
    email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return email_check.test(email)
}
    </script>  
    

</body>
</html>