<?php
if (isset($_GET['u_id'])){
    $userid=$_GET['u_id'];
    $fullname=$_GET['fullname'];
    $mobile=$_GET['mobile'];
    $email=$_GET['email'];
    $service=$_GET['servicedate'];
    $servicetime=$_GET['servicetime'];
    $servicetype=$_GET['servicetype'];
    $area=$_GET['area'];
    $city=$_GET['city'];
    $estate=$_GET['estate'];
    $address=$_GET['address'];
}



?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="inner-layer">
    <div class="container">
        <div class="row no-margin">
            <div class="col-sm-7">
                <div class="content">
                    <h1>Book You Slot Now and Save your time</h1>

                    <h2>Call Now : 0725-620386</h2>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-data">
                    <div class="form-head">
                        <h2>Book Appointemnt</h2>
                    </div>
                    <div class="form-body">
                        <form action="update_handler.php" Method="POST">
                            <div class="row form-row">
                                <input type="text" name="full_name" value="<?php echo $fullname ?>" placeholder="Enter Full name" class="form-control">
                            </div>
                            <div class="row form-row">
                                <input type="text" name="mobile" value="<?php echo $mobile ?>" placeholder="Enter Mobile Number" class="form-control">
                            </div>
                            <div class="row form-row">
                                <input type="text" name="email" value="<?php echo $email ?>" placeholder="Enter Email Adreess" class="form-control">
                            </div>
                            <div class="row form-row">
                                <input id="dat" name="service_date"  value="<?php echo $service ?>"  class="form-control">
                            </div>
                            <div class="row form-row">
                                <input id="dat" name="mda" value="<?php echo $servicetime ?>"  class="form-control">
                            </div>
                            <div class="row form-row">
                                <select id="service" type="text" value="<?php echo $servicetype ?>"class="form-control" name="services">
                                    <option value="<?php echo $servicetype ?>"><?php echo $servicetype ?>"</option>
                                    <option value="Manicure">Manicure</option>
                                    <option value="Stickons">Stickons</option>
                                    <option value="Gel Application">Gel Application</option>
                                    <option value="Pedicure">Pedicure</option>
                                    <option value="Hair wash and blowdry">Hair wash and blowdry</option>
                                    <option value="Knotless">Knotless</option>
                                    <option value="Ghanians">Ghanians</option>
                                    <option value="Braiding">Braiding</option>
                                    <option value="Weaving">Weaving</option>
                                    <option value="Wedding Package">Wedding Package</option>
                                    <option value="Full Facial Makeup">Full Facial Makeup</option>



                                </select>
                            </div>


                            <h6>Address Details</h6>

                            <div class="row form-row">
                                <div class="col-sm-6">
                                    <input type="text"name="area"   value="<?php echo $area ?>" placeholder="Enter Area" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="city"  value="<?php echo $city ?>"  placeholder="Enter City" class="form-control">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-sm-6">
                                    <input type="text" name="estate"  value="<?php echo $estate ?>"  placeholder="Enter Estate" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="postal"  value="<?php echo $address ?>"  placeholder="Postal Code" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <button type="submit" name="appoint" class="btn btn-success btn-appointment">
                                    Update Appointment
                                </button>
                                <input type="hidden" name="userid" value="<?php echo $userid ?>">

                            </div>
                            <div class="row form-group">


                                <button class="btn btn-success btn-appointment kuja" style="background-color: deeppink"><a href="bookingdb.php" style="color:white;">BACK</a>

                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>

<script>
    $(document).ready(function(){
        $("#dat").datepicker();
    })
</script>

</body>
</html>
