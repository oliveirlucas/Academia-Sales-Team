<?php

    session_start();

    include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

    if(!isset($_SESSION['usuariologado']) and !isset($_SESSION['senhalogado'])){
        header("Location: ../index.php");

        exit;

    }else{
        if((time() - $_SESSION['timeout']) > 600){
            header("Location: ../php/sair.php");
        }
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Lista de Alunos</h4>
                                <br>
                                <input type="text" class="form-control input-default" placeholder="Pesquisar" id="filtro">
                                <br>
                                <div class="table-responsive">
                                    <table class="table header-border">
                                        <thead>
                                            <tr>
                                                <th>Matricula</th>
                                                <th>Nome completo</th>
                                                <th>Nome do Responsável</th>
                                                <th>CPF</th>
                                                <th>RG</th>
                                                <th>Telefone</th>
                                                <th>Prajied</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="filtrobusca">
                                            <?php
                                            //Receber o número da página
                                            $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                                            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

                                            //Setar a quantidade de itens por pagina
                                            $qnt_result_pg = 10;

                                            //calcular o inicio visualização
                                            $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

                                            $result_usuarios = "SELECT * FROM aluno LIMIT $inicio, $qnt_result_pg";
                                            $resultado_usuarios = mysqli_query($connect, $result_usuarios);
                                            while ($dado = mysqli_fetch_assoc($resultado_usuarios)) { ?>
                                                <tr>
                                                    <td><?php echo $dado["COD_ALUNO"]; ?></td>
                                                    <td><?php echo $dado["NOME"]; ?></td>
                                                    <td><?php echo $dado["RESPONSAVEL"]; ?></td>
                                                    <td><?php echo $dado["CPF"]; ?></td>
                                                    <td><?php echo $dado["RG"]; ?></td>
                                                    <td><?php echo $dado["TELEFONE"]; ?></td>
                                                    <td><?php echo $dado["NIVEL"]; ?></td>
                                                    <?php
                                                        if ($dado["STATUS"] == 'Ativo') {
                                                            ?>
                                                        <td><span class="label label-success"><?php echo $dado['STATUS']; ?></span></td>
                                                    <?php
                                                        } else {
                                                            ?>
                                                        <td><span class="label label-danger"><?php echo $dado["STATUS"]; ?></span></td>
                                                    <?php
                                                        }
                                                        ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    //Paginação - Somar a quantidade de usuários
                                    $result_pg = "SELECT COUNT(COD_ALUNO) AS num_result FROM ALUNO";
                                    $resultado_pg = mysqli_query($connect, $result_pg);
                                    $row_pg = mysqli_fetch_assoc($resultado_pg);
                                    //Quantidade de pagina 
                                    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

                                    //Limitar os link antes depois
                                    $max_links = 1; ?>
                                    <center>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="lista-alunos.php?pagina=1">Primeira pagina</a></li>

                                                <?php for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) { ?>
                                                    <?php if ($pag_ant >= 1) { ?>
                                                        <li class="page-item"><a class="page-link" href="lista-alunos.php?pagina=<?php echo $pag_ant ?>"><?php echo $pag_ant ?></a></li>
                                                    <?php    } ?>
                                                <?php } ?>

                                                <li class="paginate_button page-item active"><a class="page-link"><?php echo $pagina ?></a></li>

                                                <?php for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) { ?>
                                                    <?php if ($pag_dep <= $quantidade_pg) { ?>
                                                        <li class="page-item"><a class="page-link" href="lista-alunos.php?pagina=<?php echo $pag_dep ?>"><?php echo $pag_dep ?></a></li>
                                                    <?php    } ?>
                                                <?php } ?>

                                                <li class="page-item"><a class="page-link" href="lista-alunos.php?pagina=<?php echo $quantidade_pg ?>">Ultima pagina</a></li>
                                            </ul>
                                        </nav>
                                    </center>
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
    <script>
        $(document).ready(function() {
            $("#filtro").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#filtrobusca tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


    <script src="../js/dashboard/dashboard-1.js"></script>

</body>

</html>