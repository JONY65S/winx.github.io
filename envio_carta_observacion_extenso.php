<?

//la version 5.1.2 puede hacer el envio de pdf correctamente
//la vr 2.0.0 de phpmailer
require("correo/class.phpmailer.php");
include("class.smtp.php");

//configuracion de la clase phpmailer para envio de correo utilizando
//SMT 
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = USUARIO_CORREO;
$mail->Password = CONTRASENA_CORREO;

///contenifdo del correro electronico y configuracion de la cuenta 
/// para envio de correo
$mail->From = USUARIO_CORREO;
$mail->FromName = "Congreso Internacional de Matemáticas";
$mail->Subject = "Evaluación trabajo extenso";
//$mail->AltBody = "Te confirmamos que hemos recibido tu resumen ";

//mensaje en html 
$mail->MsgHTML("Le informamos que el Comité Evaluador ha evaluado su trabajo extenso, determinando que debe corregirse en uno o mas aspectos.<br>
				<br>El documento PDF adjunto en éste correo contiene las observaciones y comentarios del Comité sobre éstos aspectos que deberá 
            corregir en su trabajo extenso, para ser sometido a una nueva evaluación y pueda subirlo nuevamente.");
//direccion de envio

while ($row_correo_usuario2 = mysqli_fetch_assoc($r_correo_usuario)){
    //echo " <br> email : ".$row_correo_usuario2["email"];
    $mail->AddAddress($row_correo_usuario2["email"], $row_correo_usuario2["email"]);
  }



///agregar pdf solo utilizar menos de 3megas 
//ya que de lo contrario el archivo se puede corromper
$mail->AddAttachment('cartas/cartas_extensos/'.$id_ponencia.'.pdf');
$mail->IsHTML(true);

$mail->CharSet = 'UTF-8';

if(!$mail->Send()) {
  //si hay un error en el envio de correo se informa
  echo "Error: " . $mail->ErrorInfo;
  //while ($fila = mysql_fetch_assoc($resultado)) {
  while ($row_correo_usuario2 = mysqli_fetch_assoc($r_correo_usuario)){
    echo " <br> email : ".$row_correo_usuario2["email"];
  }
} else {
  echo "<br>Se ha enviado un correo al autor informándole del resultado de la evaluación de su trabajo.<br>";
}

?>
