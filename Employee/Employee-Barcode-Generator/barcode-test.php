<?php
    require('fpdf-barcode.php');

    $pdf = new PDF_BARCODE('P', 'mm', 'A4');

    $pdf -> AddPage();

    $number = "1234567890";
    $length = 100;
    $barcode1 =  substr(str_shuffle($number),0,$length);
    $barcode2 =  substr(str_shuffle($number),0,$length);
    $barcode3 =  substr(str_shuffle($number),0,$length);
    $barcode4 =  substr(str_shuffle($number),0,$length);
    $barcode5 =  substr(str_shuffle($number),0,$length);
    $barcode6 =  substr(str_shuffle($number),0,$length);
    $barcode7 =  substr(str_shuffle($number),0,$length);
    $barcode8 =  substr(str_shuffle($number),0,$length);
    $barcode9 =  substr(str_shuffle($number),0,$length);
    $barcode10 =  substr(str_shuffle($number),0,$length);
    $barcode11 =  substr(str_shuffle($number),0,$length);
    $barcode12 =  substr(str_shuffle($number),0,$length);
    $barcode13 =  substr(str_shuffle($number),0,$length);
    $barcode14 =  substr(str_shuffle($number),0,$length);
    $barcode15 =  substr(str_shuffle($number),0,$length);
    $barcode16 =  substr(str_shuffle($number),0,$length);
    $barcode17 =  substr(str_shuffle($number),0,$length);
    $barcode18 =  substr(str_shuffle($number),0,$length);
    $barcode19 =  substr(str_shuffle($number),0,$length);
    $barcode20 =  substr(str_shuffle($number),0,$length);

    $pdf -> UPC_A(10, 10, $barcode1, 10, 0.5, 10);
    $pdf -> UPC_A(10, 30, $barcode2, 10, 0.5, 10);
    $pdf -> UPC_A(10, 50, $barcode3, 10, 0.5, 10);
    $pdf -> UPC_A(10, 70, $barcode4, 10, 0.5, 10);
    $pdf -> UPC_A(10, 90, $barcode5, 10, 0.5, 10);
    $pdf -> UPC_A(10, 110, $barcode6, 10, 0.5, 10);
    $pdf -> UPC_A(10, 130, $barcode7, 10, 0.5, 10);
    $pdf -> UPC_A(10, 150, $barcode8, 10, 0.5, 10);
    $pdf -> UPC_A(10, 170, $barcode9, 10, 0.5, 10);
    $pdf -> UPC_A(10, 190, $barcode10, 10, 0.5, 10);

    $pdf -> UPC_A(100, 10, $barcode11, 10, 0.5, 10);
    $pdf -> UPC_A(100, 30, $barcode12, 10, 0.5, 10);
    $pdf -> UPC_A(100, 50, $barcode13, 10, 0.5, 10);
    $pdf -> UPC_A(100, 70, $barcode14, 10, 0.5, 10);
    $pdf -> UPC_A(100, 90, $barcode15, 10, 0.5, 10);
    $pdf -> UPC_A(100, 110, $barcode16, 10, 0.5, 10);
    $pdf -> UPC_A(100, 130, $barcode17, 10, 0.5, 10);
    $pdf -> UPC_A(100, 150, $barcode18, 10, 0.5, 10);
    $pdf -> UPC_A(100, 170, $barcode19, 10, 0.5, 10);
    $pdf -> UPC_A(100, 190, $barcode20, 10, 0.5, 10);

    $pdf -> Output();
?>