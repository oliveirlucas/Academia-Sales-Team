<?php
	//Incluir a conexão com banco de dados
    include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));	

	//Recuperar o valor da palavra
	$aula = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$aula = "SELECT * FROM PERSONAL P
            INNER JOIN ALUNO ALU ON ALU.COD_ALUNO = P.COD_ALUNO
            WHERE P.COD_ALUNO = '$aula'";

	$resultado_aula = mysqli_query($connect, $aula);
	
	if(mysqli_num_rows($resultado_aula) <= 0){
		echo "<div class='alert alert-danger' role='alert'>Não existe aulas registradas para este aluno</div>";
	}else{
        $tabela = "<table class='table header-border'>";
            $tabela .= "<thead>";
                $tabela .= "<tr>";
                    $tabela .= "<th>Codigo aula</th>";
                    $tabela .= "<th>Matricula</th>";
                    $tabela .= "<th>Nome do Aluno</th>";
                    $tabela .= "<th>Numero de Aulas</th>";
                    $tabela .= "<th>Status</th>";
                $tabela .= "</tr>";
            $tabela .= "</thead>";
            $tabela .= "<tbody>";
            while($dados = mysqli_fetch_assoc($resultado_aula)){
                    $tabela .= "<tr>";
                        $tabela .= "<td>".$dados['COD_PERSONAL']."</td>";
                        $tabela .= "<td>".$dados['COD_ALUNO']."</td>";
                        $tabela .= "<td>".$dados['NOME']."</td>";
                        $tabela .= "<td>Aula ".$dados['NUMERO_AULA']."</td>";
                        if($dados['STATUS_AULA'] == 'Presente'){
                            $tabela .= "<td><span class='label label-success'>".$dados['STATUS_AULA']."</span></td>";
                        }else{
                            $tabela .= "<td><span class='label label-danger'>".$dados['STATUS_AULA']."</span></td>";
                        }
            }   
                $tabela .= "</tr>";
            $tabela .= "</tbody>";
        $tabela .= "</table>";
        
        echo $tabela;
	}
?>