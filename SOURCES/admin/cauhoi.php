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
function get_allcauhoi()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from cauhoi";
     
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
// cau hoi
function get_cauhoi($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from cauhoi where id={$id}";
     
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
// hàm thêm câu hỏi
function add_cauhoi($cauhoi_chude, $cauhoi_ten, $cauhoi_a,$cauhoi_b,$cauhoi_dapan)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $cauhoi_chude = addslashes($cauhoi_chude);
    $cauhoi_ten = addslashes($cauhoi_ten);
    $cauhoi_a = addslashes($cauhoi_a);
    $cauhoi_b = addslashes($cauhoi_b);
    $cauhoi_dapan = addslashes($cauhoi_dapan);
  
     
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO cauhoi(chude, cauhoi, a,b,dapan) VALUES
            ('$cauhoi_chude','$cauhoi_ten','$cauhoi_a','$cauhoi_b','$cauhoi_dapan')
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
} 
// Hàm sửa cauhoi
function edit_cauhoi($id,$cauhoi_chude, $cauhoi_ten, $cauhoi_a,$cauhoi_b,$cauhoi_dapan)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $cauhoi_chude = addslashes($cauhoi_chude);
    $cauhoi_ten = addslashes($cauhoi_ten);
    $cauhoi_a = addslashes($cauhoi_a);
    $cauhoi_b = addslashes($cauhoi_b);
    $cauhoi_dapam = addslashes($cauhoi_dapan);
    $id   =addslashes($id);
     
    // Câu truy sửa
    $sql = "
            UPDATE cauhoi SET
            chude = '$cauhoi_chude',
            cauhoi = '$cauhoi_ten',
            a = '$cauhoi_a',
            b = '$cauhoi_b',
            dapan ='$cauhoi_dapan'
            WHERE id=$id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
function delete_cauhoi($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "
            DELETE FROM cauhoi
            WHERE id =$id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
?>