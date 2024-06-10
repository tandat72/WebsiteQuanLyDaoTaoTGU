<?php 
//nếu đưa lên hosting thì:

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS","");
define("DB_NAME", "test_db");

$conn = mysqli_connect("localhost", "root", "","test_db");
//if($conn){
   // echo ("<script>alert('Ket noi thanh cong');</script>");
//}
//else {
   //echo("<script>alert('Ket noi that bai');</script>");
//}
if (!$conn) {
	echo "Connection failed!";
}

?>