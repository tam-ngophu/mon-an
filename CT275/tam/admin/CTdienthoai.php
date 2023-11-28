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
    <title>Chi tiết điện thoại</title>
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
            <h1 class="mau">Quản Lý Chi Tiết Điện Thoại</h1>
            <h3 class="dam">Bảng chi tiết điện thoại</h3>
        </div>
    </div>
        <?php
            include_once(__DIR__.'/../dbconnect.php');
            $sql = "select * from chitietdienthoai";
            $result = mysqli_query($conn, $sql);
            $stt = 1;
            $ds_dt=[];
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $ds_dt [] = array(
                	'MSCTDT' => $row['MSCTDT'],
                	'ManHinh' => $row['ManHinh'],
                	'Camerasau' => $row['Camerasau'],
                    'CameraSelfile' => $row['CameraSelfile'],
                    'RAM' => $row['RAM'],
                    'BoNhoTrong' => $row['BoNhoTrong'],
                    'CHIPCPU' => $row['CHIPCPU'],
                    'GPU' => $row['GPU'],
                    'PIN' => $row['PIN'],
                    'SMS' => $row['SMS'],
                    'HeDieuHanh' => $row['HeDieuHanh'],
                    'XuatXu' => $row['XuatXu'],
                    'NamSX' => $row['NamSX'],
                );
            }
        ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>MSCTDT</th>
                        <th>Màn hình</th>
                        <th>Camerasau</th>
                        <th>CameraSelfile</th>
                        <th>RAM</th>
                        <th>BNT</th>
                        <th>ChipCPU </th>
                        <th>GPU</th>
                        <th>PIN</th>
                        <th>SMS</th>
                        <th>HĐH</th>
                        <th>Xuất xứ</th>
                        <th>NămSX</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds_dt as $value): ?>
                    <tr>
                    <td><?=$stt;?></td>
                    <td><?=$value['MSCTDT'];?></td>
                    <td><?=$value['ManHinh'];?></td>
                    <td><?=$value['Camerasau'];?></td>
                    <td><?=$value['CameraSelfile'];?></td>
                    <td><?=$value['RAM'];?></td>
                    <td><?=$value['BoNhoTrong'];?></td>
                    <td><?=$value['CHIPCPU'];?></td>
                    <td><?=$value['GPU'];?></td>
                    <td><?=$value['PIN'];?></td>
                    <td><?=$value['SMS'];?></td>
                    <td><?=$value['HeDieuHanh'];?></td>
                    <td><?=$value['XuatXu'];?></td>
                    <td><?=$value['NamSX'];?></td>
                    
                    <td>
                        <a href="editctdt.php?MSCTDT=<?= $value['MSCTDT'] ?>" class="btn btn-warning">
                        <span data-feather="edit"></span> Sửa
                        </a>
                        <a href="deletectdt.php?MSCTDT=<?= $value['MSCTDT'] ?>" onclick="xoa()" class="btn btn-danger">
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