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
$mail->Subject = "Evaluación resumen";
//$mail->AltBody = "Te confirmamos que hemos recibido tu resumen ";

//mensaje en html 
$mail->MsgHTML("Le informamos con agrado que el Comité Evaluador ha evaluado el RESUMEN de su trabajo y éste ha sido <b>ACEPTADO</b> 
	            para formar parte del Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas.<br><br>
	            Para que sea programada su ponencia es necesario realizar el extenso y subirlo al sitio del congreso, 
	            por ningún motivo se reciben trabajos por otro medio que no sea el sitio del evento: <br>
	            http://congresomatematicas.cuautitlan2.unam.mx/ 
                <br><br>
                En caso de no realizar el extenso no podrá ser programada su ponencia.<br>
                Alumnos de educación media, media superior y superior que participan en las ponencias orales, carteles o talleres no podran ser expositores o ponentes.<br>

				<br>Se adjunta en éste correo la carta de aceptacion de su trabajo.<br><br>
				Esperamos contar con su participación<br>
				Atentamente: El comite organizador ");
//direccon de envio
while ($row_correo_usuario2 = mysqli_fetch_assoc($r_correo_usuario)){
    $mail->AddAddress($row_correo_usuario2["email"], $row_correo_usuario2["email"]);
  }

///agregar pdf solo utilizar menos de 3megas 
//ya que de lo contrario el archivo se puede corromper
$mail->AddAttachment('cartas/'.$id_trabajo.'.pdf');
$mail->IsHTML(true);

$mail->CharSet = 'UTF-8';

if(!$mail->Send()) {
//si hay un error en el envio de correo se informa

echo "Error: " . $mail->ErrorInfo;
} else {
echo "<br>Se ha enviado un correo al autor informándole del resultado de la evaluación de su trabajo.<br>";
}

?>
