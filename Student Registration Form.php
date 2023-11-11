<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'student r system');
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

}
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
    <title>Student Registration Form ppage</title>
    <link rel="stylesheet" href="css/loginonly.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
<!-- extra code to validation  -->


<script language="javascript">
function check()
{
if(FirstName.value == "")
{
alert("Please Enter Your First Name!");
document.aform.FirstName.focus();
return false;
}
if(Lastname.value == "")
{
alert("Please Enter Your Last Name!");
document.aform.Lastname.focus();
return false;
}
if(document.getElementById("DOB").value == "")
{
alert("Please Enter Your Date of birth!");
document.getElementById("DOB").focus();
return false;
}
if(document.getElementById("email").value == "")
{
alert("Please Enter Your Email Address!");
document.getElementById("email").focus();
return false;
}
if(document.getElementById("year").value =="")
{
alert('Please Enter your education year!!');
document.getElementById("year").focus();
return false;
}
if(document.getElementById("sem").value =="")
{
alert('Please Enter your Education semester!!');
document.getElementById("sem").focus();
return false;}
if(pass.value =="")
{
alert('Please Enter your Strong password !!');
document.aform.pass.focus();
return false;
}
if(confpass.value =="")
{
alert('Please Enter your password again!!');
document.aform.confpass.focus();
return false;
}
if (pass.value==confpass.value)
{
return true;
}
else
{
alert(" Your Entered Password and Retype password doesn't matched,Retype again please!!!");
document.getElementById("confpass").focus();
return false;
}
}
</script>
<script language="javascript">
function validateForm(input) {
var fname = document.getElementById('FirstName');
var lname=document.getElementById('Lastname');
var DOB=document.getElementById('DOB');
var email=document.getElementById('email');
var year=document.getElementById('year');
var sem = document.getElementById('sem');
var pass = document.getElementById('pass');
var confpass = document.getElementById('confpass');
if(isAlphabet(fname, "please enter Your name in letters only")){
if(isAlphanumeric(year, "Please Enter your DOB in correformat ")){
if(emailValidator(email,"check your E-mail format please")){
if(lengthRestriction(fname, 4, 16,"for your First Name")){
if(lengthRestriction(lname, 5, 16,"for your Last Name")){
if(validateDOB(DOB,"You are not Adult  Education is not allowed before age 18 !")){
return true;
}}
}}
}}
return false;
}

function validateDOB(currentdate,DOB, helperMsg){
$date1=getdate();
$date2=DOB;
var diff=date_diff($date1,$date2);
if(diff<="0018-01-00"){
return true;
}else{
alert(helperMsg);
DOB.focus();
return false;
}
}
function isAlphabet(elem, helperMsg){
var alphaExp = /^[a-zA-Z]+$/;
if(elem.value.match(alphaExp)){
return true;
}else{
alert(helperMsg);
elem.focus();
return false;
}
}
function emailValidator(elem, helperMsg){
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if(elem.value.match(emailExp)){
return true;
}else{alert(helperMsg);
elem.focus();
return false;
}
}
function lengthRestriction(elem, min, max, helperMsg){
var uInput = elem.value;
if(uInput.length >= min && uInput.length <= max){
return true;
}else{
alert("Please enter between " +min+ " and " +max+ " characters"
+helperMsg);
elem.focus();
return false;
}
}
function isNumeric(elem, helperMsg){
var numericExpression = /^[0-9]+$/;
if(elem.value.match(numericExpression)){
return true;
}else{
alert(helperMsg);
elem.focus();
return false;
}
}
function isAlphanumeric(elem, helperMsg){
var alphaExp = /^[0-9a-zA-Z]+$/;
if(elem.value.match(alphaExp)){
return true;
}else{
alert(helperMsg);
elem.focus();
return false;
}
}function ValidateAlpha(evt)
{
var keyCode = (evt.which) ? evt.which : evt.keyCode
if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode >
123) && keyCode != 32 && keyCode != 8 && keyCode != 9)
{
alert(" Only letters are allowed! ")
return false;
}}
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57)){
alert("Only number is allowed to enter pin number!")
return false;
}
}
</script>
</script>
<script>
function myFunction() {
var x = document.getElementById("password");
if (x.type === "password") {
x.type = "text";
}
else {
x.type = "password";
}
}
</script>
<!-- extra code to validation  -->



</head>
<body>
     <?php  
      include("navbar.php");
      ?>
    <div class="container  regform">
    
       <div class="row">   
       <div class="welcome">
    <h1><marquee behavior="" direction=""> <h1>
                welcome to registration page  
                  Please fill All Information Correctly</h1>
                  <hr>
                  </marquee></h1>
                   </div> 
         <div class="col-sm-6 form1">
         <form name="aform"action="#" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                
        <div class="popupdivregistiration">
                 <label for="photo">Upload your photo<i class="fa fa-user"></i></label>
                <input class="inut-registration" type="file" name="images" id="photo" ><br>
                <label for="fname">FirstName</label><br>
                <input class="input-registration"type="text" name="FirstName" id="Firstname"  onkeypress="return ValidateAlpha(event)"
                pattern="\D{2,15}" title="Please Enter between 3 and 15 Letter Only for your name" ><br>
                <label for="lname">LastName</label><br>
                <input class="input-registration" type="text" name="Lastname" id="Lastname" required  onkeypress="return ValidateAlpha(event)"><br>
                <label for="DOB">Date Of Birth</label><br>
                <input class="input-registration"type="date" name="DOB" id="DOB" required><br>
                <label for="email">Email Address</label><br>
                <input class="input-registration" type="email" name="email" id="email" required><br>
                <div class="gender">
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id="male"  value="male">Male
                <input type="radio" name="gender" id="female" value="female">Female
                <input type="radio" name="gender" id="other" value="other">Other
                </div>
                <label for="year">Year</label><br>
                <input class="input-registration"type="text" name="year" id="year" required><br>
                <label for="sem">Semester</label><br>
                <input class="input-registration"type="text" name="semester" id="sem" required>
        </div>    

     </div>
         <div class="col-sm-6 form2 ">
         <div class="popupdivregistiration">
                <label for="college">College</label><br>
                <input  class="input-registration"type="text" name="college" id="college" required ><br>
                
                <label for="dept">Departement</label><br>
                <input class="input-registration"type="text" name="dept" id="dept" required><br>
                
                <label for="pass">Password</label><br>
                <input class="input-registration"type="password" name="password" id="pass" required
                pattern="(?=.*\d)(?=.*[azAZ])(?=.*[A-Zaz]).{4,25}" title="Please enter at least ONE NUMBER, ONE UPPERCASE
                    LETTER, and one Lowercase letter, and 8 or more characters"placeholder="" > 
                    <input type="checkbox" value="<i class='fa fa-eye'></i>" onclick="myFunction()"><br>
                <label for="conpass">Confirm pasword</label><br>
                <input class="input-registration"type="password" name="confpassword" id="confpass" required>
           
                <div class="footer1">
                <input type="submit" value="Submit" name="apply" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns" onclick="return check();">
                <input type="reset" value="Cancel" name="" style=" border-radius: 90px 1px 90px 1px;"id="bt1"class="btns">
              </div><br>
        </div>   
        <div class="error"id="error">

        </div>
        
    </form> 
         </div>
       </div>

    </div>
</body>
</html>