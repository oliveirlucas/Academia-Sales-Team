<?php

session_start();

include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

if (!isset($_SESSION['usuariologado']) and !isset($_SESSION['senhalogado'])) {
    header("Location: ../index.php");

    exit;
}

$id = $_SESSION['usuariologado'];
$sql = "SELECT * FROM funcionario WHERE USUARIO = '$id'";
$resultado_funcionario = mysqli_query($connect, $sql);
$dados_funcionario = mysqli_fetch_array($resultado_funcionario);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Atualizar aluno</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <!-- Pignose Calender -->
    <link href="../plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-icons.css" rel="stylesheet">
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="../pages/dashboard.php">
                    <b class="logo-abbr"><img src="../images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="../images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="../images/logo-text.png" alt="" width="180" height="20">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-content clearfix">
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                <span><?php echo $dados_funcionario['NOME']; ?></span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="../php/sair.php"><i class="icon-key"></i> <span>Sair</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="../pages/dashboard.php" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-people"></i><span class="nav-text">Cadastro</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../pages/cadastro-aluno.php">Cadastro Aluno</a></li>
                            <li><a href="../pages/atualizar-aluno.php">Atualizar aluno</a></li>
                            <li><a href="../pages/lista-alunos.php">Lista de Alunos</a></li>
                            <li><a href="../pages/contrato.php">Contrato/Trancamento</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-credit-card"></i><span class="nav-text">Financeiro</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../pages/mensalidade.php">Mensalidade</a></li>
                            <li><a href="../pages/ficha-financeira.php">Ficha financeira</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Personal</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../pages/aula.php">Cadastrar aula</a></li>
                            <li><a href="../pages/controle-aulas.php">Controle de aulas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <?php
                                    if (isset($_SESSION['msgcadastro'])) {
                                        echo $_SESSION['msgcadastro'];
                                        unset($_SESSION['msgcadastro']);
                                    }
                                    ?>
                                </div>
                                <h4 class="card-title">Formulário de atualização dos dados do aluno</h4>
                                <br>
                                <div class="basic-form">
                                    <form action=../php/atualizar-dados-aluno.php method="post">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Matricula</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Nº" name="matricula_filtro">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nome Completo do aluno</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Nome completo" name="nome">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Telefone Fixo/Celular</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Telefone" name="telefone" minlength="15" maxlength="15" onkeypress="mascara(this)">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">E-mail</label>
                                                    <input type="email" class="form-control input-default" required="required" placeholder="E-mail" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Responsável</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Insira aqui o nome completo do responsável" name="responsavel">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>CPF</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="CPF" name="cpf" minlength="14" maxlength="14" onkeypress="mascaraCpf(this)">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>RG/Identidade</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Numero da identidade" name="rg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Data de nascimento</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Data" name="data" maxlength="10" onkeypress="mascaraData(this)">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Endereço</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Endereço" name="endereco">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Bairro" name="bairro">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Cidade" name="cidade">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Estado" name="estado">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="CEP residencial" name="cep" minlength="9" maxlength="9" onkeypress="mascaraCep(this)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Prajied</label>
                                                    <input type="text" class="form-control input-default" required="required" placeholder="Khan atual" name="nivel">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Status Aluno</label>
                                                <select class="form-control" name="status">
                                                    <option>Ativo</option>
                                                    <option>Inativo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Se o aluno for o proprio responsável insira no campo
                                                        <b>"Responsável"</b> o texto <b>"Proprio aluno"</b>, caso
                                                        contrario,
                                                        insira no campo o <b>nome completo do responsável</b></label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" class="alert-dismissible">Atualizar</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Desenvolvido por Academy System</a> 2019</p>
        </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="../plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="../plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="../plugins/d3v3/index.js"></script>
    <script src="../plugins/topojson/topojson.min.js"></script>
    <script src="../plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="../plugins/raphael/raphael.min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="../plugins/chartist/js/chartist.min.js"></script>
    <script src="../plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $("input[name='matricula_filtro']").blur(function() {
                var $nome = $("input[name='nome']");
                var $telefone = $("input[name='telefone']");
                var $email = $("input[name='email']");
                var $responsavel = $("input[name='responsavel']");
                var $cpf = $("input[name='cpf']");
                var $rg = $("input[name='rg']");
                var $data = $("input[name='data']");
                var $endereco = $("input[name='endereco']");
                var $cidade = $("input[name='cidade']");
                var $cep = $("input[name='cep']");
                var $bairro = $("input[name='bairro']");
                var $estado = $("input[name='estado']");
                var $nivel = $("input[name='nivel']");
                var $status = $("input[name='status']");
                $.getJSON('../php/filtro_atualizar_aluno.php', {
                    matricula_filtro: $(this).val()
                }, function(json) {
                    $nome.val(json.nome);
                    $telefone.val(json.telefone);
                    $email.val(json.email);
                    $responsavel.val(json.responsavel);
                    $cpf.val(json.cpf);
                    $rg.val(json.rg);
                    $data.val(json.data);
                    $endereco.val(json.endereco);
                    $cidade.val(json.cidade);
                    $cep.val(json.cep);
                    $bairro.val(json.bairro);
                    $estado.val(json.estado);
                    $nivel.val(json.nivel);
                    $status.val(json.status);
                });
            });
        });
    </script>
    <script type="text/javascript">
        function mascara(telefone) {
            if (telefone.value.length == 0)
                telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if (telefone.value.length == 3)
                telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.

            if (telefone.value.length == 10)
                telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
        }
    </script>
    <script type="text/javascript">
        function mascaraData(data) {
            if (data.value.length == 2)
                data.value = data.value + '/'; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if (data.value.length == 5)
                data.value = data.value + '/'; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
        }
    </script>
    <script type="text/javascript">
        function mascaraCep(data) {
            if (data.value.length == 5)
                data.value = data.value + '-'; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
        }
    </script>
    <script type="text/javascript">
        function mascaraCpf(cpf) {
            if (cpf.value.length == 3)
                cpf.value = cpf.value + '.'; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
            if (cpf.value.length == 7)
                cpf.value = cpf.value + '.'; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
            if (cpf.value.length == 11)
                cpf.value = cpf.value + '-'; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
        }
    </script>
    <script src="../js/dashboard/dashboard-1.js"></script>

</body>

</html>