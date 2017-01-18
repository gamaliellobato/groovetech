<?php

//Librerías para el envío de mail
include_once('class.phpmailer.php');
include_once('class.smtp.php');

//Recibir todos los parámetros del formulario
$para = "gamaliellobato@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$comen = $_POST['mensaje'];
$mensaje = '<html><body>
            <center>
              <h1>Groove</h1>
            </center>
            <br>
            <br>
            <center>
              <img src="" alt="icono">
            </center>


            <br>
            <br>
              
            <center>
              <span><p>Nombre:'.$nombre.'</p></span>

              <br>

              <span><p>Email:&nbsp;'.$email.'</p></span>

              <br>

              <span><p>Telefono:'.$tel.'</p></span>

              <br>

              <span><p>Mensaje:'.$comen.'</p></span>
            </center>

            </body></html>
    ';



$asunto = "Nuevo mensaje de red convergencia";

//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;

//Nuestra cuenta
$mail->Username ='gamaliellobato@gmail.com';
$mail->Password = 'xuqrzmzuxdcmzcfn';

//Agregar destinatario
$mail->AddAddress($para);
$mail->Subject = $asunto;
//$mail->AltBody = $nombre;
//$mail->AltBody = $email;
//$mail->Body = $tel;
$mail->Body = $mensaje;
//Para adjuntar archivo
$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
$mail->MsgHTML($mensaje);

//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
	echo'<script type="text/javascript">
			alert("Enviado Correctamente");
		 </script>';
}
else{
	echo'<script type="text/javascript">
			alert("NO ENVIADO, intentar de nuevo");
		 </script>';
}
?>


