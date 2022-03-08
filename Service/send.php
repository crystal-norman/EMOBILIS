<?php
session_start();


    //check if it has been clicked
    $user =$_POST["username"];
    $passwords =$_POST["pass"];
    //connecting the database
    $host = "localhost";
    $username ="root";
    $pass = "";
    $db_name = "salon_booking";
//finally connect o the db using mysqli_connect() with provided credentials
    $connect = mysqli_connect("$host","$username","$pass","$db_name");
//check if the connection has failed
    if (!isset($connect)){
        die("connection failed");
    }
    $sql="select * from users where username='$user' and password='$passwords'";
    $save=mysqli_query($connect, $sql);
    $number=mysqli_num_rows($save);
    if ($number==1){
        header("location:pages/dashboard.php");
    }else{
        header("location:book_2.php");
    }

