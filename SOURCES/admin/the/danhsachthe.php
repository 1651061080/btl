<?php
require './the.php';
$the = get_allthe();
disconnect_db();
include('../dungchung/header.php')
?>
 
<!DOCTYPE html>
<html>
    <head>
        <center><title>Danh sách thẻ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style=" border: 1px solid blue;">Danh sách người đặt mua thẻ</h1>
        <a href="./dangkythe.php" style="font-size:20px;">Thêm người mua</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10" style=" background-color : yellow;">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>mobile</td>
                <td>address </td>
                <td>number</td>
        
            </tr>
            <?php foreach ($the as $item){ ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['mobile']; ?></td>
                <td><?php echo $item['address']; ?></td>
                <td><?php echo $item['number']; ?></td>
                <td>
                    <form method="post" action="xoathe.php">
                        <input onclick="window.location = './suathe.php?id=<?php echo $item['id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>"/>
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