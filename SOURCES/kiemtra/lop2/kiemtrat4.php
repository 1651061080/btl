<?php
include("../../")
            include("../dungchung/header.php");
            if(isset($_POST['ook'])){
                $arr =$_POST;
                $dung=0;
                $sai=0;
                foreach($arr as $key=>$value){
                    if(is_numeric($key))
                    {
                    $sql2="select dapan from lop2 where id= {$key} limit 1";
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
<form method="post" action="">

<div id="form1" style="">
<?php
            $sql= "select lop2.id,lop2.cauhoi,lop2.a,lop2.b from lop2 ";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_object($result)){
                echo "Câu ".$row->id1.': '.$row->cauhoide1.'</br>';
?>	
                A- <input type="radio" name="<?php echo $row->id1 ?>" value="a"/><?php echo $row->a.'</br>'; ?>
                B- <input type="radio" name="<?php echo $row->id1 ?>" value="b"/><?php echo $row->b.'</br>'; ?>
              
            
<?php } ?>
        <input type="submit" name="ook" value="Nộp Bài"/>
</div>
</form>
