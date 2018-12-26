<?php
            include("../../admin/cauhoi.php");
            if (!$conn){
                $conn = mysqli_connect('localhost', 'root', '', 'thien') or die ('Can\'t not connect to database');
                // Thiết lập font chữ kết nối
                mysqli_set_charset($conn, 'utf8');
            }
            if(isset($_POST['ook'])){
                $arr =$_POST;
                $dung=0;
                $sai=0;
                foreach($arr as $key=>$value){
                    if(is_numeric($key))
                    {
                    $sql2="select cauhoi.dapan from cauhoi where id= {$key} limit 1";
                    $result1=mysqli_query($conn,$sql2);
                    $dapan=mysqli_fetch_object($result1);
                    if($value==$dapan->dapan){
                        echo "Câu {$key} đúng </br>";
                        $dung++;
                    }
                    else{
                        echo "Câu {$key} sai </br>";
                        $sai++; 
                    }
                    }	
                }
                $tong=$dung +$sai;
                echo "</br>Bạn đã làm đúng {$dung} trên {$tong}";
            }
?>     
//   <script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script>
//     <script>
//     $(document).ready(function(){
//         $("#ok").click(function(){
//             alert('vfbf');
//         });
//     });
//     </script>
<form method="post" action="sosanh.php">

<div id="form1" style="">
<?php
            $sql= "select cauhoi.id,cauhoi.cauhoi,cauhoi.a,cauhoi.b from cauhoi ";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_object($result)){
                echo "Câu ".$row->id.': '.$row->cauhoi.'</br>';
?>	
                A- <input type="radio" name="<?php echo $row->id ?>" value="a"/><?php echo $row->a.'</br>'; ?>
                B- <input type="radio" name="<?php echo $row->id ?>" value="b"/><?php echo $row->b.'</br>'; ?>
              
<?php } ?>
        <input type="submit" name="ook" value="Nộp Bài"/>
</div>
</form>