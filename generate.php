<?php
    $conn=mysqli_connect("localhost","newuser1","","registerations");
    $category=$_POST['event_category'];
    $event=$_POST['event_name'];
    $name=$_POST['name'];
    $nop=$_POST['nop'];
    $amt=$_POST['amount'];
    $paymentmode=$_POST['paymentmode'];
    $gender=$_POST['gender'];
    $st="NOT PAID";
    if(isset($_POST['regno'])){
        $reg=$_POST['regno'];
        $query="insert into newreg (category_name,event_name,register_number,student_name,number_of_participants,amount,payment_mode,payment_status,gender) values ('$category','$event','$reg','$name','$nop','$amt','$paymentmode','$st','$gender');";
    }
    else{
        $query="insert into newreg (category_name,event_name,student_name,number_of_participants,payment_mode,amount,payment_mode,payment_status,gender) values ('$category','$event','$name','$nop','$amt','$paymentmode','$st','$gender');";
    }
    mysqli_query($conn,$query);
    echo "Registeration Confirmed, please pay at VTOP if Credit/Debit card or Netbanking Payments";
    header("Refresh:5; url=can.php");


?>