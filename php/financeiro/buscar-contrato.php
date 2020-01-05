<?php
	//Incluir a conexão com banco de dados
    include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));	

	//Recuperar o valor da palavra
	$pagamento = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$pagamento = "SELECT pla.TIPO_PLANO, con.STATUS_CONTRATO, con.COD_CONTRATO FROM contrato con
                  INNER JOIN planos pla ON con.COD_PLANO = pla.COD_PLANO
                  inner join aluno alu on con.COD_ALUNO = alu.COD_ALUNO
                  WHERE alu.COD_ALUNO = '$pagamento'";

	$resultado_pagamento = mysqli_query($connect, $pagamento);
	
	if(mysqli_num_rows($resultado_pagamento) <= 0){
		echo "<div class='alert alert-danger' role='alert'>Contrato pendente</div>";
	}else{
        $tabela = "<table class='table header-border'>";
            $tabela .= "<thead>";
                $tabela .= "<tr>";
                    $tabela .= "<th>Codigo Contrato</th>";
                    $tabela .= "<th>Tipo Contrato</th>";
                    $tabela .= "<th>Status Contrato</th>";
                $tabela .= "</tr>";
            $tabela .= "</thead>";
            $tabela .= "<tbody>";
            while($dados = mysqli_fetch_assoc($resultado_pagamento)){
                    $tabela .= "<tr>";
                        $tabela .= "<td>".$dados['COD_CONTRATO']."</td>";
                        $tabela .= "<td>".$dados['TIPO_PLANO']."</td>";
                        if($dados['STATUS_CONTRATO'] == 'Ativo'){
                            $tabela .= "<td><span class='label label-success'>".$dados['STATUS_CONTRATO']."</span></td>";
                        }else{
                            $tabela .= "<td><span class='label label-danger'>".$dados['STATUS_CONTRATO']."</span></td>";
                        }
            }   
                $tabela .= "</tr>";
            $tabela .= "</tbody>";
        $tabela .= "</table>";
        
        echo $tabela;
	}
?>