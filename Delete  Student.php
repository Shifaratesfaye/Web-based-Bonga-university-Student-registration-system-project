<?php
include("connection.php");
// if($_GET['student_id']){
    $user_id= $_GET['student_id'];
    $sql="delete from Student2 where id='$user_id' ";

    $result=mysqli_query($db,$sql);
    if($result){
        echo "<script type='text/javascript'>
        prompt('Are you sure yuo want to delete');
        </script>
        ";
        header("location:View student.php");

    }
// }
?>
