

<?php
include("connect.php");
session_start();

$username = $_POST['user'];
$password = $_POST['password'];

$sql = "select * from user where user='$username' and password ='$password' ";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

if ($row > 0) {
   $_SESSION["user"] = $row['user'];
   $_SESSION["pw"] = $row['password'];
   $_SESSION["user_fname"] = $row['user_fname'];
   $_SESSION["user_lname"] = $row['user_lname'];
   $show = header("location:index_user.php");
} else {
   echo '<script type="text/javascript">
        alert("ชื่อผู้เข้าใช้งานหรือรหัสผ่านไม่ถูกต้อง !!!");</script>';
   echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}



?>