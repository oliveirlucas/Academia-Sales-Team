<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_aluno = filter_input(INPUT_POST, 'cod_aluno');
$data_gerada = filter_input(INPUT_POST, 'data_gerada');
$data_vencimento = filter_input(INPUT_POST, 'data_vencimento');
$valor = filter_input(INPUT_POST, 'valor');
$status = filter_input(INPUT_POST, 'status');
$tipo = filter_input(INPUT_POST, 'tipo');


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO pagamento (COD_ALUNO, DATA_CRIADA, DATA_VENCIMENTO, VALOR, STATUS, TIPO_PAGAMENTO, DATA_REGISTRO) VALUES ('$cod_aluno', '$data_gerada', '$data_vencimento', '$valor', '$status','$tipo', now());";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if (mysqli_insert_id($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Pagamento registrado com sucesso</div>";
    header("Location: ../pages/mensalidade.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Pagamento não registrado</div>";
    header("Location: ../pages/mensalidade.php");
}
