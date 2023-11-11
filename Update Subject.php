<?php
include("connection.php");

    $s_id= $_GET['sid'];
    $sql="select * from subject where id='$s_id' ";

    $result=mysqli_query($db,$sql);
    $info=$result->fetch_assoc();
    session_start();
    if(isset($_POST['update']))
    {
        $code =$_POST['code'];
        $name =$_POST['cname'];
        $creidt =$_POST['criedt'];
        $inst =$_POST['inst'];
        $contact =$_POST['contact'];
    
        $sql= "UPDATE   subject SET course_code='$code',course_name='$name',course_criedt='$creidt',
        course_inst='$inst',contact='$contact' where id= $s_id";
        $result=mysqli_query($db,$sql);
        if($result){
            echo "<script type='text/javascript'>
        alert('you successfully updated');
        </script>
        ";
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
    <title>Update subject information</title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="css/Admin.css">
     <!-- fontawesome -->
     <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>
   <header class="header">
      <a href="">Admin Dashboard  Subject Update page</a>
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
            <li><i class="fa fa-clone"></i><a href="Manage  Result.php">manage Result</a></li>
            <li><i class="fa fa-edit"></i><a href="Subject m Form.php">Add new  subject</a> </li>
          
        </ul>
    </aside>
    <div>   
      <form name="aform"action="#" method="post">  
         <div class="update_student_form leftForm">
            <h1>Updat  subject information here</h1><br>
                <label for="code">course_code	</label><br>
                <input class="input-update"type="text" name="code" id="code"
                 value="<?php echo "{$info['course_code']}";?>" required><br>
                <label for="cname">course_name	</label><br>
                <input class="input-update" type="text" name="cname" id="cname" required
                value="<?php echo "{$info['course_name']}";?>"><br>
                <label for="criedt">course_criedt</label><br>
                <input class="input-update" type="text" name="criedt" id="criedt" required
                value="<?php echo "{$info['course_criedt']}";?>"><br>
                
                <label for="uname">course_instructor</label><br>
                <input class="input-update"type="text" name="inst" id="inst" required
                value="<?php echo "{$info['course_inst']}";?>"><br>
                <label for="uname">contact_hour</label><br>
                <input class="input-update"type="password" name="contact" id="contact" required
                 value="<?php echo "{$info['contact']}";?>">
           
             
                <input type="submit" value="UPDATE" name="update" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
          </div>       
    </form>       
</div>
</body>
</html>