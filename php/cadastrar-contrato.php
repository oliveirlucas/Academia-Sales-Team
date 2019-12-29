<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_aluno = filter_input(INPUT_POST, 'cod_aluno');
$tipo = filter_input(INPUT_POST, 'tipo');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

if($tipo == '2x aulas por semana'){
    $result_usuario = "INSERT INTO contrato (COD_ALUNO, COD_PLANO, STATUS_CONTRATO) VALUES ('$cod_aluno', '1', 'Ativo')";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
}elseif($tipo == '3x aulas por semana'){
    $result_usuario = "INSERT INTO contrato (COD_ALUNO, COD_PLANO, STATUS_CONTRATO) VALUES ('$cod_aluno', '2', 'Ativo')";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
}elseif($tipo == '5x aulas por semana'){
    $result_usuario = "INSERT INTO contrato (COD_ALUNO, COD_PLANO, STATUS_CONTRATO) VALUES ('$cod_aluno', '3', 'Ativo')";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
}else{
    $result_usuario = "INSERT INTO contrato (COD_ALUNO, COD_PLANO, STATUS_CONTRATO) VALUES ('$cod_aluno', '4', 'Ativo')";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
}


if (mysqli_insert_id($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Contrato registrado com sucesso</div>";
    header("Location: ../pages/contrato.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Contrato não registrado</div>";
    header("Location: ../pages/contrato.php");
}
