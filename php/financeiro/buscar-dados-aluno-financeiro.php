<?php
	//Incluir a conexão com banco de dados
    include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));	

	//Recuperar o valor da palavra
	$cod_aluno = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$buscar_dados_aluno = "SELECT * from aluno alu
                            inner join modalidade mdl on mdl.COD_MODALIDADE = alu.COD_MODALIDADE
                            where alu.COD_ALUNO = '$cod_aluno'";
    $resultado_buscar_dados_aluno = mysqli_query($connect, $buscar_dados_aluno);
    $dados_buscar_aluno = mysqli_fetch_assoc($resultado_buscar_dados_aluno);

    if(mysqli_affected_rows($connect)){
    
        if($dados_buscar_aluno['IND_RESPONSAVEL'] == "S"){

            $buscar_responsavel_do_aluno = "SELECT * from responsavel where COD_RESPONSAVEL = '".$dados_buscar_aluno['COD_RESPONSAVEL']."'";
            $resultado_buscar_responsavel_do_aluno = mysqli_query($connect, $buscar_responsavel_do_aluno);
            $dados_buscar_responsavel_do_aluno = mysqli_fetch_assoc($resultado_buscar_responsavel_do_aluno);

            $aluno_possui_responsavel = "<div class='row'>
                                            <div class='col-md-8'>
                                                <div class='form-group'>
                                                    <h4>Dados do aluno</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Nome Completo do aluno</label>
                                                    <input type='text' class='form-control input-default' name='nome_aluno' readonly=“true” style='text-transform: uppercase;' value='".$dados_buscar_aluno['NOM_ALUNO']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>RG</label>
                                                    <input type='text' class='form-control input-default' name='rg_aluno' readonly=“true” style='text-transform: uppercase;' value='".$dados_buscar_aluno['RG']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>CPF</label>
                                                    <input type='text' class='form-control input-default' name='cpf_aluno' minlength='11' maxlength='11' readonly=“true” value='".$dados_buscar_aluno['CPF']."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>Data de nascimento</label>
                                                    <input type='date' class='form-control input-default' name='data_aluno' maxlength='10' readonly=“true” value='".$dados_buscar_aluno['DATA']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <label>Modalidade</label>
                                                <input type='text' class='form-control input-default' name='nivel' minlength='11' maxlength='11' readonly=“true” value='".$dados_buscar_aluno['DSC_MODALIDADE']."'>
                                            </div>
                                            <div class='col-md-3'>
                                                <label>Prajied</label>
                                                <input type='text' class='form-control input-default' name='nivel' minlength='11' maxlength='11' readonly=“true” value='".$dados_buscar_aluno['NIVEL']."'>
                                            </div>
                                            <div class='col-md-3'>
                                                <label>Status Aluno</label>
                                                <input type='text' class='form-control input-default' name='status' minlength='11' maxlength='11' readonly=“true” value='".$dados_buscar_aluno['STATUS']."'>
                                            </div>
                                        </div>
                                        </div>
                                        <br><br>
                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class='form-group'>
                                                    <h4>Dados do responsável</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-8'>
                                                <div class='form-group'>
                                                    <label>Nome Completo do responsável</label>
                                                    <input type='text' class='form-control input-default' name='nome_responsavel' style='text-transform: uppercase;' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['NOM_RESPONSAVEL']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label>Telefone Fixo/Celular</label>
                                                    <input type='text' class='form-control input-default' name='telefone' minlength='9' maxlength='9' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['TELEFONE']."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>CPF</label>
                                                    <input type='text' class='form-control input-default' name='cpf_responsavel' minlength='11' maxlength='11' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['CPF']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>RG/Identidade</label>
                                                    <input type='text' class='form-control input-default' name='rg' style='text-transform: uppercase;' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['RG']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>Data de nascimento</label>
                                                    <input type='date' class='form-control input-default' name='data_responsavel' maxlength='10' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['DATA_NASCIMENTO']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label for='exampleInputEmail1'>E-mail</label>
                                                    <input type='email' class='form-control input-default' name='email' style='text-transform: uppercase;' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['EMAIL']."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-2'>
                                                <div class='form-group'>
                                                    <label>CEP</label>
                                                    <input type='text' class='form-control input-default' name='cep' minlength='9' maxlength='9' id='cep' readonly=“true” value='".$dados_buscar_responsavel_do_aluno['CEP']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-10'>
                                                <div class='form-group'>
                                                    <label>Endereço</label>
                                                    <input type='text' class='form-control input-default' name='endereco' readonly=“true” id='rua'value='".$dados_buscar_responsavel_do_aluno['ENDERECO']."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Bairro</label>
                                                    <input type='text' class='form-control input-default' name='bairro' readonly=“true” id='bairro' value='".$dados_buscar_responsavel_do_aluno['BAIRRO']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label>Cidade</label>
                                                    <input type='text' class='form-control input-default' name='cidade' readonly=“true” id='cidade' value='".$dados_buscar_responsavel_do_aluno['CIDADE']."'>
                                                </div>
                                            </div>
                                            <div class='col-md-1'>
                                                <div class='form-group'>
                                                    <label>UF</label>
                                                    <input type='text' class='form-control input-default' name='estado' readonly=“true” id='uf' value='".$dados_buscar_responsavel_do_aluno['ESTADO']."'>
                                                </div>
                                            </div>
                                        </div>";
                                    
                                        echo $aluno_possui_responsavel;

        }else{

            $aluno_nao_possui_responsavel = "<div class='row'>
                                                <div class='col-md-8'>
                                                    <div class='form-group'>
                                                        <label>Nome Completo do aluno</label>
                                                        <input type='text' class='form-control input-default' name='nome_aluno_nao' style='text-transform: uppercase;' readonly=“true” value='".$dados_buscar_aluno['NOM_ALUNO']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-4'>
                                                    <div class='form-group'>
                                                        <label>Telefone Fixo/Celular</label>
                                                        <input type='text' class='form-control input-default' name='telefone_nao' minlength='9' maxlength='9' readonly=“true” value='".$dados_buscar_aluno['TELEFONE']."'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-3'>
                                                    <div class='form-group'>
                                                        <label>CPF</label>
                                                        <input type='number' class='form-control input-default' name='cpf_nao' minlength='11' maxlength='11' readonly=“true” value='".$dados_buscar_aluno['CPF']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-3'>
                                                    <div class='form-group'>
                                                        <label>RG/Identidade</label>
                                                        <input type='text' class='form-control input-default' name='rg_nao' style='text-transform: uppercase;' readonly=“true” value='".$dados_buscar_aluno['RG']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-3'>
                                                    <div class='form-group'>
                                                        <label>Data de nascimento</label>
                                                        <input type='date' class='form-control input-default' name='data_nao' maxlength='10' readonly=“true” readonly=“true” value='".$dados_buscar_aluno['DATA']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-3'>
                                                    <div class='form-group'>
                                                        <label for='exampleInputEmail1'>E-mail</label>
                                                        <input type='email' class='form-control input-default' name='email_nao' style='text-transform: uppercase;' readonly=“true” value='".$dados_buscar_aluno['EMAIL']."'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-2'>
                                                    <div class='form-group'>
                                                        <label>CEP</label>
                                                        <input type='text' class='form-control input-default' name='cep_nao' minlength='8' maxlength='9' readonly=“true” value='".$dados_buscar_aluno['CEP']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-10'>
                                                    <div class='form-group'>
                                                        <label>Endereço</label>
                                                        <input type='text' class='form-control input-default' name='endereco_nao' readonly=“true” value='".$dados_buscar_aluno['ENDERECO']."'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6'>
                                                    <div class='form-group'>
                                                        <label>Bairro</label>
                                                        <input type='text' class='form-control input-default' name='bairro_nao' readonly=“true” value='".$dados_buscar_aluno['BAIRRO']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-5'>
                                                    <div class='form-group'>
                                                        <label>Cidade</label>
                                                        <input type='text' class='form-control input-default' name='cidade_nao' readonly=“true” value='".$dados_buscar_aluno['CIDADE']."'>
                                                    </div>
                                                </div>
                                                <div class='col-md-1'>
                                                    <div class='form-group'>
                                                        <label>UF</label>
                                                        <input type='text' class='form-control input-default' name='estado_nao' readonly=“true” value='".$dados_buscar_aluno['ESTADO']."'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-4'>
                                                    <label>Modalidade</label>
                                                    <input type='text' class='form-control input-default' name='nivel' readonly=“true” value='".$dados_buscar_aluno['DSC_MODALIDADE']."'>
                                                </div>
                                                <div class='col-md-4'>
                                                    <label>Prajied</label>
                                                    <input type='text' class='form-control input-default' name='nivel' readonly=“true” value='".$dados_buscar_aluno['NIVEL']."'>
                                                </div>
                                                <div class='col-md-4'>
                                                    <label>Status Aluno</label>
                                                    <input type='text' class='form-control input-default' name='status' readonly=“true” value='".$dados_buscar_aluno['STATUS']."'>
                                                </div>
                                            </div>";

                                            echo $aluno_nao_possui_responsavel;
        }

    }else{
        echo "<div class='alert alert-danger' role='alert'>Aluno não encontrado</div>";
    }
?>