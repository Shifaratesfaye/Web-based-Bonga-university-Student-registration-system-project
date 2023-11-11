<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'student r system');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sql= "SELECT * FROM subject";
$result=mysqli_query($db,$sql);
 $sql_count=mysqli_query($db,"SELECT * from subject");
 $count=mysqli_num_rows($sql_count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Subject Management</title>
    <link rel="stylesheet" href="css/Admin.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script tex>
        src="../css/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"
    </script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>
    <header class="header">
    <a href="">Admin subject management Dashboard </a>
    <div class="logout"><a href="welcomepage.php">
    <input type="button" value="LOGOUT"class=" btn btn-warning"></a>
    </div>
    </header>
    <aside>
        <ul>
            <!-- <img src="file:///C:/Users/hp/Documents/imag/" alt="dsdf"> -->
            <img class="profile"src="Images/schoolImages/man.jpg" alt="">
            <li><i class="fa fa-user"></i><a href="View student.php">manage Student</a></li>
            <li><i class="fa fa-book"></i><a href="#">Manage Subject</a></li>
            <li><i class="fa fa-book"></i><a href="Manage  Result.php">manage Result</a></li>
            <li><i class="fa fa-phone"></i><a href="Subject m Form.php">Add new  subject</a> </li>
          
        </ul>
    </aside>
    <div class="dash">
                <style>
                table {
                box-shadow:black 10px;
                border:1px solid black:
                font-family: arial, sans-serif;
                /* border-collapse: collapse; */
                width: 40%;
                float:right;
            }
           table th, td {
                padding: 1px;
                text-align: left;
                width: 1px;;
                height:1px;
            }

            td, th {
                border: 1px solid black;
                text-align: left;
                /* padding-left: 7px; */
            }

            tr:nth-child(odd) {
                background-color:snow;
            }
            tr:nth-child(even) {
                background-color:gray;
            } 
            tr:nth-child(1){
             background-color:purple;
             color:white;
            }
            </style>

    <table class="table besttable" align="left">
    <h1><i class='fa fa-list' style='font-size:36px;'></i> <?php echo"$count" ?></h1>
    <p>Total Course</p>
        <h1><caption> Subject Management Table</caption></h1>
         <tr>
            <td style="padding:13px; border:none;">Id.no</td>
            <td style="padding:13px; border:none;">ourse Code</td>
            <td style="padding:13px; border:none;">Course Name</td>
            <td style="padding:13px; border:none;">Course Criedt</td>
            <td style="padding:13px; border:none;">Course instructor </td>
            <td style="padding:13px; border:none;">contact hour</td>
            <td style="padding:13px; border:none;">Update</td>
            <td style="padding:13px; border:none;">Delete</td>
            <td style="padding:13px; border:none;">View</td>
         </tr>
         <?php
         
        while($info=$result->fetch_assoc())
        {

        
        
        ?>
         <tr>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['id']}";?>

        </td>
            <td style="padding:2px; border:none;">
             <?php echo "{$info['course_code']}";?>
        </td>
            <td style="padding:2px; border:none;">
            <?php echo "{$info['course_name']}";?>
        </td>
            <td style="padding:2px; border:none;">
                 <?php echo "{$info['course_criedt']}";?>
            </td>
            <td style="padding:2px; border:none;">
                 <?php echo "{$info['course_inst']}";?>
            </td>
            <td style="padding:2px; border:none;">
                 <?php echo "{$info['contact']}";?>
            </td>
            <td style="padding:2px,0,0,0; border:none;">
            <?php
           echo "<a href='Update Subject.php?sid={$info['id']}'>
                 <input type='button' value='Update'class='btn btn-primary'></a>"
               ?>
                 </td>
           <td style="padding:2px,0,0,0; border:none;">
           <?php
           echo "<a href='Delete subject.php?subject_id={$info['id']}'>
            <input type='button' value='Delete'class='btn btn-warning'></a>"
            ?>
            </td>
           <td style="padding:2px,0,0,0; border:none;">
           <?php
           echo "<a href='view profile.php?student_id={$info['id']}'>
            <input type='button' value='View 'class='btn btn-info'></a>"
            ?>
            </td>
         </tr>
         <?php

     }
        
     ?>
    </table>
</div>
</body>
</html>