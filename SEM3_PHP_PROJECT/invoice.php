<?php
require('fpdf.php');

$con = new mysqli('localhost', 'root', '', 'tandt');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


// Fetch the latest entry
$sql = "SELECT * FROM bookings ORDER BY id DESC LIMIT 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // // Generate the PDF invoice
    $pdf = new FPDF();
    // ...
    $pdf->AddPage();

    // Set font and styles
    $pdf->SetFont('Arial', 'B', 24);
    $pdf->Cell(0, 20, 'Invoice', 0, 1, 'C');

    // Add the image at the top of the page
    $pdf->Image('./img/Travel logotravel agency logotravel  tour - Made with PosterMyWall.jpg', 10, 10, 40, 0, 'JPG');

    $pdf->SetFont('Arial', '', 12);
    $pdf->SetY(60); // Set the Y position for the start of the text

    // Add the rest of the content below the image
    $pdf->Cell(0, 10, 'Customer Details', 0, 1);
    $pdf->Cell(40, 10, 'Name:', 0);
    $pdf->Cell(0, 10, $row['name'], 0, 1);
    $pdf->Cell(40, 10, 'City:', 0);
    $pdf->Cell(0, 10, $row['city'], 0, 1);
    $pdf->Cell(40, 10, 'Mobile:', 0);
    $pdf->Cell(0, 10, $row['mobile'], 0, 1);
    $pdf->Cell(40, 10, 'Email:', 0);
    $pdf->Cell(0, 10, $row['email'], 0, 1);
    // ...


    $pdf->Cell(0, 10, 'Travel Details', 0, 1);
    $pdf->Cell(40, 10, 'Adult:', 0);
    $pdf->Cell(0, 10, $row['adult'], 0, 1);
    $pdf->Cell(40, 10, 'Children:', 0);
    $pdf->Cell(0, 10, $row['children'], 0, 1);
    $pdf->Cell(40, 10, 'Destination:', 0);
    $pdf->Cell(0, 10, $row['destination'], 0, 1);
    $pdf->Cell(40, 10, 'Departure Date:', 0);
    $pdf->Cell(0, 10, $row['departuredate'], 0, 1);
    $pdf->Cell(40, 10, 'Payment Method:', 0);
    $pdf->Cell(0, 10, $row['paymentmethod'], 0, 1);

    // Add a creative design element
    $pdf->Ln(20);
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Thank You for Choosing Us!', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, 'For any inquiries, please contact us at:', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Phone: +91 8155920951', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Email: shahprapti585@gmail.com', 0, 1, 'C');

    // Output the PDF

    // $pdf->Output('D', 'invoice.pdf'); // 'D' will force a download
} else {
    echo 'No data found!';
}

$con->close();
?>