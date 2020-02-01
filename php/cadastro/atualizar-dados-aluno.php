<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));

//Indice sim ou nao
$ind_responsavel = filter_input(INPUT_POST, 'ind_responsavel');
//Responsavel sim
//Dados do aluno
$matricula_sim = filter_input(INPUT_POST, 'matricula_sim');
$nome_aluno = filter_input(INPUT_POST, 'nome_aluno');
$data_aluno = filter_input(INPUT_POST, 'data_aluno');
$rg_aluno = filter_input(INPUT_POST, 'rg_aluno');
$cpf_aluno = filter_input(INPUT_POST, 'cpf_aluno');
$nivel = filter_input(INPUT_POST, 'nivel');
$status = filter_input(INPUT_POST, 'status');
//Dados do responsavel
$nome_responsavel = filter_input(INPUT_POST, 'nome_responsavel');
$telefone = filter_input(INPUT_POST, 'telefone');
$cpf_responsavel = filter_input(INPUT_POST, 'cpf_responsavel');
$rg = filter_input(INPUT_POST, 'rg');
$data_responsavel = filter_input(INPUT_POST, 'data_responsavel');
$email = filter_input(INPUT_POST, 'email');
$cep = filter_input(INPUT_POST, 'cep');
$endereco = filter_input(INPUT_POST, 'endereco');
$numero = filter_input(INPUT_POST, 'numero');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');

//Responsavel não
//Dados do aluno
$matricula_nao = filter_input(INPUT_POST, 'matricula_nao');
$nome_aluno_nao = filter_input(INPUT_POST, 'nome_aluno_nao');
$telefone_nao = filter_input(INPUT_POST, 'telefone_nao');
$cpf_nao = filter_input(INPUT_POST, 'cpf_nao');
$rg_nao = filter_input(INPUT_POST, 'rg_nao');
$data_nao = filter_input(INPUT_POST, 'data_nao');
$email_nao = filter_input(INPUT_POST, 'email_nao');
$cep_nao = filter_input(INPUT_POST, 'cep_nao');
$endereco_nao = filter_input(INPUT_POST, 'endereco_nao');
$numero_nao = filter_input(INPUT_POST, 'numero_nao');
$bairro_nao = filter_input(INPUT_POST, 'bairro_nao');
$cidade_nao = filter_input(INPUT_POST, 'cidade_nao');
$estado_nao = filter_input(INPUT_POST, 'estado_nao');
$nivel_nao = filter_input(INPUT_POST, 'nivel_nao');
$status_nao = filter_input(INPUT_POST, 'status_nao');

	if($ind_responsavel == "Sim"){

		if($nivel == "Selecione a Prajied" || $nivel == "-- ADULTO --" || $nivel == "-- KIDS --"){
			$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Prajied não selecionada</div>";
			header("Location: ../../pages/atualizar-aluno.php");

		}elseif($status == "Selecione o status"){
			$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Status não selecionado</div>";
			header("Location: ../../pages/atualizar-aluno.php");
		}else{

			$result_usuario = "UPDATE aluno SET NOM_ALUNO='$nome_aluno' ,CPF='$cpf_aluno',RG='$rg_aluno',DATA='$data_aluno',NIVEL='$nivel',STATUS='$status' 
								WHERE COD_ALUNO = '$matricula_sim'";
			$resultado_usuario = mysqli_query($connect, $result_usuario);

			$result_responsavel = "UPDATE responsavel SET NOM_RESPONSAVEL='$nome_responsavel',TELEFONE='$telefone',CPF='$cpf_responsavel',RG='$rg',DATA_NASCIMENTO='$data_responsavel',EMAIL='$email',CEP='$cep',ENDERECO='$endereco Nº(".$numero.")',BAIRRO='$bairro',CIDADE='$cidade',ESTADO='$estado' 
									WHERE COD_RESPONSAVEL = (SELECT COD_RESPONSAVEL FROM aluno where COD_ALUNO = '$matricula_sim')";
			$resultado_result_responsavel = mysqli_query($connect, $result_responsavel);

			if(mysqli_affected_rows($connect)){
				$_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Dados do aluno atualizado com sucesso</div>";
				header("Location: ../../pages/atualizar-aluno.php");
			}else{
				$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Houve algum problema ao atualizar o aluno, tente novamente</div>";
				header("Location:../../pages/atualizar-aluno.php");
			}
		}
	}else{

		if($nivel_nao == "Selecione a Prajied" || $nivel_nao == "-- ADULTO --" || $nivel_nao == "-- KIDS --"){
			$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Prajied não selecionada</div>";
			header("Location: ../../pages/atualizar-aluno.php");

		}elseif($status_nao == "Selecione o status"){
			$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Status não selecionado</div>";
			header("Location: ../../pages/atualizar-aluno.php");
		}else{

			$result_usuario = "UPDATE aluno SET NOM_ALUNO='$nome_aluno_nao',TELEFONE='$telefone_nao',EMAIL='$email_nao',CPF='$cpf_nao',RG='$rg_nao',DATA='$data_nao',ENDERECO='$endereco_nao Nº".$numero_nao."',CIDADE='$cidade_nao',ESTADO='$estado_nao',NIVEL='$nivel_nao',STATUS='$status_nao',BAIRRO='$bairro_nao',CEP='$cep_nao' WHERE COD_ALUNO = '$matricula_nao'";
			$resultado_usuario = mysqli_query($connect, $result_usuario);

			if(mysqli_affected_rows($connect)){
				$_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Dados do aluno atualizado com sucesso</div>";
				header("Location: ../../pages/atualizar-aluno.php");
			}else{
				$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Houve algum problema ao atualizar o aluno, tente novamente</div>";
				header("Location:../../pages/atualizar-aluno.php");
			}
		}
	}	

