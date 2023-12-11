<?php
session_start();
$message = '';
if (isset($_SESSION['email_alert'])) {
    $message = 'Email is already exists.';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sewn-Up Registration</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<style>
    h6 {
        color: red;
    }
</style>
<!--alert boi-->





<body class="login-page">
    <div class='loader'>
        <div class='spinner-grow text-white' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <img src="../../assets/images/logon.png" style="height: 50%; width: 50%;">
                        </div>
                        <div class="authent-text">
                            <h3>Registration form</h3>
                            <p>
                                Enter your details to create your account
                            </p>
                            <p><h6><?php echo $message; ?><h6></p>
                        </div>

                        <form method="post" action="../Backend/register.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fname" placeholder="Firstname">
                                    <label for="floatingInput">Firstname</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="lname" placeholder="Lastname">
                                    <label for="floatingInput">Lastname</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="add" placeholder="Home Address">
                                    <label for="floatingInput">Home Address</label>
                                </div>
                            </div>
                            <div class="col-md-15">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Profile picture</label>
                                    <input class="form-control" type="file" name="picture">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="pass" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
                                    <label for="floatingPassword">Confirm Password</label>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" name='submit' class="btn1">Register</button>
                            </div>
                        </form><?php unset($_SESSION['email_alert']); ?>
                        <div class="authent-login">
                            <p>Already have an account? <a href="login.html">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
</body>

</html>