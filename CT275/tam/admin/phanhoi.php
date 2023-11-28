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
    <title>Phản hồi</title>
</head>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/cs.css">
    <link rel="shortcut icon" href="../asset/img/logo/logo3.PNG">
    <style>
        
        /* .container{
            border: 1px solid #ccc;
        } */
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

<div class="container ">
    <div class="row">
        <div class="col-md-12  text-center">
            <h1 class="mau">Phản Hồi Từ Khách Hàng</h1>
            <h3 class="dam">Bảng thông tin phản hồi khách hàng</h3>
        </div>
    </div>
        <?php
            include_once(__DIR__.'/../dbconnect.php');
            $sql = "select * from phanhoi";
            $result = mysqli_query($conn, $sql);
            $stt = 1;
            $ds_dt=[];
            echo "<form method='post' action='duyetphanhoi.php'>";
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $ds_dt [] = array(
                    'MSPH' => $row['MSPH'],
                    'MSKH' => $row['MSKH'],
                    'noidung' => $row['noidung'],
                    'sdtKHLH' => $row['sdtKHLH'],
                    'emailLH' => $row['emailLH'],
                    'hotenKHLH' => $row['hotenKHLH'],

                );
            }
        ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>MSPH</th>
                        <th>MSKH</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Nội dung phản hồi</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds_dt as $value): ?>
                    <tr>
                    <td><?=$stt;?></td>
                    <td><?=$value['MSPH'];?></td>
                    <td><?=$value['MSKH'];?></td>
                    <td><?=$value['hotenKHLH'];?></td>
                    <td><?=$value['sdtKHLH'];?></td>
                    <td><?=$value['emailLH'];?></td>
                    <td><?=$value['noidung'];?></td>
                    <td>
                        <a href="deletephanhoi.php?MSPH=<?= $value['MSPH'] ?>" onclick="xoa()" class="btn btn-danger">
                        <span data-feather="edit"></span> Xóa
                        </a>
                    </td>
                    </tr>
                    <?php $stt++; ?>
                    <?php endforeach;?>
                </tbody>
            </table>
            <!-- <button type="submit" name="duyet" class="btn btn-primary">Duyệt phản hồi</button> -->
        </div>
    </div>
    <?php echo'</form>'; ?>
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