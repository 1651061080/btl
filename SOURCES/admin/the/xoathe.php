<?php
require './the.php';
 
// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    delete_the($id);
}
 
// Trở về trang danh sách
header("location: danhsachcauhoi.php");
?>