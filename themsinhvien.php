<?php
include "class/sinhvien_class.php"
?>
<?php
$sinhvien = new sinhvien;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert_sinhvien = $sinhvien -> insert_sinhvien($_POST,$_FILES);


}


?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

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
<div id="wrapper">
        <a href="administrator.php"><img src="images/banner.png" alt="truong dai hoc tien giang" width="500px"></a>
        <nav>
            <ul id="menu">
             
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
           
                    <?php if (isset($_GET['success'])) { ?>
                       <p class="success"><?php echo $_GET['success']; ?></p>
                   <?php } ?>
                <li><a href="http://www.tgu.edu.vn/">Trang thông tin</a></li>
           
                <div id="id01" class="modal">
                    <form class="modal-content animate">
                        <div class="container-loginform">
                            <div class="container">
                                <button type="button" 
                                    class="exitlbtn"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                            </div>

                         
                           <!-- <h1>Đổi mật khẩu</h1>
                            <input type="password" placeholder="mật khẩu cũ" name="op" required>
                            <span class="show-btn"><i ></i></span>
                            <br>
                            <input type="password" placeholder="mật khẩu mới" name="np" required>
                            <span class="show-btn"><i></i></span>             
                            <input type="password" placeholder="xác nhận mật khẩu" name="c_np" required>
                            <span class="show-btn"><i></i></span>               
                            <button type="submit" class="btn-thuchien">Thực hiện</button>
                            </form>
                            <br>
                            </p>
                    -->
                        </div>
                    
                </div>   
    <li><a href="administrator.php">Giáo viên</a></li>
       <li><a href="logout.php">Đăng xuất</a></li>
</form>
    </ul>
    </nav>
    </div>
    

    <form id="form2" method="POST" action="" enctype="multipart/form-data">
        <div class="rainbowtext">
            <h3 class="rainbow"></h3>
        </div>
        <br>
        <div class="thong-tin-sinh-vien">
        
                <label for="">Nhập mã số sinh viên<span style="color: red;">*</span></label>
                <input name="ma_sv" required type="text" placeholder="Mã sinh viên">

                <label for="">Nhập tên sinh viên<span style="color: red;">*</span></label>
                <input name="ten_sv" type="text" required placeholder="Họ tên sinh viên">

                <label for="">Nhập số điện thoại<span style="color: red;">*</span></label>
                <input name="dien_thoai" required type="number" placeholder="Số điện thoại">

                <label for="">Nhập ngày sinh<span style="color: red;">*</span></label>
                <input name="ngay_sinh" required type="date" style="width: 190px;">

                <label for="">Nhập nơi sinh<span style="color: red;">*</span></label>
                <input type="text" name="noi_sinh" required placeholder="Nơi sinh">

                <label for="">Nhập giới tính<span style="color: red;">*</span></label>
                <input type="text" name="gioi_tinh" required placeholder="Nam/Nữ">

                <label for="">Nhập CMND hoặc CCCD<span style="color: red;">*</span></label>
                <input type="text" name="cmnd" required placeholder="CMND hoặc CCCD">

                <button type="submit">Thêm</button>
        </div>
    </form>
</body>