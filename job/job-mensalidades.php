<?php
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';
    
    echo "Iniciando processo de inserção de mensalidade para os alunos\n";
    echo "Processando alunos ...\n";
    echo "Executando\n";
    $gerar_mensalidade = mensalidade();
    echo "Processando finalizado\n";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

//---------------------------------- Gerando boletos para mensalidades 2 vezes por semana -------------------------------------------
function mensalidade(){

    include_once(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

    date_default_timezone_set("America/Sao_Paulo");
    $date = date("Y-m-d");
    $date_com_horas = date("Y-m-d_H-i-s");
    

    $situacao_aluno = "SELECT * from aluno alu
                        inner join contrato con on alu.COD_ALUNO = con.COD_ALUNO
                        inner join planos pla on pla.COD_PLANO = con.COD_PLANO
                        where alu.STATUS = 'Ativo' and con.STATUS_CONTRATO = 'Ativo' and pla.cod_plano in (1,2,3,4)";
    $resultado_situacao_aluno = mysqli_query($connect, $situacao_aluno) or die (mysqli_error($connect));
    
    while($aluno_status = mysqli_fetch_assoc($resultado_situacao_aluno)){

        $aluno_pag = $aluno_status['COD_ALUNO'];
        $data_venci = date('Y/m/d', strtotime('+29 days',strtotime($date)));
        $verificar_pagamento = "SELECT * FROM pagamento 
                                WHERE COD_ALUNO = '$aluno_pag' and DATA_VENCIMENTO BETWEEN ('$date') AND ('$data_venci') and TIPO_PAGAMENTO = 'Mensalidade'";
        $resultado_verificar_pagamento = mysqli_query($connect, $verificar_pagamento) or die (mysqli_error($connect));
        $pagamento = mysqli_fetch_assoc($resultado_verificar_pagamento);

        if(mysqli_affected_rows($connect)){
            $msgExiste = "Já existe pagamento com data de vencimento para ".$pagamento['DATA_VENCIMENTO']." | Matricula: ".$aluno_status['COD_ALUNO']."  | Aluno: ".$aluno_status['NOM_ALUNO']."\n";
            logMe($msgExiste,$date_com_horas);
        }else{
            if(date('Y-m-d', strtotime("-30 days",strtotime($date))) > $aluno_status['DATA_REGISTRO']){
                $matricula = $aluno_status['COD_ALUNO'];
                $nome_aluno = $aluno_status['NOM_ALUNO'];
                //$email_aluno = $aluno_status['EMAIL'];
                $valor_plano = $aluno_status['VALOR_PLANO'];
    
                inserir_pagamentos($matricula,$valor_plano,$nome_aluno,$date_com_horas);
                //envio_email_pagamento_aluno($date_atual,$nome_aluno);
                
            }else{
                $msgRegistro = "Aluno possui data registro menor que 30 dias | Matricula: ".$aluno_status['COD_ALUNO']." | Aluno: ".$aluno_status['NOM_ALUNO']."\n";
                logMe($msgRegistro,$date_com_horas);
                echo $msgRegistro;
            }
        }
    }        
}

function inserir_pagamentos($matricula,$valor_plano,$nome_aluno,$date_com_horas){

    require(realpath(dirname(__FILE__) . "/../db/db_connect.php"));

    $situacao_aluno = "INSERT into pagamento (COD_ALUNO, DATA_CRIADA, DATA_VENCIMENTO, STATUS, TIPO_PAGAMENTO, VALOR, DATA_REGISTRO) 
                        values ('$matricula',now(),now() + interval 9 day ,'Aberto','Mensalidade','$valor_plano',now())";
    $resultado_situacao_aluno = mysqli_query($connect, $situacao_aluno) or die (mysqli_error($connect));

    if(mysqli_insert_id($connect)){
        $msgInserir = "Pagamento inserido => Matricula: ".$matricula." | Aluno: ".$nome_aluno." | Valor R$ ".$valor_plano."\n";
        logMe($msgInserir,$date_com_horas);
        echo $msgInserir;
    }else{
        $msgErro = "Não foi possivel inserir o pagamento para o aluno => Matricula: ".$matricula." | Aluno: ".$nome_aluno."\n";
        logMe($msgErro,$date_com_horas);
        echo $msgErro;
    }
}

function envio_email_pagamento_aluno($nome_aluno){

    $mail = new PHPMailer(true);
    
                try {
                    //Server settings
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'mail.salesacademia.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'contato@salesacademia.com';                     // SMTP username
                    $mail->Password   = 'lucas46521023';                               // SMTP password
                    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                    $mail->Port       = 465;                                    // TCP port to connect to
                
                    //Recipients
                    $mail->setFrom('contato@salesacademia.com', 'Sales Academia');

                    //if($email_aluno == null)
                    //{
                    //    $mail->addAddress(''.$email_responsavel.'', ''.$nome_aluno.'');
                    //}else{
                    //    $mail->addAddress(''.$email_aluno.'', ''.$nome_aluno.'');
                    //}
                         // Add a recipient
                    $mail->addAddress('lucasqc3@gmail.com');               // Name is optional
                    $mail->addAddress('test-sja7e8mzl@mail-tester.com');
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('');
                    //$mail->addBCC('');
                
                    // Attachments
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                
                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mensagem = utf8_decode('Olá '.$nome_aluno.', sua fatura já está disponível !');
                    $mail->Subject = $mensagem;
                    $mail->AddEmbeddedImage('../images/fatura.jpg', 'logo_ref');
                    $mail->AddEmbeddedImage('../images/bandeiras.png', 'logo_bandeira');
                    //$mensagem_body = utf8_decode('');
                    $mail->Body = ('');
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    $mail->IsHTML(true);
                
                    $mail->send();
                    echo "=> [] - E-mail de pagamento disponivel encaminhado para o aluno<br>";
                } catch (Exception $e) {
                    echo "Mensagem não enviada. Error: {$mail->ErrorInfo}<br>";
                }
}

function logMe($msg,$date_com_horas){

    $fp = fopen("/home/loyusgyp/public_html/logs/mensalidade/log_".$date_com_horas.".txt", "a");
    $escreve = fwrite($fp, $msg);
    fclose($fp);
}
?>
