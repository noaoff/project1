<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>สมัครสมาชิก</title>
</head>

<body>
    <div class="container ">
        <h3 class="mt-4">สมัครสมาชิก</h3>
        <hr>
        <form action="register_chk.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fname" class="fname">ชื่อ</label>
                <input type="text" class="form-control" name="user_fname" aria-describedby="user_fname" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="lname">นามสกุล</label>
                <input type="text" class="form-control" name="user_lname" aria-describedby="user_lname" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="lname">ที่อยู่</label>
                <textarea type="text" class="form-control" name="user_address" aria-describedby="user_address" cols="50" rows="5" required></textarea>
            </div>
            <div class="mb-3">

                <label for="lname" class="lname">เบอร์โทรศัพย์</label>
                <input type="text" class="form-control" name="user_phone" aria-describedby="user_phone" onkeypress="check_key_number();" maxlength="10" required>
            </div>
            <div class="mb-3">
                <label for="user" class="user">ชื่อผู้เข้าใช้งาน</label>
                <input type="text" class="form-control" name="user" aria-describedby="user" required>
            </div>
            <div class="mb-3">
                <label for="password" class="password">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" aria-describedby="password" id="myInput" required>
                <input type="checkbox" onclick="myFunction()">แสดงรหัสผ่าน
            </div>
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="text">รูปภาพ</span>
                    <input type="file" class="form-control-file border" name="user_pic" required>

                </div>
            </div>
            <div>
                <div class="g-recaptcha" data-sitekey="6LeoPxMjAAAAAFMU1A83MhzhIvkWXJfSplwqCnwn"></div>
            </div>
            <br><button type="submit" name="signup" class="btn btn-primary">ลงทะเบียน</button>
        </form>
        <hr>
        <p>หากเป็นสมาชิกแล้ว สามารถคลิ๊กที่นี่เพื่อ ---> <a href="login.php">เข้าสู่ระบบ</a></p>
    </div>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script language="JavaScript" type="text/JavaScript">
        function check_key_number() {
use_key=event.keyCode
if (use_key != 10 && (use_key < 48) || (use_key > 57)) {
event.returnValue = false;
}
}
</script>


</body>

</html>