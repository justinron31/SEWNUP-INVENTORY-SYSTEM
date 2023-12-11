<?php 

include('connect.php');

if(isset($GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($con,"delete from users_tbl where id ='$id' ");

    if($query){
        echo 'Record deleted!';
        header('location:../dashboard.php');
    }

}

?>
