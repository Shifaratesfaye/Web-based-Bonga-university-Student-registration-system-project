<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'student r system');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $user_id= $_GET['student_id'];
    $sql="select * from Student2 where id='$user_id' ";
$result=mysqli_query($db,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view profile</title>
    <link rel="stylesheet" href="css/loginonly.css">
</head>
<body>
    
                    <div class="popupdiv viewprofile" id="popupdiv">
         <?php
        while($info=$result->fetch_assoc())
        {
        
        
      ?> 
        <img src="<?php echo "{$info['images']}";?>" alt="profile isnt uploaded"
        style="width:184px;height:184px;border-radius:50%;"><br>
        ID.no:<?php echo "{$info['id']}";?><br>
        Fullname:<?php echo "{$info['firstname']}";?>
                 <?php echo "{$info['lastname']}";?><br>    
        Dateof birth: <?php echo "{$info['Dateob']}";?><br>
        Gender :   <?php echo "{$info['gender']}";?><br>
        Departement: <?php echo "{$info['dept']}";?><br>
        year:      <?php echo "{$info['year']}";?>     <br>
        Semester:<?php echo "{$info['semester']}";?>   <br>
        Password:<?php echo "{$info['password1']}";?> <br>
        <div class="ok">
                       <!-- <button class="btnviewp btn-primary"type="submit"onclick="closepopup()"> OK</button> -->
                      <a href="View student.php"> <button class="btnviewp btn-primary"type="submit"onclick="openviewpage()">BACK</button>
                      </a>
                       </div>    
                    </div><br>
         <?php

     }
        
     ?>                   
                      
            <!-- <div class="">
                 <button class=" btnss btn btn-success"type="submit"onclick="openpopup()">SEE PROFILE</button>
               </div> -->

        <script>
        let popup=document.getElementById("popupdiv");
        function openpopup(){
          popup.classList.add("open-popup");
        }
        function closepopup(){
          popup.classList.remove("open-popup");
  
        }
         
      </script>
      

</body>
</html>