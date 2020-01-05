<?php
    session_start();
    include_once(realpath(dirname(__FILE__) . "/../../db/db_connect.php"));

//Indice sim ou nao
$ind_responsavel = filter_input(INPUT_POST, 'ind_responsavel');
//Responsavel sim
//Dados do aluno
$nome_aluno = filter_input(INPUT_POST, 'nome_aluno');
$data_aluno = filter_input(INPUT_POST, 'data_aluno');
$cpf_aluno = filter_input(INPUT_POST, 'cpf_aluno');
$nivel = filter_input(INPUT_POST, 'nivel');
$status = filter_input(INPUT_POST, 'status');
//Dados do responsavel
$nome_responsavel = filter_input(INPUT_POST, 'nome_responsavel');
$ddd = filter_input(INPUT_POST, 'ddd');
$telefone = filter_input(INPUT_POST, 'telefone');
$cpf_responsavel = filter_input(INPUT_POST, 'cpf_responsavel');
$rg = filter_input(INPUT_POST, 'rg');
$data_responsavel = filter_input(INPUT_POST, 'data_responsavel');
$email = filter_input(INPUT_POST, 'email');
$cep = filter_input(INPUT_POST, 'cep');
$endereco = filter_input(INPUT_POST, 'endereco');
$numero = filter_input(INPUT_POST, 'numero');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');

//Responsavel não
//Dados do aluno
$nome_aluno_nao = filter_input(INPUT_POST, 'nome_aluno_nao');
$ddd_nao = filter_input(INPUT_POST, 'ddd_nao');
$telefone_nao = filter_input(INPUT_POST, 'telefone_nao');
$cpf_nao = filter_input(INPUT_POST, 'cpf_nao');
$rg_nao = filter_input(INPUT_POST, 'rg_nao');
$data_nao = filter_input(INPUT_POST, 'data_nao');
$email_nao = filter_input(INPUT_POST, 'email_nao');
$cep_nao = filter_input(INPUT_POST, 'cep_nao');
$endereco_nao = filter_input(INPUT_POST, 'endereco_nao');
$numero_nao = filter_input(INPUT_POST, 'numero_nao');
$bairro_nao = filter_input(INPUT_POST, 'bairro_nao');
$cidade_nao = filter_input(INPUT_POST, 'cidade_nao');
$estado_nao = filter_input(INPUT_POST, 'estado_nao');
$nivel_nao = filter_input(INPUT_POST, 'nivel_nao');
$status_nao = filter_input(INPUT_POST, 'status_nao');


    if($ind_responsavel == "Sim"){

        if($nivel == "Selecione a Prajied" || $nivel == "-- ADULTO --" || $nivel == "-- KIDS --"){
            $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Prajied não selecionada</div>";
            header("Location: ../../pages/cadastro-aluno.php");
        
        }elseif($status == "Selecione o status"){
            $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Status não selecionado</div>";
            header("Location: ../../pages/cadastro-aluno.php");
        }else{

            $buscar_cpf_aluno = "SELECT CPF FROM aluno where CPF = '$cpf_aluno'";
            $resultado_busca_cpf = mysqli_query($connect, $buscar_cpf_aluno);

            if(mysqli_affected_rows($connect)){

                $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Já existe um registro desse aluno em nosso sistema</div>";
                header("Location: ../../pages/cadastro-aluno.php");

            }else{

                $buscar_cpf_responsavel = "SELECT COD_RESPONSAVEL FROM responsavel where CPF = '$cpf_responsavel'";
                $resultado_busca_cpf_responsavel = mysqli_query($connect, $buscar_cpf_responsavel);

                if(mysqli_affected_rows($connect)){
                    $inserir_aluno = "INSERT INTO aluno (NOM_ALUNO, TELEFONE, EMAIL, CPF, RG, DATA, ENDERECO, CIDADE, ESTADO, NIVEL, STATUS, BAIRRO, CEP, DATA_REGISTRO, IND_RESPONSAVEL, COD_RESPONSAVEL) 
                                                VALUES ('$nome_aluno', NULL, NULL,'$cpf_aluno', NULL, '$data_aluno', NULL, NULL, NULL, '$nivel', '$status', NULL, NULL, now() ,'S',(
                                                    SELECT COD_RESPONSAVEL FROM responsavel where CPF = '$cpf_responsavel'))";

                    $resultado_inserir_aluno = mysqli_query($connect, $inserir_aluno);

                    if(mysqli_insert_id($connect)){

                        $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Aluno cadastrado com sucesso</div>";
                        header("Location: ../../pages/cadastro-aluno.php");
                    }else{
                        $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Aluno não cadastrado</div>";
                        header("Location: ../../pages/cadastro-aluno.php");
                    }
                }else{

                    $inserir_responsavel = "INSERT INTO responsavel (NOM_RESPONSAVEL, TELEFONE, CPF, RG, DATA_NASCIMENTO, EMAIL, CEP, ENDERECO, BAIRRO, CIDADE, ESTADO, DATA_REGISTRO) 
                                                VALUES ('$nome_responsavel', '(".$ddd.") $telefone', '$cpf_responsavel','$rg', '$data_responsavel', '$email', '$cep', '$endereco Nº".$numero."', '$bairro', '$cidade', '$estado', now())";
                    $resultado_inserir_responsavel = mysqli_query($connect, $inserir_responsavel);

                    if(mysqli_insert_id($connect)){

                        $inserir_aluno = "INSERT INTO aluno (NOM_ALUNO, TELEFONE, EMAIL, CPF, RG, DATA, ENDERECO, CIDADE, ESTADO, NIVEL, STATUS, BAIRRO, CEP, DATA_REGISTRO, IND_RESPONSAVEL, COD_RESPONSAVEL) 
                                                VALUES ('$nome_aluno', NULL, NULL,'$cpf_aluno', NULL, '$data_aluno', NULL, NULL, NULL, '$nivel', '$status', NULL, NULL, now() ,'S',(SELECT COD_RESPONSAVEL FROM responsavel where CPF = '$cpf_responsavel'))";
                        $resultado_inserir_aluno = mysqli_query($connect, $inserir_aluno);

                        if(mysqli_affected_rows($connect)){

                            $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Aluno cadastrado com sucesso</div>";
                            header("Location: ../../pages/cadastro-aluno.php");
                        }else{
                            $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Aluno não cadastrado</div>";
                            header("Location: ../../pages/cadastro-aluno.php");
                        }
                    }
                }
            }
        }       
    }else{

        if($nivel_nao == "Selecione a Prajied" || $nivel_nao == "-- ADULTO --" || $nivel_nao == "-- KIDS --"){
            $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Prajied não selecionada</div>";
            header("Location: ../../pages/cadastro-aluno.php");
        
        }elseif($status_nao == "Selecione o status"){
            $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Status não selecionado</div>";
            header("Location: ../../pages/cadastro-aluno.php");
        }else{

            $buscar_cpf_aluno = "SELECT CPF FROM aluno where CPF = '$cpf_nao'";
            $resultado_busca_cpf = mysqli_query($connect, $buscar_cpf_aluno);

            if(mysqli_affected_rows($connect)){
                $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Já existe um registro desse aluno em nosso sistema</div>";
                header("Location: ../../pages/cadastro-aluno.php");
            }else{
                $inserir_aluno  = "INSERT INTO aluno(NOM_ALUNO, TELEFONE, EMAIL, CPF, RG, DATA, ENDERECO, CIDADE, ESTADO, NIVEL, STATUS, BAIRRO, CEP, DATA_REGISTRO, IND_RESPONSAVEL, COD_RESPONSAVEL) 
                VALUES ('$nome_aluno_nao','(".$ddd_nao.") $telefone_nao','$email_nao','$cpf_nao','$rg_nao','$data_nao','$endereco_nao Nº".$numero_nao."','$cidade_nao','$estado_nao','$nivel_nao','$status_nao','$bairro_nao','$cep_nao',now(),'N',NULL)";

                $resultado_inserir_aluno = mysqli_query($connect, $inserir_aluno);

                if(mysqli_insert_id($connect)){

                    $_SESSION['msgcadastro'] = "<div class='alert alert-success' role='alert'>Aluno cadastrado com sucesso".$ind_responsavel."</div>";
                    header("Location: ../../pages/cadastro-aluno.php");
                }else{
                    $_SESSION['msgcadastro'] = "<div class='alert alert-danger' role='alert'>Aluno não cadastrado</div>";
                    header("Location: ../../pages/cadastro-aluno.php");
                }
            }
        }
    }

?>

