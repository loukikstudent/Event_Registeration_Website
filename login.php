<?php
session_start();
$uname=$_POST["uname"];
$conn=mysqli_connect("localhost","newuser","","registerations");
$query="select username,password from user where username='$uname';";
$res=mysqli_query($conn,$query);
$password=$_POST["password"];
if (mysqli_num_rows($res)==0) {
    echo "<script type='text/javascript'>alert('Wrong Username');
    location='First_page.html';</script>";
}
else{
    while($row=mysqli_fetch_array($res)){
        if ($password==$row['password']){
            header('Location:event_reg.html');
            break;
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong Password');
            location='login.html'</script>";
            break;
        }
        }
        
}
?>