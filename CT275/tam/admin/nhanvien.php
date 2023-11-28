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
    <title>Nhân viên</title>
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
       #singin{
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

<div class="container-fluit ml-2">
    <div class="row">
        <div class="col-md-12  text-center">
            <h1 class="mau">Quản Lý Nhân Viên</h1>
            <h3 class="dam">Bảng thông tin nhân viên</h3>
        </div>
    </div>
        <?php
            include_once(__DIR__.'/../dbconnect.php');
            $sql = "select * from nhanvienshop";
            $result = mysqli_query($conn, $sql);
            $stt = 1;
            $ds_nv=[];
            echo "<form method='post' action='duyethang.php'>";
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $ds_nv [] = array(
                	'MSNV' => $row['MSNV'],
                    'TenNV' => $row['TenNV'],
                    'sdtNV' => $row['sdtNV'],
                    // 'pwMatKhauNV' => $row['pwMatKhauNV'],
                    'GioiTinhNV' => $row['GioiTinhNV'],
                    'NgaySinhNV' => $row['NgaySinhNV'],
                    'emailNV' => $row['emailNV'],
                    'CMNDNV' => $row['CMNDNV'],
                    'ChucVu' => $row['ChucVu'],
                    'DiaChiNV' => $row['DiaChiNV'],
                );
            }
        ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>MSNV</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <!-- <th>Mật khẩu</th> -->
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Email</th>
                        <th>CMND</th>
                        <th>Chức vụ</th>
                        <th>Địa chỉ</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds_nv as $value): ?>
                    <tr>
                    <td><?=$stt;?></td>
                    <td><?=$value['MSNV'];?></td>
                    <td><?=$value['TenNV'];?></td>
                    <td><?=$value['sdtNV'];?></td>
                    <!-- <td>
                    //$value['pwMatKhauNV'];
                    
                    </td> -->
                    <td><?=$value['GioiTinhNV'];?></td>
                    <td><?=$value['NgaySinhNV'];?></td>
                    <td><?=$value['emailNV'];?></td>
                    <td><?=$value['CMNDNV'];?></td>
                    <td><?=$value['ChucVu'];?></td>
                    <td><?=$value['DiaChiNV'];?></td>
                    <td>
                    <a href="updatenv.php?MSNV=<?= $value['MSNV'] ?>" class="btn btn-warning">
                        <span data-feather="edit"></span> Sửa
                        </a>
                        <a href="deletenv.php?MSNV=<?= $value['MSNV'] ?>" onclick="xoa()" class="btn btn-danger">
                        <span data-feather="edit"></span> Xóa
                        </a>
                    </td>
                    </tr>
                    <?php $stt++; ?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../asset/js/app.js"></script>
<script>
function xoa() {
 confirm("Bạn đã xóa thành công");
}
</script>

</body>
</html>