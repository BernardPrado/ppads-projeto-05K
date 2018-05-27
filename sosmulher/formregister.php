<?php
// Inclui o arquivo de configuração
include('login/config.php');

// Variavél para preencher o erro (se existir)
$erro = false;

// Apaga usuários
if ( isset( $_GET['del'] ) ) {
    // Delete de cara (sem confirmação)
    $pdo_insere = $conexao_pdo->prepare('DELETE FROM usuarios WHERE user_id=?');
    $pdo_insere->execute( array( (int)$_GET['del'] ) );
    
    // Redireciona para o index.php
    //header('location: index.php');
}

// Verifica se algo foi postado para publicar ou editar
if ( isset( $_POST ) && ! empty( $_POST ) ) {
    // Cria as variáveis
    foreach ( $_POST as $chave => $valor ) {
        $$chave = $valor;
        
        // Verifica se existe algum campo em branco
        if ( empty ( $valor ) ) {
            if (empty( $form_emergency)){
                $form_emergency = " ";
            }

            if (empty( $form_telemergency)){
                $form_telemergency = " ";
            }
            // Preenche o erro
        }
    }
    
    // Verifica se as variáveis foram configuradas
    if ( empty( $form_usuario ) || empty( $form_senha ) || empty( $form_nome ) || empty( $form_telefone) ) {
        $erro = 'Existem campos em branco.';
    }
    
    // Verifica se o usuário existe
    $pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios WHERE user = ?');
    $pdo_verifica->execute( array( $form_usuario ) );
    
    // Captura os dados da linha
    $user_id = $pdo_verifica->fetch();
    $user_id = $user_id['user_id'];
    // Verifica se tem algum erro
    if ( ! $erro ) {
        // Se o usuário existir, atualiza
        if ( !empty( $user_id ) ) {
            //echo "<script>alert('Usuário já cadastrado');</script>";
            echo "<script>alert('Usuário já existe em nosso Sistema');</script>";
            //die();
            //$pdo_insere = $conexao_pdo->prepare('UPDATE usuarios SET user=?, user_password=?, user_name=? WHERE user_id=?');
            //$pdo_insere->execute( array( $form_usuario,  MD5( $form_senha ), $form_nome, $user_id ) );
            
        // Se o usuário não existir, cadastra novo
        } else {
            $pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (user, user_password, user_name, user_phone, user_emergency, user_telemergency) VALUES (?, ?, ?, ?, ?, ?)');
            $pdo_insere->execute( array( $form_usuario, MD5( $form_senha ), $form_nome, $form_telefone, $form_emergency, $form_telemergency ) );
            echo"<script language='javascript' type='text/javascript'>alert('Usuário criado com sucesso!');</script>";
            //die();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sos</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="form_container">
                    <h2>Cadastre suas informações abaixo</h2> 
					<p id="obs"> Obs: Também é possivel cadastrar as informações de uma pessoa de confiança.</p>
                    <!-- <form role="form" method="post" id="reused_form"> -->
                        <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Nome:</label>
                                <input type="text" class="form-control" id="name" name="form_nome" required>
                            </div>
							<div class="col-sm-6 form-group">
                                <label for="telefone"> Telefone:</label>
                                <input type="text" class="form-control" id="name" name="form_telefone" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="form_usuario" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="senha"> Senha:</label>
                                <input type="password" class="form-control" id="email" name="form_senha" required>
                            </div>

							<div class="col-sm-6 form-group">
                                <label for="telefoneemergency"> Telefone de Emergência:</label>
                                <input type="text" class="form-control" id="email" name="form_telemergency">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="emergency"> Email de Emergência:</label>
                                <input type="email" class="form-control" id="email" name="form_emergency">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-default pull-right" >Enviar &rarr;</button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>

    </body>
</html>