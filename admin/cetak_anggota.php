<?php 

// sambungkan ke fpdf library
require '../ribrary/fpdf.php';
include '../koneksi.php';

// objek dan memberikan pengaturan halaman pdf
$pdf=new FPDF('p','mm','A4');

$pdf->AddPage();

// buat judul
$pdf->SetFont('Times','B','13');
$pdf->Cell(200,10,'DATA ANGGOTA',0,0,'C');

// buat prngaturan table
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B','9');
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(35,7,'NAMA',1,0,'C');
$pdf->Cell(50,7,'NO TELP',1,0,'C');
$pdf->Cell(35,7,'ALAMAT',1,0,'C');
$pdf->Cell(50,7,'EMAIL',1,0,'C');



// buat pengaturan isi teble
$pdf->Cell(10,7,'',1,0);
$pdf->SetFont('Times','','10');
$no=1;
$data = mysqli_query($koneksi,"select * from anggota");
while($meledak = mysqli_fetch_array($data)){
    $pdf->Cell(10,7,$no++,1,0,'C');
    $pdf->Cell(35,7,$meledak['nama'],1,0,'C');
    $pdf->Cell(50,7,$meledak['no_telp'],1,0,'C');
    $pdf->Cell(35,7,$meledak['alamat'],1,0,'C');
    $pdf->Cell(50,7,$meledak['email'],1,1,'C');
}

$pdf->Output();






?>