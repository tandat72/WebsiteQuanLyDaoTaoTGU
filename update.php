<?php
//nha du lieu tu from
    $masv = $_POST['masv'];
    $ten_sv = $_POST['ten_sv'];
    $dien_thoai = $_POST['dien_thoai'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $noi_sinh = $_POST['noi_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];  
    $cmnd = $_POST['cmnd'];
    
//ket noi csdl
    require_once 'connect.php';
//lenh sql cap nhat du leu
$update = "UPDATE tbl_sinhvien SET
ten_sv = '$ten_sv', dien_thoai = '$dien_thoai',
ngay_sinh = '$ngay_sinh', noi_sinh = '$noi_sinh',
gioi_tinh = '$gioi_tinh', cmnd = '$cmnd'
WHERE ma_sv = '$masv'";

//echo $update; exit;
// thuc thi cau lenh
if(mysqli_query($conn, $update)){
    header("Location: lietke.php");
}
?>