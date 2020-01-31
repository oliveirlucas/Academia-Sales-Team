<?php

    $jurosEMulta = correcaoJurosEMulta();

function correcaoJurosEMulta(){

    include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

    date_default_timezone_set("America/Sao_Paulo");
    $date_sem_horas = date("Y-m-d");
    $date_com_horas = date("Y-m-d_H-i-s");

    $titulos_em_vencimento = "SELECT pag.COD_PAGAMENTO,pag.DATA_VENCIMENTO,pag.VALOR,pla.VALOR_PLANO,alu.NOM_ALUNO,pag.DAT_OPERACAO 
                                FROM contrato con
                                inner join aluno alu 		on alu.COD_ALUNO = con.COD_ALUNO
                                INNER JOIN pagamento  pag 	on pag.COD_ALUNO = alu.COD_ALUNO        
                                inner join planos pla  		on pla.COD_PLANO = con.COD_PLANO
                                WHERE pag.DATA_VENCIMENTO < now() 
                                AND pag.TIPO_PAGAMENTO = 'Mensalidade' 
                                AND pag.STATUS = 'Aberto'";
    $resultado_titulos_em_vencimento = mysqli_query($connect, $titulos_em_vencimento) or die (mysqli_error($connect));


    while($titulos = mysqli_fetch_assoc($resultado_titulos_em_vencimento))
    {
        $cod_titulo = $titulos['COD_PAGAMENTO'];
        $data_titulos = $titulos['DATA_VENCIMENTO'];
        $nom_aluno = $titulos['NOM_ALUNO'];
        $valor_plano = $titulos['VALOR_PLANO'];
        $data_operacao = $titulos['DAT_OPERACAO'];
        
        if($data_operacao == $date_sem_horas){
            $msg = "Titulo já corrigido | Aluno: $nom_aluno | Data da operação: $date_sem_horas\n";
            logMe($msg,$date_com_horas);
        }else{
            $valor_corrigido = calcular($date_sem_horas,$data_titulos,$valor_plano);
            atualizarValor($valor_corrigido,$cod_titulo,$date_sem_horas,$nom_aluno,$date_com_horas);
        }
    }
}

function calcular($date_sem_horas,$data_titulos,$valor_plano){

        $diferenca = strtotime($date_sem_horas) - strtotime($data_titulos);
        $dias = floor($diferenca / (60 * 60 * 24));

        $data1 = new DateTime( $date_sem_horas );
        $data2 = new DateTime( $data_titulos );

        $intervalo = $data1->diff($data2);
        $converterIntervaloNumero = intval($intervalo->m + 1);

        $multa = number_format(4.50, 2, '.', '');
        $multaFinal = $multa * $converterIntervaloNumero;
        $juros = $valor_plano * 0.003;
        $totalJuros = $juros * $dias;
        $calculoFinal = number_format($totalJuros + $multaFinal + $valor_plano, 2, '.', '');

        return $calculoFinal;
}

function atualizarValor($valor_corrigido,$cod_titulo,$date_sem_horas,$nom_aluno,$date_com_horas){

    require(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

    $atualizar_titulo = "UPDATE pagamento set VALOR = '$valor_corrigido', DAT_OPERACAO = '$date_sem_horas' WHERE COD_PAGAMENTO = '$cod_titulo'";
    $resultado_atualizar_titulo = mysqli_query($connect, $atualizar_titulo) or die (mysqli_error($connect));

    if(mysqli_affected_rows($connect)){
        $msg = "Juros e multa corrigido | Aluno: $nom_aluno | Valor: $valor_corrigido | Data da operação: $date_sem_horas\n";
        logMe($msg,$date_com_horas);
    }
}

function logMe($msg,$date_com_horas){

    $fp = fopen(realpath(dirname(__FILE__) . "/../logs/log_jurosemulta/log_".$date_com_horas.".txt", "a"));
    $escreve = fwrite($fp, $msg);
    fclose($fp);
    }
?>