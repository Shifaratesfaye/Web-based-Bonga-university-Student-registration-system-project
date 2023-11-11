<?php
include("connection.php");
include("Session.php");
$sql= "SELECT * FROM Student2";
$result=mysqli_query($db,$sql);
 $sql_count=mysqli_query($db,"SELECT * from Student2");
 $count=mysqli_num_rows($sql_count);
    //  fetch and count subject from database
    $sql_count_sub=mysqli_query($db,"SELECT * from subject");
    $count_sub=mysqli_num_rows($sql_count_sub);
// extra code
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form   
  $myusername = mysqli_real_escape_string($db,$_POST['username']);
  if(($myusername!="")) {

    //  session_register("myusername");
      $_SESSION['name'] = $myusername;
      
      header("location: VIew result_student.php?re_no=$myusername");
   }
   
}
// extra code



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student portal Page</title>
    <link rel="stylesheet" href="css/studentportal.css">
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
   <style>
    .popupdiv{
  width: 600px;
  height: 260px;
  background-color: rgba(0, 0, 0, 0.9); 
  padding: 10px 0;
  margin: 5% auto; 
  color: #fff;
  box-shadow: 0 0 10px 10px rgba(0, 10, 20, 0.6);
  border-radius:60px;
  font-size: 24px;
  opacity: 0.7;
  position: absolute;
   top: 0;
   left : 50%;
  transform: translate(-50%,-50%) scale(0.1 );
  visibility: hidden;
  transition:transform 0.4s,top 0.4s;
  }
    .open-popup{
   visibility: visible;
   top: 12%;
   left: 25%;
   transform: translate(-50%,-50%) scale(1);
}
</style>
</head>
<body><nav>
    <header class="header">
     <a href="">  <i class="fa fa-cloud"></i>STUDENTS PORTAL</a>
    <div class="logout"><a href="welcomepage.php">
    <input type="button" value="LOGOUT"class=" btn btn-warning"></a>
    </div>
    </header>        
    </nav>
     <div id="mySidenav" class="sidenav">  
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
       <span id="open"style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
          <img class="profile"src="Images\schoolImages\baba.jpg" alt=""><br>
                <a href="#">Contact Head</a><br>
                <a href="#">view Result </a><br>
                <a href="#">Contact Teacher</a> <br>
            </div>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "50px";
}
</script>
    <!-- </div> -->
        <div class="maindashboard navhead">
            <center><h1 id="adminwelcome"> WELL COME TO STUDENT PORTAL PAGE </h1>  
        </center>   

             <div class="popupdiv " id="popupdiv">
                  <form action="" method="post">
                      Enter Your Registration number here: <br> <input class="input"type="text" name="username" id="uname">
                      <input type="submit" value="Submit" class="btns"><br>
                         </form>
                       </div><br>
                      <div class="">
                    <button class="bt btn btn-warning"type="submit"onclick="openpopup()">SEE YOUR RESULT</button>
                 </div>
        <div class="cardBox studentportal">
            <div class="card">
                <a href=""><div>
                    <div class="number"><?php echo"Total  $count" ?></div>
                    <div class="cardname">Total  Student</div>
                 </div>
                <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            </div>
          </a> 
           
        <div class="card">
            <a href="#">
                <div>
                    <div class="number">number</div>
                    <div class="cardname">view your Result</div>
                </div>
                <div class="icon">
                <i class="fa fa-euro"></i>
                </div>
            </div></a>
            <div class="card">     
            <a href="#">
                <div>
                    <div class="number"><?php echo"Total $count_sub" ?></div>
                    <div class="cardname">Contact Teacher</div>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
            </div></a>
            <div class="card">
            <a href="">
                <div>
                    <div class="number">number</div>
                    <div class="cardname"> <p>Contact Head</p></div>
                </div>
                <div class="icon">
                <i class="fa fa-envelope"></i>
                </div>
            </div></a>
            
        </div>
 </div>
 <!-- </div> -->

 <script>
        let popup=document.getElementById("popupdiv");
        function openpopup(){
          popup.classList.add("open-popup");
        }
        function loginpopup(){
          popup.classList.remove("open-popup");
        }
      </script>
</body>
</html>