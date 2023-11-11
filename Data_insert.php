<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'myhtml');
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 session_start();
if(isset($_POST['apply']))
{
    $fname =$_POST['FirstName'];
    $D_lname =$_POST['Lastname'];
    $DOBb =$_POST['DOB'];
    $emaill =$_POST['email'];
    $sex =$_POST['gender'];
    $year_data=$_POST['year'];
    $sem_data=$_POST['semester'];
    $college_data=$_POST['college'];
    $dept_data=$_POST['dept'];
    $ppassword =$_POST['password'];
    $confpass =$_POST['confpassword'];
    $file=$_FILES['images']['name']; 
    $img="./img/".$file;
    $img_db="img/".$file;
    move_uploaded_file($_FILES['images']['tmp_name'],$img);

   if($ppassword==$confpass){
    $sql= "INSERT INTO  Student2(images,firstname,lastname,Dateob,email,gender,year,semester,college,dept,password1,confpassword) 
    values('$img_db','$fname','$D_lname','$DOBb','$emaill','$sex','$year_data','$sem_data','$college_data','$dept_data','$ppassword','$confpass')";
    $result=mysqli_query($db,$sql);
    if($result){
       
        echo "<script type='text/javascript'>
        alert('adedd successfully');
        </script>
        ";
}
else{
    $_SESSION['message']="you have to confirm password correctly";
    header("location:student Registration Form.php");

}
}
}


?>