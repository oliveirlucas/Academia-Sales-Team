<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_contrato = filter_input(INPUT_POST, 'cod_contrato');
$tipo = filter_input(INPUT_POST, 'tipo');

$result_contrato = "UPDATE contrato con 
					inner join aluno alu on con.COD_ALUNO = alu.COD_ALUNO
					set
					con.STATUS_CONTRATO = '$tipo',
					alu.STATUS = '$tipo'
					WHERE con.COD_CONTRATO= '$cod_contrato'";
$resultado_contrato = mysqli_query($connect, $result_contrato);			

if(mysqli_affected_rows($connect)){
	$_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Dados do contrato atualizado com sucesso</div>";
	header("Location: ../pages/contrato.php");
}else{
	$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Houve algum problema ao atualizar o contrato, tente novamente</div>";
	header("Location:../pages/contrato.php");
}