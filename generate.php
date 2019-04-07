<?php
    $conn=mysqli_connect("localhost","newuser1","","registerations");
    $category=$_GET['event_category'];
    $event=$_GET['event_name'];
    $name=$_GET['name'];
    $nop=$_GET['nop'];
    $amt=$_GET['amount'];
    $payment=$_GET['payment'];
    $gender=$_GET['gender'];
    if(isset($_GET['regno'])){
        $reg=$_GET['regno'];
        $query="insert into newreg (category_name,event_name,register_number,student_name,number_of_participants,payment_mode,payment_status,gender) values ($category,$event,$reg,$name,$nop,$amt,$payment,'NOT PAID',$gender);";
    }
    else{
        $query="insert into newreg (category_name,event_name,student_name,number_of_participants,payment_mode,payment_status,gender) values($category,$event,$name,$nop,$amt,$payment,'NOT PAID',$gender);";
    }
    mysqli_query($conn,$query);
    echo "Registeration Confirmed, please pay at VTOP if Credit/Debit card or Netbanking Payments";
    header("Refresh:5; url=can.php");


?>