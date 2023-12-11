<?php 
 require_once('connect.php');
                            
                          
 if($con){
    
     $product_no = $_POST['product_no'];
     $product_name = $_POST['product_name'];
     $description = $_POST['description'];
     $quantity = $_POST['quantity'];
     $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   
 
     $query = "insert into inv_tbl(product_no, product_name, description, quantity, image, reg_date) values('$product_no','$product_name','$description','$quantity','$image',NOW())";
 
     $result = mysqli_query($con, $query);
     
         if($result){
            echo '<script type="text/Javascript">';
            echo 'alert("Item Added Successfully!")';
            echo '</script>';
            echo '<script type="text/Javascript">';
            echo 'window.location = "../Frontend/index.php";';
            echo '</script>';
              
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