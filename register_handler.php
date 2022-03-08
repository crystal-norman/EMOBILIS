<?php

session_start();
header("location:login.html");
$user=$_POST['user'];
$password=$_POST['psw'];
//connecting to the database and check if the username exists
$hostname='localhost';
$username='root';
$pass='';
$dbname='salon_booking';

//connecting to the database
$conn=mysqli_connect("$hostname","$username","$pass");
//connecting to the respective database
mysqli_select_db($conn,"salon_booking");
//selecting record and whether similar username exists
$sql="SELECT * FROM `login` WHERE username='$user'";
//implenting the sql statement
$run=mysqli_query($conn,$sql);
//running through the rows to find the username that matches what had pass
$result=mysqli_num_rows($run);
//check if the username exist and give out the results
if($result==1){
    header("location:register.html?UserExist");
}else{
    //inserting username and password to the table called login
    $insertQuery="INSERT INTO `login` (`id`, `username`, `password`)
     VALUES (NULL, '$user', '$password');";
    $ran=mysqli_query($conn,$insertQuery);
}

/*
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['psw'];
    $hostname = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'salon_booking';
//connecting to the database
    $conn = mysqli_connect("$hostname", "$username", "$pass", "$dbname");
//connecting to the respective database
    // mysqli_select_db($conn,"salon_booking");
    if (!$conn) {
        dies("Connection Failed");
    }
    //inserting username and password to the table called login
    $insertQuery = "INSERT INTO login(id,username,password)
    VALUES(NULL,'$user','$password')";
    $ran = mysqli_query($conn, $insertQuery);
    if ($ran) {
        header("location:login.html");
    } else {
        header("location:register.html");
    }
}
*/