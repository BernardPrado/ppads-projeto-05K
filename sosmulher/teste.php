<?php

// $html_body = file_get_contents('assets/index.html');
// $nome = 'João Pedro Rodrigues';
// $email = 'teste@teste.com';
// $telefone = '11954384284';
// $mensagem = 'Rua Simão Lopes, 833 - São Paulo';
// //echo $html_body;
// $html_body = str_replace('$nome', $nome, $html_body);
// $html_body = str_replace('$email', $email, $html_body);
// $html_body = str_replace('$telefone', $telefone, $html_body);
// $html_body = str_replace('$mensagem', $mensagem, $html_body);

$html_body = "
<html>
<head>
<title>HTML email</title>
</head>
<body style='background-image: url(6845.jpg); background-repeat:no-repeat;'>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";


echo $html_body;

?>