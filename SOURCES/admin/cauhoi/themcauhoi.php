<?php
require './cauhoi.php';
include('../dungchung/header.php')
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm câu hỏi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center><h1 style=" border: 1px solid blue;" >Thêm câu hỏi </h1>
        <script src="../../include/dungchung/jquey/jquery-3.2.1.min.js"></script>
        <a href="danhsachcauhoi.php">Trở về</a> <br/> <br/>
        <form method="post" action="themcauhoi.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10" style=" background-color : yellow;">
                <tr>
                    <td>chủ đề</td>
                    <td>
                        <input type="text" name="chude" value="<?php echo !empty($data['chude']) ? $data['chude'] : ''; ?>"/>
                        <?php if (!empty($errors['chude'])) echo $errors['chude']; ?>
                    </td>
                </tr>
                <tr>
                    <td>câu hỏi</td>
                    <td>
                        <!-- <select name="cauhoi">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" Nu</option>
                        </select> -->
                        <input type="text" name="cauhoi" value="<?php echo !empty($data['cauhoi']) ? $data['cauhoi'] : ''; ?>"/>
                        <?php if (!empty($errors['cauhoi'])) echo $errors['cauhoi']; ?>
                    </td>
                </tr>
                <tr>
                    <td>đáp án</td>
                    <td>
                        <input type="text" name="dapan" value="<?php echo !empty($data['dapan']) ? $data['dapan'] : ''; ?>"/>
                        <?php if (!empty($errors['dapan'])) echo $errors['dapan']; ?>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>a</td>
                    <td>
                        <input type="text" name="a" value="<?php echo !empty($data['a']) ? $data['a'] : ''; ?>"/>
                        <?php if (!empty($errors['a'])) echo $errors['a']; ?>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>b</td>
                    <td>
                        <input type="text" name="b" value="<?php echo !empty($data['b']) ? $data['b'] : ''; ?>"/>
                        <?php if (!empty($errors['b'])) echo $errors['b']; ?>
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
    $data['chude']        = isset($_POST['chude']) ? $_POST['chude'] : '';
    $data['cauhoi']         = isset($_POST['cauhoi']) ? $_POST['cauhoi'] : '';
    $data['a']    = isset($_POST['a']) ? $_POST['a'] : '';
    $data['b']=isset($_POST['b']) ? $_POST['b'] : '';
    $data['dapan']=isset($_POST['dapan']) ? $_POST['dapan'] : '';
    // Validate thong tin
    $errors = array();
    if (empty($data['chude'])){
        $errors['chude'] = 'Chưa nhập chủ đề';
    }
     
    if (empty($data['cauhoi'])){
        $errors['cauhoi'] = 'Chưa nhập cau hoi';
    }
    if (empty($data['dapan'])){
        $errors['dapan'] = 'Chưa nhập đáp án';
    }
    if (empty($data['a'])){
        $errors['a'] = 'Chưa nhập đáp án a';
    }
    if (empty($data['b'])){
        $errors['b'] = 'Chưa nhập đáp án b';
    }
    // Neu ko co loi thi insert
    if (!$errors){
      add_cauhoi($data['chude'], $data['cauhoi'], $data['dapan'], $data['a'], $data['b']);
      // Trở về trang danh sách
      header("location: danhsachcauhoi.php");
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