<?php
session_start();
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$email = filter_input(INPUT_POST, 'email');
$responsavel = filter_input(INPUT_POST, 'responsavel');
$cpf = filter_input(INPUT_POST, 'cpf');
$rg = filter_input(INPUT_POST, 'rg');
$data = filter_input(INPUT_POST, 'data');
$endereco = filter_input(INPUT_POST, 'endereco');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$nivel = filter_input(INPUT_POST, 'nivel');
$status = filter_input(INPUT_POST, 'status');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO aluno (NOME, TELEFONE, EMAIL, RESPONSAVEL, CPF, RG, DATA, ENDERECO, CIDADE, ESTADO, NIVEL, STATUS) VALUES ('$nome', '$telefone', '$email', '$responsavel', '$cpf', '$rg', '$data', '$endereco', '$cidade', '$estado', '$nivel', '$status')";
$resultado_usuario = mysqli_query($connect, $result_usuario);

if (mysqli_insert_id($connect)) {
    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Aluno cadastrado com sucesso</div>";
    header("Location: ../pages/cadastro-aluno.php");
} else {
    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Aluno não cadastrado</div>";
    header("Location: ../pages/cadastro-aluno.php");
}
