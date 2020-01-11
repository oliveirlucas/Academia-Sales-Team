<?php

require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;


$dompdf = new DOMPDF();


    $contrato = "<center><img src='../images/academia.png'></center>
                
    <center><p><b><font size='16'>Anamnese</font></b></p></center><br>
    
    <p>Nome:_________________________________________________________________________________<br><br>
    Fator RH (Tipo sanguíneo):________________________________________________________________<br><br>
    Em caso de emergência quem avisar?______________Tel:(   ) _________________________. 
    </p>

    <center><p><b><font size='16'>Histórico de Saúde</font></b></p></center>

    <p>1 - Você fuma? (  ) sim (  ) não. <br>
    2 - Possui diabéticos na família? (  ) sim (  ) não. <br>
    3 - Possui algum problema cardíaco conhecido?(  )sim (  ) não. <br>
    Qual?: ______________________________________________________________. <br>
    4 - Seu nível de colesterol já esteve alto?(  )sim (  ) não (  )não sei. <br>
    5 - Você está com sobre peso? (  ) sim (  ) não. <br>
    6 - Você tem quaisquer lesões ou problemas ortopédicos?(bursite, dores nos joelhos, dores nas costas, etc.) <br> (  )sim (  )não.
    Aonde?: ______________________________________________________________. <br>
    7 - Toma algum medicamento prescrito ou suplementos? (  )sim (  ) não. <br>
    Qual(ais)?: ____________________________________________________________________.<br>
    8 - Você possui alguma condição médica para a prática de atividades físicas?(  )sim (  )não <br>
    Qual(ais)?: ____________________________________________________________.<br>
    9 - Você está liberado por um médico e com atestado para a prática de atividades físicas?(  )sim (  )não <br>
    10 - Pratica alguma outra atividade física regularmente? (  )sim (  )não.<br>
    Qual(ais)?: ____________________________________________________________________.
    </p></div<p>

    <center><p><b><font size='16'>Consentimento</font></b></p></center>
    <p><b>Eu reconheço, para o melhor de minha capacidade, que estou em bom estado de saúde e não 
    tenho problemas médicos conhecidos que restringiriam minha capacidade de participar neste 
    programa de exercícios e ou Lutas. </b></p>
    <center><p>Belo horizonte,__________de_______________________________de___________.<br><br>
    Assinatura:____________________________________________________________________</center>";

    


        

        $dompdf->load_html(''.$contrato.'');

        $dompdf->setPaper('A4', 'portrait');

        //Renderizar o html
        $dompdf->render();

        //Exibibir a página
        $dompdf->stream(
                "Anamnese.pdf", 
            array(
                "Attachment" => false //Para realizar o download somente alterar para true
            )
        );

