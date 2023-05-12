<?php
define('FPDF_FONTPATH', '../font');
require('./fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        // $this->Image('https://administrative.lulan-tnvs.com/assets/images/mainlogo.png',10,10,20,20,'PNG');
        $this->Image('../mainlogo.png',10,10,20,20,'PNG');

        $this->SetFont('Arial','B',20);
        $this->SetX(35);
        $this->Cell(0,10,'Lulan Inc.',0,1,'L');

        $this->SetFont('Arial','',12);
        $this->SetX(35);
        $this->MultiCell(0,5,'Address: Novaliches, Quezon City, Philippines 1123'."\n".'Website: www.lulan-tnvs.com',0,'L',false);

        $this->Line(10,35,200,35);

        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
    }

    function xy(){
        $this->SetTextColor(200,200,200);
        $this->SetDrawColor(200,200,200);
        for($y=0;$y<=260;$y+=10)
        {
            for($x=0;$x<=200;$x+=10)
            {
                $this->SetXY($x,$y);
                $this->MultiCell(10,5,'x'.$x."\n".'y'.$y,1,'C',false);
            }
        }
    }
}

/*
P|L = portrait|landscape
mm|pt|cm|in = millimeters, points, centimeters, inches
A3|A4|A5|Letter|Legal = size ng document
*/

$pdf = new PDF('P','mm','A4');

$pdf->SetTitle('Sample Template', true);
$pdf->SetAuthor('Jakol Salsalani', true);
$pdf->SetSubject('Capstone', true);
$pdf->SetKeywords('fpdf, pdf, template', true);
$pdf->SetCreator('kentotszxc', true);

$pdf->AddPage();

// yung number ng pages
$pdf->AliasNbPages();

$pdf->SetFont('Helvetica','',7);

// $pdf->Cell(8.260869565217391,10,'Cell 1',1,1,'C',false);//1
// $pdf->Cell(16.52173913043478,10,'Cell 2',1,1,'C',false);//2
// $pdf->Cell(24.78260869565217,10,'Cell 3',1,1,'C',false);//3
// $pdf->Cell(33.04347826086956,10,'Cell 4',1,1,'C',false);//4
// $pdf->Cell(41.30434782608696,10,'Cell 5',1,1,'C',false);//5
// $pdf->Cell(49.56521739130435,10,'Cell 6',1,1,'C',false);//6
// $pdf->Cell(57.82608695652174,10,'Cell 7',1,1,'C',false);//7
// $pdf->Cell(66.08695652173913,10,'Cell 8',1,1,'C',false);//8
// $pdf->Cell(74.34782608695652,10,'Cell 9',1,1,'C',false);//9
// $pdf->Cell(82.60869565217391,10,'Cell 10',1,1,'C',false);//10
// $pdf->Cell(90.8695652173913,10,'Cell 11',1,1,'C',false);//11
// $pdf->Cell(99.13043478260869,10,'Cell 12',1,1,'C',false);//12
// $pdf->Cell(107.3913043478261,10,'Cell 13',1,1,'C',false);//13
// $pdf->Cell(115.6521739130435,10,'Cell 14',1,1,'C',false);//14
// $pdf->Cell(123.9130434782609,10,'Cell 15',1,1,'C',false);//15
// $pdf->Cell(132.1739130434783,10,'Cell 16',1,1,'C',false);//16
// $pdf->Cell(140.4347826086956,10,'Cell 17',1,1,'C',false);//17
// $pdf->Cell(148.695652173913,10,'Cell 18',1,1,'C',false);//18
// $pdf->Cell(156.9565217391304,10,'Cell 19',1,1,'C',false);//19
// $pdf->Cell(165.2173913043478,10,'Cell 20',1,1,'C',false);//20
// $pdf->Cell(173.4782608695652,10,'Cell 21',1,1,'C',false);//21
// $pdf->Cell(181.7391304347826,10,'Cell 22',1,1,'C',false);//22
// $pdf->Cell(190,10,'Cell 23',1,1,'C',false);//23
$pdf->xy();

// I - display in browser
// D - download agad
// F - save at server end
// S - string output

// default na pangalan . pdf

// true pag utf8 yung file

$pdf->Output('I','templato.pdf',true);
?>