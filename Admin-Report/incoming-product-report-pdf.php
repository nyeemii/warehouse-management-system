<?php
    session_start();
    $username = $_SESSION['username'];
    $date = date('m/d/Y');
    $_SESSION['date'] = $date;

    require('../fpdf183/fpdf.php');
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'warehouse_management_system');


    class PDF extends FPDF {
        function Header(){
            $this -> SetFont('Helvetica', 'B', 25);
            $this->SetTextColor(40, 181, 181);
            $this -> Cell(0, 20, 'Warehouse Management System', 0, 0, 'C');
            $this->Ln();
            $this -> SetFont('Helvetica', '', 12);
            $this->SetTextColor(40, 181, 181);
            $this -> Cell(0, 0, 'Brgy San isidro Block 5 Lot 46 Brittany 1, Antipolo City', 0, 0, 'C');
            $this->Ln();
            $this -> SetFont('Helvetica', 'B', 15);
            $this -> Cell(0, 10, 'Incoming Product Report', 0, 2, 'C');
            $this->Ln(5);

            $this->SetFont('Arial','B',10);
            $this->SetDrawColor(180,180,255);
            $this->Cell(30,10,'Date',1,0,'C');
            $this->Cell(35,10,'Brand Name',1,0,'C');
            $this->Cell(35,10,'Type',1,0,'C');
            $this->Cell(40,10,'Model',1,0,'C');
            $this->Cell(25,10,'Price',1,0,'C');
            $this->Cell(25,10,'Quantity',1,1,'C');
        }
        function Footer(){
            $this->Cell(190,0,'','T',1,'',true);

            $this->SetY(-15);

            $this->SetFont('Arial','',8);

            $this->Cell(0,10,"Prepared By: {$_SESSION['username']}",0,0,'L');
			$this->Cell(0,10,"Date prepared: {$_SESSION['date']}",0,1,'R');
			$this->Ln(-5);
			$this->Cell(0,10,'Page'.$this->PageNo()." / {pages}",0,0,'C');
        }
    }

    $pdf = new PDF('P','mm','A4');

    $pdf->AliasNbPages('{pages}');

    $pdf->SetAutoPageBreak(true,15);
    $pdf->AddPage();

    $pdf->SetFont('Arial','',9);
    $pdf->SetDrawColor(180,180,255);

    $query=mysqli_query($con,"select * from tbl_incoming_product");
    while($data=mysqli_fetch_array($query)){
        $pdf->Cell(30,5,$data['date'],'LRT',0);
        $pdf->Cell(35,5,$data['brandName'],'LRT',0);
        $pdf->Cell(35,5,$data['type'],'LRT',0);
        $pdf->Cell(40,5,$data['model'],'LRT',0);
        $pdf->Cell(25,5,"P".$data['price'],'LRT',0);
        $pdf->Cell(25,5,$data['quantity'],'LRT',1);
    }
    $pdf->Output();
?>
