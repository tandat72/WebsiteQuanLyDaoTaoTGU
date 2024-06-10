

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	body{
		background-image: url(images/anime.png);
	}
</style>
<body>
     <form action="login.php" method="post">
     	<h2>Đăng nhập</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Tên đăng nhập</label>
     	<input type="text" name="uname" placeholder="Tên đăng nhập" required><br>

     	<label>Mật khẩu</label>
     	<input type="password" id="password" name="password" placeholder="Mật khẩu" required><br>
		
     	<button type="submit" id="submit" class="submit" name="dangnhap">Đăng nhập</button>
       
     </form>




	
</body>

</html>