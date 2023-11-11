<?php
include("connection.php");
session_start();
if(isset($_POST['Submit']))
{
    $fname =$_POST['username'];
    $ppassword =$_POST['password'];
    $confpass =$_POST['confpassword'];
 

   if($ppassword==$confpass){
    $sql= "INSERT INTO  user(name,password1,confpassword) 
    values('$fname','$ppassword','$confpass')";
    $result=mysqli_query($db,$sql);
    $cont=mysqli_affected_rows($db);
    mysqli_close($db);
    if($cont==1){
    // if($result){
       
        echo "<script type='text/javascript'>
        alert('You have Registered successfully');
        </script>
        ";
}
    }
// }
else{
  echo "<script type='text/javascript'>
  alert('you have to confirm password correctly');
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
    <title>User registration page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
  <script type="text/javascript">
            src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"
    function v() {  
      var a=document.formf.username.value;
      var b=document.formf.password.value;
      var r1=elan; 
      var r2=1234;
      if(a==r1) { 
        if(b==r2) { 
           window.alert("congratulation you are successfully submited information");
           window.confirm("    Wow dear so nice\n Are you check now \n OR you see latter?");
           } 
           else 
           window.alert("enter password atleast 6 characters ");
           } 
           else
            { 
              window.alert("enter uname atleast 6 characters and should contain only alphabets"); 
                document.formf.fname.focus();
                return false;
            }  } 
    
    function reset(){
      window.alert("reset sure?");
    }

    </script>
</head>
<body onsubmit="return v()"class="sls-body" >
<div class="conaner bg-sucess formbox">
    <form  name="formf"action="#" method="post">
        <div class="heade">
            <h1>User Registration page</h1>
        </div><br>
            <div class="info">
                username:  <input id="np"class="input"type="text" name="username" id="uname" required><br>
                password : <input id="np"class="input" type="password" name="password" id="pass"required><br>
               Confpass : <input class="input" type="password" name="confpassword" id="confpass"required><br>
            </div><br>
                <div class="foter">
                        <button id="bt1"class="btns"type="submit" name="Submit">Register now</button>
                        </div><br>
    </form>   <a href="welcomepage.php">  <button  class="btns"type="submit">Login </button></a>     
    </div>
</div>
</body>
</html>