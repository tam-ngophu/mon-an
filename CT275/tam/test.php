
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once(__DIR__.'/dbconnect.php');
        $sql = "select * from khachhangshop";
        $result = mysqli_query($conn, $sql);
        $stt = 1;
        $ds_nv=[];
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $ds_nv [] = array(
                'MSKH' => $row['MSKH'],
                'HotenKH' => $row['HotenKH'],
                'sdtKH' => $row['sdtKH'],
            );
        }
    ?>
    <table class="table table-success table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ds_nv as $value): ?>
                    <tr>
                    <td><?=$stt;?></td>
                    <td><?=$value['HotenKH'];?></td>
                    <td><?=$value['sdtKH'];?></td>
                    <td>
                    <a href="suatest.php?MSKH=<?= $value['MSKH'] ?>" class="btn btn-warning">
                        <span data-feather="edit"></span> Sửa
                        </a>
                        <a href="deletenv.php?MSKH=<?= $value['MSKH'] ?>" class="btn btn-danger">
                        <span data-feather="edit"></span> Xóa
                        </a>
                    </td>
                    </tr>
                    <?php $stt++; ?>
                    <?php endforeach;?>
                </tbody>
            </table>

</body>
</html>