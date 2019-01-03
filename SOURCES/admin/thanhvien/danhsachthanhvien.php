<?php
require './thanhvien.php';
include('../dungchung/header.php');
$thanhviens = get_all_thanhviens();
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center><h1 style=" border: 1px solid blue;">Danh sách sinh vien</h1>
        <a href="./themthanhvien.php">Thêm sinh viên</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10"style=" background-color : yellow;">
            <tr>
                <td>ID</td>
                <td>ten</td>
                <td>email</td>
                <td>level</td>
    
            </tr>
            <?php foreach ($thanhviens as $item){ ?>
            <tr>
                <td><?php echo $item['memberID']; ?></td>
                <td><?php echo $item['username']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['level']; ?></td>
                <td>
                    <form method="post" action="xoathanhvien.php">
                        <input onclick="window.location = 'suathanhvien.php?id=<?php echo $item['memberID']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['memberID']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
    <?php
include('../dungchung/footer.php');
?>
</html>