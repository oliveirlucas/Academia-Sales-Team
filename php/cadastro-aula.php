<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_aluno = filter_input(INPUT_POST, 'cod_aluno');
$cod_aula = filter_input(INPUT_POST, 'cod_aula');
$status_aula = filter_input(INPUT_POST, 'status_aula');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO personal (COD_ALUNO, NUMERO_AULA, STATUS_AULA) VALUES ('$cod_aluno', '$cod_aula', '$status_aula')";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if (mysqli_insert_id($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Aula registrada com sucesso</div>";
    header("Location: ../pages/aula.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Aula não registrado</div>";
    header("Location: ../pages/aula.php");
}
