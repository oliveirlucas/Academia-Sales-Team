<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

function retorna($cod_aula, $connect){
	$result_aluno = "SELECT * FROM personal P
                    INNER JOIN aluno ALU ON P.COD_ALUNO = ALU.COD_ALUNO
                    WHERE P.COD_PERSONAL = '$cod_aula' LIMIT 1";

	$resultado_aluno = mysqli_query($connect, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
        $valores['cod_matricula'] = $row_aluno['COD_ALUNO'];
        $valores['nome'] = $row_aluno['NOME'];
        $valores['numero_aula'] = $row_aluno['NUMERO_AULA'];
        $valores['status_aula'] = $row_aluno['STATUS_AULA'];
	}else{
        $valores['cod_matricula'] = 'N';
        $valores['numero_aula'] = 'Aula não encontrada';
        $valores['nome'] = 'Aula não encontrada';
        $valores['status_aula'] = 'Aula não encontrada';
        $valores['data_venci'] = 'Aula não encontrada';
	}
	return json_encode($valores);
}

if(isset($_GET['cod_aula'])){
	echo retorna($_GET['cod_aula'], $connect);
}

?>