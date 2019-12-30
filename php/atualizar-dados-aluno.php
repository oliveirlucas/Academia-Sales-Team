<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_aluno = filter_input(INPUT_POST, 'matricula_filtro');
$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$email = filter_input(INPUT_POST, 'email');
$responsavel = filter_input(INPUT_POST, 'responsavel');
$cpf = filter_input(INPUT_POST, 'cpf');
$rg = filter_input(INPUT_POST, 'rg');
$data = filter_input(INPUT_POST, 'data');
$endereco = filter_input(INPUT_POST, 'endereco');
$cidade = filter_input(INPUT_POST, 'cidade');
$cep = filter_input(INPUT_POST, 'cep');
$bairro = filter_input(INPUT_POST, 'bairro');
$estado = filter_input(INPUT_POST, 'estado');
$nivel = filter_input(INPUT_POST, 'nivel');
$status = filter_input(INPUT_POST, 'status');

if($nivel == 'Selecione a Prajied' || $nivel == '-- Adulto --' || $nivel == '-- Kids --' || $status = 'Selecione o status'){
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Prajied não selecionada</div>";
    header("Location: ../pages/atualizar-aluno.php");
}else{
	$result_usuario = "UPDATE aluno SET NOME='$nome', TELEFONE='$telefone', EMAIL='$email', CPF='$cpf', RESPONSAVEL='$responsavel', RG='$rg', DATA='$data', ENDERECO='$endereco', CIDADE='$cidade', CEP='$cep', BAIRRO='$bairro', ESTADO='$estado', BAIRRO='$bairro', NIVEL='$nivel', STATUS='$status' WHERE COD_ALUNO='$cod_aluno'";
	$resultado_usuario = mysqli_query($connect, $result_usuario);

	if(mysqli_affected_rows($connect)){
		$_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Dados do aluno atualizado com sucesso</div>";
		header("Location: ../pages/atualizar-aluno.php");
	}else{
		$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Houve algum problema ao atualizar o aluno, tente novamente</div>";
		header("Location:../pages/atualizar-aluno.php");
	}
}

