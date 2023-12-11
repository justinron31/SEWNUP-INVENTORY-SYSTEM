<?php 

include('connect.php');

if(isset($GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($con,"delete from inv_tbl where id ='$id' ");

    if($query){
        echo 'Item deleted!';
        header('location:../Backend/index.php');
    }

}
