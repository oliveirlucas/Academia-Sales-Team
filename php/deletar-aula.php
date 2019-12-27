<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_personal = filter_input(INPUT_POST, 'codigo_aula');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "DELETE FROM PERSONAL WHERE COD_PERSONAL = '$cod_personal'";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if (mysqli_affected_rows($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Aula deletado com sucesso</div>";
    header("Location: ../pages/mensalidade.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Codigo da aula não encontrado ou inexistente</div>";
    header("Location: ../pages/mensalidade.php");
}

?>