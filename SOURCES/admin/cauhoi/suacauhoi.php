<?php
require './cauhoi.php';
include('../dungchung/header.php')
 session_start();
// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_cauhoi($id);
}
 
// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
    header("location: danhsachcauhoi.php");
}
 
// Nếu người dùng submit form
if (isset($_POST['edit_cauhoi']))
{
    // Lay data
    $data['chude']        = isset($_POST['chude']) ? $_POST['chude'] : '';
    $data['cauhoi']         = isset($_POST['cauhoi']) ? $_POST['cauhoi'] : '';
    $data['a']    = isset($_POST['a']) ? $_POST['a'] : '';
    $data['b']=isset($_POST['b']) ? $_POST['b'] : '';
    $data['dapan']=isset($_POST['dapan']) ? $_POST['dapan'] : '';
        $data['id']          = isset($_POST['id']) ? $_POST['id'] : '';
     
    // Validate thong tin
    $errors = array();
    if (empty($data['chude'])){
        $errors['chude'] = 'Chưa nhập tên chủ đề';
    }
     
    if (empty($data['cauhoi'])){
        $errors['cauhoi'] = 'Chưa nhập câu hỏi';
    }
    if (empty($data['a'])){
        $errors['a'] = 'Chưa nhập đáp án a';
    }
    if (empty($data['b'])){
        $errors['b'] = 'Chưa nhập đáp án b';
    }
    if (empty($data['dapan'])){
        $errors['dapan'] = 'Chưa nhập câu trả lời';
    }
     
    // Neu ko co loi thi update
    if (!$errors){
        edit_cauhoi( $data['id'],$data['chude'], $data['cauhoi'], $data['a'],$data['b'],$data['dapan']);
        // Trở về trang danh sách
        header("location: danhsachcauhoi.php");
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
    <center><h1 style=" border: 1px solid blue;" >Sửa sinh vien </h1>
        <a href="danhsachcauhoi.php">Trở về</a> <br/> <br/>
        <form method="post" action="suacauhoi.php?id=<?php echo $data['id']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10" style=" background-color : yellow;">
                <tr>
                    <td>chu đề</td>
                    <td>
                        <input type="text" name="chude" value="<?php echo $data['chude']; ''?>"/>
                        <?php if (!empty($errors['chude'])) echo $errors['chude']; ?>
                    </td>
                </tr>
                <tr>
                    <td>cauhoi</td>
                    <td>
                        <!-- <select name="cauhoi">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" >Nu</option>
                        </select> -->
                        <input type="text" name="cauhoi" value="<?php echo !empty($data['cauhoi']) ? $data['cauhoi'] : ''; ?>"/>
                        <?php if (!empty($errors['cauhoi'])) echo $errors['cauhoi']; ?>
                    </td>
                </tr>
                <tr>
                    <td>a</td>
                    <td>
                        <input type="text" name="a" value="<?php echo $data['a']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>b</td>
                    <td>
                        <input type="text" name="b" value="<?php echo $data['b']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>đáp án</td>
                    <td>
                        <input type="text" name="dapan" value="<?php echo $data['dapan']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
                        <input type="submit"  id="sua" name="edit_cauhoi" value="Lưu"/>
         
                        <!-- <script>
                            $(document).ready(function (){
                                $("#sua").click(edit_thanhvien($data['memberID'], $data['chude'], $data['cauhoi'], $data['a']) {
        
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