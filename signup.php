<?php
include 'database/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $iot = $_POST['iot'];
    $password = $_POST['password'];

    // Check if the IOT number already exists in the database
    $iot_check_sql = "SELECT * FROM users WHERE iot='$iot'";
    $iot_check_result = $conn->query($iot_check_sql);

    if ($iot_check_result->num_rows > 0) {
        echo "Error: IOT number already exists";
    } else {
        // Encrypt password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL query to insert new record
        $sql = "INSERT INTO users (name, email, phone, iot, password) VALUES ('$name', '$email', '$phone', '$iot', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Signup</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Nice-select css -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="css/magnific.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- header end -->
    <!-- Start Bottom Header -->
    <!-- <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>Register</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END Header -->
    <!-- Start Slider Area -->
    <div class="signup-area area-padding">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-xs-12">
                    <div class="login-page signup-page">
                        <!-- <div class="login-image">
                                <div class="log-inner">
                                    <img src="img/about/log.jpg" alt="">
                                </div>
                            </div> -->
                        <div class="login-form signup-form">
                            <h4>Soil Sense</h4>
                            <h4 class="login-title ">REGISTER</h4>
                            <div class="row">
                                <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="log-form">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required data-error="Please enter your name">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required data-error="Please enter your email">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" required data-error="Please enter your Phone">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="iot" id="iot" class="form-control" placeholder="IOT Device Number" required data-error="Please enter your IOT Number">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required data-error="Please enter your password">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="">Sign up</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="clear"></div>

                                        <div class="sign-icon">
                                            <div class="acc-not">Already have an account? <a href="login.php">Login</a></div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
    <!-- End Footer Area -->

    <!-- all js here -->

    <!-- jquery latest version -->

</body>

</html>