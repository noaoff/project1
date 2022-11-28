<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>เข้าสู่ระบบตรวจสอบยอนกลับสับปะรด </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script src="https://kit.fontawesome.com/412f7619b6.js" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<style>
		.op {
			margin-left: 120px;
			margin-top: 20px;
		}
	</style>
</head>

<body>

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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="POST" class="login100-form validate-form flex-sb flex-w" action="login_chk.php">
					<span class="login100-form-title p-b-32">
						&nbsp;<i class="far fa-user"></i>&nbsp;เข้าสู่ระบบตรวจสอบย้อนกลับสับปะรด
					</span>

					<span class="txt1 p-b-11">
						ชื่อเข้าใช้งาน
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
						<input class="input100" type="text" name="user" required>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						รหัสผ่าน
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">

						</span>
						<input class="input100" type="password" name="password" id="myInput" required>
						<span class="focus-input100"></span>

					</div>
					<p><input type="checkbox" onclick="myFunction()">&nbsp;&nbsp;แสดงรหัสผ่าน</p>

					<div class="container-login100-form-btn">
						<div class="op"><button class="login100-form-btn">
								เข้าสู่ระบบ
							</button>
						</div>
					</div>

				</form>
				<div class="op"><a href="register.php"><button class="login100-form-btn">
							สมัครสมาชิก
						</button></a>
				</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

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