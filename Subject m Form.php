<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'student r system');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 session_start();
if(isset($_POST['upload']))
{
    $code =$_POST['code'];
    $coursename =$_POST['cname'];
    $course_criedt =$_POST['criedt'];
    $inst_data=$_POST['inst'];
    $conact_data=$_POST['contact'];
    $sql= "INSERT INTO  subject(course_code,course_name,course_criedt,course_inst	,contact) 
    values('$code','$coursename','$course_criedt','$inst_data','$conact_data')";
    $result=mysqli_query($db,$sql);
    if($result){
       
        echo "<script type='text/javascript'>
        alert('adedd successfully');
        </script>
        ";
}

}
else{
  echo "<script type='text/javascript'>
  alert('you have to confirm password correctly');
  </script>
  ";

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Registration Form page</title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>
     <?php  
      include("navbar.php");
      ?>
    <div class="container  regform">
       <div class="row">
         <div class="col-sm-6 form1">
         <form name="aform"action="#" method="post" enctype="multipart/form-data">
                <div class="welcome">   
               <!-- <marquee behavior="" direction=""> <h1>
                welcome to registration page  
                  Please fill All Information Correctly</h1>
                  <hr>
                  </marquee> -->
              
                </div>
        <div class="popupdivregistiration">
             <h1>Subject Regestration Form</h1>    
                <label for="code">Course_Code</label><br>
                <input class="input-registration"type="text" name="code" id="code" required><br>
                <label for="cname">CourseName</label><br>
                <input class="input-registration" type="text" name="cname" id="cname" required><br>
                <label for="criedt">Coure_criedt</label><br>
                <input class="input-registration"type="number" name="criedt" id="criedt" required><br>
                <label for="inst">Course_int</label><br>
                <input class="input-registration" type="text" name="inst" id="inst" required><br>   
                <label for="inst">Course_contact_h</label><br>
                <input class="input-registration" type="text" name="contact" id="contact" required><br> 
          
                <div class="footer1">
                <input type="submit" value="Submit" name="upload" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
                <input type="reset" value="Cancel" name="" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
              </div><br>
              </div>
    </form> 
         </div>
       </div>

    </div>
</body>
</html>