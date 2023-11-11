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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home Page</title>
    <link rel="stylesheet" href="css/Admin.css">
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
   <style>
.sidenav {
  height: 100%;
  width: 100px;
  position: fixed;
  z-index: 1;
  top: 140px;
  left: 0;
  background-color: #111;
  color:black;
  overflow-x: auto;
  transition: 0.5s;
  padding-top: 60px;
  border-radius:10px;
}

.sidenav a {
  padding: 14px 8px 8px 62px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  font-size: 28px;
  margin-left: 60px;
  background-color:purple;
  color:black;
  border-radius:20px;
}

.sidenav .closebtn{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  /* backgroung-color:blue; */
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media screen and (max-width: 450px) {
  .sidenav {width: 1px;}
  .sidenav a {font-size: 18px;}
}
#open{ position: absolute;
  top: 20;
  right: 25px;
  font-size: 36px;
  margin-left: 60px;
  background-color:gray;
  color:black;
}
</style>
</head>
<body><nav>
    <header class="header">
     <a href="">Admin Dashboard</a>
    <div class="logout"><a href="welcomepage.php">
    <input type="button" value="LOGOUT"class=" btn btn-warning"></a>
    </div>
    </header>        
    </nav>
     <div id="mySidenav" class="sidenav">  
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
       <span id="open"style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
          <img class="profile"src="Images\schoolImages\baba.jpg" alt=""><br>
               <a href="View student.php">Adminstrator</a><br>
                <a href="#">Student</a><br>
                <a href="#"> Head </a><br>
                <a href="#">Registrar</a> <br>
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
            <center><h1 id="adminwelcome"> WELL COME TO ADMIN STUDENT MANAGEMENT PAGE </h1>  
        </center>   
        <div class="cardBox">
            <div class="card">
               <a href=""><div>
                    <div class="number"><?php echo"Total$count" ?></div>
                    <div class="cardname">Total Student</div>
                </div>
                <div class="icon">
                <i class="fa fa-list"></i>
                </div>
            </div></a> 
            <div class="card">
            <a href="View student.php">
                <div>
                    <div class="number">number</div>
                    <div class="cardname">Manage Student</div>
                </div>
                <div class="icon">
                <i class="fa fa-user"></i>
                </div>
            </div></a>
            <div class="card">     
            <a href="Manage Subject.php">
                <div>
                    <div class="number"><?php echo"Total $count_sub" ?></div>
                    <div class="cardname">Manage Subject</div>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
            </div></a>
            <div class="card">
            <a href="Manage  Result.php">
                <div>
                    <div class="number">number</div>
                    <div class="cardname"> <p> Manage Result <br>related Info </p></div>
                </div>
                <div class="icon">
                     xxxx
                </div>
            </div></a>
            
        </div>
 </div>
 <!-- </div> -->
</body>
</html>