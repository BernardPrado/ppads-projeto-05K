<?php

$nome = "teste";
$email = "jprodrigues.ti@gmail.com,joao.rodrigues@infinitysys.com.br";
$telefone = "11954384284";
$mensagem = "Rua Simão Lopes, 833";


$html_body = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<br>
<br>
	<img src='http://sosmulher.000webhostapp.com/6845.jpg' style='width:200px;height:100px; margin-left:320px'>
    <div style='margin: 50px 0 0 70px; font-family:MicroFLF;'>
        <h1 style='margin-left: 90px;'>ESTE É UM PEDIDO DE SOCORRO</h1>
        
        <p><strong>Esta mensagem foi enviada pela SOS Mulheres, por favor não responda esta mensagem.<br>Por favor, estou em perigo!<br><br>Nome:	$nome
		<br>Email:	$email
		<br>Telefone:	$telefone
		<br>Endereço:	$mensagem&nbsp;<br>
        </strong></p>
    </div>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
</html>
";
print_r($html_body);
die();

$destino = $email;
$assunto = "SOS Mulher - Mensagem de pedido de ajuda";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $nome <$email>";
//$headers .= "Bcc: $EmailPadrao\r\n";

//mail($destino, $assunto, $arquivo)
if(mail($destino, $assunto, $html_body, $headers)){
  echo "<br/>";
  echo "<h2 style='text-align:center;'>Email enviado com sucesso ! ";
	echo "<script>alert('Email Enviado com Sucesso!');</script>";
	print_r($html_body);
	die();
} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo $mgm;
}


?>