<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

function retorna($codigo_aula, $connect){
	$result_aluno = "SELECT * FROM personal P
                     INNER JOIN aluno ALU ON P.COD_ALUNO = ALU.COD_ALUNO
                     WHERE P.COD_PERSONAL = '$codigo_aula' LIMIT 1";

	$resultado_aluno = mysqli_query($connect, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
        $valores['codigo_aluno'] = $row_aluno['COD_ALUNO'];
        $valores['nome_aluno'] = $row_aluno['NOM_ALUNO'];
        $valores['status_atual'] = $row_aluno['STATUS_AULA'];
	}else{
        $valores['codigo_aluno'] = 'N';
        $valores['nome_aluno'] = 'Aula não encontrada';
        $valores['status_atual'] = 'Aula não encontrada';
	}
	return json_encode($valores);
}

if(isset($_GET['codigo_aula'])){
	echo retorna($_GET['codigo_aula'], $connect);
}

?>