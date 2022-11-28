
<?php
session_start();
include("connect.php");

$secret = "6LeoPxMjAAAAAKgDRRKE5IQ4y9vgy6BEWF_Mbv-I";
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captcha);
    $responseData = json_decode($verifyResponse);
    if (!$captcha) {
        echo '<script type="text/javascript">
            alert("กรุณากดยืนยันตัวตน reCAPTCHA !!!");</script>';
        echo "<meta http-equiv='refresh' content='0;url=register.php'>";
    }

    if ($responseData->success) {

        $user = $_POST["user"];
        $password = $_POST["password"];
        $user_fname = $_POST["user_fname"];
        $user_lname = $_POST["user_lname"];
        $user_address = $_POST["user_address"];
        $user_phone = $_POST["user_phone"];
        $user_pic = $_FILES["user_pic"]["name"];

        move_uploaded_file($_FILES["user_pic"]["tmp_name"], "./image/$user_pic");

        $sql = "INSERT INTO user VALUES('','$user','$password','$user_fname','$user_lname','$user_address','$user_phone','$user_pic')";
        $result = mysqli_query($db, $sql);

        if (!$result) {
            echo '<script type="text/javascript">
        alert("การสมัครสมาชิกไม่ถูกต้อง !!!");</script>';
            echo "<meta http-equiv='refresh' content='0;url=register.php'>";
        } else {
            echo '<script type="text/javascript">
        alert("การสมัครสมาชิกเรียบร้อยแล้ว");</script>';
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        }
    }
}
?>