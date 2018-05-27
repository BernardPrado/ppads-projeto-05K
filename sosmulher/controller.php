<?php
// Inclui o arquivo de configuração
include('login/config.php');

// Inclui o arquivo de verificação de login
include('login/verifica_login.php');

// Se não for permitido acesso nenhum ao arquivo
// Inclua o trecho abaixo, ele redireciona o usuário para 
// o formulário de login
//include('login/redirect.php');
if($_SESSION['login_erro']){
	echo "<script>alert('Usuário ou senha inválido. Favor tente novamente');window.location.href='index.php'</script>";
	die();
}
ini_set( 'display_errors', true );
error_reporting( E_ALL );

header("Location: index.php");
exit;
//header('Location: https://sosmulher.000webhostapp.com/');

?>