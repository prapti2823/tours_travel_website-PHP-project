<?php 
require_once("fpdf.php");

class PDF extends FPDF {
    function getdatafromfile($file) {
        $lines = file($file);
        $data = array();

        foreach ($lines as $line) {
            $data[] = explode(',',chop($line));
        }

        return $data;
    }

    function getsimpletable($header, $data) {
        $columnWidths = array(40, 40, 40, 40, 40, 40, 40, 40, 40, 40); // Adjust the widths as needed

        foreach ($header as $key => $column) 
        {
        $this->Cell($columnWidths[$key], 7, $column, 1, 0, 'C');
        }
        $this->Ln();

        foreach ($data as $row) {
            foreach ($row as $key => $col) {
                $this->Cell($columnWidths[$key], 6, $col, 1, 0, 'L');
            }

            $this->Ln();
        }
    }
}

$pdf = new PDF();
$header = array('Name', 'Email', 'City', 'Mobile', 'No of adults', 'No of children', 'Destination', 'Card Number', 'Expiration Date', 'CVV');
$data = $pdf->getdatafromfile('bookings.csv');
$pdf->SetFont('Arial','', 14);
$pdf->AddPage();
$pdf->getsimpletable($header, $data);
$pdf->Output();
?>
