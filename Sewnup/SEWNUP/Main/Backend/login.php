<?php 

    session_start();
    require_once('connect.php');


    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users_tbl WHERE email ='".$emailaddress."' and password ='".$password."'";
    $run = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($run);

    if(mysqli_num_rows($run)==1){
        $_SESSION['logged_in']=true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        
        echo '<script type="text/Javascript">';
                                        echo 'alert("Login Successfully!")';
                                        echo '</script>';
                                        echo '<script type="text/Javascript">';
                                        echo 'window.location = "../Frontend/index.php";';
                                        echo '</script>';
    }else{
       
        echo '<script type="text/Javascript">';
                                        echo 'alert("Invalid Credentials!")';
                                        echo '</script>';
                                        echo '<script type="text/Javascript">';
                                        echo 'window.location = "../Frontend/login.html";';
                                        echo '</script>';
       
    }

 
    
?>