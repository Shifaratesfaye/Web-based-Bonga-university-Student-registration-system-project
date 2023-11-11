<?php
include("connection.php");

    $user_id= $_GET['sid'];
    $sql="select * from Student2 where id='$user_id' ";

    $result=mysqli_query($db,$sql);
    $info=$result->fetch_assoc();
    session_start();
    if(isset($_POST['update']))
    {
        $fname =$_POST['FirstName'];
        $D_username =$_POST['Lastname'];
        $emaill =$_POST['email'];
        $ppassword =$_POST['password'];
        $confpass =$_POST['confpassword'];
        
       if($ppassword==$confpass){
        $sql= "UPDATE   Student2 SET firstname='$fname',lastname='$D_username',email='$emaill',
        password1='$ppassword',confpassword='$confpass' where id= $user_id";
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
    else{echo "<script type='text/javascript'>
        alert('you have confirm password correctly!');
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
    <title>Update student information</title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="css/Admin.css">
     <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

</head>
<body>
<header class="header">
    <a href="">Admin Dashboard   update page</a>
    <div class="logout"><a href="welcomepage.php">
    <input type="button" value="LOGOUT"class=" btn btn-warning"></a>
    </div>
    </header>
    <aside>
    <ul>
            <img class="profile"src="Images/schoolImages/oliver.jpg" alt="">
            <li><i class="fa fa-user"></i><a href="View student.php">manage Student</a></li>
            <li><i class="fa fa-book"></i><a href="Manage Subject.php">Manage subject</a></li>
            <li><i class="fa fa-book"></i><a href="Manage  Result.php">manage Result</a></li>
            <li><i class="fa fa-phone"></i><a href="Student Registration Form.php">Register student</a> </li>
          
        </ul>
    </aside>
    <div>   
<form name="aform"action="#" method="post">

        <div class="update_student_form leftForm">
            <h1>Update updatable information here</h1>
                 <label for="photo">Upload your photo</label>
                <input class="input-update" type="file" name="photo" id="photo" value=""><br>
                <label for="uname">FullName</label><br>
                <input class="input-update"type="text" name="FirstName" id="uname"
                value="<?php echo "{$info['firstname']}";?>" required><br>
                <label for="uname">UserName</label><br>
                <input class="input-update" type="text" name="Lastname" id="uname" required
                value="<?php echo "{$info['lastname']}";?>"><br>
                <label for="email">Email Address</label><br>
                <input class="input-update" type="email" name="email" id="email" required
                value="<?php echo "{$info['email']}";?>"><br>
                
                <label for="uname">Password</label><br>
                <input class="input-update"type="password" name="password" id="pass" required
                value="<?php echo "{$info['password1']}";?>"><br>
                <label for="uname">Confirm pasword</label><br>
                <input class="input-update"type="password" name="confpassword" id="confpass" required
                value="<?php echo "{$info['confpassword']}";?>">
                <input type="submit" value="UPDATE" name="update" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
             
        </div>       
    </form>       
</div>

</body>
</html>