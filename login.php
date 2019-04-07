<?php
session_start();
$uname=$_POST["uname"];
$_SESSION['uname']=$uname;
$conn=mysqli_connect("localhost","newuser","","registerations");
$query="select username,password from user where username='$uname';";
$res=mysqli_query($conn,$query);
$password=$_POST["password"];
$_SESSION['password']=md5($password);
if (mysqli_num_rows($res)==0) {
    echo "<script type='text/javascript'>alert('Username Doesnt Exist Please Signup');
    location='First_page.html';</script>";
}
else{
    while($row=mysqli_fetch_array($res)){
        if ($password==$row['password']){
            header('Location:can.php');
            break;
        }
        else{
            echo "<script type='text/javascript'>alert('Wrong Password');
            location='login.html'</script>";
            break;
        }
        }
        
}
$query1="select type from user where (username='$uname');";
$res1=mysqli_query($conn,$query1);
while ($row=mysqli_fetch_array($res1)){
    $_SESSION['type']=$row['type'];
}
$_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
header('Location: First_page.php');
?>