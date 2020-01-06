<?php

session_start();

include_once(realpath(dirname(__FILE__) . "/../php/relatorio-dashboard.php"));

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
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
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
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js?hcode=c11e6e3cfefb406e8ce8d99fa8368d33"></script>
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css?hcode=c11e6e3cfefb406e8ce8d99fa8368d33" type="text/css" rel="stylesheet">
</head>


<body>

    <!--*******************
        Preloader start
    ********************-->
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
                <a href="./dashboard.php">
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

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total de alunos</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $qtd_alunos_total['total_aluno']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Alunos ativos</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $qtd_total_alunos_ativos['total_aluno_ativos']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Faturas em aberto</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $qtd_total_faturas_aberta['total_faturas_aberta']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Receita Anual</h3>
                                <div class="d-inline-block">
                                    <?php if ($qtd_total_valor['total_valor'] == null) { ?>
                                        <h2 class="text-white">R$ 0.00</h2>
                                    <?php } else { ?>
                                        <h2 class="text-white">R$ <?php echo $qtd_total_valor['total_valor']; ?></h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Receita mensal</h4>
                                <br>
                                <div id="container" style="height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Alunos com pendencia financeira</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Codigo da fatura</th>
                                                <th>Nome completo</th>
                                                <th>Data vencimento</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($qtd_pagamento_pendente = mysqli_fetch_assoc($resultado_pagamento_pendente)) {
                                                $data = $qtd_pagamento_pendente['DATA_VENCIMENTO'];
                                            ?>
                                                <tr>
                                                    <th><?php echo $qtd_pagamento_pendente['COD_PAGAMENTO']; ?></th>
                                                    <td><?php echo $qtd_pagamento_pendente['NOM_ALUNO']; ?></td>
                                                    <td><?php echo date('d/m/Y', strtotime($data)) ?></td>
                                                    <td><span class="label label-danger"><?php echo $qtd_pagamento_pendente['STATUS']; ?></span></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <center>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="dashboard.php?pagina=1">Primeira pagina</a></li>

                                                <?php for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) { ?>
                                                    <?php if ($pag_ant >= 1) { ?>
                                                        <li class="page-item"><a class="page-link" href="dashboard.php?pagina=<?php echo $pag_ant ?>"><?php echo $pag_ant ?></a></li>
                                                    <?php    } ?>
                                                <?php } ?>

                                                <li class="paginate_button page-item active"><a class="page-link"><?php echo $pagina ?></a></li>

                                                <?php for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) { ?>
                                                    <?php if ($pag_dep <= $quantidade_pg) { ?>
                                                        <li class="page-item"><a class="page-link" href="dashboard.php?pagina=<?php echo $pag_dep ?>"><?php echo $pag_dep ?></a></li>
                                                    <?php    } ?>
                                                <?php } ?>

                                                <li class="page-item"><a class="page-link" href="dashboard.php?pagina=<?php echo $quantidade_pg ?>">Ultima pagina</a></li>
                                            </ul>
                                        </nav>
                                    </center>
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



        <script src="../js/dashboard/dashboard-1.js"></script>
        <script>
            anychart.onDocumentReady(function() {
                // create column chart
                var chart = anychart.column();

                // turn on chart animation
                chart.animation(true);

                // set chart title text settings

                // create area series with passed data
                var series = chart.column([
                    ['Janeiro', <?php echo $qtd_total_ganho_janeiro['JANEIRO']?>],
                    ['Fevereiro', <?php echo $qtd_total_ganho_fevereiro['FEVEREIRO']?>],
                    ['Março', <?php echo $qtd_total_ganho_marco['MARCO']?>],
                    ['Abril', <?php echo $qtd_total_ganho_abril['ABRIL']?>],
                    ['Maio', <?php echo $qtd_total_ganho_maio['MAIO']?>],
                    ['Junho', <?php echo $qtd_total_ganho_junho['JUNHO']?>],
                    ['Julho', <?php echo $qtd_total_ganho_julho['JULHO']?>],
                    ['Agosto', <?php echo $qtd_total_ganho_agosto['AGOSTO']?>],
                    ['Setembro', <?php echo $qtd_total_ganho_setembro['SETEMBRO']?>],
                    ['Outubro', <?php echo $qtd_total_ganho_outubro['OUTUBRO']?>],
                    ['Novembro', <?php echo $qtd_total_ganho_novembro['NOVEMBRO']?>],
                    ['Dezembro', <?php echo $qtd_total_ganho_dezembro['DEZEMBRO']?>]
                ]);

                // set series tooltip settings
                series.tooltip().titleFormat('{%X}');

                series.tooltip()
                    .position('center-top')
                    .anchor('center-bottom')
                    .offsetX(0)
                    .offsetY(5)
                    .format('R$ {%Value}');

                // set scale minimum
                chart.yScale().minimum(0);

                // set yAxis labels formatter
                chart.yAxis().labels().format('R$ {%Value}');

                // tooltips position and interactivity settings
                chart.tooltip().positionMode('point');
                chart.interactivity().hoverMode('by-x');

                // axes titles
                chart.xAxis().title('Meses do ano');
                chart.yAxis().title('');

                // set container id for the chart
                chart.container('container');

                // initiate chart drawing
                chart.draw();
            });
        </script>

</body>

</html>