<?php
    include('connect.php');
    include('../fpdf/fpdf.php');
    
    $pdf=new FPDF();

    //Creating new pdf page

    $pdf->AddPage();
    //Set the base font & size
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,5,"Lyceum of the Philippines University - Laguna",0,0,'C');
    $pdf->Ln();
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,5,"Makiling, Calamba City",0,0,'C');
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
   
    $pdf->Image("../images/logon.png",80,22,50); 
    $pdf->Cell(0,5," SEWN-UP INVENTORY ITEMS LIST",0,0,'C');
  
	
    //Creating new line
    $pdf->Ln();
    $pdf->Ln();

    $pdf->SetFont('Arial','B',9);

    $pdf->SetFillColor(192, 229, 252);
    
    $pdf->Cell(15,10,"ID",1,0,'C');
    $pdf->Cell(35,10,"Product Number",1,0,'C');
    $pdf->Cell(37,10,"Product Name",1,0,'C');
    $pdf->Cell(50,10,"Description",1,0,'C');
    $pdf->Cell(20,10,"Quantity",1,0,'C');
    $pdf->Cell(37,10,"Date Added",1,0,'C');
    $pdf->Ln();
    

    // Fetch data from table

    $result = mysqli_query($con,"select * from inv_tbl");

    while($row=mysqli_fetch_array($result)){
        $pdf->SetFont('Arial','I',9);
       

        $pdf->Cell(15,10,"{$row['id']}" ,1,0,'C');
        $pdf->Cell(35,10,"{$row['product_no']}" ,1,0,'C');
        $pdf->Cell(37,10,"{$row['product_name']}",1,0,'C');
        $pdf->Cell(50,10,"{$row['description']}",1,0,'C');
        $pdf->Cell(20,10,"{$row['quantity']}",1,0,'C');
        $pdf->Cell(37,10,"{$row['reg_date']}" ,1,0,'C');
        $pdf->multiCell(37,10,"");
       
        
        
    }

    $pdf->Output();

?>
