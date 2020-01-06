<?php

include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

//Trazer o total de alunos
$total_alunos = "SELECT COUNT(*) as total_aluno FROM aluno";
$resultado_total_alunos = mysqli_query($connect, $total_alunos);
$qtd_alunos_total = mysqli_fetch_assoc($resultado_total_alunos);

//Trazer o total de alunos ativos
$total_alunos_ativos = "SELECT COUNT(*) as total_aluno_ativos FROM aluno where status='Ativo'";
$resultado_total_alunos_ativos = mysqli_query($connect, $total_alunos_ativos);
$qtd_total_alunos_ativos = mysqli_fetch_assoc($resultado_total_alunos_ativos);

//Trazer o total de faturas em aberto
$total_faturas_aberta = "SELECT COUNT(*) as total_faturas_aberta FROM pagamento where status='Aberto'";
$resultado_total_faturas_aberta = mysqli_query($connect, $total_faturas_aberta);
$qtd_total_faturas_aberta = mysqli_fetch_assoc($resultado_total_faturas_aberta);

//Trazer o total de lucro anual
$total_valor = "SELECT SUM(VALOR) AS total_valor FROM pagamento WHERE STATUS='Pago'";
$resultado_total_valor = mysqli_query($connect, $total_valor);
$qtd_total_valor = mysqli_fetch_assoc($resultado_total_valor);

//Trazer o todos os alunos que possuem pendencia financeira

$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

$qnt_result_pg = 5;

$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

$total_pagamento_pendente = "SELECT pag.COD_PAGAMENTO, alu.NOM_ALUNO, pag.DATA_VENCIMENTO, pag.STATUS FROM pagamento pag
                            inner join aluno alu
                            on alu.cod_aluno = pag.cod_aluno 
                            where pag.STATUS = 'Aberto' LIMIT $inicio, $qnt_result_pg";
$resultado_pagamento_pendente = mysqli_query($connect, $total_pagamento_pendente);

$result_pagina_pagamento_pendente = "SELECT COUNT(COD_PAGAMENTO) AS num_result FROM pagamento
                                    where STATUS='Aberto'";
$resultado_pagina_pagamento_pendente = mysqli_query($connect, $result_pagina_pagamento_pendente);
$row_pg = mysqli_fetch_assoc($resultado_pagina_pagamento_pendente);
$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
$max_links = 1;


//Soma do lucro de janeiro
$total_ganho_janeiro = "SELECT SUM(VALOR) AS JANEIRO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-01-01') AND ('2020-01-31')";
$resultado_total_ganho_janeiro = mysqli_query($connect, $total_ganho_janeiro);
$qtd_total_ganho_janeiro = mysqli_fetch_assoc($resultado_total_ganho_janeiro);

//Soma do lucro de fevereiro
$total_ganho_fevereiro = "SELECT SUM(VALOR) AS FEVEREIRO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-02-01') AND ('2020-02-31')";
$resultado_total_ganho_fevereiro = mysqli_query($connect, $total_ganho_fevereiro);
$qtd_total_ganho_fevereiro = mysqli_fetch_assoc($resultado_total_ganho_fevereiro);

//Soma do lucro de março
$total_ganho_marco = "SELECT SUM(VALOR) AS MARCO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-03-01') AND ('2020-03-31')";
$resultado_total_ganho_marco = mysqli_query($connect, $total_ganho_marco);
$qtd_total_ganho_marco = mysqli_fetch_assoc($resultado_total_ganho_marco);

//Soma do lucro de abril
$total_ganho_abril = "SELECT SUM(VALOR) AS ABRIL FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-04-01') AND ('2020-04-31')";
$resultado_total_ganho_abril = mysqli_query($connect, $total_ganho_abril);
$qtd_total_ganho_abril = mysqli_fetch_assoc($resultado_total_ganho_abril);

//Soma do lucro de maio
$total_ganho_maio = "SELECT SUM(VALOR) AS MAIO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-05-01') AND ('2020-05-31')";
$resultado_total_ganho_maio = mysqli_query($connect, $total_ganho_maio);
$qtd_total_ganho_maio = mysqli_fetch_assoc($resultado_total_ganho_maio);

//Soma do lucro de junho
$total_ganho_junho = "SELECT SUM(VALOR) AS JUNHO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-06-01') AND ('2020-06-31')";
$resultado_total_ganho_junho = mysqli_query($connect, $total_ganho_junho);
$qtd_total_ganho_junho = mysqli_fetch_assoc($resultado_total_ganho_junho);

//Soma do lucro de julho
$total_ganho_julho = "SELECT SUM(VALOR) AS JULHO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-07-01') AND ('2020-07-31')";
$resultado_total_ganho_julho = mysqli_query($connect, $total_ganho_julho);
$qtd_total_ganho_julho = mysqli_fetch_assoc($resultado_total_ganho_julho);

//Soma do lucro de agosto
$total_ganho_agosto = "SELECT SUM(VALOR) AS AGOSTO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-08-01') AND ('2020-08-31')";
$resultado_total_ganho_agosto = mysqli_query($connect, $total_ganho_agosto);
$qtd_total_ganho_agosto = mysqli_fetch_assoc($resultado_total_ganho_agosto);

//Soma do lucro de setembro
$total_ganho_setembro = "SELECT SUM(VALOR) AS SETEMBRO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-09-01') AND ('2020-09-31')";
$resultado_total_ganho_setembro = mysqli_query($connect, $total_ganho_setembro);
$qtd_total_ganho_setembro = mysqli_fetch_assoc($resultado_total_ganho_setembro);

//Soma do lucro de outubro
$total_ganho_outubro = "SELECT SUM(VALOR) AS OUTUBRO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-10-01') AND ('2020-10-31')";
$resultado_total_ganho_outubro = mysqli_query($connect, $total_ganho_outubro);
$qtd_total_ganho_outubro = mysqli_fetch_assoc($resultado_total_ganho_outubro);

//Soma do lucro de novembro
$total_ganho_novembro = "SELECT SUM(VALOR) AS NOVEMBRO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-11-01') AND ('2020-11-31')";
$resultado_total_ganho_novembro = mysqli_query($connect, $total_ganho_novembro);
$qtd_total_ganho_novembro = mysqli_fetch_assoc($resultado_total_ganho_novembro);

//Soma do lucro de dezembro
$total_ganho_dezembro = "SELECT SUM(VALOR) AS DEZEMBRO FROM pagamento WHERE STATUS = 'Pago' and DATA_VENCIMENTO BETWEEN ('2020-12-01') AND ('2020-12-31')";
$resultado_total_ganho_dezembro = mysqli_query($connect, $total_ganho_dezembro);
$qtd_total_ganho_dezembro = mysqli_fetch_assoc($resultado_total_ganho_dezembro);

?>

