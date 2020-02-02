<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

function retorna($cod_aluno, $connect){

    $obter_aluno = "SELECT * FROM aluno WHERE COD_ALUNO = '$cod_aluno'";
    $resultado_obter_aluno = mysqli_query($connect, $obter_aluno);
    $row_aluno = mysqli_fetch_assoc($resultado_obter_aluno);

    $obter_responsavel = "SELECT * FROM responsavel WHERE COD_RESPONSAVEL = (
                    SELECT COD_RESPONSAVEL FROM aluno WHERE COD_ALUNO = '$cod_aluno')";
    $resultado_obter_responsavel = mysqli_query($connect, $obter_responsavel);
    $row_responsavel = mysqli_fetch_assoc($resultado_obter_responsavel);
    
	if($resultado_obter_aluno->num_rows){
        if($row_aluno['IND_RESPONSAVEL'] == 'N'){
            $valores['nome'] = $row_aluno['NOM_ALUNO'];
            $valores['telefone'] = $row_aluno['TELEFONE'];
            $valores['email'] = $row_aluno['EMAIL'];
            $valores['cpf'] = $row_aluno['CPF'];
            $valores['rg'] = $row_aluno['RG'];
            $valores['data_nascimento'] = date('d-m-Y', strtotime($row_aluno['DATA']));
            $valores['endereco'] = $row_aluno['ENDERECO'];
            $valores['cidade'] = $row_aluno['CIDADE'];
            $valores['estado'] = $row_aluno['ESTADO'];
            $valores['bairro'] = $row_aluno['BAIRRO'];
            $valores['cep'] = $row_aluno['CEP'];
            $valores['nivel'] = $row_aluno['NIVEL'];
            $valores['status'] = $row_aluno['STATUS'];
        }else{
            $valores['nome'] = $row_aluno['NOM_ALUNO'];
            $valores['cpf'] = $row_aluno['CPF'];
            $valores['rg'] = $row_aluno['RG'];
            $valores['data'] = date('d-m-Y', strtotime($row_aluno['DATA']));
            $valores['nivel'] = $row_aluno['NIVEL'];
            $valores['status'] = $row_aluno['STATUS'];
            $valores['responsavel'] = array(
                'cod_responsavel' => $row_responsavel['COD_RESPONSAVEL'],
                'nome' => $row_responsavel['NOM_RESPONSAVEL'],
                'telefone' => $row_responsavel['TELEFONE'],
                'cpf' => $row_responsavel['CPF'],
                'rg' => $row_responsavel['RG'],
                'data_nascimento' => date('d-m-Y', strtotime($row_responsavel['DATA_NASCIMENTO'])),
                'email' => $row_responsavel['EMAIL'],
                'cep' => $row_responsavel['CEP'],
                'endereco' => $row_responsavel['ENDERECO'],
                'bairro' => $row_responsavel['BAIRRO'],
                'cidade' => $row_responsavel['CIDADE'],
                'estado' => $row_responsavel['ESTADO']
            );
        }        
	}else{
        $valores['mensagem'] = 'Aluno não encontrado ou não existe';
	}
	return json_encode($valores);
}

if(isset($_GET['cod_aluno'])){
	echo retorna($_GET['cod_aluno'], $connect);
}

?>