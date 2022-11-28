<!DOCTYPE html>
<html lang="en">

<head>
	<title>สมัครสมาชิกระบบตรวจสอบยอนกลับสับปะรด </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<style>
	.op {
		margin-left: 120px;
		margin-top: 20px;
	}
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="POST" class="login100-form validate-form flex-sb flex-w" action="register_chk.php" enctype="multipart/form-data">
					<span class="login100-form-title p-b-32">
						สมัครสมาชิก
					</span>
					<span class="txt1 p-b-11">
						ชื่อ
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="user_fname" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						นามสกุล
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="user_lname" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						ที่อยู่
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<textarea type="text" class="form-control" name="user_address" required></textarea>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						เบอร์โทรศัพท์
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="user_phone" onkeypress="check_key_number();" maxlength="10" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						ชื่อผู้เข้าใช้งาน
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text" name="user" required>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						รหัสผ่าน
					</span>
					<div class="wrap-input100 validate-input m-b-12">
						<input class="input100" type="password" name="password" id="myInput" required>
						<span class="focus-input100"></span>
					</div>
					<p><input type="checkbox" onclick="myFunction()">&nbsp; แสดงรหัสผ่าน</p>
					<div class="input-group mb-3 mt-3 input-group-sm">
						<div class="input-group-prepend">
							<span class="txt1 p-b-11">รูปภาพ</span>&nbsp;&nbsp;&nbsp;
							<input type="file" name="user_pic" required>
						</div>
					</div>
					<div>
						<div class="g-recaptcha" data-sitekey="6LeoPxMjAAAAAFMU1A83MhzhIvkWXJfSplwqCnwn"></div>
					</div>

					<div class="container-login100-form-btn">
						<div class="op"><button type="submit" class="login100-form-btn">
								สมัครสมาชิก
							</button></div>

					</div>


				</form>
				<div class="op"><a href="index.php"><button class="login100-form-btn">
							กลับไปสู่หน้าหลัก
						</button></a></div>
			</div>
		</div>
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

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>