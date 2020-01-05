<?php
include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));

function retorna($matricula_sim, $connect){

    $result_aluno = "SELECT * FROM aluno WHERE COD_ALUNO = '$matricula_sim'";
    $resultado_aluno = mysqli_query($connect, $result_aluno);
    $row_aluno = mysqli_fetch_assoc($resultado_aluno);

    $result_responsavel = "SELECT * FROM responsavel WHERE COD_RESPONSAVEL = '".$row_aluno['COD_RESPONSAVEL']."'";
    $resultado_responsavel = mysqli_query($connect, $result_responsavel);
    $row_responsavel = mysqli_fetch_assoc($resultado_responsavel);

    
	if($resultado_aluno->num_rows){
        //ALUNO
        $valores['nome_aluno'] = $row_aluno['NOM_ALUNO'];
        $valores['data_aluno'] = $row_aluno['DATA'];
        $valores['cpf_aluno'] = $row_aluno['CPF'];
        //RESPONSAVEL
        $valores['nome_responsavel'] = $row_responsavel['NOM_RESPONSAVEL'];
        $valores['ddd'] = $row_responsavel['CPF'];
        $valores['telefone'] = $row_responsavel['TELEFONE'];
        $valores['cpf_responsavel'] = $row_responsavel['CPF'];
        $valores['rg'] = $row_responsavel['RG'];
        $valores['data_responsavel'] = $row_responsavel['DATA_NASCIMENTO'];
        $valores['email'] = $row_responsavel['EMAIL'];
        $valores['cep'] = $row_responsavel['CEP'];
	}else{
        //ALUNO
        $valores['nome_aluno'] = "Aluno não encontrado";
        $valores['data_aluno'] = "Aluno não encontrado";
        $valores['cpf_aluno'] = "Aluno não encontrado";
        //RESPONSAVEL
        $valores['nome_responsavel'] = "Aluno não encontrado";
        $valores['ddd'] = "Aluno não encontrado";
        $valores['telefone'] = "Aluno não encontrado";
        $valores['cpf_responsavel'] = "Aluno não encontrado";
        $valores['rg'] = "Aluno não encontrado";
        $valores['data_responsavel'] = "Aluno não encontrado";
        $valores['email'] = "Aluno não encontrado";
        $valores['cep'] = "Aluno não encontrado";
	}
	return json_encode($valores);
}

if(isset($_GET['matricula_sim'])){
	echo retorna($_GET['matricula_sim'], $connect);
}

?>