<?php
require ('./thanhvien.php');
include('../dungchung/header.php');
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center><h1 style=" border: 1px solid blue;">Thêm thanh vien </h1>
        <script src="../../include/dungchung/jquey/jquery-3.2.1.min.js"></script>
        <a href="danhsachthanhvien.php">Trở về</a> <br/> <br/>
        <form method="post" action="themthanhvien.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10" style=" background-color : yellow;">
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
                        <?php if (!empty($errors['level'])) echo $errors['level']; ?>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="add" value="Lưu"
                        <?php
 

 
// Nếu người dùng submit form
if (isset($_POST['add']))
{
    // Lay data
    $data['username']   = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email']     = isset($_POST['email']) ? $_POST['email'] : '';
    $data['level']    = isset($_POST['level']) ? $_POST['level'] : '';
     
    // Validate thong tin
    $errors = array();
    if (empty($data['username'])){
        $errors['username'] = 'Chưa nhập tên sinh vien';
    }
     
    if (empty($data['email'])){
        $errors['email'] = 'Chưa nhập email';
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
/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
    <?php
include('../dungchung/footer.php');
?>
</html>