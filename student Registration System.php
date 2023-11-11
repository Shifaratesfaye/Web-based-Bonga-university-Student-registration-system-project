<?php

error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
  $message=$_SESSION['message'];
  echo "<script type='text/javascript'>

  alert('$message');
  </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registration system</title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script>
        src="css/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"
    </script>
    <!-- <link rel="stylesheet" href="file:///C:/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
  <script src="file:///C:/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script> -->
</head>
<body class="srs-body">
<div class="container bg-secondry formboxregister">
    <form name="aform"action="Data_insert.php" method="post" enctype="multipart/form-data">
                <div class="welcome">
               <marquee behavior="" direction=""> <h1>
                welcome to registration page  
                  Please fill All Information Correctly</h1>
                  <hr>
                  </marquee>
              
                </div>
        <div class="popupdivregistiration">
            <h1>Student Regestration  System</h1>
                 <label for="photo">Upload your photo</label>
                <input class="inut-registration" type="file" name="images" id="photo" ><br><br>
                <label for="uname">FullName</label><br>
                <input class="input-registration"type="text" name="FullName" id="uname" required><br>
                <label for="uname">UserName</label><br>
                <input class="input-registration" type="text" name="username" id="uname" required><br>
                <label for="DOB">Date Of Birth</label><br>
                <input class="input-registration"type="date" name="DOB" id="DOB" required><br>
                <label for="email">Email Address</label><br>
                <input class="input-registration" type="email" name="email" id="email" required><br>
                <div class="gender">
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id="male"  value="male">Male
                <input type="radio" name="gender" id="female" value="female">Female
                <input type="radio" name="gender" id="other" value="other">Other
                </div>
                <label for="uname">Password</label><br>
                <input class="input-registration"type="password" name="password" id="pass" required><br>
                <label for="uname">Confirm pasword</label><br>
                <input class="input-registration"type="password" name="confpassword" id="confpass" required>
           
                <div class="footer1">
                <input type="submit" value="Submit" name="apply" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
              </div><br>
        </div>       
    </form>       
  
</div>
</body>
</html>