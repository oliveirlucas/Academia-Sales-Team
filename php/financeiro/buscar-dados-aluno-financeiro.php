<?php
	//Incluir a conexão com banco de dados
    include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));	

    header("Content-type: text/html; charset=utf-8");
	//Recuperar o valor da palavra
	$cod_aluno = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$buscar_dados_aluno = "SELECT * from aluno alu 
                            inner join contrato con on con.COD_ALUNO = alu.COD_ALUNO 
                            inner join modalidade modal on modal.COD_MODALIDADE = alu.COD_MODALIDADE 
                            where alu.COD_ALUNO = '$cod_aluno'";
    $resultado_buscar_dados_aluno = mysqli_query($connect, $buscar_dados_aluno);
    $dados_buscar_aluno = mysqli_fetch_assoc($resultado_buscar_dados_aluno);

    $buscar_contrato_aluno = "SELECT * from contrato con 
                            inner join planos pla on con.COD_PLANO = pla.COD_PLANO 
                            where con.COD_ALUNO = '$cod_aluno'";
    $resultado_buscar_contrato_aluno = mysqli_query($connect, $buscar_contrato_aluno);

    if(mysqli_affected_rows($connect)){
        
        $nomeAluno = $dados_buscar_aluno['NOM_ALUNO'];
        $enderecoAluno = $dados_buscar_aluno['ENDERECO'];
        $telefoneAluno = $dados_buscar_aluno['TELEFONE'];
        $emailAluno = $dados_buscar_aluno['EMAIL']; 
        $rgAluno = $dados_buscar_aluno['RG'];
        $cpfAluno = $dados_buscar_aluno['CPF'];
        $dataNascimentoAluno = $dados_buscar_aluno['DATA'];
        $cidadeAluno = $dados_buscar_aluno['CIDADE'];
        $estadoAluno = $dados_buscar_aluno['ESTADO'];
        $nivelAluno = $dados_buscar_aluno['NIVEL'];
        $cepAluno = $dados_buscar_aluno['CEP'];
        $bairroAluno = $dados_buscar_aluno['BAIRRO'];
        $idadeAluno = idadeAluno($dataNascimentoAluno);
        $modalidade = $dados_buscar_aluno['DSC_MODALIDADE'];
    
        if($dados_buscar_aluno['IND_RESPONSAVEL'] == "S")
        {
            $buscar_responsavel_do_aluno = "SELECT * from responsavel where COD_RESPONSAVEL = '".$dados_buscar_aluno['COD_RESPONSAVEL']."'";
            $resultado_buscar_responsavel_do_aluno = mysqli_query($connect, $buscar_responsavel_do_aluno);
            $dados_buscar_responsavel_do_aluno = mysqli_fetch_assoc($resultado_buscar_responsavel_do_aluno);

            $nomeResponsavel = $dados_buscar_responsavel_do_aluno['NOM_RESPONSAVEL'];
            $telefoneResponsavel = $dados_buscar_responsavel_do_aluno['TELEFONE'];
            $cpfResponsavel = $dados_buscar_responsavel_do_aluno['CPF'];
            $rgResponsavel = $dados_buscar_responsavel_do_aluno['RG'];
            $dataNascimentoResponsavel = $dados_buscar_responsavel_do_aluno['DATA_NASCIMENTO'];
            $emailResponsavel = $dados_buscar_responsavel_do_aluno['EMAIL'];
            $cepResponsavel = $dados_buscar_responsavel_do_aluno['CEP'];
            $enderecoResponsavel = $dados_buscar_responsavel_do_aluno['ENDERECO'];
            $bairroResponsavel = $dados_buscar_responsavel_do_aluno['BAIRRO'];
            $cidadeResponsavel = $dados_buscar_responsavel_do_aluno['CIDADE'];
            $estadoResponsavel = $dados_buscar_responsavel_do_aluno['ESTADO'];

            dadosAlunoPossuiResponsavel($nomeAluno, $idadeAluno, $dataNascimentoAluno, $rgResponsavel, $cpfResponsavel, $nomeResponsavel, 
            $dataNascimentoResponsavel, $telefoneResponsavel, $emailResponsavel, $cepResponsavel, $enderecoResponsavel, $bairroResponsavel, 
            $cidadeResponsavel, $estadoResponsavel, $rgAluno, $cpfAluno, $modalidade,$nivelAluno,$resultado_buscar_contrato_aluno);
        }
        else
        {
            dadosAlunoNaoPossuiResponsavel($nomeAluno, $enderecoAluno, $telefoneAluno, $emailAluno, $rgAluno,$cpfAluno,$dataNascimentoAluno, 
            $cidadeAluno, $estadoAluno,$nivelAluno,$cepAluno,$bairroAluno,$modalidade,$resultado_buscar_contrato_aluno,$idadeAluno);
        }

    }else{
        echo "<div class='alert alert-danger' role='alert'>Aluno não encontrado</div>";
    }


    function dadosAlunoPossuiResponsavel($nomeAluno, $idadeAluno, $dataNascimentoAluno, $rgResponsavel, $cpfResponsavel, $nomeResponsavel,
     $dataNascimentoResponsavel, $telefoneResponsavel, $emailResponsavel, $cepResponsavel, $enderecoResponsavel, $bairroResponsavel, 
     $cidadeResponsavel, $estadoResponsavel, $rgAluno, $cpfAluno, $modalidade,$nivelAluno,$resultado_buscar_contrato_aluno)
    {
        $alunoNaoPossuiResponsavel = "
            <div class='card'>
                <img class='card-img-top' src='../images/perfil.jpg' alt='Card image cap' >
                <div class='card-body'>
                    <h1 class='card-title'>".$nomeAluno."</h1>
                        <h6 class='card-text'>
                        <div class='row'>
                            <div class='col-lg-5'><b>Idade:</b> ".$idadeAluno." anos</div>
                            <div class='col-lg-7'><b>Nascimento:</b> ".date('d/m/Y', strtotime($dataNascimentoAluno))."</div>
                        </div>
                        </h6>
                </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div id='accordion-three' class='accordion'>
                                    <div class='card'>
                                        <div class='card-header'>
                                            <h5 class='mb-0 collapsed' data-toggle='collapse' data-target='#collapseTwo5' aria-expanded='false' aria-controls='collapseTwo5'><i class='fa' aria-hidden='true'></i> Dados do responsável</h5>
                                        </div>
                                        <div id='collapseTwo5' class='collapse' data-parent='#accordion-three'>
                                            <div class='card-body'>
                                                <div class='col-lg-12'><b>Nome</b>: ".$nomeResponsavel."</div>
                                                <div class='col-lg-12'><b>RG</b>: ".$rgResponsavel."</div>
                                                <div class='col-lg-12'><b>CPF</b>: ".$cpfResponsavel."</div>
                                                <div class='col-lg-12'><b>Nascimento</b>: ".date('d/m/Y', strtotime($dataNascimentoResponsavel))."</div>
                                                <div class='col-lg-12'><b>Telefone</b>: ".$telefoneResponsavel."</div>
                                                <div class='col-lg-12'><b>Email</b>: ".$emailResponsavel."</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        <span><b>Endereço</b></span><br>
                        ".utf8_decode($enderecoResponsavel).",".utf8_decode($bairroResponsavel).",".$cidadeResponsavel.",".$estadoResponsavel.",".$cepResponsavel."
                    </li>
                    <li class='list-group-item'>
                        <div class='row'>";
                        if($rgAluno == null){
                            $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>RG</b>: Não cadastrado</div>";
                        }else {
                            $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>RG</b>: ".$rgAluno."</div>";
                        }
                        if($cpfAluno == null){
                            $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>CPF</b>: Não cadastrado</div>";
                        }else{
                            $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>CPF</b>: ".$cpfAluno."</div>";
                        }  
                    $alunoNaoPossuiResponsavel .= "</div>
                    </li>
                    <li class='list-group-item'>
                        <b>Modalidade:</b> ".$modalidade."
                    </li>
                    <li class='list-group-item'><b>Prajied:</b> ".$nivelAluno."</li>
                    <li class='list-group-item'><b>CONTRATO</b><br><br>
                        <div class='row'>";
                    while($contrato = mysqli_fetch_assoc($resultado_buscar_contrato_aluno)){
                        $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'>".$contrato['TIPO_PLANO']."</div>";
                        $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><span class='label label-success'>".$contrato['STATUS_CONTRATO']."</span></div>";
                    }
                            
                    $alunoNaoPossuiResponsavel .="</div>
                    </li>
                </ul>
            </div>";

    echo $alunoNaoPossuiResponsavel;
    }

    function dadosAlunoNaoPossuiResponsavel($nomeAluno, $enderecoAluno, $telefoneAluno, $emailAluno, $rgAluno,$cpfAluno,$dataNascimentoAluno, $cidadeAluno, 
    $estadoAluno,$nivelAluno,$cepAluno,$bairroAluno,$modalidade,$resultado_buscar_contrato_aluno,$idadeAluno)
    {
        $alunoNaoPossuiResponsavel = "<div class='card'>
                                        <img class='card-img-top' src='../images/perfil.jpg' alt='Card image cap' >
                                        <div class='card-body'>
                                            <h1 class='card-title'>".$nomeAluno."</h1>
                                                <h6 class='card-text'>
                                                <div class='row'>
                                                    <div class='col-lg-5'><b>Idade:</b> ".$idadeAluno." anos</div>
                                                    <div class='col-lg-7'><b>Nascimento</b> ".date('d/m/Y', strtotime($dataNascimentoAluno))."</div>
                                                </div>
                                                </h6>
                                                <h6 class='card-text'><b>Telefone:</b> ".$telefoneAluno."</h6>
                                                <h6 class='card-text'><b>Email:</b> ".$emailAluno."</h6>
                                        </div>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>
                                            <span><b>Endereço</b></span><br>
                                            ".$enderecoAluno.",".$bairroAluno.",".$cidadeAluno.",".$estadoAluno.",".$cepAluno."</li>
                                            <li class='list-group-item'>
                                            <div class='row'>";
                                                if($rgAluno == null){
                                                    $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>RG</b>: Não cadastrado</div>";
                                                }else {
                                                    $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>RG</b>: ".$rgAluno."</div>";
                                                }
                                                if($cpfAluno == null){
                                                    $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>CPF</b>: Não cadastrado</div>";
                                                }else{
                                                    $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><b>CPF</b>: ".$cpfAluno."</div>";
                                                }
                                                $alunoNaoPossuiResponsavel .= "</div>
                                            </li>
                                            <li class='list-group-item'><b>Modalidade:</b> ".$modalidade."</li>
                                            <li class='list-group-item'><b>Prajied:</b> ".$nivelAluno."</li>
                                            <li class='list-group-item'><b>CONTRATO</b><br><br>
                                            <div class='row'>";
                                                while($contrato = mysqli_fetch_assoc($resultado_buscar_contrato_aluno)){
                                                    $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'>".$contrato['TIPO_PLANO']."</div>";
                                                    if($contrato['STATUS_CONTRATO'] == 'Ativo'){
                                                        $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><span class='label label-success'>".$contrato['STATUS_CONTRATO']."</span></div>";
                                                    }else{
                                                        $alunoNaoPossuiResponsavel .= "<div class='col-lg-6'><span class='label label-danger'>".$contrato['STATUS_CONTRATO']."</span></div>";
                                                    }
                                                }
                                            $alunoNaoPossuiResponsavel .= "</li>
                                        </ul>
                                    </div>";

    echo $alunoNaoPossuiResponsavel;
    }

    function idadeAluno($dataNascimentoAluno) {
        $dataAtual = date('Y');
        $idadeDoAluno =  $dataAtual - date('Y', strtotime($dataNascimentoAluno));

        return $idadeDoAluno;
    }
?>