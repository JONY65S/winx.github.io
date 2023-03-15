<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=evaVM.php">
<?php

    include 'pgsqlConexion.php';
    include 'credentials.php';
    require './enviarEmail.php';
    require 'fpdf185/fpdf.php';

    $workId = $_POST['work00'];
    $evaId = $_POST['eva00'];
    $tittle = $_POST['tit00'];
    
    $aspE0 = $_POST['aspEva0'];
    $aspE1 = $_POST['aspEva1'];
    $aspE2 = $_POST['aspEva2'];
    $aspE3 = $_POST['aspEva3'];
    $aspE4 = $_POST['aspEva4'];
    $queryC0=("UPDATE evaluacion_video SET titulo='$aspE0', contenido='$aspE1', duracion='$aspE2', calidad='$aspE3', observaciones='$aspE4' where evaluacion_id='$evaId'");
    $consultaC0=pg_query($conexion,$queryC0);

     $query06=("select * from ponente_trabajos, usuario where ponente_id=id_usuario and trabajos_id='$workId'");
    $consulta06=pg_query($conexion,$query06);
    $queryNew06=pg_fetch_array($consulta06);
    $userEmail=$queryNew06["usuario"];
    $nameUser=$queryNew06["nombre_usuario"];
    $apUser=$queryNew06["apellido_usuario"];


    echo '<br>';
    $Comp='true';




    if($aspE0 == $Comp and $aspE1 == $Comp and $aspE2 == $Comp and $aspE3 == $Comp){
        $Final = 'AUTORIZADA'; 
        $queryTrueU=("UPDATE evaluacion_trabajos set estado='ACEPTADO' where evaluacion_id='$evaId'");
        $consultaTrueU=pg_query($conexion,$queryTrueU);
        
        
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
                $this->Text(10,95,utf8_decode('Tenemos el agrado de comunicarle (s) que su Video de la ponencia:'));
                $this->Text(10,115,utf8_decode('Presentado para este congreso, ha sido ACEPTADO.'));
                $this->Text(10,120,utf8_decode('El comité evaluador le (s) solicita:'));

                $this->Text(10,130,utf8_decode('1 - Consultar los lineamientos de presentación de la ponencia.'));
                $this->Text(10,135,utf8_decode('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/index.php'));
                $this->Text(10,140,utf8_decode('2 - Por favor estar atento al cronograma del evento.'));
                




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

        $v1 = $workId;
        $v2 = $apUser . ' ' . $nameUser;
        $v3 = $tittle;


        $pdf ->Text(185,56, utf8_decode($v1)); 
        $pdf -> SetXY(10,65);
        $pdf -> MultiCell(80,5, utf8_decode($v2),0,'L');
        $pdf -> SetXY(10,98);
        $pdf ->MultiCell(0,3, utf8_decode($v3),0,'L');



        $type = '/CartasAceptadas';
        $Name = '/VP_'.$v1;
        $ruta = $type .$Name . '.pdf';

        $pdf ->SetXY(65,240);
        $pdf ->MultiCell(0,3, utf8_decode('Cuautitlán Izcalli, Edo. de México. '.$d.'  '.$h),0, 'L');

        $file = $pdf->Output('', 'S');
        $pdf->Output('F', 'Cartas/'.$ruta);


        $body = "Le informamos con agrado que el Comité Evaluador ha evaluado su trabajo y éste ha sido ACEPTADO \nPara formar parte del Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas. \n\nRecuerda estar atento al cronograma del evento, para completar el proceso de registro de su trabajo {$tittle} . \n\n Puede consultar la fechas en: \nhttps://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/indexSesion.php \nPor ningún motivo se reciben trabajos por otro medio que no sea el sitio del evento: \nhttps://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/index.php \n\nEn caso de no cumplir con el calendario del evento, no podran ser presentadas sus propuestas. \nAlumnos de educación media, media superior y superior que participan en las ponencias orales, carteles o talleres no podran ser expositores o ponentes. \nSe adjunta en éste correo la carta de aceptacion de su trabajo. \n\nEsperamos contar con su participación \nAtentamente: El comite organizador. ";



        
        
        
    }else{
        $Final = 'RECHAZADA';
        $queryFalseU=("UPDATE evaluacion_trabajos set estado='POR CORREGIR' where evaluacion_id='$evaId'");
        $consultaFalseU=pg_query($conexion,$queryFalseU);
        
        
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
                $this->Text(10,95,utf8_decode('Por este medio le (s) comunicamos que su  PROPUESTA:'));
                $this->Text(10,110,utf8_decode('Presentado para este congreso, ha sido RECHAZADA.'));
                $this->Text(10,115,utf8_decode('Los motivos que originan la decisión son los siguientes:'));

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

        $v1 = $workId;
        $v2 = $apUser . ' ' . $nameUser;
        $v3 = $tittle;
        $v4 = $aspE4;

        $pdf ->Text(185,56, utf8_decode($v1)); 
        $pdf -> SetXY(10,65);
        $pdf -> MultiCell(80,5, utf8_decode($v2),0,'L');
        $pdf -> SetXY(10,98);
        $pdf ->MultiCell(0,3, utf8_decode($v3),0,'L');
        $pdf -> SetXY(10,118);
        $pdf ->MultiCell(0,3,utf8_decode($v4),0,'L');


        $type = '/CartasRechazadas';
        $Name = '/VP_'.$v1;
        $ruta = $type .$Name . '.pdf';

        $pdf ->SetXY(65,240);
        $pdf ->MultiCell(0,3, utf8_decode('Cuautitlán Izcalli, Edo. de México. '.$d.'  '.$h),0, 'L');

        $file = $pdf->Output('', 'S');
        $pdf->Output('F', 'Cartas/'.$ruta);
        
        $body = "Le informamos que el Comité Evaluador ha evaluado su propuesta titulada {$tittle}.\nDeterminando que debe corregirse en uno o mas aspectos.\nEl documento PDF adjunto en éste correo contiene las observaciones y comentarios del Comité sobre éstos aspectos que deberá corregir en su trabajo, para ser sometido a una nueva evaluación y pueda subirlo nuevamente.";
        
        
    }



    

    //Envio de correo
    $email = $userEmail;
    $subject = "Evaluación del trabajo {$workId}";

    //Cuerpo del correo
    
  
    $filePdf = $file;
    $pdfName = "VP_" . $workId . $fechaid . ".pdf";

    sendEmailAttachment($email, $subject, $body, $filePdf, $pdfName); 
        
?>

<script>
    var varTit = "<?php echo $tittle; ?>";
    var varFin = "<?php echo $Final; ?>";
    alert("EL VIDEO " + varTit + " A SIDO " + varFin + " ¡GRACIAS POR EVALUAR!");
</script>