<?php
session_start();
header('location:loginandregister.php');
$connection=mysqli_connect('localhost','root','');
//$connection=mysqli_connect('localhost','root','')

mysqli_select_db($connection,'loginandregistrationform');

$name=$_POST['user'];
$email=$_POST['emailid'];
$password=$_POST['password'];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$select="select * from register_table where email_id='$email'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into register_table(name,email_id,password) values('$name','$email','$hashed_password')";
    mysqli_query($connection,$reg);
}

?>


