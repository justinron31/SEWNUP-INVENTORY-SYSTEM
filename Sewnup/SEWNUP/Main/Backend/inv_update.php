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
        <title>Sewn-Up Dashboard</title>

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
                                <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                                    <form>
                                        <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
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
                                <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image.png" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                    <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                                    <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                                    <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../Backend/logout.php"><i data-feather="log-out"></i>Logout</a>
                                </div>
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
                        <a href="index.html"><i data-feather="home"></i>Dashboard</a>
                    </li>
                    <li class="sidebar-title">
                        Pages
                    </li>
                    <li>
                        <a href="email.html"><i data-feather="inbox"></i>Login</a>
                    </li>
                    <li>
                        <a href="calendar.html"><i data-feather="calendar"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="social.html"><i data-feather="user"></i>Social</a>
                    </li>
                    <li>
                        <a href="file-manager.html"><i data-feather="message-circle"></i>File Manager</a>
                    </li>

                    <li>
                        <a href="index.html"><i data-feather="gift"></i>Plugins<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="block-ui.html"><i class="far fa-circle"></i>Block UI</a></li>
                            <li><a href="session-timeout.html"><i class="far fa-circle"></i>Session Timeout</a></li>
                            <li><a href="tree-view.html"><i class="far fa-circle"></i>Tree View</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i data-feather="edit"></i>Form<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="form-elements.html"><i class="far fa-circle"></i>Form Elements</a></li>
                            <li><a href="form-layout.html"><i class="far fa-circle"></i>Form Layout</a></li>
                            <li><a href="form-validation.html"><i class="far fa-circle"></i>Form Validation</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="cards.html"><i data-feather="layers"></i>Cards</a>
                    </li>
                    <li>
                        <a href="index.html"><i data-feather="list"></i>Tables<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="tables.html"><i class="far fa-circle"></i>Basic Tables</a></li>
                            <li><a href="data-tables.html"><i class="far fa-circle"></i>Data Tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="charts.html"><i data-feather="pie-chart"></i>Charts</a>
                    </li>
                    <li class="sidebar-title">
                        Other
                    </li>
                    <li>
                        <a href="index.html"><i data-feather="star"></i>Pages<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="invoice.html"><i class="far fa-circle"></i>Invoice</a></li>
                            <li><a href="404.html"><i class="far fa-circle"></i>404 Page</a></li>
                            <li><a href="500.html"><i class="far fa-circle"></i>500 Page</a></li>
                            <li><a href="blank-page.html"><i class="far fa-circle"></i>Blank Page</a></li>
                            <li><a href="login.html"><i class="far fa-circle"></i>Login</a></li>
                            <li><a href="register.html"><i class="far fa-circle"></i>Register</a></li>
                            <li><a href="lockscreen.html"><i class="far fa-circle"></i>Lockscreen</a></li>
                            <li><a href="price.html"><i class="far fa-circle"></i>Price</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i data-feather="check-circle"></i>Documentation</a>
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

                
                    <?php
                    include('connect.php');
                    if (isset($_POST['update'])) {
                        $product_no = $_POST['product_no'];
                        $product_name = $_POST['product_name'];
                        $description = $_POST['description'];
                        $quantity = $_POST['quantity'];
                        $image = $_POST['image'];
                        $user_id = $_POST['id'];

                        $query = "update inv_tbl set product_no = '$product_no', product_name = '$product_name',
                         description = '$description', quantity = '$quantity', image = '$image' where id='$user_id'";

                        $result = $con->query($query);

                        if ($result == TRUE) {
                            echo '<script type="text/JavaScript">';
                            echo 'alert("Item updated successfully!")';
                            echo '</script>';
                        } else {
                            echo '<script type="text/Javascript">';
                            echo 'alert("Error updating..")';
                            echo '</script>';
                        }
                    }



                    if (isset($_GET['id'])) {
                        $user_id = $_GET['id'];

                        $query = "select * from inv_tbl where id = '$user_id'";
                        $result = mysqli_query($con, $query);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $product_no = $_POST['product_no'];
                                $product_name = $_POST['product_name'];
                                $description = $_POST['description'];
                                $quantity = $_POST['quantity'];
                                $image = $_POST['image'];
                                $user_id = $_POST['id'];
                            }
                        }
                    }
                    ?>

                    <div class="row">
                        <div class="main-wrapper">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Item</h5>
                                            <form class="row g-3 needs-validation" method="post" action="">
                                                <div class="col-md-4">
                                                    <label for="validationCustom01" class="form-label">Product Code</label>
                                                    <input type="text" class="form-control" name="product_code" placeholder="Code" value="<?php echo $product_no; ?>">
                                                    <input type="hidden" class="form-control" name="product_code" placeholder="Code" value="<?php echo $user_id; ?>">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Product Name</label>
                                                    <input type="text" class="form-control" name="product_name" placeholder="Name" value="<?php echo $product_name; ?>">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Product Description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $description; ?>">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="validationCustom02" class="form-label">Quantity</label>
                                                    <input type="text" class="form-control" name="quantity" placeholder="Quantity" value="<?php echo $quantity; ?>">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Upload Image</label>
                                                        <input class="form-control" type="file" name="image" value="<?php echo $image; ?>">
                                                    </div>
                                                </div>



                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit" name="update">Update Item</button>
                                                    <span><a onclick="if(confirm('Are you sure you want to cancel?')) history.back();" class="btn btn-primary"> Cancel</a></span>
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