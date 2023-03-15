<?php
require 'fpdf185/fpdf.php';

class PDF extends FPDF
{
    function Footer() 
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,utf8_decode('Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas'),'T',0,'C');
    }
    
    function Header()
    {
        $this->SetFont('Arial','B',10);
        $this->Cell(35,25,'',0,0,'C',$this->Image('img/banpru.jpg', 10, 5, 198));
        $this->Line(10,50,205,50);
        $this->Text(155,56,utf8_decode('Clave del trabajo: '));
        $this->Text(10,62,utf8_decode('Estimado(s):'));
        $this->Text(10,95,utf8_decode('Tenemos el agrado de comunicarle (s) que su Resumen del Cartel:'));
        $this->Text(10,115,utf8_decode('Presentado para este congreso, ha sido ACEPTADO.'));
        $this->Text(10,120,utf8_decode('El comité evaluador le (s) solicita:'));

        $this->Text(10,130,utf8_decode('1 - Consultar los lineamientos de presentación del cartel.'));
        $this->Text(10,135,utf8_decode('http://congresomatematicas.cuautitlan2.unam.mx/instrucciones_cartel.php'));
        $this->Text(10,140,utf8_decode('2 - Enviar su cartel en formato pdf al correo: martha_lurrutia@yahoo.com.mx.'));
        $this->Text(10,145,utf8_decode('3 - Crear un vídeo de exposición del cartel máximo de 5 minutos en formato mp4.'));
        $this->Text(10,150,utf8_decode('4 - Enviar su vídeo al correo: martha_lurrutia@yahoo.com.mx.'));
        $this->Text(10,155,utf8_decode('5 - La recepción de carteles y videos de exposición será hasta el día 21 de Marzo'));
        $this->Text(10,160,utf8_decode('6 - Realizar el pago correspondiente.'));


      
        
        $this->Text(10,165,utf8_decode('Sin más por el momento, quedamos de usted.'));
        $this->Text(10,180,utf8_decode('Atentamente:'));
        $this->Text(20,185,utf8_decode('El Comite Organizador del Evento'));
        $this->Text(20,190,utf8_decode('"Por mi Raza Hablará el Espíritu"'));
        
        $this->Ln(25);
        
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AddPage('P', 'Letter'); 
$pdf->SetFont('Times','',12);
 
$d = date("j-m-Y");  // Fecha actual
$h = date("H:i");  // Hora actual en 24 hr

$nameP = "Baltazar Balderas Jonathan";
$idWork = "123000123";
$titulo = "UNIVERSIDAD NACIONAL AUTONOMA DE MEXICO";


$pdf ->Text(185,56, utf8_decode($idWork)); 
$pdf -> SetXY(10,65);
$pdf -> MultiCell(80,5, utf8_decode($nameP),0,'L');
$pdf -> SetXY(10,98);
$pdf ->MultiCell(0,3, utf8_decode($titulo),0,'L');



$type = '/CartasAceptadas';
$Name = '/Hola41';
$ruta = $type .$Name . '.pdf';

$pdf ->SetXY(65,240);
$pdf ->MultiCell(0,3, utf8_decode('Cuautitlán Izcalli, Edo. de México. '.$d.'  '.$h),0, 'L');

$file = $pdf->Output('', 'S');
$pdf->Output('F', 'Cartas/'.$ruta);

require './enviarEmail.php';
//Envio de correo
    $email = 'jonathan.baltazar85@comunidad.unam.mx';
    $subject = "Evaluación del trabajo";


    //Cuerpo del correo
    $body = "CONGRESO INTERNACIONAL SOBRE LA ENSEÑANZA Y APLICACIÓN DE LAS MATEMÁTICAS \nFACULTAD DE ESTUDIOS SUPERIORES CUAUTITLÁN \n\nSU PONENCIA: {$tittle} A SIDO {$Final}. \n\nPOR FAVOR ENTRAR EN LA PÁGINA WEB PARA MÁS INFORMACIÓN.";


$filePdf = $file;
$pdfName = "prueba.pdf";

    sendEmailAttachment($email, $subject, $body, $filePdf, $pdfName); 


?>