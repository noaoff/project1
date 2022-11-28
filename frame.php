<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
session_start();
$sql = "SELECT * FROM user WHERE user= '" . $_SESSION['user'] . "'";
$query = $db->query($sql);
$row = $query->fetch_assoc();



date_default_timezone_set("Asia/Bangkok");

$date1 = date("d/m/Y");
$date2 = date("H:i:s");

//   echo ">>$admin_name >>$date1";
?>

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

  <body>
    <?php include("header_user.php"); ?>
    <br><br><br>

    <div class="container">
      <div class="card">

        <div class="card-header card bg-success text-white"><i class="fas fa-calendar-minus">&nbsp; จัดการสวน</i>

          <div class="search-container">

          </div>


        </div>
        <div class="card-body">
          <input class="form-control" id="myInput" type="text" placeholder="ค้นหา"><br>
          <table align="center" class="table table-hover">
            <tbody id="myTable">
              <tr>
                <td align='center' width="8%"><b>รหัสสวน </td>
                <td align='center' width="50%"><b>ชื่อสวน </td>
                <td align='center' width="15%"><b>การจัดการ </td>

                <a href="insert_frame.php"><button type='button' class='btn btn-primary'>เพิ่มสวน</button></a>

                <?php

                $sql1 = "SELECT * FROM suan WHERE user_id = '" . $row['user_id'] . "'";
                $result1 = mysqli_query($db, $sql1);
                while ($row1 = mysqli_fetch_array($result1)) {
                  $suan_id = $row1["suan_id"];
                  $suan_name = $row1["suan_name"];
                  $suan_latitude = $row1["suan_latitude"];
                  $suan_longitude = $row1["suan_longitude"];
                  $suan_address = $row1["suan_address"];
                  $user_id = $row1["user_id"];



                  echo "<tr><td><center> $suan_id </td>";
                  echo "<td><center>$suan_name</td>";
                  echo "<td align='center'><a href='planting.php?suan_id=$suan_id'><button type='button' class='btn btn-outline-primary' > จัดการสวน </button></a></td>";
                  echo "<td align='center'><a href='insert_planting.php?suan_id=$suan_id'><button type='button' class='btn btn-outline-primary' > เพิ่มการปลูก </button></a></td>";
                }

                ?>



        </div>
      </div>
    </div>
    <br>


    <br><br>






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
    <script>
      $(document).ready(function() {
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>

  </body>

</html>