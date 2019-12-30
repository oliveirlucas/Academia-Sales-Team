<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

function retorna($matricula_filtro, $connect){

    $result_aluno = "SELECT * FROM aluno WHERE COD_ALUNO = '$matricula_filtro'";

	$resultado_aluno = mysqli_query($connect, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
        $valores['nome'] = $row_aluno['NOME'];
        $valores['telefone'] = $row_aluno['TELEFONE'];
        $valores['email'] = $row_aluno['EMAIL'];
        $valores['responsavel'] = $row_aluno['RESPONSAVEL'];
        $valores['cpf'] = $row_aluno['CPF'];
        $valores['rg'] = $row_aluno['RG'];
        $valores['data'] = $row_aluno['DATA'];
        $valores['endereco'] = $row_aluno['ENDERECO'];
        $valores['cidade'] = $row_aluno['CIDADE'];
        $valores['bairro'] = $row_aluno['BAIRRO'];
        $valores['cep'] = $row_aluno['CEP'];
        $valores['estado'] = $row_aluno['ESTADO'];
        $valores['nivel'] = $row_aluno['NIVEL'];
        $valores['status'] = $row_aluno['STATUS'];
	}else{
        $valores['nome'] = 'Aluno não encontrado';
        $valores['telefone'] = 'Aluno não encontrado';
        $valores['email'] = 'Aluno não encontrado';
        $valores['responsavel'] = 'Aluno não encontrado';
        $valores['cpf'] = 'Aluno não encontrado';
        $valores['rg'] = 'Aluno não encontrado';
        $valores['data'] = 'Aluno não encontrado';
        $valores['endereco'] = 'Aluno não encontrado';
        $valores['cidade'] = 'Aluno não encontrado';
        $valores['bairro'] = 'Aluno não encontrado';
        $valores['cep'] = 'Aluno não encontrado';
        $valores['estado'] = 'Aluno não encontrado';
        $valores['nivel'] = 'Aluno não encontrado';
        $valores['status'] = 'Aluno não encontrado';
	}
	return json_encode($valores);
}

if(isset($_GET['matricula_filtro'])){
	echo retorna($_GET['matricula_filtro'], $connect);
}

?>