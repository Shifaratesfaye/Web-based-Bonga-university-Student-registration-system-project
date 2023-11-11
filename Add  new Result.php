<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'student r system');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 session_start();
if(isset($_POST['upload']))
{
    $year =$_POST['year'];
    $semester =$_POST['semester'];
    $course_code =$_POST['course_code'];
    $batch_data=$_POST['batch'];
    $grade_data=$_POST['grade'];
    $cgpa_data=$_POST['cgpa'];
    $remark_data=$_POST['remark'];
    $sql= "INSERT INTO  result(year,semester,course_code,batch,grade,cgpa,remark) 
    values('$year','$semester','$course_code','$batch_data','$grade_data','$cgpa_data','$remark_data')";
    $result=mysqli_query($db,$sql);
    if($result){
       
        echo "<script type='text/javascript'>
        alert('Result adedd successfully');
        </script>
        ";
        header("location:Manage  Result.php");
}

}
else{
  echo "<script type='text/javascript'>
  alert('you have not added correctly try again');
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
    <title> New Result  Add Form page</title>
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
                <h1>Result Regestration Form</h1>    
               <!-- <marquee behavior="" direction=""> <h1>
                welcome to registration page  
                  Please fill All Information Correctly</h1>
                  <hr>
                  </marquee> -->
              
                </div>
        <div class="popupdivregistiration">
                 
                <label for="year">year</label><br>
                <input class="input-registration"type="text" name="year" id="year" required><br>
                <label for="semester">semester</label><br>
                <input class="input-registration" type="text" name="semester" id="semester" required><br>
                <label for="course_code">Coure_code</label><br>
                <input class="input-registration"type="text" name="course_code" id="course_code" required><br>
                <label for="batch">Batch</label><br>
                <input class="input-registration" type="text" name="batch" id="batch" required><br>   
                <label for="grade">grade</label><br>
                <input class="input-registration" type="text" name="grade" id="grade" required><br> 
                <label for="cgpa">Comilative grade</label><br>
                <input class="input-registration" type="text" name="cgpa" id="cgpa" required><br> 
                <label for="remark">Remark</label><br>
                <input class="input-registration" type="text" name="remark" id="remark" required><br> 
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