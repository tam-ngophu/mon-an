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
    <title>Nhóm điện thoại</title>
</head>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/cs.css">
    <link rel="shortcut icon" href="../asset/img/logo/logo3.PNG">
    <style>
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

<div class="container">
    <div class="row">
        <div class="col-md-12  text-center">
            <h1 class="mau">Nhóm điện thoại</h1>
            <h3 class="dam">Bảng thông tin nhóm điện loại</h3>
        </div>
    </div>
        <?php
            include_once(__DIR__.'/../dbconnect.php');
            $sql = "select * from nhomdienthoai ";
            $result = mysqli_query($conn, $sql);
            $stt = 1;
            $ds_dt=[];
            echo "<form method='post' action='duyethang.php'>";
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $ds_dt [] = array(
                	'MNDT' => $row['MNDT'],
                    'TenNDT' => $row['TenNDT']
                );
            }
        ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>MNDT</th>
                        <th>Tên Nhóm điện thoại</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds_dt as $value): ?>
                    <tr>
                    <td><?=$stt;?></td>
                    <td><?=$value['MNDT'];?></td>
                    <td><?=$value['TenNDT'];?></td>
                    <td>
                        <a href="editnhomdt.php?MNDT=<?= $value['MNDT'] ?>" class="btn btn-warning">
                        <span data-feather="edit"></span> Sửa
                        </a>
                        <a href="deletenhomdt.php?MNDT=<?= $value['MNDT'] ?>" onclick="xoa()" class="btn btn-danger">
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