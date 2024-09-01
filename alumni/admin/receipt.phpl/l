<?php
include 'include/config.php';

if (isset($_POST['receipt'])) {
    // Fetch data from the donations table for the specific donation ID
    $id = $_POST['id'];
    $sql = "SELECT * FROM donations WHERE id='$id' AND status='confirm'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        require('admin/fpdf/fpdf.php');

        // Create a new PDF file
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);

        // Set border around the page
        $pdf->Rect(5, 5, 200, 287, 'D');

        // Set header
        $pdf->Cell(0, 10, 'Donation Receipt', 0, 1, 'C');
        $pdf->Ln(10);

        // Fetch the donation details
        $row = $result->fetch_assoc();

        // Remove the logo image and proceed with the content
        // Add College Name
        $pdf->Cell(0, 10, 'Alumni Management System', 0, 1, 'C');
        $pdf->Ln(10);

        // Add thank you note
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Thank you for your generous donation!', 0, 1);
        $pdf->Ln(10);

        // Add donor details
        $pdf->Cell(0, 10, 'Donor Name: ' . $row['name'], 0, 1);
        $pdf->Cell(0, 10, 'Donation Amount: ' . $row['amount'] . ' /-', 0, 1);
        $pdf->Cell(0, 10, 'Date of Donation: ' . date('F j, Y', strtotime($row['date'])), 0, 1);
        $pdf->Ln(10);

        // Add additional message
        $pdf->MultiCell(0, 10, "Your support helps us to continue our mission of providing quality education and resources to our students. With your generous donation, we can enhance our educational programs, upgrade our facilities, and offer more scholarships to deserving students. Your commitment to our cause ensures that we can provide a nurturing and stimulating environment for learning and growth. We greatly appreciate your contribution and the positive impact it has on our community. Thank you for being a vital part of our mission to educate and empower the next generation.\n\nSincerely,\nCollege Administration", 0, 1);
        $pdf->Ln(10);

        // Output the PDF
        $pdf->Output();
    } else {
        echo "Please Generate In This User RECEIPT";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$con->close();
?>
