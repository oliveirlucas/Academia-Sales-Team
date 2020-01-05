<?php
include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));

function retorna($cod_pag, $connect){
	$result_aluno = "SELECT * FROM pagamento PAG
					inner join aluno ALU
					ON ALU.COD_ALUNO = PAG.COD_ALUNO
					WHERE COD_PAGAMENTO = '$cod_pag' LIMIT 1";
	$resultado_aluno = mysqli_query($connect, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
		$valores['cod_alu'] = $row_aluno['COD_ALUNO'];
		$valores['nom_aluno'] = $row_aluno['NOM_ALUNO'];
        $valores['data_abertu'] = $row_aluno['DATA_CRIADA'];
        $valores['data_venci'] = $row_aluno['DATA_VENCIMENTO'];
        $valores['valor_pagar'] = $row_aluno['VALOR'];
	}else{
		$valores['cod_alu'] = 'N';
		$valores['nom_aluno'] = 'Pagamento não encontrado';
        $valores['valor_pagar'] = 'Pagamento não encontrado';
        $valores['data_abertu'] = 'Pagamento não encontrado';
        $valores['data_venci'] = 'Pagamento não encontrado';
	}
	return json_encode($valores);
}

if(isset($_GET['cod_pag'])){
	echo retorna($_GET['cod_pag'], $connect);
}

?>