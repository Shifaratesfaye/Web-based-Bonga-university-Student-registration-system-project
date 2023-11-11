<?php
   include("connection.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form   
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
        
      $sql = "SELECT * FROM user ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      // if(($count == 1)&&(($myusername!="")&&($mypassword!=""))) {
        if(($myusername=="admin")&&(($myusername!="")&&($mypassword==$row["password1"]))) {

       //  session_register("myusername");
         $_SESSION['name'] = $myusername;
         
         header("location: AdminDashboard.php");
      }
      else if(($myusername=="student")&&(($myusername!="")&&($mypassword==$row["password1"]))) {
        $_SESSION['name'] = $myusername;
         
        header("location:Student Dashboard.php");
         }
      else {

        echo "<script type='text/javascript'>
        alert('You have enter password or Username incorrectly! TRY again!! or if you havent Account :Reister as User');
   
        </script>
        ";
        //  $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeLCOME </title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script tex>
        src="../css/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"
    </script>
     <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    
</head>
<body>
   <nav class="barnav">
   <div class="main">  
    
      <dir class="logoo">
      <img src="Images/schoolImages/bulogo (2).jpg" alt="BU logo">
     </dir>
        <ul class="menu">
            <i class="fa fa-home"></i>
           <li><a href="#">HOME</a></li>
            <li><a href="About_us.php">ABOUT US</a></li>
            <li><a href="#">CONTACT US</a></li>
              <li><a href=""><button class="btn btn-warning" type="submit">LOGIN</button></a>
              <div class="sub-menu">
              <ul>
              <li><button class="btn btn-warning" type="submit"onclick="openpopup()"> LOGIN TO PAGE</button></li>
            <a href="user Registrationpage.php"> <li><button class="btn btn-warning" type="submit"onclick="openpoup()"> REGISTER NOW</button></li></a>
              </ul>
              </li>
           </div>
        </ul>
      </div>
    </nav>
            <div class="mbody">
            <center>
              <h1 style="color:blue;font-size:66px;">WELL COME TO BU STUDENT REGISTRATION PAGE </h1>
                <h1 style="color:white;font-size:23px;">"programming is not about what you know, <br> it is what you can figure out."<em>Chris pine</em> </h1>
                </center>
               
                          <div class="popupdiv " id="popupdiv">
                          <form action="" method="post">
                          username:  <input class="input"type="text" name="username" id="uname"><br>
                          password : <input class="input" type="password" name="password" id="pass"><br>
                            <input type="submit" value="Submit" class="btns"><br>
                              <div class="register">
                                  <h1 id="createacc">If you haven't Account <br> Register here</h1>

                            </div>
                            </form>
                            <a href="user Registrationpage.php"><button type="submit" class="btns" >REGISTER </button></a>
                          </div><br>
                 
                  
                <!-- <div class="">
              <button style="margin-top: 250px;background-color:green;"class="btnss btn btn-warning"
                   type="submit"onclick="openpopup()"> LOGIN TO PAGE</button>
                <!-- <button   class=" btn btn-info" type="submit" >LOgin</button> -->
               </div> -->
     </div>
        <div class="rows departements">
         <center> <h3> ALL Service Performed In the page</h3></center>
          <div class="col-sm-4 column">
            <div class="divservice"><hr>
            <h3>IF you are ADMIN <i class="fa fa-user"></i></h3>
            <p>1st login with your password</p>
            <p>Login to Admin dashboard  or </p>
            <p>portalLogin to Student or/then </p>
            <p>logout</p>
            <a href=""><input class="btn btn-primary"type="button" value="APPLY NOW"></a>

          </div>
        </div>
          <div class="col-sm-4 column">
            <div class="divservice"><hr>
            <h3>if you Are Student<i class="fa fa-user"></i></h3>
            <p>login with your password to student portal</p>
            <p>register now by using register button</p>
            <p>login to Student portal</p>
            <p>logout </p>
            <a href="#"><input class="btn btn-primary"type="button" value="APPLY NOW"></a>

          </div>
        </div>
          <div class="col-sm-4 column ">
          <div class="divservice"><hr>
            <h2>If you are othe or new user</h2>
            <p><i class="fa fa-error"></i>you should have to registered first </p>
            <p>And became part of users</p>
            <p>logout and apply now </p>
            <p>else you will bunned after 5 minute</p>
           <a href="#"><input class="btn btn-primary"type="button" value="APPLY NOW"></a>
          </div> 
        </div>
        </div>

<!-- 
      <div class="footer">
        <h2>Footer</h2>
      </div> -->
      <script>
        let popup=document.getElementById("popupdiv");
        function openpopup(){
          popup.classList.add("open-popup");
        }
        function loginpopup(){
          popup.classList.remove("open-popup");
        }
      </script>
      <?php
include("footer.php");
?>
