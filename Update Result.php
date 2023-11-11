<?php
include("connection.php");

    $s_id= $_GET['sid'];
    $sql="select * from result where id='$s_id' ";

    $result=mysqli_query($db,$sql);
    $info=$result->fetch_assoc();
    session_start();
    if(isset($_POST['update']))
    {
        $year =$_POST['year'];
        $semester =$_POST['semester'];
        $course_code =$_POST['course_code'];
        $batch =$_POST['batch'];
        $grade =$_POST['grade'];
        $cgpa =$_POST['cgpa'];
        $remark =$_POST['remark'];
    
        $sql= "UPDATE   result SET year='$year',semester='$semester',course_code='$course_code',batch='$batch',grade='$grade',
        cgpa='$cgpa',remark='$remark' where id= $s_id";

        
        $result=mysqli_query($db,$sql);
        if($result){
            echo "<script type='text/javascript'>
        alert('you successfully updated');
        </script>
        ";
        header("location:Manage  Result.php");
        }else{
            echo "<script type='text/javascript'>
            alert('you havent  updated try again!');
            </script>
            ";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Result information</title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="css/Admin.css">
     <!-- fontawesome -->
     <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>
   <header class="header">
      <a href="">Admin Dashboard  <b> Result</b> Update page</a>
       <div class="logout"><a href="welcomepage.php">
          <input type="button" value="LOGOUT"class=" btn btn-warning"></a>
        </div>
    </header>
    <aside>
        <ul>
            <!-- <img src="file:///C:/Users/hp/Documents/imag/" alt="dsdf"> -->
            <img class="profile"src="Images/schoolImages/man.jpg" alt="">
            <li><i class="fa fa-user"></i><a href="View student.php">manage Student</a></li>
            <li><i class="fa fa-book"></i><a href="Manage Subject.php">Manage subject</a></li>
            <li><i class="fa fa-book"></i><a href="Manage  Result.php">manage Result</a></li>
            <li><i class="fa fa-phone"></i><a href="Subject m Form.php">Add new  subject</a> </li>
          
        </ul>
    </aside>
    <div>   
      <form name="aform"action="#" method="post">  
         <div class="update_student_form update_result">
            <h1>Update  Result information here</h1><br>
                <label for="Year">Year</label><br>
                <input class="input-update"type="text" name="year" id="Year"
                 value="<?php echo "{$info['year']}";?>" required><br>
                <label for="semester">semester	</label><br>
                <input class="input-update" type="text" name="semester" id="semester" required
                value="<?php echo "{$info['semester']}";?>"><br>
                <label for="course_code">course_code</label><br>
                <input class="input-update" type="text" name="course_code" id="course_code" required
                value="<?php echo "{$info['course_code']}";?>"><br>
                
                <label for="batch">Batch</label><br>
                <input class="input-update"type="text" name="batch" id="batch" required
                value="<?php echo "{$info['batch']}";?>"><br>
                <label for="grade">Grade</label><br>
                <input class="input-update"type="text" name="grade" id="grade" required
                 value="<?php echo "{$info['grade']}";?>"><br>
           
                 <label for="cgpa">CGPA</label><br>
                <input class="input-update"type="text" name="cgpa" id="cgpa" required
                value="<?php echo "{$info['cgpa']}";?>"><br>
                <label for="remark">Remark</label><br>
                <input class="input-update"type="text" name="remark" id="remark" required
                value="<?php echo "{$info['remark']}";?>"><br>
                <input type="submit" value="UPDATE" name="update" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
          </div>       
    </form>       
</div>
</body>
</html>