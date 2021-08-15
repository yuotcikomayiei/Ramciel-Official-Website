<!-- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Acount</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/img/favicon.ico" rel="icon">
    <link href="public/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <!-- <link rel="stylesheet" href="public/form.css"> -->


    <!-- Vendor CSS Files -->
    <link href="public/ramciel/animate.css/animate.min.css" rel="stylesheet">
    <link href="public/ramciel/aos/aos.css" rel="stylesheet">
    <link href="public/ramciel/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/ramciel/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/ramciel/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/ramciel/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/ramciel/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="../public/form.css" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KALKUEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav position-absolute top-50 start-50 translate-middle">
                    <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link  active" href="reg.php">Register</a>
                    <a class="nav-link text-white" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- form container -->
    <div class="card mb-3 mx-auto border-3 border-success bg-success bg-opacity-10" style="max-width: 740px; margin-top:3em;">
        <div class="row g-0">

            <!-- welcome part -->
            <div class="col-md-4 bg-success welcome">
                <h5 class=" h1 card-title align-middle text-white text-center">Welcome</h5>
                <h5 class="h6 card-text text-white fw-light text-center">Please sign up</h5>
                <!-- <img src="../public/img/hero-bg.jpg" class="img-fluid" alt="..." style="width: auto; min-height: 250px;"> -->
            </div>

            <!-- form -->
            <div class="col-md-8 bg-success bg-opacity-10">
                <div class="card-body">
                    <form id="register" class="row g-3" style="color: green;" method="POST" action="process.php" onsubmit="return validateForm(this)">
                        <h5 class="card-title text-center">Create account</h5>

                        <!-- first name field -->
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control border-green" name="firstName" id="inputFirstName" placeholder="Enter first name" autofocus>
                            <label for="inputFirstName" class="form-label">First Name</label>
                            <!-- if there is an error, display it here -->
                            <div class="form-text text-danger" id="firstNameError"></div>
                        </div>

                        <!-- last name field -->
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control border-green" name="lastName" id="inputLastName" placeholder="Enter last name">
                            <label for="inputLastName" class="form-label">Last Name</label>
                            <!-- if there is an error, display it here -->
                            <div class="form-text text-danger" id="lastNameError"></div>
                        </div>

                        <!-- email field -->
                        <div class="col-12 form-floating">
                            <input type="email" class="form-control border-green" name="email" id="inputEmail" placeholder="Enter your email">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <!-- if there is an error, display it here -->
                            <div class="form-text text-danger" id="emailError"></div>
                        </div>

                        <!-- password field -->
                        <div class="col-md-6 form-floating">
                            <input type="password" class="form-control border-green" name="password" id="inputPassword" placeholder="Enter password">
                            <label for="inputPassword" class="form-label">Password</label>
                            <!-- if there is an error, display it here -->
                            <div class="form-text text-danger" id="passwordError"></div>
                        </div>

                        <!-- confirm password field -->
                        <div class="col-md-6 form-floating">
                            <input type="password" class="form-control border-green" name="confirmPassword" id="confirmPassword" placeholder="confirm password">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <!-- if there is an error, display it here -->
                            <div class="form-text text-danger" id="confirmPasswordError"></div>
                        </div>

                        <!-- create account button -->
                        <div class="d-grid gap-2 col-6 mx-auto" style="margin-bottom: 5px;">
                            <input class="btn btn-success" type="submit" value="Sign Up" onclick="return validateForm(this)">
                        </div>
                    </form>
                    <h5 class="h6 fw-light card-title text-center" style="margin-top: 5px;">Already have an account? <a href="login.php">Login</a></h5>
                </div>
            </div>
        </div>
    </div>




    <!-- Vendor JS Files -->
    <!-- <script src="public/ramciel/aos/aos.js"></script>
    <script src="public/ramciel/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/ramciel/glightbox/js/glightbox.min.js"></script>
    <script src="public/ramciel/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="public/ramciel/php-email-form/validate.js"></script>
    <script src="public/ramciel/purecounter/purecounter.js"></script>
    <script src="public/ramciel/swiper/swiper-bundle.min.js"></script>
    <script src="public/ramciel/waypoints/noframework.waypoints.js"></script> -->

    <!-- Template Main JS File -->
    <script src="public/js/main.js"></script>
    <script src="../register.js"></script>

   
</body>

</html>
