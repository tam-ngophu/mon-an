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
    <title>Cập nhật nhóm điện thoại</title>
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
       #updatenv{
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
            <form name="frmupdate" id="frmupdate" method="post" action="" novalidate="true" onsubmit="return test()">
                <div class="alert-danger">
                </div>
                
                <div class="form-row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 style="color: red;">Cập nhật nhóm điện thoại</h1>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="MNDT" class="col-sm-2 col-form-label">MNDT</label>
                                    <div class="col-sm-10" style="margin-top: 5px;">
                                            <h5>
                                            <?php 
                                            include_once(__DIR__.'/../dbconnect.php');
                                            $MNDT=$_GET['MNDT'];
                                            echo $MNDT;
                                            ?></h5>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="TenNDT" class="col-sm-2 col-form-label">Tên Nhóm</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="TenNDT" name="TenNDT" v-model="nhapht">
                                    <small id="loi1" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-left: 230px">
                                    <button type="submit" name="updatedt" id="updatedt" class="btn btn-outline-primary">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
if(isset($_POST['updatedt'])){
    include_once(__DIR__.'/../dbconnect.php');
    $MNDT = $_GET['MNDT'];
    $TenNDT=$_POST['TenNDT'];


    $sql1 = <<<EOT
    UPDATE nhomdienthoai
    SET
        TenNDT='$TenNDT'
	WHERE MNDT='$MNDT'
EOT;
    $result1 = mysqli_query($conn,$sql1);
    if($result1){
        echo'
        <script>
            alert("Cập nhật thông tin thành công");
        </script>';
    }else{
        echo'<script>
            alert("Cập nhật thông tin thất bại");
        </script>';
    }
}
?>


    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../asset/js/app.js"></script>
    <script src="../vendor/vuejs/vue.js"></script>

<script>
function test(){
    var check =true;
    
    if(document.getElementById("TenNDT").value ==""){
        document.getElementById("loi1").innerHTML="Vui lòng nhập tên nhóm điện thoại!";
        check=false;
    }else if(document.getElementById("TenNDT").length < 2){
        document.getElementById("loi1").innerHTML="Vui lòng nhập tên nhóm điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi1").innerHTML="";
    }

    
    if(check==true){
        alert("đăng ký thành công");
    }else{
        alert("đăng ký không thành công, vui lòng kiểm tra lổi của bạn");
    }
    return check;
    
}

    </script>  
    

</body>
</html>