<?php
require './the.php';
include('../dungchung/header.php');
// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_the($id);
}
 
// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
    header("location: danhsachthe.php");
}
 
// Nếu người dùng submit form
if (isset($_POST['edit_the']))
{
    // Lay data
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['mobile']         = isset($_POST['mobile']) ? $_POST['mobile'] : '';
    $data['address']=isset($_POST['address']) ? $_POST['address'] : '';
    $data['number']=isset($_POST['number']) ? $_POST['number'] : '';
        $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
     
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên tên';
    }
     
    if (empty($data['mobile'])){
        $errors['mobile'] = 'Chưa nhập số điện thoại';
    }
    if (empty($data['address'])){
        $errors['address'] = 'Chưa nhập địa chỉ';
    }
    if (empty($data['number'])){
        $errors['number'] = 'Chưa nhập số lượng';
    }
     
    // Neu ko co loi thi update
    if (!$errors){

    edit_the( $data['id'],$data['name'], $data['mobile'],$data['address'],$data['number']);
        // Trở về trang danh sách
        header("location: danhsachthe.php");
    }
}
 
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Sửa thẻ mua của khách</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../include/dungchung/jquey/jquery-3.2.1.min.js"></script>
    </head>
    <body>
    <center><h1 style=" border: 1px solid blue;" >Sửa thẻ mua của khách </h1>
        <a href="danhsachthe.php">Trở về</a> <br/> <br/>
        <form method="post" action="suathe.php?id=<?php echo $data['id']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10" style=" background-color : yellow;">
                <tr>
                    <td>Tên</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $data['name']; ''?>"/>
                        <?php if (!empty($errors['name'])) echo $errors['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Số điện  thoại</td>
                    <td>
                        <!-- <select name="mobile">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" >Nu</option>
                        </select> -->
                        <input type="text" name="mobile" value="<?php echo !empty($data['mobile']) ? $data['mobile'] : ''; ?>"/>
                        <?php if (!empty($errors['mobile'])) echo $errors['mobile']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <input type="text" name="address" value="<?php echo $data['address']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Số lượng</td>
                    <td>
                        <input type="text" name="number" value="<?php echo $data['number']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                        <input type="submit"  id="sua" name="edit_the" value="Lưu"/>
         
                        <!-- <script>
                            $(document).ready(function (){
                                $("#sua").click(edit_thanhvien($data['memberID'], $data['name'], $data['mobile'], $data['a']) {
        
            })
        });
                        </script> -->

                    </td>
                </tr>
            </table>
        </form>
    </body>
    <?php
include('../dungchung/footer.php');
?>
</html>