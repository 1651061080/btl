<?php
require './thanhvien.php';
 session_start();
// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_thanhvien($id);
}
 
// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
    header("location: danhsachthanhvien.php");
}
 
// Nếu người dùng submit form
if (isset($_POST['edit_thanhvien']))
{
    // Lay data
    $data['username']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email']         = isset($_POST['email']) ? $_POST['email'] : '';
    $data['level']    = isset($_POST['level']) ? $_POST['level'] : '';
    $data['memberID']          = isset($_POST['id']) ? $_POST['id'] : '';
     
    // Validate thong tin
    $errors = array();
    if (empty($data['username'])){
        $errors['username'] = 'Chưa nhập tên sinh vien';
    }
     
    if (empty($data['email'])){
        $errors['email'] = 'Chưa nhập giới tính sinh vien';
    }
     
    // Neu ko co loi thi update
    if (!$errors){
        edit_thanhvien($data['memberID'], $data['username'], $data['email'], $data['level']);
        // Trở về trang danh sách
        header("location: danhsachthanhvien.php");
    }
}
 
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Sửa sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../include/dungchung/jquey/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <h1>Sửa sinh vien </h1>
        <a href="danhsachthanhvien.php">Trở về</a> <br/> <br/>
        <form method="post" action="suathanhvien.php?id=<?php echo $data['memberID']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $data['username']; ''?>"/>
                        <?php if (!empty($errors['username'])) echo $errors['username']; ?>
                    </td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>
                        <!-- <select name="email">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" >Nu</option>
                        </select> -->
                        <input type="text" name="email" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>"/>
                        <?php if (!empty($errors['email'])) echo $errors['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <input type="text" name="level" value="<?php echo $data['level']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['memberID']; ?>"/>
                        <input type="submit"  id="sua" name="edit_thanhvien" value="Lưu"/>
         
                        <!-- <script>
                            $(document).ready(function (){
                                $("#sua").click(edit_thanhvien($data['memberID'], $data['username'], $data['email'], $data['level']) {
        
            })
        });
                        </script> -->

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>