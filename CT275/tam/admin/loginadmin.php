<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>

    
</head>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/cs.css">
    <link rel="shortcut icon" href="../asset/img/logo/logo3.PNG">
    <style>
        body{
            background-color: #7f165f59;
        }
        
    </style>

<body>


      <!-- form đăng nhập -->

<form action="xulyloginadmin.php" id="formdn" name="formdn" method="POST" onsubmit="return test()">
    <div class="container mt-5" id="dieukien">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="row">
                            <div class="col-md 12">
                                <h1 class="canhgiua">Đăng nhập</h1>
                            </div>
                        </div>
                        
                        <!-- true -->

                        <div class="row" v-if="hienmodal">
                            <div class="col-md-12">
                                <!-- <form action="dangnhap.php" method="POST" id="formDangNhap" name="formDangNhap"> -->
                                    <!-- tài khoản -->
                                    <div class="form-group" style="margin-bottom: 0;">
                                        <label for="#">Nhập thông tin tài khoản</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                                <input type="text" class="form-control" id="txtDangNhapTK" name="txtDangNhapTK" v-model="nhaptk" placeholder="Tài khoản">
                                            <div class="input-group-append">
                                                <div class="input-group-text"></div>
                                            </div>
                                        </div>
                                        <small id="loi1"class="form-text text-muted">Tài khoản nhập ít nhất 5 ký tự</small>
                                    </div>
                                    <!-- mật khẩu -->
                                    <div class="form-group">
                                        <label for="#"></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text paddingmatkhau">
                                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" id="pwDangNhapPassword" name="pwDangNhapPassword" v-model="nhapmk" placeholder="Mật khẩu">
                                            <div class="input-group-append">
                                                <div class="input-group-text"></div>
                                            </div>
                                        </div>
                                        <small id="loi2"class="form-text text-muted">Mật khẩu nhập ít nhất 3 ký tự</small>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <!-- button đăng nhập thành công-->
                        <div class="row" v-if="hienmodal">
                            <div class="col-md-12 text-center">
                                <!-- Button trigger modal -->
                                <input type="submit" v-on:click="hienketqua" name="login" id="login" class="btn btn-dark" value="Đăng nhập">
                            </div>
                            <!-- <div class="col-md-6" style="padding-left:0;padding-top: 8px;"><a href="#">Quên mật khẩu?</a></div> -->
                        </div>
                    </div>
               
                    
                    
                </div>
            </div>
        </div>

</form>
</div>
    
    


    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../asset/js/app.js"></script>
    <script src="../vendor/vuejs/vue.js"></script>

    <script>
        function test(){
            var check = true;

            if(document.getElementById("txtDangNhapTK").value ==""){
            document.getElementById("loi1").innerHTML="Vui lòng nhập tài khoản là số điện thoại của bạn!";
            check=false;
            }else {
                document.getElementById("loi1").innerHTML="";
            }

            if(document.getElementById("pwDangNhapPassword").value ==""){
            document.getElementById("loi2").innerHTML="Vui lòng nhập password!";
            check=false;
            }else {
                document.getElementById("loi2").innerHTML="";
            }

            if(check==false){
                alert("Vui lòng nhập tài khoản hoặc mật khẩu");
            }
            return check;
        }
        
        
    </script>
</body>
</html>