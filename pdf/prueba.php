<?php

require('fpdf.php');

class PDF extends FPDF {

// Cabecera de página
function Header() {

    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'personas',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30,10,'nombre',1,0,'C', 0);
    $this->Cell(30,10,'apellido',1,0,'C', 0);
    $this->Cell(30,10,'usuario',1,0,'C', 0);
    $this->Cell(35,10,'email',1,0,'C', 0);
    $this->Cell(30,10, utf8_decode('constraseña'),1,0,'C', 0);
    $this->Cell(30,10,'telefono',1,0,'C', 0);

    $this->Ln(10);

   
}

// Pie de página
function Footer() {

    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cone.php';

$consulta = "SELECT * FROM persona";
$resultado = $mysqli->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

while($row = $resultado->fetch_assoc()) {

    $pdf->cell(30 , 10 , $row['nombre'] , 1 , 0 , 'c' , 0); 
    $pdf->cell(30 , 10 , $row['apellido'] , 1 , 0 , 'c' , 0); 
    $pdf->cell(30 , 10 , $row['usuario'] , 1 , 0 , 'c' , 0); 
    $pdf->cell(35 , 10 , $row['email'] , 1 , 0 , 'c' , 0); 
    $pdf->cell(30 , 10 , $row['constraseña'] , 1 , 0 , 'c' , 0); 
    $pdf->cell(30 , 10 , $row['telefono'] , 1 , 0 , 'c' , 0); 
    $pdf->Ln(10);
}

$pdf->Output();

?>