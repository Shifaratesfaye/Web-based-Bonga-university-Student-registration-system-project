<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'student r system');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$user_id= $_GET['re_no'];
$sql="select * from Student2 where id='$user_id' ";
$sql2= "SELECT * FROM result where id='$user_id'";
$result=mysqli_query($db,$sql2);
$info=$result->fetch_assoc();
      $name_data=mysqli_query($db,$sql);
      $nameinfo=$name_data->fetch_assoc();

 $sql_count=mysqli_query($db,"SELECT * from result");
 $count=mysqli_num_rows($sql_count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Your Result</title>
    <link rel="stylesheet" href="css/loginonly.css">
</head>
<body>
    
    <div class="popupdiv viewresult" id="popupdiv">
    <div  style="overflow-x:auto;"class="dash">
                <style>
                table {
                box-shadow:black 30px;
                border:1px solid black:
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 40%;
                float:right;
                border-color:red:
            }
           table th, td {
                padding: 1px;
                text-align: left;
                width: 1px;;
                height:1px;
            }

            td, th {
                border: 1px solid blue;
                text-align: left;
                /* padding-left: 7px; */
            }

            tr:nth-child(odd) {
                background-color:pink;
            }
            tr:nth-child(even) {
               
                background-color:dimgrey;
            } 
            .imgprofile{
             margin-top:0px;
             padding-top:0px;
             border-radius: 10%;
             height: 100px;
             }
            </style>

    <table class="table  table-responsive besttable" align="left">
    <h1><i class='fa fa-list' style='font-size:36px;'></i> </h1>
    <img class="imgprofile"src="<?php echo"{$nameinfo['images']}" ?>" alt="Till now you have no profile picture">
    <p><b> <?php echo "{$nameinfo['firstname']}  {$nameinfo['lastname']}";?></b></p>
        <h1><caption> Dear <?php echo "{$nameinfo['firstname']}  {$nameinfo['lastname']}";?>
         your Result  Table Is Below <i class="fa fa-tick"></i></caption></h1>
         <tr>
            <td style="padding:13px; border:none;">Id.no</td>
            <td style="padding:13px; border:none;">FullName</td>
            <td style="padding:13px; border:none;">Gender</td>
            <td style="padding:13px; border:none;">password</td>
            <td style="padding:13px; border:none;">Year</td>
            <td style="padding:13px; border:none;">Semester</td>
            <td style="padding:13px; border:none;">Course Code</td>
            <td style="padding:13px; border:none;">Batch</td>
            <td style="padding:13px; border:none;">Grade</td>
            <td style="padding:13px; border:none;">CGPA</td>
            <td style="padding:13px; border:none;">Remark</td>
         </tr>
            <!-- extra code -->
        <tr>
           <td style="padding:2px; border:none;">
            <?php echo "{$info['id']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$nameinfo['firstname']}  {$nameinfo['lastname']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$nameinfo['gender']}";?>
            </td>
            
            <td style="padding:2px; border:none;">
            <?php echo "{$nameinfo['password1']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['year']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['semester']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['course_code']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['batch']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['grade']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['cgpa']}";?>
            </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['remark']}";?>
            </td>
        </tr>
    </table>
        </div>
           <div class="ok">
              <a href="Student Dashboard.php"> <button class="btnviewp btn-primary"type="submit"onclick="openviewpage()">BACK</button>
                 </a>
           </div>  
        </div><br>
         <?php

       echo" Admin Approved that you have CGPA {$info['cgpa']}'";
        
     ?>                   
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