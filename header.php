<!DOCTYPE html> 
<html lang="en">
<head>
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

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
    <li><a href="#">Giáo viên</a></li>
       <li><a href="logout.php">Đăng xuất</a></li>
</form>
    </ul>
    </nav>
    </div>
</body>
