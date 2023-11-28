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
    <title>Thống kê đơn hàng</title>
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
            <h1 class="mau">Quản Lý Bán Hàng</h1>
            <h3 class="dam">Bảng thông tin đơn đặt hàng</h3>
        </div>
    </div>
        <?php
            include_once(__DIR__.'/../dbconnect.php');
            $sql = "select * from chitietdondathang as a, dienthoai as b, datdienthoai as c where  a.MSDT=b.MSDT and a.MSDDT=c.MSDDT";
            $result = mysqli_query($conn, $sql);
            $stt = 1;
            $ds_dt=[];
            echo "<form method='post' action='duyethang.php'>";
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $ds_dt [] = array(
                	'MSDDT' => $row['MSDDT'],
                    'TenDT' => $row['TenDT'],
                    'SoLuongDDH' => $row['SoLuongDDH'],
                    'GiaDDH' => number_format($row['GiaDDH']),
                    'MSKH' => $row['MSKH'],
                    'NgayDH' => $row['NgayDH'],
                    'HinhAnh' => $row['HinhAnh'],
                    'MSNV' => $row['MSNV'],
                );
            }
        ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Mã số đơn hàng</th>
                        <th>Tên điện thoại</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Mã số khách hàng</th>
                        <th>Thời gian</th>
                        <th>Hình ảnh</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds_dt as $value): ?>
                    <tr>
                    <td><?=$stt;?></td>
                    <td><?=$value['MSDDT'];?></td>
                    <td><?=$value['TenDT'];?></td>
                    <td><?=$value['SoLuongDDH'];?></td>
                    <td><?=$value['GiaDDH'];?></td>
                    <td><?=$value['MSKH'];?></td>
                    <td><?=$value['NgayDH'];?></td>
                    <td><img src="../<?=$value['HinhAnh'];?>" class="img"/></td>
                    <td>
                    <?php
                      if($a = $value['MSNV'] != 0 && $b=$value['MSDDT'] != ""){
                        echo'<label style="color: green;font-style: italic;">
                          Đã duyệt xong
                            </label>';
                      }else{
                        echo'<label style="color: red;font-style: italic;">
                        Chưa duyệt xong
                        </label>';
                      }
                      ?>
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
</body>
</html>