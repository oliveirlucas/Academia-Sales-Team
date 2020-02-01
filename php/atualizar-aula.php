<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_aula = filter_input(INPUT_POST, 'cod_aula');
$cod_matricula = filter_input(INPUT_POST, 'cod_matricula');
$numero_aula = filter_input(INPUT_POST, 'numero_aula');
$data = filter_input(INPUT_POST, 'data');
$status_aula = filter_input(INPUT_POST, 'status_aula');

$result_usuario = "UPDATE personal SET COD_ALUNO='$cod_matricula', NUMERO_AULA='$numero_aula', DATA_AULA='$data', STATUS_AULA='$status_aula' WHERE COD_PERSONAL='$cod_aula'";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if(mysqli_affected_rows($connect)){
	$_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Dados da aula atualizado com sucesso</div>";
	header("Location: ../pages/aula.php");
}else{
	$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Houve algum problema ao atualizar a aula, tente novamente</div>";
	header("Location:../pages/aula.php");
}