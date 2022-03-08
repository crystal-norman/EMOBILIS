<?php

//check if the delete button has been clicked
if(isset($_GET["u_id"])){
    $voterId = $_GET["u_id"];
    //connecting to the database and check if the username exists
    $hostname='localhost';
    $username='root';
    $pass='';
    $dbname='salon_booking';

    //connecting to the database
    $conn=mysqli_connect("$hostname","$username","$pass","salon_booking");
    $deleteQuery = "DELETE FROM appointments WHERE Id='$voterId'";
    $delete = mysqli_query($conn,$deleteQuery);
    if ($delete){
        header("location:bookingdb.php");
    }else{
        die("Deleting failed");
    }
}
