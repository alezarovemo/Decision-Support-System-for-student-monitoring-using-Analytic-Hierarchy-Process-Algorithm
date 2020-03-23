<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',8,8,30);
    
    // Arial bold 12
    $this->SetFont('Arial','B',16);
    
    // Geser Ke Kanan 35mm
    $this->Cell(90);
    
    // Judul
    $this->Cell(30,7,'P e m e r i n t a h  K a b u p a t e n  T a s i k m a l a y a',0,1,'C');
    $this->Cell(90);
    $this->Cell(30,7,'D i n a s  P e n d i d i k a n ',0,1,'C');
    $this->Cell(90);
    $this->Cell(30,7,'S M A  M u h a m m a d i y a h  S i n g a p a r n a ',0,1,'C');
	 $this->Cell(90);
    $this->Cell(30,7,'T e r a k h i d i t a s i  " A " ',0,1,'C');
    
    // Garis Bawah Double
    $this->Cell(190,1,'','B',1,'L');
    $this->Cell(190,1,'','B',0,'L');
    
    // Line break 5mm
    $this->Ln(5);
}

function LoadData($gue){
  $data = array();
  if (is_array($gue)) {
  foreach($gue as $coba)
   $data[] = explode('|',$coba);
  }
  return $data;
 }
 
  function FancyTable($header, $data){
  // Colors, line width and bold font
  $this->SetFillColor(255,0,0);
  $this->SetTextColor(255);
  $this->SetDrawColor(128,0,0);
  $this->SetLineWidth(.3);
  $this->SetFont('','B');
  // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
  $w = array(40, 25, 25, 25, 50, 30, 25, 25);
  for($i=0;$i<count($header);$i++)
   $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
  $this->Ln();
  // Color and font restoration
  $this->SetFillColor(224,235,255);
  $this->SetTextColor(0);
  $this->SetFont('');
  // Data
  $fill = false;
  foreach($data as $row){
   // Field Dari Database Yang Ingin ditampilkan
   // $this->Cell($w[Ubah Ini],6,$row[Ubah Ini],'LR',0,'L',$fill);
   $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
   $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill); 
   $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
   $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
   $this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
   $this->Cell($w[5],6,$row[5],'LR',0,'L',$fill);
   $this->Cell($w[6],6,$row[6],'LR',0,'L',$fill);
   $this->Cell($w[7],6,$row[7],'LR',0,'C',$fill);
   $this->Ln();
   $fill = !$fill;
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
 }

// Page footer
function Footer()
{
    // Posisi 15 cm dari bawah
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
//Membuat file PDF
$pdf = new PDF();

$header = array( 'Nama', 'Absensi', 'Sikap', 'Perilaku', 'Pelanggaran Tata Tertib', 'Nilai Akademik', 'Hasil', 'Keterangan');

$dataku = mysql_query("SELECT * FROM t_h_analisa");


 
//Alias total halaman dengan default {nb} (berhubungan dengan PageNo())

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//Mencetak kalimat dengan perulangan

//Menutup dokumen dan dikirim ke browser
$pdf->Output();
?>

