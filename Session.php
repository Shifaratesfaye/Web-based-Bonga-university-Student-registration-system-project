<?php
session_start();
if(empty($_SESSION['name']))
{
 
    echo "<script type='text/javascript'>
    ADMIN Dashboard can not Accessed direcrtly please Login with your password
    </script>
    ";   
  header("location:google.com") ; 
}
session_destroy();
?>