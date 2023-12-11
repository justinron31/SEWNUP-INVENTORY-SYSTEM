

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Record Successfully Added</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/registration.css" rel="stylesheet">


</head>

<body id="page-top">
<br>
         <br>
         <br>
         <br>
    <!-- Page Wrapper -->
    <div id="wrapper">

         

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="testbox">
                        <form action="add.html" >
                        
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                            <?php 
                            require_once('connect.php');
                            
                          
                            if($con){
                               
                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $uname = $_POST['uname'];
                                $email = $_POST['email'];
                                $bdate = $_POST['bday'];
                                $address = $_POST['add'];
                                $gender= $_POST['gender'];
                                $pass = $_POST['pass'];
                                $cpass = $_POST['cpass'];

                             
                            
                                $query = "insert into users_tbl(firstname, lastname, username, email, birthdate, address, gender, password, cpassword, reg_date) values('$fname','$lname','$uname','$email','$bdate','$address','$gender','$pass','$cpass',NOW())";
                            
                                $result = mysqli_query($con, $query);
                                
                                    if($result){
                                         echo '<span style="color: black; font-size: 20px; text-align: center;"> ' ."<center> <b> Record successfully Added ! <center> ";
                                         echo '<span style="color: black; font-size: 14px; text-align: center;"> ' ."<center> <b> Click the Continue button to redirect in the dashboard screen.<center> ";
                                         header('location:dashboard.php');
                                         
                                    }
                                    else{
                                        $err[] = 'Failed to add the record...'.mysqli_error($con);
                                    }
                                mysqli_close($con);
                            }
                                    else{
                                        exit('Could not connect to db.'.mysqli_connect_error());
                            }
                            
                            ?>
                            <br>
                            
                            <center>
                                        <button >Continue</button>
                                    </center>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                        </form>

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; My Web 2022</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

</body>

</html>