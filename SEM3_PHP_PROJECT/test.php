<?php
require('fpdf/fpdf.php');

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'tandt');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest entry
$sql = "SELECT * FROM `packages` ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Create a new PDF object
    $pdf = new FPDF();

    // Add a page
    $pdf->AddPage();

    // Set the font and size for the title
    $pdf->SetFont("Arial","B", 22);

   //cell(width, height, msg, border, 1 for newline , align center )

    $pdf->Cell(0,3,'',0,1);//space between two line

    $pdf->Cell(130	,5,'ElectroStore',0,0);

    $pdf->Cell(0,7,'',0,1);//space between two line
    $pdf->SetFont('Arial','i',12);


    $pdf->Cell(130	,5, "Empowering Innovation, Enriching Lives!" ,0,0);
    $pdf->SetFont("Arial","B", 22);

    $pdf->Cell(59	,5,'INVOICE',0,1);//end of line


    $pdf->SetFont('Arial','',12);

    $pdf->Cell(0,10,'',0,1);//space between two line
    $pdf->SetFont('Arial','B',12);

    $pdf->Cell(130	,5,'Receipt No. : #',0,1);
    $pdf->Cell(130	,5,'Date: ',0,1);
    $pdf->Cell(0,10,'',0,1);//space between two line

    $pdf->Cell(120	,5,'From :' ,0,);
    $pdf->SetFont('Arial','B',12);

    $pdf->Cell(130	,5,'Sold To :' ,0,1);
    $pdf->SetFont('Arial','',12);

    $pdf->Cell(120	,5,'B-101, Sarkhej, ',0,0);
    $pdf->Cell(130	,5, $row['name'],0,1);

    
    $pdf->Cell(120	,5,'Ahmedabad, Gujarat' ,0,0);
    $pdf->Cell(130	,5, $row['flat'],0,1);

    $pdf->Cell(120	,5,'India, 382440.' ,0,0);
    $pdf->Cell(130	,5, $row['street'],0,1);

    $pdf->Cell(120,4,'',0,0);//space between two line
    $pdf->Cell(15	,5, $row['state'],0,0);
    $pdf->Cell(15,5, $row['pin_code'],0,1);
    $pdf->Cell(120	,5,'Contact : +91 9104078592',0,0);
    $pdf->Cell(130	,5, $row['country'],0,1);

    $pdf->Cell(120	,5,'Email : electrostore@gmail.com',0,1);
    $pdf->Cell(120,0,'',0,0);//space between two line

    $pdf->Cell(20,5,'Contact : ',0,0);
    $pdf->Cell(130	,5, $row['number'],0,1);


    $pdf->Cell(120,4,'',0,0);//space between two line


    $pdf->Cell(20,5,'Email Id : ',0,0);
    $pdf->Cell(130	,5, $row['email'],0,1);

    $pdf->Cell(130,8,'',0,0);//space between two line

   

    $pdf->Cell(0,8,'',0,1);//space between two line
    $pdf->SetFont('Arial','B',14);

    $pdf->Cell(0,10, 'Order Details: ',1,1);
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(22,7, 'Order No.',1,0,'C');
    $pdf->Cell(99,7, 'Items',1,0, "C");
    $pdf->Cell(40,7, 'Payment Method',1,0, "C");
    $pdf->Cell(0,7, 'Amount',1,1, "C");


    $pdf->Cell(22,20, $row['id'],1,0,'C');
    $pdf->Cell(99,20, $row['total_products'],1,0,'C');
    $pdf->Cell(40,20, $row['method'],1,0,'C');
    $pdf->Cell(0,20, $row['total_price'],1,1,'C');

    $pdf->Cell(22,8,'',0,0);//space between two line
    $pdf->Cell(99,8,'',0,0);//space between two line
    $pdf->Cell(40,8, 'Total GST %',1,0, "C");
    $pdf->Cell(0,8, '10 %',1,1, "C");

    $pdf->Cell(22,8,'',0,0);//space between two line
    $pdf->Cell(99,8,'',0,0);//space between two line
    $pdf->Cell(40,8, 'Total Discount %',1,0, "C");
    $pdf->Cell(0,8, '10 %',1,1, "C");

    $pdf->Cell(22,8,'',0,0);//space between two line
    $pdf->Cell(99,8,'',0,0);//space between two line
    $pdf->Cell(40,8, 'Total Amount in rupee',1,0, "C");
    $pdf->Cell(0,8, $row['total_price'],1,1, "C");



    $pdf->Cell(0,8,'',0,1);//space between two line
    $pdf->SetFont('Arial','I',14);
    $pdf->Cell(0,10, 'Thanks for shopping and Visit again',0,0,'C');


    // Output the PDF
    $pdf->Output();
} else {
    echo "No data found.";
}

$conn->close();
?>
