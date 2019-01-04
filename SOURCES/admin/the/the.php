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
function get_allthe()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from the";
     
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
function get_the($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "select * from the where id={$id}";
     
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
function add_the($name, $mobile, $address,$number)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $name = addslashes($name);
    $mobile = addslashes($mobile);
    $address = addslashes($address);
    $number = addslashes($number);
  
     
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO the(name, mobile,address,number) VALUES
            ('$name','$mobile','$address','$number')
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
} 
// Hàm sửa cauhoi
function edit_the($id,$name, $mobile, $address,$number)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $name = addslashes($name);
    $mobile = addslashes($mobile);
    $address = addslashes($address);
    $number = addslashes($number);
    $id   =addslashes($id);
     
    // Câu truy sửa
    $sql = "
            UPDATE the SET
            name = '$name',
            mobile = '$mobile',
            address = '$address',
            number = '$number',
            WHERE id=$id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
function delete_the($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy sửa
    $sql = "
            DELETE FROM the
            WHERE id =$id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
?>