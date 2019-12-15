<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$cod_pagamento = filter_input(INPUT_POST, 'cod_pagamento');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "DELETE FROM PAGAMENTO WHERE COD_PAGAMENTO = '$cod_pagamento'";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if (mysqli_affected_rows($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Pagamento deletado com sucesso</div>";
    header("Location: ../pages/mensalidade.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Codigo pagamento não encontrado</div>";
    header("Location: ../pages/mensalidade.php");
}

?>