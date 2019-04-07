<?php
session_start(); 
if(isset($_GET['a'])){
    $a=$_GET['a'];
    $_SESSION['selectedEvent']=$a;
    header('Location:event_reg.php');}
else{
    echo "false";
}
?>