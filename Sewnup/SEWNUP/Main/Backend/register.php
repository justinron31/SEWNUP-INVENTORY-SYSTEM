
<?php 
session_start();
require_once('connect.php');

if(!isset($con)){
    echo "Cannot connect to the database";
}
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $picture = addslashes(file_get_contents($_FILES["picture"]["tmp_name"]));
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    
    $sql = "SELECT * from users_tbl Where email='$email'";
    $result = mysqli_query($con, $sql);
    $present = mysqli_num_rows($result);

    if ($present > 0){
        $_SESSION['email_alert']='1';
        header("Location:../Frontend/register.php");
    }else{
    $query = "insert into users_tbl(firstname, lastname, email, address, picture, password, cpassword, reg_date) values ('$fname','$lname','$email','$address', '$picture', '$pass','$cpass',NOW())";
    $results = mysqli_query($con,$query);
    
    echo '<script type="text/Javascript">';
    echo 'alert("Registered Successfully!")';
    echo '</script>';
    echo '<script type="text/Javascript">';
    echo 'window.location = "../Frontend/login.html";';
    echo '</script>';
    }   

?>
                            

                        