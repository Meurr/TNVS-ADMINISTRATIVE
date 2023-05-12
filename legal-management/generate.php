<?php
define('FPDF_FONTPATH', '../create/font');
require('fpdf.php');

class PDF extends FPDF
{
    
    function Details($t, $a){
        $s = 'Complaint';
        $k = 'fpdf, pdf';
        $c = 'www.lulan-tnvs.com';

        $this->SetTitle($t);
        $this->SetAuthor($a);
        $this->SetSubject($s);
        $this->SetKeywords($k);
        $this->SetCreator($c);
    }

    function Header(){

        // $this->Image('https://administrative.lulan-tnvs.com/assets/images/mainlogo.png',10,10,20,20,'PNG');
        $this->Image('../create/mainlogo.png',10,10,20,20,'PNG');

        //name ng company, ewan ko
        $this->SetFont('Arial','B',20);
        $this->SetX(35);
        $this->Cell(0,10,'Lulan Inc.',0,1,'L');

        //details ng ano, ng company, ewan ko
        $this->SetFont('Arial','',12);
        $this->SetX(35);
        $this->MultiCell(0,5,'Address: Novaliches, Quezon City, Philippines 1123'."\n".'Website: www.lulan-tnvs.com',0,'L',false);

        //linya, obvious ba ?
        $this->Line(10,35,$this->GetPageWidth()-10,35);

        // parang <br>
        $this->Ln(10);

        //para sa date sa taas
        // date_default_timezone_set('Asia/Manila');
        // $currentdate = date("F j, Y  g:i A");
        // $this->SetFont('Arial','',10);
        // $this->SetXY(10,0);
        // $this->Cell(0,10,$currentdate,0,1,'R');
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
    }

    function ifCivil(){
        $this->SetFont('Times','B',24);
        $this->SetXY(10,40);
        $this->Cell(0,10,'Civil Case',0,1,'C');
    }

    function ifCriminal(){
        $this->SetFont('Times','B',24);
        $this->SetXY(10,40);
        $this->Cell(0,10,'Criminal Case',0,1,'C');
    }

    function CivilBody($case_author, $def_name, $def_pos, $civil_c_o_a, $plain_name, $plain_pos, $fb, $coa){
        $currentdate = date("F j, Y");
        $this->SetXY(10,50);
        $this->SetFont('Arial','',12);
        $this->Cell(0,10,'Date: '.$currentdate,0,1,'L');
        $this->Cell(0,10,'RE: Civil Case Complaint $casenumber',0,1,'L');
        $this->MultiCell(0,5,'We are Lulan Inc., a Transport Network Vehicle Service with its registered office at Quezon City. We bring this complaint against you '.$def_name.', for '.$civil_c_o_a,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,$plain_name.' {hereinafter referred to as the "Plaintiff"} is a '.$plain_pos.'. The Defendant, '.$def_name.', (hereinafter referred to as the "Defendant") is a '.$def_pos.' and is subject to the jurisdiction of this court.',0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'This court has jurisdiction over the parties and the subject matter of this lawsuit. Venue is proper in this case because the events giving rise to the lawsuit occurred within the jurisdiction of this court, and/or the defendant(s) reside or have a business presence within the geographic boundaries of this court\'s venue.',0,'L',false);
        $this->Ln();
 
        $this->MultiCell(0,5,$fb,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,$coa,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'The Plaintiff respectfully requests that the Court enter judgement against the Defendant for the following:'."\n\n".'[Specify the specific relief sought, such as damages, injunction, specific performance, or other relief.]',0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'The Plaintiff hereby demands a trial by jury on all issues so triable.',0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'WHEREFORE, Plaintiff prays that the Court enter judgment against the Defendant and award Plaintiff all relief as the Court deems just and proper, including costs of this action.',0,'L',false);
        $this->Ln();

        $this->SetXY(10,$this->GetPageHeight()-65);
        $this->MultiCell(0,5,'Respectfully submitted,'."\n\n".'Lulan Inc.'."\n\n".'By: [name ng legal manager] '."\n".$case_author."\n".'Quezon City, Philippines 1123'."\n".'legal@lulan.com',0,'R',false);
        $this->Ln();
    }

    function CriminalBody($case_author, $def_name, $def_pos, $crim_c_o_c, $plain_name, $plain_pos, $fb, $crim_off, $evidence){
        $currentdate = date("F j, Y");
        $this->SetXY(10,50);
        $this->SetFont('Arial','',12);
        $this->Cell(0,10,'Date: '.$currentdate,0,1,'L');
        $this->Cell(0,10,'RE: Criminal Case Complaint $casenumber',0,1,'L');
        $this->MultiCell(0,5,'We are Lulan Inc., a Transport Network Vehicle Service with its registered office at Quezon City. We bring this complaint against '.$def_name.', for '.$crim_c_o_c,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,$plain_name.' {hereinafter referred to as the "Plaintiff"} is a '.$plain_pos.'. The Defendant, '.$def_name.', (hereinafter referred to as the "Defendant") is a '.$def_pos.' and is subject to the jurisdiction of this court.',0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'This court has jurisdiction over the parties and the subject matter of this lawsuit. Venue is proper in this case because the events giving rise to the lawsuit occurred within the jurisdiction of this court, and/or the defendant(s) reside or have a business presence within the geographic boundaries of this court\'s venue.',0,'L',false);
        $this->Ln();
 
        $this->MultiCell(0,5,$fb,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,$crim_off,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,$evidence,0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'The Plaintiff respectfully requests that the Court enter judgement against the Defendant for the following:'."\n\n".'[Specify the specific relief sought, such as damages, injunction, specific performance, or other relief.]',0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'The Plaintiff hereby demands a trial by jury on all issues so triable.',0,'L',false);
        $this->Ln();

        $this->MultiCell(0,5,'WHEREFORE, Plaintiff prays that the Court enter judgment against the Defendant and award Plaintiff all relief as the Court deems just and proper, including costs of this action.',0,'L',false);
        $this->Ln();

        $this->SetXY(10,$this->GetPageHeight()-65);
        $this->MultiCell(0,5,'Respectfully submitted,'."\n\n".'Lulan Inc.'."\n\n".'By: [name ng legal manager] '."\n".$case_author."\n".'Quezon City, Philippines 1123'."\n".'legal@lulan.com',0,'R',false);
        $this->Ln();
    }
}

date_default_timezone_set('Asia/Manila');

// dito yung eklabush ng file
$orientation = $_POST['pdf_orientation'];
$size = $_POST['pdf_size'];
$pdf = new PDF($orientation,'mm',$size);

$pdf->AliasNbPages();

// dito na detalye
$author = 'Legal Manager';
$title = $_POST['pdf_title'];
$pdf->Details($title, $author);

//dito na new page
$pdf->AddPage();

$FB = $_POST['factual-background'];
$COA = $_POST['legal-grounds'];
$CO = $_POST['criminal-offense'];

$defendant_name = $_POST['defendant-name'];
$defendant_position = $_POST['defendant-position'];
$cause_of_action = $_POST['cause-of-action'];
$cause_of_crime = $_POST['cause-of-crime'];

$plaintiff_name = $_POST['plaintiff-name'];
$plaintiff_position = $_POST['plaintiff-position'];

$CE = $_POST['crim-evidence'];



$caseType = $_POST['case'];
if ($caseType == 1) {
    $pdf->ifCivil();
    //CivilBody($case_author, $def_name, $def_pos, $civil_c_o_a, $plain_name, $plain_pos, $fb, $coa)
    $pdf->CivilBody($author, $defendant_name, $defendant_position, $cause_of_action, $plaintiff_name, $plaintiff_position, $FB, $COA);
} 
else if ($caseType == 2){
    $pdf->ifCriminal();
    //CriminalBody($case_author, $def_name, $def_pos, $crim_c_o_c, $plain_name, $plain_pos, $fb, $coc, $evidence)
    $pdf->CriminalBody($author, $defendant_name, $defendant_position, $cause_of_crime, $plaintiff_name, $plaintiff_position, $FB, $CO, $CE );
}


$pdf->Output('I',$title.'.pdf',true);
// $pdf->Output('F','/home/administrative.lulan-tnvs.com/public_html/create/'.$title.'.pdf',true);
?>

