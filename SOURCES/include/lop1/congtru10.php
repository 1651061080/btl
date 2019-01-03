
<!DOCTYPE html>
<html lang="thien">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link rel="stylesheet" type="text/css" href="../dungchung/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../dungchung/css/bootstrap-responsive.css">
    <title>Học toán với HOCTOT.COM</title>
    <link rel="stylesheet" href="../dungchung/css/TEST.CSS">
    <script async="" src="./Học toán với OnlineMath - Online Math_files/analytics.js.download"></script>
    <script type="text/javascript" src="../dungchung/js/jquery.js.download"></script>
    <script type="text/javascript" src="../dungchung/js/jquery.bxslider.min.js.download"></script>
    <script src="./dungchung/js/bootstrap.min.js.download"></script>
    <link rel="stylesheet" type="text/css" href="../dungchung/css/grade_new.css">
    <link rel="stylesheet" type="text/css" href="../dungchung/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="../dungchung/css/home.css">
    <link rel="stylesheet" type="text/css" href="../dungchung/css/page.css">



    <title>HOCTOT.COM</title>
</head>
<?php
include('./header.php');

?>

<form method="post" id = "form" action="sosanh.php">
<div class="bc bc-math" style="margin-bottom: 10px;">
		<span class="bc-item bc-first">
			<a href="">
				<img src="" class="bc-logo">Luyện tập
			</a> 
		</span>
		<span class="bc-item"><a href="o">Lớp mẫu giáo</a></span>		<span class="bc-item">
			<b>
				<a href="">Cao - thấp 
				</a> 
			</b> 
		</span> 
	</div>
 

<div id="question" style="font-size: 22px"  name="question">
            <?php 

             include("../../admin/cauhoi/cauhoi.php");
             if (!$conn){
                $conn = mysqli_connect('localhost', 'root', '', 'thien') or die ('Can\'t not connect to database');
                // Thiết lập font chữ kết nối
               mysqli_set_charset($conn, 'utf8');
            }
           $luot=0;
            // <h2><p style="text-align:center;color:red;">Đề thi toán</p></h2>
         if(isset($_POST['ook'])){
             $luot++;
            $arr =$_POST;
            $dung=0;
            $sai=0;
            $tong=0;
        foreach($arr as $key=>$value){
            if(is_numeric($key))
            {
            $sql2="select cauhoi.dapan from cauhoi where id= {$key} limit 1";
            $result1=mysqli_query($conn,$sql2);
            $dapan=mysqli_fetch_object($result1);
            if($value==$dapan->dapan){
                echo "<h2></br>Chính xác !</h2>";
                $dung++;
                $tong =$tong +10;
            }
            else{
                echo "<h2></br>Sai rồi !</h2>";
                $sai++;
            }
            }	
        }

        
        }
       
    
        $stt=1;
        $sql= "select cauhoi.id,cauhoi.cauhoi,phuongann.a,phuongann.b from cauhoi,phuongann where (cauhoi.id=phuongann.id and cauhoi.chude='congtru10')   ORDER BY RAND() LIMIT 1";
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
