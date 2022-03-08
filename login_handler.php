<?php

session_start();

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
$sql="SELECT * FROM `login` WHERE username='$user' AND password='$password'";

//implementing the sql statement
$run=mysqli_query($conn,$sql);
//running through the rows to find the username that matches what had pass
$result=mysqli_num_rows($run);
//check if the username exist and give out the results
if($result==1){
    header("location:appointment.html");

}else{
    header("location:login.html?WrongPasswordOrUsername");
}

