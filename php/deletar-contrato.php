<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$contrato = filter_input(INPUT_POST, 'contrato');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "DELETE FROM contrato WHERE COD_CONTRATO = '$contrato'";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if (mysqli_affected_rows($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Contrato deletado com sucesso</div>";
    header("Location: ../pages/contrato.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Codigo contrato não encontrado</div>";
    header("Location: ../pages/contrato.php");
}

?>