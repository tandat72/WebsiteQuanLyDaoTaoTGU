<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="java.js">
    <style>
       
    </style>

<body>
    <div id="wrapper">
        <a href="trangchu.php"><img src="images/banner.png" alt="truong dai hoc tien giang" width="500px"></a>
        <nav>
            <ul id="menu">
             
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
           
                    <?php if (isset($_GET['success'])) { ?>
                       <p class="success"><?php echo $_GET['success']; ?></p>
                   <?php } ?>
                <li><a href="http://www.tgu.edu.vn/">Trang thông tin</a></li>
               <li><a href="change-password.php">Đổi mật khẩu</a></li>
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
    <li><a href="#">Sinh viên</a></li>
       <li><a href="logout.php">Đăng xuất</a></li>
</form>
    </ul>
    </nav>
    </div>
    <div class="button">
        <a href="lichthi.php"><button class="buttonsquare1"><img src="images/calendar-g5fb01f7c2_1920.jpg" alt="" style="width:80px"><br>Lịch thi</button></a>

        <a href="kehoachhoctap.php"><button class="buttonsquare2"><img src="images/kehoachhoctap.png" alt=""
                style="width:80px"><br>Kế hoạch học tập</button></a>

        <a href="#"></a><button class="buttonsquare3"><img src="images/dangkyhocphan.png" alt=""
                style="width:80px"><br>Đăng ký học phần</button></a>

        <a href="#"></a><button class="buttonsquare4"><img src="images/infosv.png" alt="Lịch thi"
                style="width:80px"><br>Thông tin sinh viên</button></a>
       
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>