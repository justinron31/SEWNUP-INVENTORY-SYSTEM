<!DOCTYPE html>
<html lang="en">

<!--session name-->
<?php

session_start();
$id = $_SESSION['id'];
$fname = $_SESSION['firstname'];
$lname = $_SESSION['lastname'];

if (isset($_SESSION['logged_in'])) {

?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Sewn-Up Add-items</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
        <link href="../../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">


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

 


    <body>

        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                    <div class="" id="navbarNav">
                        <ul class="navbar-nav" id="leftNav">
                            <li class="nav-item">
                                <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>

                        </ul>
                    </div>
                    <div class="logo">
                        <a class="navbar-brand" href="index.php"></a>
                    </div>
                    <div class="" id="headerNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link search-dropdown" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                                    <form>
                                    <input type="text" name="search_text" id="search_text" class="form-control bg-light border-0 small" placeholder="Search"
                                aria-label="Search" aria-describedby="basic-addon2">
                                    </form>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <div class="usern">
                                    <p><?php echo $fname . ' ' . $lname;
                                    } ?></p>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-profile rounded-circle"
                                <?php   
                                //images
                                include('../Backend/connect.php');
                                    $image_query = mysqli_query($con, "select * from users_tbl where id ='$id'");
                                    while($row_image = mysqli_fetch_array($image_query)){
                                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row_image['picture']).'" height="40" width="50">';
                                        
                                    }
                                
                                ?></a>
                                <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
    
                                   
                                    <a class="dropdown-item" href="../Backend/logout.php"><i data-feather="log-out"></i>Logout</a>
                              
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                    <li class="sidebar-title">
                        Main
                    </li>
                    <li class="active-page">
                        <a href="index.php"><i data-feather="home"></i>Dashboard</a>
                    </li>
                
                  
                    <li class="sidebar-title">
                        Other
                    </li>
                    <li>
                        <a href="creators.html"><i data-feather="users"></i>Creators</a>
                    </li>
                </ul>
            </div>

            
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card stat-widget">
                                <div class="card-body">
                                    <h5 class="card-title">New Customers</h5>
                                    <h2>132</h2>
                                    <p>From last week</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card stat-widget">
                                <div class="card-body">
                                    <h5 class="card-title">Orders</h5>
                                    <h2>287</h2>
                                    <p>Orders in waitlist</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card stat-widget">
                                <div class="card-body">
                                    <h5 class="card-title">Monthly Profit</h5>
                                    <h2>7.4K</h2>
                                    <p>For last 30 days</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card stat-widget">
                                <div class="card-body">
                                    <h5 class="card-title">Orders</h5>
                                    <h2>87</h2>
                                    <p>Orders in waitlist</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    

                    <div class="row">
                        <div class="main-wrapper">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Add Items</h5>

                                            <!-- form-->
                                            <form class="row g-3 needs-validation" method="post" action="../Backend/inv_upload.php" enctype="multipart/form-data">
                                                <div class="col-md-4">
                                                    <label for="validationCustom01" class="form-label">Product Code</label>
                                                    <input type="text" class="form-control" name="product_no" placeholder="Code" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Product Name</label>
                                                    <input type="text" class="form-control" name="product_name" placeholder="Name" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Product Description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="Description" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Quantity</label>
                                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Upload Image</label>
                                                        <input class="form-control" type="file" name="image">
                                                    </div>
                                                </div>



                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit" >Add Item</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        <script src="../../assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="../../assets/js/main.min.js"></script>
        <script src="../../assets/js/pages/dashboard.js"></script>
    </body>

</html>