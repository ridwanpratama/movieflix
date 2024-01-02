<?php

require('../assets/fpdf/fpdf.php');

session_start();

$ticketNo = $_POST['no'];
$fullName = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$movieTitle = $_POST['movieTitle'];
$duration = $_POST['duration'];
$showtime = $_POST['showtime'];
$price = $_POST['price'];
$seat = $_POST['seat'];

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,'Movieflix Ticket Receipt',0,0,'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'User Information:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Full Name: '.$_POST['name'],0,1);
$pdf->Cell(0,10,'Email: '.$_POST['email'],0,1);
$pdf->Cell(0,10,'Address: '.$_POST['address'].', '.$_POST['city'].', '.$_POST['state'].', '.$_POST['zip'],0,1);
$pdf->Cell(0,10,'Phone: '.$_POST['phone'],0,1);

$pdf->Ln(10);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Movie Details:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Movie Title: '.$_POST['movieTitle'],0,1);
$pdf->Cell(0,10,'Duration: '.$_POST['duration'],0,1);
$pdf->Cell(0,10,'Showtime: '.$_POST['showtime'],0,1);
$pdf->Cell(0,10,'Price: Rp. '.$_POST['price'],0,1);
$pdf->Cell(0,10,'Seat: '.$_POST['seat'],0,1);
$pdf->Cell(0,10,'Location: '.$_POST['location'],0,1);

$pdf->Output('F', '../report/pdf/ticket' . $ticketNo . '.pdf');

$_SESSION['pdf_generated'] = true;
$_SESSION['pdf_path'] = '../report/pdf/ticket' . $ticketNo . '.pdf';

header('Location: ../pages/success.php');
exit;