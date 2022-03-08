<?php

if (isset($_POST['appoint'])) {
    $fullname = $_POST['full_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $date = $_POST['service_date'];
    $time = $_POST['mda'];
    $services = $_POST['services'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $estate = $_POST['estate'];
    $postal = $_POST['postal'];
    $userid=$_POST['userid'];
    $hostname = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'salon_booking';


//connecting to the database
    $conn = mysqli_connect("$hostname", "$username", "$pass", "$dbname");

//connecting to the respective database
    // mysqli_select_db($conn,"salon_booking");
    if (!$conn) {
        die("Connection Failed");
    }
    //inserting username and password to the table called login
    $UpdateQuery = "UPDATE `appointments` SET `Full_name`='$fullname',`Mobile`='$mobile',`Email`='$email',
                                                    `Service_Date`='$date',`Service_Time`='$time',`Service_Type`='$services',
                                                        `Area`='$area',`City`='$city',`Estate`='$estate',`Postal_Adrress`='$postal' WHERE `Id`='$userid'";

    $ran = mysqli_query($conn, $UpdateQuery);
    if ($ran) {
        header("location:bookingdb.php");
    } else {
        echo mysqli_connect_error();
    }
}

