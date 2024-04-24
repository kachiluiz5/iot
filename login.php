<?php
include 'database/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $phone = $_POST['phone'];
    $iot = $_POST['iot'];
    $password = $_POST['password'];



    // Prepare and execute SQL query
    $sql = "SELECT * FROM users WHERE iot='$iot'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables and redirect to dashboard
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_iot'] = $row['iot'];
            $_SESSION['user_phone'] = $row['phone'];
            $_SESSION['user_password'] = $row['password'];
            header("Location: dashboard/dashboard.php");
        } else {
            // Password is incorrect
            echo "Invalid password";
        }
    } else {
        // No user found with the provided email
        echo "User not found";
    }
}

$conn->close();
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
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
<!-- 
    <div id="preloader"></div> -->

    <!-- header end -->
    <!-- Start Bottom Header -->
    <!-- <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>Login</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END Header -->
    <!-- Start Slider Area -->
    <div class="login-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="login-page">
                        <!-- <div class="login-image">
                                <div class="log-inner">
                                    <img src="img/about/log.jpg" alt="">
                                </div>
                            </div> -->
                        <div class="login-form">
                            <h4>Soil Sense</h4>
                            <h4 class="login-title">LOGIN</h4>
                            <div class="row">
                                <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="log-form">
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
                                        <!-- <div class="check-group flexbox">
                                            <label class="check-box">
                                                <input type="checkbox" class="check-box-input" checked>
                                                <span class="remember-text">Remember me</span>
                                            </label>
                                            <a class="text-muted" href="#">Forgot password?</a>
                                        </div> -->
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="slide-btn login-btn">Login</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="clear"></div>
                                        <div class="sign-icon">
                                            <div class="acc-not">Don't have an account? <a href="signup.php">Sign up</a></div>
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
    <!-- all js here -->
    <!-- Start Footer Area -->
    <!-- End Footer Area -->

    <!-- all js here -->

</body>

</html>