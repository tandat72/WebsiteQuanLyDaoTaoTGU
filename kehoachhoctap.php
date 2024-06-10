<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="java.js">
    <style> 
     select{
            width: 216px;
            padding: 1px;
            border: solid 1px #999;
            height: 29px;
            cursor: default;
            text-align: start;
            white-space: pre;
            
            
        }
        body {
            background-color: white;
            display: flex;
	align-items: center;
	
	height: 0vh;
	flex-direction: column;
        }

        * {
            margin: 0;
            padding: 0;
            
	        font-family: sans-serif;
	        box-sizing: border-box;
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


        #main img {
            width: 100px;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        #main img:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .modal-content {
            text-align: center;
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            width: 455px;
            height: 500px;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            padding-top: 60px;
        }

        .exitlbtn {
            background-color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
        }

        .container {
            text-align: right;
        }

        .container-loginform input[type=password],
        input[type=password] {
            box-sizing: border-box;
            width: 302px;
            height: 50px;
            padding: 12px 20px;
            margin: 8px 0;
            border-radius: 100px;
            display: inline-block;
            border: 1px solid #ccc;
        }

        .container-loginform {
            padding: 10px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        .btn-thuchien {
            background-color: #0086d5;
            color: #fff;
            text-align: center;
            width: 300px;
            height: 42px;
            border-radius: 100px;
            border: none;
            cursor: pointer;
        }

        .btn-login:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .exitbtn {
                width: 100%;
            }
        }
      
    </style>

<body>
    <div id="wrapper">
        <a href="trangchu.php"><img src="images/banner.png" alt="truong dai hoc tien giang" width="500px"></a>
        <nav>
            <ul id="menu">
                <li><a href="#">Trang thông tin</a></li>
                <li><a href="change-password.php">Đổi mật khẩu</a></li>
                <div id="id01" class="modal">
                    <form class="modal-content animate">
                        <div class="container-loginform">
                            <div class="container">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                    class="exitlbtn"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                            </div>
                           
                            </p>
                        </div>
                    </form>
                </div>   
    <li><a href="#">Sinh viên</a></li>
    <li><a href="logout.php">Đăng xuất</a></li>
    </ul>
    </nav>
    </div>
    <a href="lichthi.php"><p></p></a>
    <p>chọn năm học</p>

    <form name="calendar">
        <p><select name="example" size="1" onChange="go()">
        <option value="kh2020-2021.php">2020-2021</option>
        <option value="kh2021-2022.php">2021-2022</option>
        <option value="kh2022-2023.php">2022-2023</option>
        </select></p>
         
        <script type="text/javascript">
        
        function go(){
        location=
        document.calendar.example.
        options[document.calendar.example.selectedIndex].value
        }
       
        </script>
        </form>

      
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>