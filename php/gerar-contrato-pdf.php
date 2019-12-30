<?php

include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$cod_aluno = filter_input(INPUT_POST, 'matricula');

$result_usuario = "SELECT * FROM contrato con
                INNER JOIN planos pla ON con.COD_PLANO = pla.COD_PLANO
                inner join aluno alu on con.COD_ALUNO = alu.COD_ALUNO
                WHERE alu.COD_ALUNO = '$cod_aluno'";
                  
$resultado_usuario = mysqli_query($connect, $result_usuario);
$dados = mysqli_fetch_assoc($resultado_usuario);

$dompdf = new DOMPDF();

if(mysqli_num_rows($resultado_usuario) <= 0){
    $contrato = "<h1>Aluno não existe ou não possui contrato cadastrado</h1>";
}else{
    $contrato = "<center><b><h5>TERMO DE ADESÃO PLANO DE ATIVIDADES FÍSICAS E LUTAS</h5></b></center>";

    $contrato .= "<center><b><h5>ACADEMIA SALES – ARTES MARCIAIS</h5></b></center>";

    $contrato .= "<p>Declaro que este contrato e unico e exclusivo do aluno <b>".$dados['NOME']."</b> cujo o responsável é o(a) <b>".$dados['RESPONSAVEL']."</b>,";
    $contrato .= " portador do CPF <b>".$dados['CPF']."</b>, RG <b>".$dados['RG']."</b>, a qual nasceu na data <b>".$dados['DATA']."</b>, reside atualmente no endereço ";
    $contrato .= "<b>".$dados['ENDERECO']."</b>, <b>".$dados['BAIRRO']."</b>, <b>".$dados['CIDADE']."</b>, <b>".$dados['ESTADO']."</b>, <b>".$dados['CEP']."</b> e que possui o e-mail <b>".$dados['EMAIL']."</b> e o telefone ";
    $contrato .= "<b>".$dados['TELEFONE']."</b> para contato.</p>";

    $contrato .= "<p>Por meio deste termo, você está contratando os serviços da ACADEMIA SALES, com sede na Rua Domingos Mancini 
    71, Brasil Industrial – BH – MG, Inscrita no CNPJ sob o Nº28.868.696/0001-91 nas condições abaixo:</p>

    <p><b>Serviços:</b> A ACADEMIA SALES presta serviços relacionados à prática de exercícios físicos e lutas (artes marciais), 
    incluindo orientação, espaço e equipamentos. (exceto espaços ou aulas terceirizados). </p>

    <p><b>Normas de Utilização dos Serviços:</b> Ao assinar este termo, você confirma que leu e está de acordo com as Normas 
    de Utilização dos Serviços, cuja cópia foi entregue em mãos no ato da matricula. Essas normas poderão ser alteradas 
    a qualquer momento, a critério exclusivo da ACADEMIA SALES e estarão sempre disponíveis na unidade e nas redes sociais da mesma.</p>

    <p><b>Funcionamento:</b> A ACADEMIA SALES funcionará nos dias e horários divulgados em seu site, redes sociais ou murais 
    internos, os doze (12) meses do ano. Ela estará fechada durante os feriados municipais, estaduais e federais ou suas 
    emendas; às segundas-feiras de Carnaval; bem como por 10 dias, para manutenção e reforma, no período 
    compreendido entre o Natal e o Ano Novo, períodos estes que estão incluídos no prazo de duração dos planos, 
    cabendo à ACADEMIA SALES comunicar qual o período exato dos fechamentos. A ACADEMIA SALES se reserva o 
    direito de alterar, de acordo com suas necessidades, horários e professores.</p>
    
    <p><b>Declaração de saúde:</b> O aderente deverá responder e assinar o questionário de ANAMNESE, se 
    RESPONSABILIZANDO pelas respostas. A ACADEMIA SALES não se responsabilizará por falsas respostas. </p>

    <p><b>Forma de Pagamento:</b> A ACADEMIA SALES disponibiliza diferentes formas de pagamento a escolha dos clientes: 
    dinheiro, cartão de débito, boleto bancário, cartão de crédito e DCC (Débito Recorrente no Cartão de Crédito). </p>

    <p><b>Pagamento em DCC:</b> Aderindo a este contrato, o cliente estará adquirindo um PLANO, fica estabelecido que todo o 
    dia 10 (dez) de cada mês para lançamento do valor contratado no cartão de crédito indicado pelo aluno, havendo a 
    necessidade de pró-rata para a 1ª mensalidade. Por meio do presente instrumento o aluno autoriza a ACADEMIA 
    SALES a debitar, automaticamente, no cartão de crédito mencionado, os valores previstos no presente contrato, os 
    quais compõem o preço dos serviços. A autorização aqui concedida expressamente terá validade enquanto existirem 
    valores a serem pagos pelo aluno, ainda que sua matrícula tenha sido cancelada e o contrato rescindido.</p>

    <p><b>Mensalidades:</b> O valor das mensalidades será debitado do dia 01 ao 10 de cada mês e contemplará sempre o 
    período de um mês, contado a partir da data do início da vigência do plano, de forma que a cobrança poderá ocorrer 
    de forma vincenda, com o pagamento e posterior prestação dos serviços.</p>

    <p><b>Atraso no Pagamento:</b> O cliente tem um período de 03 (três) dias corridos após o vencimento para efetuar o 
    pagamento sem multa e juros. Após este prazo, será cobrada multa de 10% da mensalidade e juros e de 0,3% ao dia, 
    sendo que o pagamento deverá ser efetuado somente na academia ou via boleto bancário. Em caso de não 
    compensação de DDC a mensalidade será considerada como atrasada. O referido título de crédito só será devolvido 
    ao emitente após o pagamento do valor em atraso acrescido de multa de 10%. No caso de DCC o aluno deverá 
    apresentar outro cartão de crédito para efetuar os débitos. Fica impedido de frequentar a academia até pagamento 
    dos débitos para ativação ou cancelamento do plano e pagamento da multa. </p>

    <p><b>Acidentes:</b> A ACADEMIA SALES não se responsabilizará por contusões ou acidentes decorrentes de práticas 
    esportivas ou recreativas dentro de suas dependências. No caso de ocorrer algum acidente havendo a necessidade 
    de socorro médico hospitalar urgente, será acionado o SAMU. Caso o aluno não queira esse atendimento do SAMU, 
    o próprio terá que autorizar a ACADEMIA SALES ao encaminhamento para o devido atendimento sendo convênios 
    médicos ou consultas particulares, ficando as despesas que se fizerem necessárias, únicas e exclusivamente a cargo 
    do próprio aluno. </p>

    <p><b>Frequência:</b> É de responsabilidade do aluno frequentar a academia durante o período de vigência de seu plano. A 
    academia não será responsável pela ausência do aluno às suas dependências.</p>

    <p><b>Trancamento:</b> Em caso de trancamento da matricula o aluno não terá o pagamento restituído em nenhuma 
    categoria (Planos, Mensalidade, Eventos).</p>

    <p><b>Extensão:</b> Não haverá extensão de plano (exceto para os alunos que aderirem à forma de “Pagamento em DCC” cuja 
    renovação é automática e a rescisão depende de prévia comunicação à ACADEMIA SALES.</p>

    <p><b>Serviços Terceirizados:</b> Os Serviços Terceirizados disponibilizados pela ACADEMIA SALES são de inteira 
    responsabilidade dos prestadores, não sendo vinculados a nenhum plano, tarefa ou encargo da academia.</p>

    <p><b>Menores:</b> Os alunos menores de 18 anos deverão assinar este termo juntamente com seu pai ou responsável legal, 
    respondendo este, solidariamente com aqueles por todos os seus atos ou omissões.</p>

    <p><b>Direito de Imagem:</b> A assinatura do presente termo autoriza o uso e divulgação de imagem do aluno em caso de 
    filmagens, reportagens e fotos para os fins institucionais ou de divulgação da ACADEMIA SALES.</p>

    <p><b>Prazo:</b> Este contrato tem prazo 1 a 12 meses a partir da data de assinatura e é renovável automaticamente por 
    iguais períodos. A cada renovação, passa a ser aplicável o Termo de Adesão que estiver vigente na data respectiva. 
    Se você não desejar a renovação ao final de qualquer período, poderá cancelar o contrato conforme as regras deste termo.</p>";
    
    
    if($dados['COD_PLANO'] == 1){
        $contrato .= "<b>Plano contratado:</b> ".$dados['TIPO_PLANO']." <b>Qtd. meses:</b> Mensalista <br><br>";
        $contrato .= "Valor: R$ 90,00 <br><br>";
    }elseif($dados['COD_PLANO'] == 2){
        $contrato .= "<b>Plano contratado:</b> ".$dados['TIPO_PLANO']." <b>Qtd. meses:</b> Mensalista <br><br>";
        $contrato .= "Valor: R$ 110,00 <br><br>";
    }elseif($dados['COD_PLANO'] == 3){
        $contrato .= "<b>Plano contratado:</b> ".$dados['TIPO_PLANO']." <b>Qtd. meses:</b> Mensalista <br><br>";
        $contrato .= "Valor: R$ 160,00 <br><br>";
    }else{
        $contrato .= "<b>Plano contratado:</b> ".$dados['TIPO_PLANO']." <b>Qtd. meses:</b> 6 meses <br><br>";
        $contrato .= "Valor: R$ 480,00 <br><br>";
    }
    
    $contrato .= "Observações:_____________________________________________________________________________<br>
    _________________________________________________________________________________________<br>
    _________________________________________________________________________________________<br><br><br></p>";

    $contrato .= "<p>Belo horizonte,__________de_______________________________de___________.<br><br><br>
    Assinatura:___________________________________________________________";
}

        

        $dompdf->load_html(''.$contrato.'');

//Renderizar o html
$dompdf->render();

//Exibibir a página
$dompdf->stream(
    "Contrato ".$dados['NOME'].".pdf", 
    array(
        "Attachment" => false //Para realizar o download somente alterar para true
    )
);

