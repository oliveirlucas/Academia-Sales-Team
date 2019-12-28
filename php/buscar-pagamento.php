<?php
	//Incluir a conexão com banco de dados
    include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));	

	//Recuperar o valor da palavra
	$pagamento = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$pagamento = "SELECT PAG.COD_PAGAMENTO, ALU.NOME, PAG.DATA_CRIADA, PAG.DATA_VENCIMENTO, PAG.VALOR, PAG.STATUS FROM pagamento PAG 
                  INNER JOIN aluno ALU
                  ON PAG.COD_ALUNO = ALU.COD_ALUNO
                  WHERE PAG.COD_ALUNO = '$pagamento'";

	$resultado_pagamento = mysqli_query($connect, $pagamento);
	
	if(mysqli_num_rows($resultado_pagamento) <= 0){
		echo "<div class='alert alert-danger' role='alert'>Nenhum pagamento foi encontrado para este aluno ou o mesmo não existe em nossa base de dados</div>";
	}else{
        $tabela = "<table class='table header-border'>";
            $tabela .= "<thead>";
                $tabela .= "<tr>";
                    $tabela .= "<th>Codigo</th>";
                    $tabela .= "<th>Nome do Aluno</th>";
                    $tabela .= "<th>Data gerada</th>";
                    $tabela .= "<th>Data de vencimento</th>";
                    $tabela .= "<th>Valor</th>";
                    $tabela .= "<th>Status</th>";
                $tabela .= "</tr>";
            $tabela .= "</thead>";
            $tabela .= "<tbody>";
            while($dados = mysqli_fetch_assoc($resultado_pagamento)){
                    $tabela .= "<tr>";
                        $tabela .= "<td>".$dados['COD_PAGAMENTO']."</td>";
                        $tabela .= "<td>".$dados['NOME']."</td>";
                        $tabela .= "<td>".$dados['DATA_CRIADA']."</td>";
                        $tabela .= "<td>".$dados['DATA_VENCIMENTO']."</td>";
                        $tabela .= "<td>".$dados['VALOR']."</td>";
                        if($dados['STATUS'] == 'Aberto'){
                            $tabela .= "<td><span class='label label-success'>".$dados['STATUS']."</span></td>";
                        }else{
                            $tabela .= "<td><span class='label label-danger'>".$dados['STATUS']."</span></td>";
                        }
            }   
                $tabela .= "</tr>";
            $tabela .= "</tbody>";
        $tabela .= "</table>";
        
        echo $tabela;
	}
?>