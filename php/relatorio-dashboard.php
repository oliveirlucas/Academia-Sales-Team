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

$total_pagamento_pendente = "SELECT pag.COD_PAGAMENTO, alu.NOME, pag.DATA_VENCIMENTO, pag.STATUS FROM pagamento pag
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

?>
