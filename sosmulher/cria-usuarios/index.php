<?php
// Inclui o arquivo de configuração
include('../login/config.php');

// Variavél para preencher o erro (se existir)
$erro = false;

// Apaga usuários
if ( isset( $_GET['del'] ) ) {
	// Delete de cara (sem confirmação)
	$pdo_insere = $conexao_pdo->prepare('DELETE FROM usuarios WHERE user_id=?');
	$pdo_insere->execute( array( (int)$_GET['del'] ) );
	
	// Redireciona para o index.php
	header('location: index.php');
}

// Verifica se algo foi postado para publicar ou editar
if ( isset( $_POST ) && ! empty( $_POST ) ) {
	// Cria as variáveis
	foreach ( $_POST as $chave => $valor ) {
		$$chave = $valor;
		
		// Verifica se existe algum campo em branco
		if ( empty ( $valor ) ) {
			// Preenche o erro
			$erro = 'Existem campos em branco.';
		}
	}
	
	// Verifica se as variáveis foram configuradas
	if ( empty( $form_usuario ) || empty( $form_senha ) || empty( $form_nome ) ) {
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
			echo "<script>alert('Usuário já cadastrado');</script>";
			//$pdo_insere = $conexao_pdo->prepare('UPDATE usuarios SET user=?, user_password=?, user_name=? WHERE user_id=?');
			//$pdo_insere->execute( array( $form_usuario,  MD5( $form_senha ), $form_nome, $user_id ) );
			
		// Se o usuário não existir, cadastra novo
		} else {
			$pdo_insere = $conexao_pdo->prepare('INSERT INTO usuarios (user, user_password, user_name) VALUES (?, ?, ?)');
			$pdo_insere->execute( array( $form_usuario, MD5( $form_senha ), $form_nome ) );
			echo"<script language='javascript' type='text/javascript'>alert('Usuário criado com sucesso!');window.location.href='../login.php';</script>";
		}
	}
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Login</title>
	</head>
	<body>
		<form action="" method="post">
			<table>
				<tr>
					<td>Usuário</td>
				</tr>
				<tr>
					<td><input type="text" name="form_usuario" required></td>
				</tr>
				<tr>
					<td>Senha</td>
				</tr>
				<tr>
					<td><input type="password" name="form_senha" required></td>
				</tr>
				<tr>
					<td>Nome:</td>
				</tr>
				<tr>
					<td><input type="text" name="form_nome" ></td>
				</tr>
				
				<?php if ( ! empty ( $erro ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $erro;?></td>
					</tr>
				<?php endif; ?>
				
				<tr>
					<td><input type="submit" value="Entrar"></td>
				</tr>
			</table>
		</form>
		
		<?php 
		// Mostra os usuários
		$pdo_verifica = $conexao_pdo->prepare('SELECT * FROM usuarios ORDER BY user_id DESC');
		$pdo_verifica->execute();
		?>
		
		<table border="1" cellpadding="5">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Usuário</th>
			<th>Senha Criptografada</th>
			<th>Ação</th>
		</tr>
		<?php
		while( $fetch = $pdo_verifica->fetch() ) {
			echo '<tr>';
			echo '<td>' . $fetch['user_id'] . '</td>';
			echo '<td>' . $fetch['user_name'] . '</td>';
			echo '<td>' . $fetch['user'] . '</td>';
			echo '<td>' . $fetch['user_password'] . '</td>';
			echo '<td> <a style="color:red;" href="?del=' . $fetch['user_id'] . '">Apagar</a> </td>';
			echo '</tr>';
		}
		?>
		</table>
	</body>
</html>
