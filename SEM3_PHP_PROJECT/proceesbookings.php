<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {
	require_once "config.php";

	$name = $_POST['name'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$adult = $_POST['adult'];
	$children = $_POST['children'];
	$destination = $_POST['destination'];
	$departuredate = $_POST['departuredate'];
	$paymentmethod = $_POST['paymentmethod'];
	// $totalPaymentAmount = $_POST['payment-amount'];
	// $cardnumber = $_POST['cardnumber'];
	// $expirationdate = $_POST['expirationdate'];
	// $cvv = $_POST['cvv'];

	$qry = "INSERT INTO bookings(name,city,mobile,email,adult,children,pack_id,departuredate,paymentmethod) VALUES('$name','$city','$mobile','$email','$adult','$children','$destination','$departuredate','$paymentmethod')";

	$result = mysqli_query($con, $qry);

	if ($result) {


		require 'PHPMailer-master\src\Exception.php';
		require 'PHPMailer-master\src\PHPMailer.php';
		require 'PHPMailer-master\src\SMTP.php';

		require('fpdf.php');

		$con = new mysqli('localhost', 'root', '', 'tandt');
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
		}

		$sql = "SELECT b.*,p.packname FROM bookings b JOIN packages p ON b.pack_id=p.packid ORDER BY id DESC LIMIT 1";
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
			$pdf->Image('./img/1.png', 10, 10, 40, 0, 'PNG');

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
			$pdf->Cell(0, 10, $row['packname'], 0, 1);
			// $pdf->Cell(40, 10, 'Total Payment Amount:', 0);
			// $pdf->Cell(0, 10, $row['totalpaymentamount'], 0, 1);
			$pdf->Cell(40, 10, 'Departure Date:', 0);
			$pdf->Cell(0, 10, $row['departuredate'], 0, 1);
			$pdf->Cell(40, 10, 'Payment Method:', 0);
			$pdf->Cell(0, 10, $row['paymentmethod'], 0, 1);
			// $pdf->Cell(40, 10, 'Payment Amount:', 0);
			// $pdf->Cell(0, 10, $row['paymentamount'], 0, 1);

			// Add a creative design element
			$pdf->Ln(20);
			$pdf->SetFont('Arial', 'B', 16);
			$pdf->Cell(0, 10, 'Thank You for Choosing Us!', 0, 1, 'C');
			$pdf->SetFont('Arial', '', 12);
			$pdf->Cell(0, 10, 'For any inquiries, please contact us at:', 0, 1, 'C');
			$pdf->Cell(0, 10, 'Phone: +91 8155920951', 0, 1, 'C');
			$pdf->Cell(0, 10, 'Email: praptishah2823@gmail.com', 0, 1, 'C');

			// Output the PDF

			// $pdf->Output('D', 'invoice.pdf'); // 'D' will force a download
		} else {
			echo 'No data found!';
		}

		$con->close();

		if (isset($_POST['submit'])) {
			$mail = new PHPMailer(true);

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'praptishah2823@gmail.com';
			$mail->Password = 'ysohtogphaysaldk';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;

			$mail->setFrom('praptishah2823@gmail.com');
			$mail->addAddress($_POST['email']);
			$mail->isHTML(true);


			$mail->Subject = 'Invoice of your tour booked';



			// class InvoicePDF extends FPDF
			// {
			//     function Header()
			//     {
			//         // Add your custom header content here
			//         // Example: Company logo, invoice title, etc.
			//         // $this->SetFont('Arial', 'B', 16);
			//         // $this->Cell(0, 10, './img/1.png', 0, 1, 'C');
			//         // $this->Ln(10);
			//     }

			//     function Footer()
			//     {
			//         // Add your custom footer content here
			//         // Example: Page numbers, additional information, etc.
			//         // $this->SetY(-15); // Position at 15 mm from bottom
			//         // $this->SetFont('Arial', 'I', 8);
			//         // $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' of {nb}', 0, 0, 'C');
			//     }
			// }

			// Fetch the latest entry




			$invoiceContent = $pdf->Output('S'); // Output the PDF content as a string

			$mail->addStringAttachment($invoiceContent, 'invoice.pdf', 'base64', 'application/pdf');
			$mail->Body = 'Please find the attached invoice for your recent tour booking.';

			$mail->send();

			echo '<script>alert("Invoice has been sent to your email"); document.location.href = "homepage.php";</script>';

		}
	}
}

?>