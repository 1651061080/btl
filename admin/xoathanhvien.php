<?php
require './thanhvien.php';
 
// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_thanhvien($id);
}
 
// Trở về trang danh sách
header("location: danhsachthanhvien.php");
?>