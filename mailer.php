<?php 

 require_once("vendor/autoload.php");

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 $assunto = strip_tags($_POST['assunto']);
 $email = strip_tags($_POST['email']);
 $mensagem = strip_tags($_POST['mensagem']);

 $mail = new PHPMailer();
 $mail->IsSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
 $mail->True;
 $mail->Host = "smtp.live.com"; // Servidor SMTP
 $mail->Port = 587; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "naoresponda-andremoura@hotmail.com"; // SMTP username
 $mail->Password = "Trocar123@"; // SMTP password
 $mail->From = "naoresponda-andremoura@hotmail.com"; // From
 $mail->FromName = "Nova mensagem via website" ; // Nome de quem envia o email
 $mail->AddAddress("cadugimenes9@gmail.com", "Novo E-mail"); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<b>AVISO: Este é um e-mail automatico não responda.</b>
 <br/><br/><div style="color: blue"><b style="color: #000">Cliente e-mail: </b>'.$email.'</div><br /><b>Assunto : </b>'.$assunto.'<br /><br />'. $mensagem . '<br /><br /> Enviado em: '.date_create()->format('d/m/Y H:i:s').'' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

//  $mail->SMTPOptions = array(
//    'ssl' => [
//        'verify_peer' => true,
//        'verify_depth' => 3,
//        'allow_self_signed' => true,
//        'peer_name' => $mail->Host, //Mesmo endereço do HOST
//        'cafile' => '/etc/ssl/ca_cert.pem',
//    ],
// );

if(!$mail->Send()) // Envia o email
 { 
 echo "Houve um problema ao enviar a mensagem... Redirecionando...";
 }else {
    header("Location: http://" . $_SERVER['SERVER_NAME']); 
  
    exit; 
 }
 ?>