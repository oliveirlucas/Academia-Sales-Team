<?php
include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));

function retorna($matricula_nao, $connect){

    $result_aluno = "SELECT * FROM aluno WHERE COD_ALUNO = '$matricula_nao'";
    $resultado_aluno = mysqli_query($connect, $result_aluno);
    $row_aluno = mysqli_fetch_assoc($resultado_aluno);

    
	if($resultado_aluno->num_rows){
        //ALUNO
        $valores['nome_aluno_nao'] = $row_aluno['NOM_ALUNO'];
        $valores['telefone_nao'] = $row_aluno['TELEFONE'];
        $valores['cpf_nao'] = $row_aluno['CPF'];
        $valores['rg_nao'] = $row_aluno['RG'];
        $valores['data_nao'] = $row_aluno['DATA'];
        $valores['email_nao'] = $row_aluno['EMAIL'];
        $valores['cep_nao'] = $row_aluno['CEP'];
	}else{
        $valores['nome_aluno_nao'] = "Aluno não encontrado";
        $valores['telefone_nao'] = "Aluno não encontrado";
        $valores['cpf_nao'] = "Aluno não encontrado";
        $valores['rg_nao'] = "Aluno não encontrado";
        $valores['data_nao'] = "Aluno não encontrado";
        $valores['email_nao'] = "Aluno não encontrado";
        $valores['cep_nao'] = "Aluno não encontrado";
	}
	return json_encode($valores);
}

if(isset($_GET['matricula_nao'])){
	echo retorna($_GET['matricula_nao'], $connect);
}

?>