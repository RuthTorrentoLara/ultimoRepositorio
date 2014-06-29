<?php
require_once('../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 10, 'ANO', 1);
$pdf->Cell(35, 10, 'UNIVERSIDAD', 1);
$pdf->Cell(35, 10, 'PAIS', 1);
$pdf->Cell(45, 10, 'NUMERO_PROYECTOS', 1);

$pdf->Ln(10);       
		
	    if(count($res)>0){
            foreach ($res as $resultado)
            {
		$pdf->SetFont('Arial', 'I', 8);	
                $pdf->Cell(15,7,utf8_decode($resultado[0]),1,'C' );
                $pdf->Cell(35,7,utf8_decode($resultado[1]),1,'C' );
                $pdf->Cell(35,7,utf8_decode($resultado[2]),1,'C' );
                $pdf->Cell(45,7,utf8_decode($resultado[3]),1,'C' );

            
            }
}
$pdf->Ln(10);
$pdf->Cell(45, 10, 'http://localhost/Joomla/index.php', 1);

$pdf->Output();
?>	

<?
require('html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
$fp = fopen("default_dos.php","r");
$strContent = fread($fp, filesize("default_dos.php"));
fclose($fp);
$pdf->WriteHTML($strContent);
$pdf->Output("default_dos.pdf");
echo "PDF file is generated successfully!";
?>