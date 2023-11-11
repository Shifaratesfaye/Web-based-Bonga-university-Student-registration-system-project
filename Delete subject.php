<?php
include("connection.php");
// if($_GET['student_id']){
    $s_id= $_GET['subject_id'];
    $sql="delete from subject where id='$s_id' ";

    $result=mysqli_query($db,$sql);
    if($result){
        echo "<script type='text/javascript'>
        prompt('Are you sure yuo want to delete');
        </script>
        ";
        header("location:Manage Subject.php");

    }
// }
?>
