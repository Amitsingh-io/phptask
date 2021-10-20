<?php
include 'connection.php';
$email=$_POST["email"];
$pass=$_POST["password"];
$sql="select user_name from user_info where email='$email' and password='$pass'";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
    session_start();
    $_SESSION['user_name']= $row[0];
    echo json_encode('1');
    //user is valid
}
else{
    echo json_encode('0');
    //user is invalid
}
?>