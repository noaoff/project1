<?php
session_start();
include("connect.php");

$date1 = date("d/m/Y");
//   echo ">>$admin_name >>$date1";
?>


<?php

$sql = "SELECT * FROM user WHERE user = '" . $_SESSION['user'] . "'";

$result1 = mysqli_query($db, $sql);
$row1 = mysqli_fetch_array($result1); {
  $user_id = $row1["user_id"];
  $user = $row1["user"];
  $passwordpass = $row1["password"];
  $user_fname = $row1["user_fname"];
  $user_lname = $row1["user_lname"];
  $user_address = $row1["user_address"];
  $user_phone = $row1["user_phone"];
  $user_pic = $row1["user_pic"];
}


?>
<html>

<head>
  <title>ระบบตรวจสอบยอนกลับสับปะรด </title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <script src="bootstrap4/jquery-3.4.1.min.js"></script>
  <script src="bootstrap4/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN1GV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGiQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
  <?php include("header_user.php"); ?>
  <br>

  <div class="container">
    <div class="card">
      <div class="card-header card bg-success text-white">เพื่มส่วน</div>
      <div class="card-body">

        <form method="POST" action="insert_frame_save.php" enctype="multipart/form-data">



          <table class="table table-hover">
            <tbody>
              <tr>
                <td width="19%"></td>
                <td width="15%">รหัสเจ้าของสวน</td>
                <td><textarea class="form-control" name="user_id" readonly><?php echo $user_id; ?></textarea></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td width="19%"></td>
                <td width="15%">ชื่อเจ้าของสวน</td>
                <td><textarea class="form-control" name="#" readonly><?php echo $user_fname; ?> <?php echo $user_lname; ?></textarea></td>
                <td></td>
                <td></td>
              </tr>
              </tr>
              <tr>
                <td></td>
                <td>ชื่่อสวน</td>
                <td><textarea class="form-control" name="suan_name" required></textarea></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>ขนาดพื้นที่สวน (ไร่)</td>
                <td><input class="form-control" name="suan_size_r" type="number" required /></td>
                <td></td>
                <td></td>
              <tr>
                <td></td>
                <td>ขนาดพื้นที่สวน (งาน)</td>
                <td><input class="form-control" name="suan_size_g" type="number" required /></td>
                <td></td>
                <td></td>
              <tr>
                <td></td>

                <td>ขนาดพื้นที่สวน (ตารางวา)</td>
                <td><input class="form-control" name="suan_size_v" type="number" required /></td>
                <td></td>
                <td></td>
              <tr>
                <td></td>
                <td>ละติจูด</td>
                <td>
                  <font color="red"> **โปรดระบุเป็นตัวเลข**</font><input class="form-control" name="suan_latitude" type="number" required />
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>ลองจิจูด</td>
                <td>
                  <font color="red"> **โปรดระบุเป็นตัวเลข**</font><input class="form-control" name="suan_longitude" type="number" required />
                </td>
                <td></td>
                <td></td>
              <tr>
                <td></td>
                <td>ที่อยู่ของสวน</td>
                <td>
                  <font color="red"> **โปรดระบุด้วย**</font> <textarea class="form-control" name="suan_address" type="number" cols="50" rows="5" required></textarea>
                </td>
              </tr>
              </td>


              </tr>
            </tbody>
          </table>


          <input type="submit" class="btn btn-outline-primary btn-sm" value="บันทึก">
          <input type="reset" class="btn btn-outline-danger btn-sm" value="ยกเลิก">
        </form>




      </div>
    </div>
  </div>
  <br>


  <br><br>


</body>
<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>

</html>