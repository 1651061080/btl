
<!DOCTYPE html>
<html lang="thien">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="stylesheet" type="text/css" href="../../include/dungchung/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../include/dungchung/css/bootstrap-responsive.css">
    <title>Học toán với HOCTOT.COM</title>
    <link rel="stylesheet" href="../../include/dungchung/css/TEST.CSS">
    <script async="" src="./Học toán với OnlineMath - Online Math_files/analytics.js.download"></script>
    <script type="text/javascript" src="../../include/dungchung/js/jquery.js.download"></script>
    <script type="text/javascript" src="../../include/dungchung/js/jquery.bxslider.min.js.download"></script>
    <script src="./dungchung/js/bootstrap.min.js.download"></script>
    <link rel="stylesheet" type="text/css" href="../../include/dungchung/css/grade_new.css">
    <link rel="stylesheet" type="text/css" href="../../include/dungchung/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="../../include/dungchung/css/home.css">
    <link rel="stylesheet" type="text/css" href="../../include/dungchung/css/page.css">



    <title>HOCTOT.COM</title>
</head>
<?php
include('./dungchung/header.php');

?>

<form method="post" id = "form" action="sosanh.php">

 

<div id="question" style="font-size: 22px"  name="question">
            <?php 

            //  include("../../admin/cauhoi.php");
            
                $conn = mysqli_connect('localhost', 'root', '', 'thien') or die ('Can\'t not connect to database');
                // Thiết lập font chữ kết nối
               mysqli_set_charset($conn, 'utf8');
            

            // <h2><p style="text-align:center;color:red;">Đề thi toán</p></h2>
            if(isset($_POST['ook'])){
                $arr =$_POST;
                $dung=0;
                $sai=0;
                foreach($arr as $key=>$value){
                    if(is_numeric($key))
                    {
                    $sql2="select lop2.dapan from lop2 where id= {$key} limit 1";
                    $result1=mysqli_query($conn,$sql2);
                    $dapan=mysqli_fetch_object($result1);
                    if($value==$dapan->dapan){
                
                        $dung++;
                    }
                    else{
                       
                        $sai++; 
                    }
                    }	
                }
                
                echo "</br>Bạn đã làm đúng {$dung} trên 10<br>";
            }
       
    
        $stt=1;
        $sql= "select lop2.id,lop2.cauhoi,lop2.a,lop2.b from lop2  LIMIT 10";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_object($result)){
            echo "Câu ".$stt.':'.$row->cauhoi.'</br>';
    ?>
    <span class="audiocont"></span>
        A- <input type="radio" style ="" name="<?php echo $row->id ?>" value="a"/><?php echo $row->a.'</br>'; ?>
        B- <input type="radio" name="<?php echo $row->id ?>" value="b"/><?php echo $row->b.'</br>'; ?>
    
        <?php
            $stt++; } ?>
            <button class="btn btn-danger btn-large" name="ook" title="Làm xong và nộp bài" id="btn-done"><b class="icon icon-white icon-ok"></b>  Nộp bài !</button>
        <div id="score" style="text-align: center;">
            <!-- <div class="score-label grad-pink">Điểm</div>
            
                <h2><?php  echo($luot);?></h2>
            </div> -->

</div>
</form>
    <div id="fix-preview-practice">
		<div id="footer" data-id="0" data-name="none" data-active="">
			<div class="container-fuild">
                <p>trung tâm học tốt gmail : hoctot@gmail.com</p>
                <p><img  src="../dungchung/img/footer1.jpg" height ="200px" width="100%"/></p>
			</div>
			
		</div>
        
    </div>
 </div>
