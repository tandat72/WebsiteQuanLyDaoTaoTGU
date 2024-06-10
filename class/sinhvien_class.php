<?php
    include "database.php"
?>
<?php

class sinhvien {
    private $db;

    public function __construct()
    {
        $this -> db = new database();

    }

    public function insert_sinhvien()
    {
        $ma_sv = $_POST['ma_sv'];
        $ten_sv = $_POST['ten_sv'];
        $dien_thoai = $_POST['dien_thoai'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $noi_sinh = $_POST['noi_sinh'];
        $gioi_tinh = $_POST['gioi_tinh'];  
        $cmnd = $_POST['cmnd'];
        
        $query = "INSERT INTO tbl_sinhvien 
        (ma_sv,
        ten_sv,
        dien_thoai,
        ngay_sinh,
        noi_sinh,
        gioi_tinh,   
        cmnd) 
        VALUES (
            '$ma_sv',
            '$ten_sv',
            '$dien_thoai',
            '$ngay_sinh',
            '$noi_sinh',
            '$gioi_tinh',
            '$cmnd')";

        $result = $this->db->insert($query);
        return $result;
    }

}
?>