<?php
	// Conexão
	require_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

	// Sessão
	session_start();

	// Botão enviar
	if(isset($_POST['btn-entrar'])):
		$erros = array();
		$usuario = mysqli_escape_string($connect, $_POST['login']);
		$senha = mysqli_escape_string($connect, $_POST['senha']);

		if(isset($_POST['lembrar-senha'])):

			setcookie('usuario', $usuario, time()+3600);
			setcookie('senha', md5($senha), time()+3600);
		endif;

		if(empty($usuario) or empty($senha)):
			$erros[] = "<div class='alert alert-danger' role='alert'> O campo login/senha precisa ser preenchido </div>";
		else:
			// 105 OR 1=1 
			// 1; DROP TABLE teste

			$sql = "SELECT USUARIO FROM funcionario WHERE USUARIO = '$usuario'";
			$resultado = mysqli_query($connect, $sql);		

			if(mysqli_num_rows($resultado) > 0):
			$senha = md5($senha);       
			$sql = "SELECT * FROM funcionario WHERE USUARIO = '$usuario' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);


				if(mysqli_num_rows($resultado) == 1):
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($connect);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['COD_FUNCIONARIO'];
					header('Location: ../pages/dashboard.php');
				else:
					$erros[] = "<div class='alert alert-danger' role='alert'> Usuário e senha não conferem </div>";
				endif;

			else:
				$erros[] = "<div class='alert alert-danger' role='alert'> Usuário inexistente </div>";
			endif;

			if($resultado == 1){
				$_SESSION['usuariologado'] = $usuario;
				$_SESSION['senhalogado'] = $senha;
				$_SESSION['timeout'] = time();

			}

		endif;

	endif;
	
	?>