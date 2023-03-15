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
$mail->Subject = "Solicitud de revisión de trabajo - Congreso matemáticas";
//$mail->AltBody = "Te confirmamos que hemos recibido tu resumen ";

//mensaje en html 
$mail->MsgHTML("Estimado evaluador :<br> <br>
                Le informamos que existe un trabajo en el sitio del congreso de matemáticas que requiere
                ser evaluado por usted, esto es debido a que usted es miembro del comite de evaluación 
                del 'Congreso internacional sobre la enseñanza y aplicación de las matemáticas', a celebrarse en 
                la FES Cuautitlán.<br><br>
                http://congresomatematicas.cuautitlan2.unam.mx<br><br>
                Me despido de usted esperando contar con su apoyo para realizar la evaluación de manera oportura.
				        <br><br>Atentamente: <br><br>
                El comite organizador");
//direccion de envio

//while ($row_correo_usuario2 = mysqli_fetch_assoc($r_correo_usuario)){
   // echo " <br> email 2 : ".$row_correo_usuario["email"];
    $mail->AddAddress($Array_email['email'], $Array_email['email']);
 // }



///agregar pdf solo utilizar menos de 3megas 
//ya que de lo contrario el archivo se puede corromper
//$mail->AddAttachment('cartas/cartas_extensos/'.$id_ponencia.'.pdf');
$mail->IsHTML(true);

$mail->CharSet = 'UTF-8';

if(!$mail->Send()) {
  //si hay un error en el envio de correo se informa
  echo "Error: " . $mail->ErrorInfo;
  //while ($fila = mysql_fetch_assoc($resultado)) {
  //while ($row_correo_usuario2 = mysqli_fetch_assoc($r_correo_usuario)){
    
  //}
} else {
  echo "<br>Se ha enviado un correo al evaluador solicitandole la evaluación del trabajo.<br>";
  //echo " <br> email : ".$Array_email['email'];
}

?>
