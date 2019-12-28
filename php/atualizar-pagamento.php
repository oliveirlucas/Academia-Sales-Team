<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_pagamento = filter_input(INPUT_POST, 'cod_pag');
$cod_aluno = filter_input(INPUT_POST, 'cod_alu');
$data_gerada = filter_input(INPUT_POST, 'data_abertu');
$data_vencimento = filter_input(INPUT_POST, 'data_venci');
$valor = filter_input(INPUT_POST, 'valor_pagar');
$status = filter_input(INPUT_POST, 'status');

$result_usuario = "UPDATE pagamento SET COD_ALUNO='$cod_aluno', DATA_CRIADA='$data_gerada', DATA_VENCIMENTO='$data_vencimento', VALOR='$valor', STATUS='$status' WHERE COD_PAGAMENTO='$cod_pagamento'";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if(mysqli_affected_rows($connect)){
	$_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Dados do pagamento atualizado com sucesso</div>";
	header("Location: ../pages/mensalidade.php");
}else{
	$_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Houve algum problema ao atualizar pagamento, tente novamente</div>";
	header("Location:../pages/mensalidade.php");
}