<?php
require './cauhoi.php';
$cauhoi = get_allcauhoi();
disconnect_db();
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Danh sách cauhoi theo chủ đề</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Danh sách câu hỏi</h1>
        <a href="./themcauhoi.php">Thêm cau hỏi</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>id</td>
                <td>chủ đề</td>
                <td>câu hỏi</td>
                <td>đáp án 1</td>
                <td>đáp án 2</td>
                <td>đáp án </td>
            </tr>
            <?php foreach ($cauhoi as $item){ ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['chude']; ?></td>
                <td><?php echo $item['cauhoi']; ?></td>
                <td><?php echo $item['a']; ?></td>
                <td><?php echo $item['b']; ?></td>
                <td><?php echo $item['dapan']; ?></td>
                <td>
                    <form method="post" action="xoathanhvien.php">
                        <input onclick="window.location = 'suacauhoi.php?id=<?php echo $item['id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>