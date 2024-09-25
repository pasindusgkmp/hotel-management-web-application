<?php
require('../fpdf/fpdf.php');
include('../config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch invoice data from the database
    $sql = "SELECT * FROM payment WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Create PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('Arial', 'B', 16);

    // Title
    $pdf->Cell(190, 10, 'INVOICE', 0, 1, 'C');

    // Hotel info
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(190, 10, 'HOTEL BLUE BIRD', 0, 1, 'L');
    $pdf->Cell(190, 10, '(+91) 9313346569', 0, 1, 'L');

    // Customer info
    $pdf->Cell(190, 10, 'Customer: ' . $row['Name'], 0, 1, 'L');

    // Invoice details
    $pdf->Cell(95, 10, 'Invoice #: ' . $row['id'], 0, 0, 'L');
    $pdf->Cell(95, 10, 'Date: ' . $row['cout'], 0, 1, 'R');

    // Table header
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(60, 10, 'Item', 1, 0, 'C');
    $pdf->Cell(30, 10, 'No of Days', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Rate', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Quantity', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Price', 1, 1, 'C');

    // Table content
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, $row['troom'], 1, 0, 'L');
    $pdf->Cell(30, 10, $row['noofdays'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['ttot'] / $row['noofdays'] / $row['nroom'], 1, 0, 'R');
    $pdf->Cell(30, 10, $row['nroom'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['ttot'], 1, 1, 'R');

    $pdf->Cell(60, 10, $row['bed'] . ' Bed', 1, 0, 'L');
    $pdf->Cell(30, 10, $row['noofdays'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['btot'] / $row['noofdays'] / $row['nroom'], 1, 0, 'R');
    $pdf->Cell(30, 10, $row['nroom'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['btot'], 1, 1, 'R');

    $pdf->Cell(60, 10, $row['meal'], 1, 0, 'L');
    $pdf->Cell(30, 10, $row['noofdays'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['mepr'] / $row['noofdays'] / $row['nroom'], 1, 0, 'R');
    $pdf->Cell(30, 10, $row['nroom'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['mepr'], 1, 1, 'R');

    // Total
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(150, 10, 'Total', 1, 0, 'R');
    $pdf->Cell(40, 10, $row['fintot'], 1, 1, 'R');

    // Output PDF
    $pdf->Output('D', 'Invoice_' . $id . '.pdf');
} else {
    echo "Invalid invoice ID";
}
