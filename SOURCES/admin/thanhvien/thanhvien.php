<?php
// Biến kết nối toàn cục
global $conn;
 
// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', '', 'thien') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}
 
// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
 
// Hàm lấy tất cả sinh viên
function get_all_thanhviens()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from members";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}
// tất cả  cau hoi

 
// Hàm lấy sinh viên theo ID
function get_thanhvien($thanhvien_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from members where memberID={$thanhvien_id}";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
     
    // Trả kết quả về
    return $result;
}

 
// Hàm thêm sinh viên
function add_thanhvien($thanhvien_name, $thanhvien_email, $thanhvien_level)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $thanhvien_name = addslashes($thanhvien_name);
    $thanhvien_email = addslashes($thanhvien_email);
    $thanhvien_level = addslashes($thanhvien_level);
     
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO members(username, email, level) VALUES
            ('$thanhvien_name','$thanhvien_email','$thanhvien_level')
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
// Hàm sửa sinh viên
function edit_thanhvien($thanhvien_id,$thanhvien_name, $thanhvien_email, $thanhvien_level)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $thanhvien_name       = addslashes($thanhvien_name);
    $thanhvien_email        = addslashes($thanhvien_email);
    $thanhvien_level   = addslashes($thanhvien_level);
    $thanhvien_id   =addslashes($thanhvien_id);
     
    // Câu truy sửa
    $sql = "
            UPDATE members SET
            username = '$thanhvien_name',
            email = '$thanhvien_email',
            level = '$thanhvien_level'
            WHERE memberID=$thanhvien_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// Hàm xóa sinh viên
function delete_thanhvien($thanhvien_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "
            DELETE FROM members
            WHERE memberID =$thanhvien_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
?>