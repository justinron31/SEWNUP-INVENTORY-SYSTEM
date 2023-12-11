<?php

include('connect.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM inv_tbl 
  WHERE id LIKE '%".$search."%'
  OR product_no LIKE '%".$search."%'
  OR product_name LIKE '%".$search."%' 
  OR description LIKE '%".$search."%' 
  OR quantity LIKE '%".$search."%' 
 ";
}
else
{
 $query = "SELECT * FROM inv_tbl ORDER BY id";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <div class="row">
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border-radius:10% >
     <thead style="font-size:20px;">
         <tr class="tbl">
         <th style="color: white;">ID</th><th style="color: white;">Product Number</th> <th style="color: white;">Product Name</th> <th style="color: white;">Description</th> <th style="color: white;">Quantity</th> <th style="color: white;">Image</th> <th style="color: white;">Date Added</th> <th style="color: white;">Actions</th>
         </tr>
         
     </thead>
    
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td style="font-size:17px;">'.$row["id"].'</td>
    <td style="font-size:17px;">'.$row["product_no"].'</td>
    <td style="font-size:17px;">'.$row["product_name"].'</td>
    <td style="font-size:17px;">'.$row["description"].'</td>
    <td style="font-size:17px;">'.$row["quantity"].'</td>
    <td><img src="data:image;base64,' . base64_encode($row['image']).'" style="width:100px; height:120px; border-radius: 15%; "></td>
     <td style="font-size:17px;">'.$row['reg_date'].'</td>
           <td>
            <a href="update.php?id='.$row['id'].'">Edit</a>
            <a href=javascript:delete_id('.$row['id'].')>| Delete</a>
            </td>
          </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>