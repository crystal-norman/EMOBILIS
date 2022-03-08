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
    $insertQuery = "INSERT INTO `appointments`(`Id`, `Full_Name`, `Mobile`, `Email`, `Service_Date`, `Service_Time`, `Service_Type`, `Area`, `City`, `Estate`, `Postal_Adrress`) 
VALUES (NULL,'$fullname','$mobile','$email','$date',' $time','$services','$area ','$city','$estate','$postal')";

    $ran = mysqli_query($conn,$insertQuery);
    if ($ran) {
        echo "Succesfully Booked";
        header("location:index.html");
    } else {
        echo mysqli_connect_error();
    }

}