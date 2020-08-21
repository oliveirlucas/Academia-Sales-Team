<?php
	//Incluir a conexão com banco de dados
    include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));	

	//Recuperar o valor da palavra
	$pagamento = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$pagamento = "SELECT PAG.COD_PAGAMENTO, ALU.NOM_ALUNO, PAG.DATA_CRIADA, PAG.DATA_VENCIMENTO, PAG.VALOR, PAG.STATUS, PAG.TIPO_PAGAMENTO FROM pagamento PAG 
                  INNER JOIN aluno ALU
                  ON PAG.COD_ALUNO = ALU.COD_ALUNO
                  WHERE PAG.COD_ALUNO = '$pagamento'";

    

	$resultado_pagamento = mysqli_query($connect, $pagamento);
	
	if(mysqli_num_rows($resultado_pagamento) <= 0){
		echo "<div class='alert alert-danger' role='alert'>Nenhum pagamento foi encontrado para este aluno ou o mesmo não existe em nossa base de dados</div>";
	}else{
        $tabela = "<div class='card'>
                        <div class='card-body'>
                            <div class='card-title'>
                                <h4>Faturas</h4>
                            </div>
                            <div class='table-responsive'>
                            <table class='table header-border'>
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nome do Aluno</th>
                                        <th>Tipo</th>
                                        <th>Data gerada</th>
                                        <th>Data de vencimento</th>
                                        <th>Valor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>";
                        while($dados = mysqli_fetch_assoc($resultado_pagamento)){

                            $data_criada = $dados['DATA_CRIADA'];
                            $data_vencimento = $dados['DATA_VENCIMENTO'];
                                $tabela .= "<tr>";
                                    $tabela .= "<td>".$dados['COD_PAGAMENTO']."</td>";
                                    $tabela .= "<td>".$dados['NOM_ALUNO']."</td>";
                                    $tabela .= "<td>".$dados['TIPO_PAGAMENTO']."</td>";
                                    $tabela .= "<td>".date('d/m/Y', strtotime($data_criada))."</td>";
                                    $tabela .= "<td>".date('d/m/Y', strtotime($data_vencimento))."</td>";
                                    $tabela .= "<td>R$ ".$dados['VALOR']."</td>";
                                    if($dados['STATUS'] == 'Pago'){
                                        $tabela .= "<td><span class='label label-success'>".$dados['STATUS']."</span></td>";
                                    }else if ($dados['STATUS'] == 'Aberto'){
                                        $tabela .= "<td><span class='label label-warning'>".$dados['STATUS']."</span></td>";
                                    }else{
                                        $tabela .= "<td><span class='label label-danger'>".$dados['STATUS']."</span></td>";
                                    }
                        }   
                            $tabela .= "</tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                    </div>";
        
        echo $tabela;
	}
?>