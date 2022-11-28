<?php
    include("connect.php");

    

    $cultivation_time=$_POST["cultivation_time"];
    $cultivation_date=$_POST["cultivation_date"];
    $cultivation_breed=$_POST["cultivation_breed"];
    $cultivation_amount=$_POST["cultivation_amount"];
    $suan_id=$_POST["suan_id"];
  


  

 //   echo "> $newsTITLE >$newsTEXT >$newsPIC1 
 //   >$newsDATE >$newsSTATUS >$adminUSER";

  //  move_uploaded_file($_FILES["newsPIC1"]["tmp_name"],"./news_pic/$newsPIC1");

    $sql = "INSERT INTO cultivation VALUES('','$cultivation_time','$cultivation_date','$cultivation_breed','$cultivation_amount','$suan_id')";
    $result = mysqli_query($db,$sql);

    if(!$result){
        echo '<script type="text/javascript">
        alert("บันทึกข้อมูลเสร็จสิ้น !!!");</script>';
        echo "<meta http-equiv='refresh' content='0;url=planting.php?suan_id=$suan_id'>";
    }else{
        echo '<script type="text/javascript">
        alert("บันทึกข้อมูลเสร็จสิ้น");</script>';
        echo "<meta http-equiv='refresh' content='0;url=planting.php?suan_id=$suan_id'>";
    }

?>