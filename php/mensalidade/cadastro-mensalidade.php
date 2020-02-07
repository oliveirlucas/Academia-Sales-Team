<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));

$cod_aluno = filter_input(INPUT_POST, 'cod_aluno');
$data_gerada = filter_input(INPUT_POST, 'data_gerada');
$data_vencimento = filter_input(INPUT_POST, 'data_vencimento');
$valor = filter_input(INPUT_POST, 'valor');
$status = filter_input(INPUT_POST, 'status');
$tipo = filter_input(INPUT_POST, 'tipo');


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$procurar_pagamento = "SELECT * from pagamento where COD_ALUNO = '$cod_aluno' and DATA_VENCIMENTO = '$data_vencimento' and DATA_CRIADA = '$data_gerada' and TIPO_PAGAMENTO = '$tipo'";
$resultado_procurar_pagamento = mysqli_query($connect, $procurar_pagamento);

if(mysqli_affected_rows($connect)){
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Já existe pagamento registrado para este aluno referente a essa data, verifique a ficha financeira deste aluno para mais informações</div>";
    header("Location: ../../pages/mensalidade.php");
}else{
    $result_usuario = "INSERT INTO pagamento (COD_ALUNO, DATA_CRIADA, DATA_VENCIMENTO, STATUS, TIPO_PAGAMENTO, VALOR, DATA_REGISTRO) VALUES ('$cod_aluno', '$data_gerada', '$data_vencimento','$status','$tipo', '$valor', now());";
    $resultado_usuario = mysqli_query($connect, $result_usuario);

    if (mysqli_insert_id($connect)) {
        $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Pagamento registrado com sucesso</div>";
        header("Location: ../../pages/mensalidade.php");
    } else {
        $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Pagamento não registrado</div>";
        header("Location: ../../pages/mensalidade.php");
}
}


