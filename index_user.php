<html>

<head>
  <?php session_start(); ?>
  <title>ระบบตรวจสอบย้อนกลับ</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <script src="bootstrap4/jquery-3.4.1.min.js"></script>
  <script src="bootstrap4/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN1GV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGiQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<style>
  body {
    background-image: url(imges/carposter.jpg);
    background-size: 100%;
  }
</style>

<body>
  <?php include("header_user.php"); ?>
  <br>

  <br>
  <div class="container-fluid">
    <center>
      <h1 class="mt-4">
        <font color="Black">ยินดีต้อนรับคุณ : <?php echo ($_SESSION['user']); ?> </font>
      </h1>
      <font color="Black">ยินดีต้อนรับเข้าสู่ระบบตรวจสอบย้อนกลับสับปะรด</font>
    </center>



  </div>





</body>

</html>