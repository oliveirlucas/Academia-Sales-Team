<?php
include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

print 'Iniciando atualização!<br>';

$gerar_mensalidade = new Gerar_mensalidade();
print 'Gerando boletos para mensalidades 2 vezes por semana valor R$ 90,00 ...<br>';
$gerar_mensalidade = mensalidade_2x();
print 'Finalizado<br>';



//---------------------------------- Gerando boletos para mensalidades 2 vezes por semana -------------------------------------------
function mensalidade_2x(){

    return;
}

?>