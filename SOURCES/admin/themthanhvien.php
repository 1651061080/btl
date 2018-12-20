<?php
 
require './thanhvien.php';
 
// Nếu người dùng submit form
if (!empty($_POST['add_thanhvien']))
{
    // Lay data
    $data['username']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email']         = isset($_POST['email']) ? $_POST['email'] : '';
    $data['level']    = isset($_POST['level']) ? $_POST['level'] : '';
     
    // Validate thong tin
    $errors = array();
    if (empty($data['username'])){
        $errors['username'] = 'Chưa nhập tên sinh vien';
    }
     
    if (empty($data['email'])){
        $errors['email'] = 'Chưa nhập giới tính sinh vien';
    }
     
    // Neu ko co loi thi insert
    if (!$errors){
        add_thanhvien($data['username'], $data['email'], $data['level']);
        // Trở về trang danh sách
        header("location: danhsachthanhvien.php");
    }
}
 
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Thêm thanh vien </h1>
        <a href="danhsachthanhvien.php">Trở về</a> <br/> <br/>
        <form method="post" action="student-add.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo !empty($data['username']) ? $data['username'] : ''; ?>"/>
                        <?php if (!empty($errors['username'])) echo $errors['username']; ?>
                    </td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>
                        <!-- <select name="email">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" Nu</option>
                        </select> -->
                        <input type="text" name="email" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>"/>
                        <?php if (!empty($errors['email'])) echo $errors['email']; ?>
                    </td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <input type="text" name="level" value="<?php echo !empty($data['level']) ? $data['level'] : ''; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add_thanhvien" value="Lưu"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>