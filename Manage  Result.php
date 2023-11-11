<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'student r system');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sql= "SELECT * FROM result";
$result=mysqli_query($db,$sql);
 $sql_count=mysqli_query($db,"SELECT * from result");
 $count=mysqli_num_rows($sql_count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result  Management</title>
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
    <a href="">Admin  <b>Result</b> management Dashboard </a>
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
            <li><i class="fa fa-book"></i><a href="#">manage Result</a></li>
            <li><i class="fa fa-phone"></i><a href="Add  new Result.php">Add new  Result</a> </li>
          
        </ul>
    </aside>
    <div  style="overflow-x:auto;"class="dash">
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
                border: 1px solid blue;
                text-align: left;
                /* padding-left: 7px; */
            }

            tr:nth-child(odd) {
                background-color:snow;
            }
            tr:nth-child(even) {
                background-color:cyan;
            } 
            tr:nth-child(1){
             background-color:gray;
             color:white;
            }
            </style>

    <table class="table besttable" align="left">
    <h1><i class='fa fa-list' style='font-size:36px;'></i> <?php echo"$count" ?></h1>
    <p>Total Result</p>
        <h1><caption> Result Management Table</caption></h1>
         <tr>
            <td style="padding:13px; border:none;">Id.no</td>
            <td style="padding:13px; border:none;">Year</td>
            <td style="padding:13px; border:none;">Semester</td>
            <td style="padding:13px; border:none;">Course Code</td>
            <td style="padding:13px; border:none;">Batch</td>
            <td style="padding:13px; border:none;">Grade</td>
            <td style="padding:13px; border:none;">CGPA</td>
            <td style="padding:13px; border:none;">Remark</td>
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
            <td style="padding:2px,0,0,0; border:none;">
            <?php
           echo "<a href='Update Result.php?sid={$info['id']}'>
                 <input type='button' value='Update'class='btn btn-primary'></a>"
               ?>
                 </td>
           <td style="padding:2px,0,0,0; border:none;">
           <?php
           echo "<a href='Delete Result.php?result_id={$info['id']}'>
            <input type='button' value='Delete'class='btn btn-warning'></a>"
            ?>
            </td>
           <td style="padding:2px,0,0,0; border:none;">
           <?php
           echo "<a href='#?student_id={$info['id']}'>
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