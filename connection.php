<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $con=mysqli_Connect($servername,$username,$pass)or die("There is some problem in mysql connection");
    $db="conitorsoft";
    $sdb=mysqli_select_db($con,$db) or die("Problem in database connection");
    

  ?>