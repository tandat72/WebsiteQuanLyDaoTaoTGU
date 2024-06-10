<?php
include "header.php"
?>
<?php
//lay masv
$masv = $_GET['masv'];

//ket noi
require_once 'connect.php';

//cau lenh lay thong tin ve sinh vien
$edit_sql = "SELECT * FROM tbl_sinhvien WHERE ma_sv = $masv";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);


?>

<style>
    body {
      
        text-align: center;
        padding: none;
        margin: 65px;

    }

    

   

    .buttonexit {

        width: 50px;
    }

    #table {
        width: 1400px;

    }

    .thong-tin-sinh-vien {
        height: 30px;
        width: 200px;
        display: inline-block;
        margin: 6px 0 12px;
        padding-left: 12px;
        color: black;
    }

    .thong-tin-sinh-vien button {
        display: block;
        margin-top: 10px;
        height: 30px;
        width: 100px;
        cursor: pointer;
        background-color: brown;
        border: none;
        color: white;
        transition: all 0.3s ease;
    }

    .thong-tin-sinh-vien button:hover {
        background-color: transparent;
        border: 1px solid brown;
        color: brown;
    }
</style>

<body>

    

    <form id="form2" method="POST" action="update.php" enctype="multipart/form-data" >
        <div class="rainbowtext">
            <h3 class="rainbow"></h3>
        </div>
        <br>
        <input type="hidden" name="masv" id="" value="<?php echo $masv;?>">
        <div class="thong-tin-sinh-vien">
        
                <label for="">Nhập mã số sinh viên<span style="color: red;">*</span></label>
                <input name="ma_sv" required type="text" placeholder="Mã sinh viên" value="<?php echo $row['ma_sv']?>">

                <label for="">Nhập tên sinh viên<span style="color: red;">*</span></label>
                <input name="ten_sv" type="text" required placeholder="Họ tên sinh viên" value="<?php echo $row['ten_sv']?>">

                <label for="">Nhập số điện thoại<span style="color: red;">*</span></label>
                <input name="dien_thoai" required type="number" placeholder="Số điện thoại" value="<?php echo $row['dien_thoai']?>">

                <label for="">Nhập ngày sinh<span style="color: red;">*</span></label>
                <input name="ngay_sinh" required type="date" style="width: 190px;" value="<?php echo $row['ngay_sinh']?>">

                <label for="">Nhập nơi sinh<span style="color: red;">*</span></label>
                <input type="text" name="noi_sinh" required placeholder="Nơi sinh" value="<?php echo $row['noi_sinh']?>">

                <label for="">Nhập giới tính<span style="color: red;">*</span></label>
                <input type="text" name="gioi_tinh" required placeholder="Nam/Nữ" value="<?php echo $row['gioi_tinh']?>">

                <label for="">Nhập CMND hoặc CCCD<span style="color: red;">*</span></label>
                <input type="text" name="cmnd" required placeholder="CMND hoặc CCCD" value="<?php echo $row['cmnd']?>">

                <button type="submit">Sửa</button>
        </div>
    </form>
</body>