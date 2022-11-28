<?php
include("connect.php");



$suan_name = $_POST["suan_name"];
$suan_size_r = $_POST["suan_size_r"];
$suan_size_g = $_POST["suan_size_g"];
$suan_size_v = $_POST["suan_size_v"];
$suan_latitude = $_POST["suan_latitude"];
$suan_longitude = $_POST["suan_longitude"];
$suan_address = $_POST["suan_address"];
$user_id = $_POST["user_id"];



//   echo "> $newsTITLE >$newsTEXT >$newsPIC1 
//   >$newsDATE >$newsSTATUS >$adminUSER";

//  move_uploaded_file($_FILES["newsPIC1"]["tmp_name"],"./news_pic/$newsPIC1");

$sql = "INSERT INTO suan VALUES('','$suan_name','$suan_size_r','$suan_size_g','$suan_size_v','$suan_latitude','$suan_longitude','$suan_address','$user_id')";
$result = mysqli_query($db, $sql);

if (!$result) {
    echo '<script type="text/javascript">
        alert("บันทึกข้อมูลเสร็จสิ้น !!!");</script>';
    echo "<meta http-equiv='refresh' content='0;url=insert_frame.php'>";
} else {
    echo '<script type="text/javascript">
        alert("บันทึกข้อมูลเสร็จสิ้น");</script>';
    echo "<meta http-equiv='refresh' content='0;url=frame.php'>";
}
