<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect("localhost","root","","qlbanhang");
        $conn -> set_charset('utf-8');
        $sql = "select *from dienthoai";
        // SELECT *FROM hanghoa hh
	    //     JOIN khuyenmai km ON hh.ma_km = km.ma_km
	    //     JOIN nhomhanghoa nhh ON hh.ma_nhh = nhh.ma_nhh
	    //     where nhh.ten_nhh LIKE '%dien thoai%'
        $result = mysqli_query($conn,$sql);
        $ds=[];
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $ds [] = array(
               'TenDT'=> $row['TenDT'],     
               'GiaDT'=> $row['GiaDT'],     
            );
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach($ds as $value): ?>
                <table>
                    <tr>
                        <td><s><?=$value['TenDT'];?> <?=$value['GiaDT'];?></s></td>
                    </tr>
                </table>
                <a href="ss.php?TenDT=<?=$value['TenDT']?>" ></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>