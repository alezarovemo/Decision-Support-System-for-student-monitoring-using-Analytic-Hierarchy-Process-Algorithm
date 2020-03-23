<?php
require('html_table.php');

$htmlTable=
'<TABLE>
	<tr>
		<td>No.</td><td>Nama</td><td>Hobi</td>
	</tr>
	<tr>
		<td>1</td><td>Dida Nurwanda</td><td>Makan, Maen PES, Ngoding, Maen Gundu, Jalan jalan sore</td>
	</tr>
</TABLE>';

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->WriteHTML("Start of the HTML table.<BR>$htmlTable<BR>End of the table.");
$pdf->Output();
?>
