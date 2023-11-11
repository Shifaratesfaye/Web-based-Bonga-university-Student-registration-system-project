<?php
include("connection.php");
// if($_GET['student_id']){
    $s_id= $_GET['result_id'];
    $sql="delete from result where id='$s_id' ";

    $result=mysqli_query($db,$sql);
    if($result){
        echo "<script type='text/javascript'>
        prompt('Are you sure yuo want to delete  result');
        </script>
        ";
        header("location:Manage  Result.php");

    }
// }
?>
