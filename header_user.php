<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/412f7619b6.js" crossorigin="anonymous"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ระบบตรวจสอบย้อนกลับ</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
<style>
  a {
    color: black;
    text-decoration: none;

  }

  a:link,
  a:visited {
    color: black;
    text-decoration: none;

  }
</style>

<body>

  <div class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <div class="bg-success text-white border-light" id="sidebar-wrapper">
      <div class="sidebar-heading text-white " align="center"><a href="index_user.php">
          <font color="white"> &nbsp;ระบบตรวจสอบย้อนกลับสับปะรด </font>
      </div></a>
      <div class="list-group list-group-flush">
        <a href="frame.php" class="list-group-item list-group-item-action bg-success text-light "><i class="fas fa-edit"></i>&nbsp;จัดการสวน</a>

        <a href="#" class="list-group-item list-group-item-action bg-success  text-light"><i class="fas fa-edit"></i>&nbsp;เมนู</a>

        <a href="#" class="list-group-item list-group-item-action bg-success text-light "><i class="fas fa-edit"></i>&nbsp;เมนู</a>


      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">


        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <a class="nav-link" id="menu-toggle" target="_blank" href="#">ปิดเมนู</a>
        </ul>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <a class="nav-link" href="#" style="color: #33CC00"> ผู้ใช้งาน&nbsp;&nbsp;<i class="fas fa-user"></i>&nbsp;<?php echo ($_SESSION['user']); ?>
              </li>
            </a>

            <li class="nav-item">
              <a class="nav-link" href="logout.php"><i class="fas fa-door-open"></i>ออกจากระบบ</a>
            </li>

          </ul>
        </div>
      </nav>




      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Menu Toggle Script -->
      <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>

</body>

</html>