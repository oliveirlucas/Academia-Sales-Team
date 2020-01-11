<?php

    session_start();

    include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

    if(!isset($_SESSION['usuariologado']) and !isset($_SESSION['senhalogado'])){
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
    <title>Cadastrar aula</title>
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
    <link href="./plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155846840-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-155846840-1');
    </script>


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
                        <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span><?php echo $dados_funcionario['NOME']; ?></span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
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
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note"></i><span class="nav-text">Contrato</span>
                        </a>
                        <ul aria-expanded="false">
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
                            <i class="icon-magnifier-add"></i><span class="nav-text">Personal</span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Cadastrar Aula</h4>
                                <br>
                                <div class="basic-form">
                                    <form action=../php/cadastro-aula.php method="post">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Matricula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº" name="cod_aluno" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Aula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº" name="cod_aula" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Status aula</label>
                                                <select class="form-control" name="status_aula">
                                                    <option selected="selected">Selecione o status
                                                    </option>
                                                    <option>Aberto</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" class="alert-dismissible">Cadastrar</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Atualizar Aula</h4>
                                <br>
                                <div class="basic-form">
                                    <form method="post" action=../php/atualizar-aula.php>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Codigo da aula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº" name="cod_aula">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Matricula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº aluno" name="cod_matricula" readonly=“true”>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Aluno</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nome do aluno" name="nome" readonly=“true”>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Numero da aula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº" name="numero_aula" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Status aula</label>
                                                <select class="form-control" name="status_aula">
                                                    <option selected="selected">Selecione o status
                                                    </option>
                                                    <option>Presente</option>
                                                    <option>Aberto</option>
                                                </select>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Deletar Aula</h4>
                                <br>
                                <div class="basic-form">
                                    <form action=../php/deletar-aula.php method="post">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Codigo da aula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº" name="codigo_aula">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Matricula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nº" name="codigo_aluno" readonly=“true”>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Aluno</label>
                                                    <input type="text" class="form-control input-default" placeholder="Nome do aluno" name="nome_aluno" readonly=“true”>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Status da aula</label>
                                                    <input type="text" class="form-control input-default" placeholder="Status" name="status_atual" readonly=“true”>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right" class="alert-dismissible"> Deletar</button>
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
                <p>Copyright &copy; Desenvolvido por Academy System</a>
                    2019</p>
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
            $("input[name='cod_aula']").blur(function() {
                var $cod_matricula = $("input[name='cod_matricula']");
                var $nome = $("input[name='nome']");
                var $numero_aula = $("input[name='numero_aula']");
                var $status_aula = $("input[name='status_aula']");
                $.getJSON('../php/update-trazer-aula.php', {
                    cod_aula: $(this).val()
                }, function(json) {
                    $cod_matricula.val(json.cod_matricula);
                    $nome.val(json.nome);
                    $numero_aula.val(json.numero_aula);
                    $status_aula.val(json.status_aula);
                });
            });
        });
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $("input[name='codigo_aula']").blur(function() {
                var $codigo_aluno = $("input[name='codigo_aluno']");
                var $nome_aluno = $("input[name='nome_aluno']");
                var $status_atual = $("input[name='status_atual']");
                $.getJSON('../php/trazer-aula.php', {
                    codigo_aula: $(this).val()
                }, function(json) {
                    $codigo_aluno.val(json.codigo_aluno);
                    $nome_aluno.val(json.nome_aluno);
                    $status_atual.val(json.status_atual);
                });
            });
        });
    </script>

    <script src="../js/dashboard/dashboard-1.js"></script>
    <script src="../plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="../plugins/sweetalert/js/sweetalert.init.js"></script>

</body>

</html>