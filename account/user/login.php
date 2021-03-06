<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="form.css">
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KALKUEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav position-absolute top-50 start-50 translate-middle">
                    <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link text-white" href="register.php">Register</a>
                    <a class="nav-link active" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>

   
    <div class="card mb-3 mx-auto border-3 border-success bg-success bg-opacity-10" style="max-width: 540px; margin-top: 3em;">
        <div class="row g-0">
            <div class="col-md-4 bg bg-success">
                <h5 class=" h1 card-title align-middle text-white text-center" style="margin-top: 1.5em;">Welcome</h5>
                <h5 class="h5 fs-6 card-text text-white fw-light text-center">please login to <br> continue</h5>
                <!-- <img src="../public/img/hero-bg.jpg" class="img-fluid" alt="..." style="width: auto; min-height: 250px;"> -->
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <form action="processlogin.php" method="post" style="color: green;" onsubmit="return validateLogin(this)" >
                        <h5 class="card-title text-center">Login in</h5>

                        <!-- for error -->
                        <div class="form-text text-danger" id="error"></div>

                        <!-- email field -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control form-control-sm border-2 border-success green-text" id="inputEmail" name="username" placeholder="name@example.com" autofocus>
                            <label for="floatingInput">Email address</label>
                            <!-- <div class="form-text text-danger" id="emailErrorHolder">Invalid username or password</div> -->
                        </div>

                        <!-- password -->
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-sm border-2 border-success green-text" id="inputPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <!-- <div class="form-text text-danger" id="passwordErrorHolder">pasword error</div> -->
                        </div>

                        <!-- login button -->
                        <div class="d-grid gap-2 col-12 mx-auto" style="margin-top: 1.6rem;">
                            <button class="btn btn-success" type="submit">Login</button>
                        </div>
                    </form>    
                    <h5 class="h6 fw-light card-title text-center" style="margin-top: 5px;">Don't have an account? <a href="register.php">register here</a></h5>
                </div>
    
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>