<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

function retorna($cod_pagament, $connect){

    $result_aluno = "SELECT P.COD_PAGAMENTO, P.COD_ALUNO, ALU.NOME, P.DATA_CRIADA, P.DATA_VENCIMENTO, P.VALOR, P.STATUS FROM pagamento P
                    INNER JOIN aluno ALU
                    ON P.COD_ALUNO = ALU.COD_ALUNO
                    WHERE P.COD_PAGAMENTO = '$cod_pagament'";

	$resultado_aluno = mysqli_query($connect, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
        $valores['cod_alun'] = $row_aluno['COD_ALUNO'];
        $valores['nome_aluno'] = $row_aluno['NOME'];
        $valores['data_abertur'] = $row_aluno['DATA_CRIADA'];
        $valores['data_venciment'] = $row_aluno['DATA_VENCIMENTO'];
        $valores['valor_pag'] = $row_aluno['VALOR'];
        $valores['status_atual'] = $row_aluno['STATUS'];
	}else{
        $valores['cod_alun'] = 'N';
        $valores['nome_aluno'] = 'Pagamento não encontrado';
        $valores['data_abertur'] = 'Pagamento não encontrado';
        $valores['data_venciment'] = 'Pagamento não encontrado';
        $valores['valor_pag'] = 'Pagamento não encontrado';
        $valores['status_atual'] = 'Pagamento não encontrado';
	}
	return json_encode($valores);
}

if(isset($_GET['cod_pagament'])){
	echo retorna($_GET['cod_pagament'], $connect);
}

?>