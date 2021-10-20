<?php
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];
$phone_number=$_POST['phone_number'];

$sql="select email from user_info where email='$email'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
    echo json_encode('0');
    //means user is already registered;
}
else
{ 
    $sql="insert into user_info(email,password,phone_number,user_name) values('$email','$password','$phone_number','$username')";
    $result=mysqli_query($con,$sql);
    session_start();
    $_SESSION['user_name']= $username;

    echo json_encode('1');

}

?>