<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
     body{
          background-image: url(images/anime.png);
     }
</style>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Đăng ký</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Tên</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Tên"><br>
          <?php }?>

          <label>Tên đăng nhập</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Tên đăng nhập"><br>
          <?php }?>


     	<label>Mật khẩu</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Mật khẩu"><br>

          <label>Nhập lại mật khẩu</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Nhập lại mật khẩu"><br>

     	<button type="submit">Đăng ký </button>
          <a href="index.php" class="ca">Đã có tài khoản</a>
     </form>
</body>
</html>