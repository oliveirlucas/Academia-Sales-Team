<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

function retorna($cod_aluno, $connect){

    $obter_pagamento = "SELECT * FROM pagamento WHERE COD_ALUNO = '$cod_aluno'";
    $resultado_obter_pagamento = mysqli_query($connect, $obter_pagamento);

	if($resultado_obter_pagamento->num_rows){
        foreach($row_pagamento = mysqli_fetch_assoc($resultado_obter_pagamento) as $xx){
            $valores = array(
            'cod_aluno' =>  $row_pagamento['COD_ALUNO'],
            'data_gerada' => date('d-m-Y', strtotime($row_pagamento['DATA_CRIADA'])),
            'data_vencimento' => date('d-m-Y', strtotime($row_pagamento['DATA_VENCIMENTO'])),
            'status_pagamento' => $row_pagamento['STATUS'],
            'tipo_pagamento' => $row_pagamento['TIPO_PAGAMENTO'],
            'valor' => $row_pagamento['VALOR']
            );
        }
	}else{
        $valores['mensagem'] = 'Aluno não possui pagamentos ou não existe';
	}
	return json_encode($valores);
}

if(isset($_GET['cod_aluno'])){
	echo retorna($_GET['cod_aluno'], $connect);
}

?>