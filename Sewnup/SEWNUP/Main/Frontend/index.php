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
        
        <!--Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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

    <script>
//delete function
function delete_id(id){
     if (confirm('Do you want to delete this record?')){
        window.location.href='index.php?delete_id='+id;
     }
}

//searchbar
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"../Backend/search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});

</script>

<?php
include('../Backend/connect.php');

if(isset($_GET['delete_id'])){
    $query= "delete from inv_tbl where id =" .$_GET['delete_id' ];
    mysqli_query($con,$query);
    header('location:index.php');
}
?>

<style>
    .tbl {
    background-color: #8d7247;
    color: #8d7247;
}


</style>

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
                                    <form
                                    class ="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="search_text" id="search_text" class="form-control bg-light border-0 small" placeholder="Search"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                        
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
                        Pages
                    </li>
                
                    <li>
                        <a href="index.html"><i data-feather="layers"></i>Inventory Manager<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="inv_add.php"><i class="far fa-circle"></i>Add Item</a></li>
                        
                        </ul>
                    </li>
                  
                   
                </ul>
            </div>
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card stat-widget">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size:25px ;">Inventory Items</h5>
                                    <?php 
                                            
                                            require_once('../Backend/connect.php');

                                            $query = " SELECT id FROM inv_tbl ORDER BY id";
                                            $run = mysqli_query($con,$query);

                                            $row= mysqli_num_rows($run);

                                            echo '<h2 style="font-size:40px">' .$row. '</h2>';
                                            
                                            ?>
                                    <p style="font-size:25px">Total</p>
                                    <div class="progress">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
           
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 style="font-size:30px;">Inventory Table</h5>
                                <div style=" text-align: right;">
                                <a href="../Backend/report_pdf.php" class="btn"><i class="fas fa-download  " ></i> Export List</a>
                                <a href="inv_add.php" class="btn"><i class="fas fa-download  "></i> Add Item</a>
                                </div>
                                
                                
                               
                                <div class="d-grid">
                               

                            </div>
                                <br>
                                <div class="col"><div id="result"></div>
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