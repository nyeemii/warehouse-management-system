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
            $this -> Cell(0, 10, 'Attendance Report', 0, 2, 'C');
            $this->Ln(5);

            $this->SetFont('Arial','B',10);
            $this->SetDrawColor(180,180,255);
            $this->Cell(40,10,'Time and Date',1,0,'C');
            $this->Cell(42,10,'Staff',1,0,'C');
            $this->Cell(40,10,'Type of Transaction',1,0,'C');
            $this->Cell(25,10,'Brand',1,0,'C');
            $this->Cell(25,10,'Type',1,0,'C');
            $this->Cell(18,10,'Quantity',1,1,'C');
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

    $pdf->SetFont('Arial','',8);
    $pdf->SetDrawColor(180,180,255);

    $query=mysqli_query($con,"SELECT * FROM tb_daily_attendance");
    while($data=mysqli_fetch_array($query)){
        $pdf->Cell(40,5,$data['time'] . " - " . $data['date'],'LRT',0);
        $pdf->Cell(42,5,$data['staff'],'LRT',0);
        $pdf->Cell(40,5,$data['typeOfTransaction'],'LRT',0);
        $pdf->Cell(25,5,$data['brand'],'LRT',0);
        $pdf->Cell(25,5,$data['type'],'LRT',0);
        $pdf->Cell(18,5,$data['quantity'],'LRT',1);
    }
    $pdf->Output();
?>
