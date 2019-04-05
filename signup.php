<?php
  $conn=mysqli_connect("localhost","newuser","","registerations");
    if(!$conn){
      die("Connection Failed");
      }
  $name = $_POST["name"];
  $email=$_POST["email"];
  $dob=$_POST["dob"];
  $type=$_POST["type"];
  $uname=$_POST["uname"];
  $password=$_POST["password"];
  $query="insert into user (name,email,dob,type,username,password) values ('$name','$email','$dob','$type','$uname','$password');";
  mysqli_query($conn,$query);
  header('Location:First_page.html');
?>