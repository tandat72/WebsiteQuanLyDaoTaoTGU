<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <title></title>
</head>
<style>
   body {
            background-color: white;
        }

        * {
            margin: 0;
            padding: 0;
        }

        #wrapper {
            display: flex;
            justify-content: center;
            background-color: #0086d5;
        }

        ul {
            list-style: none;
        }

        nav {
            margin-top: 55px;
            width: 1400px;
        }

        ul#menu {
            display: flex;
        }

        ul#menu li {
            padding: 0px 55px;
        }

        ul#menu a {
            text-decoration: none;
            font-size: 25px;
            color: white;
        }

        #menu li a:hover {
            color: red;
        }






 
    
    .buttonexit {

        width: 50px;
    }

    #table {
        width: 1400px;

    }
    .font{
        border: black;
    }
    .font tr th{
        color: white;
        background-color: #888888;
    }
    .font tbody{
        background-color: #CCFF99;
        color: black;
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
                                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                    class="exitlbtn"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                            </div>
                           
                            <br>
                            </p>
                        </div>
                    
                </div>   
    <li><a href="administrator.php">Giáo viên</a></li>
       <li><a href="logout.php">Đăng xuất</a></li>
</form>
    </ul>
    </nav>
    </div>
        <div class="container">
            <table class="table table-bordered font">
                <thead>
                    <tr>
                        <th>Mã sinh viên</th>
                        <th>Họ tên</th>
                        <th>Điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Nơi sinh</th>
                        <th>Giới tính</th>
                        <th>CMND</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //ket noi
                    require_once 'connect.php';

                    //cau lenh
                    $lietke = "SELECT * FROM tbl_sinhvien";
                    //
                    $result = mysqli_query($conn, $lietke);
                    ///
                    while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $r['ma_sv']; ?></td>
                            <td><?php echo $r['ten_sv']; ?></td>
                            <td><?php echo $r['dien_thoai']; ?></td>
                            <td><?php echo $r['ngay_sinh']; ?></td>
                            <td><?php echo $r['noi_sinh']; ?></td>
                            <td><?php echo $r['gioi_tinh']; ?></td>
                            <td><?php echo $r['cmnd']; ?></td>
                            <td><a href="sinhvien_edit.php?masv=<?php echo $r['ma_sv'];?>" class="btn btn-primary">Sửa</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>

</body>

</html>