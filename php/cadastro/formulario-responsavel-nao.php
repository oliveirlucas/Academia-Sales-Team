<?php
        $formulario_responsavel_nao = "<div class='row'>
                                        <div class='col-md-8'>
                                            <div class='form-group'>
                                                <label>Nome Completo do aluno</label>
                                                <input type='text' class='form-control input-default' required='required' name='nome_aluno_nao' >
                                            </div>
                                        </div>
                                        <div class='col-md-1'>
                                            <div class='form-group'>
                                                <label>DDD</label>
                                                <input type='text' class='form-control input-default' required='required' name='ddd_nao' minlength='2' maxlength='2' >
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group'>
                                                <label>Telefone Fixo/Celular</label>
                                                <input type='text' class='form-control input-default' required='required' name='telefone_nao' minlength='9' maxlength='9'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-3'>
                                            <div class='form-group'>
                                                <label>CPF</label>
                                                <input type='number' class='form-control input-default' required='required' name='cpf_nao' minlength='11' maxlength='11'>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group'>
                                                <label>RG/Identidade</label>
                                                <input type='text' class='form-control input-default' required='required' name='rg_nao' style='text-transform: uppercase;'>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group'>
                                                <label>Data de nascimento</label>
                                                <input type='date' class='form-control input-default' required='required' name='data_nao' maxlength='10'>
                                            </div>
                                        </div>
                                        <div class='col-md-3'>
                                            <div class='form-group'>
                                                <label for='exampleInputEmail1'>E-mail</label>
                                                <input type='email' class='form-control input-default' required='required' name='email_nao' style='text-transform: uppercase;'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-2'>
                                            <div class='form-group'>
                                                <label>CEP</label>
                                                <input type='text' class='form-control input-default' required='required' name='cep_nao' minlength='8' maxlength='9' id='cep' onblur='pesquisacep(this.value);'>
                                            </div>
                                        </div>
                                        <div class='col-md-9'>
                                            <div class='form-group'>
                                                <label>Endereço</label>
                                                <input type='text' class='form-control input-default' required='required' name='endereco_nao' readonly=“true” id='rua'>
                                            </div>
                                        </div>
                                        <div class='col-md-1'>
                                            <div class='form-group'>
                                                <label>Nº</label>
                                                <input type='text' class='form-control input-default' required='required' name='numero_nao' style='text-transform: uppercase;'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label>Bairro</label>
                                                <input type='text' class='form-control input-default' required='required' name='bairro_nao' readonly=“true” id='bairro'>
                                            </div>
                                        </div>
                                        <div class='col-md-5'>
                                            <div class='form-group'>
                                                <label>Cidade</label>
                                                <input type='text' class='form-control input-default' required='required' name='cidade_nao' readonly=“true” id='cidade'>
                                            </div>
                                        </div>
                                        <div class='col-md-1'>
                                            <div class='form-group'>
                                                <label>UF</label>
                                                <input type='text' class='form-control input-default' required='required' name='estado_nao' readonly=“true” id='uf'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-6'>
                                            <label>Prajied</label>
                                            <select class='form-control' name='nivel_nao'>
                                                <option selected='selected'>Selecione a Prajied</option>
                                                <option>-- ADULTO --</option>
                                                <option>1º BRANCO(A)</option>
                                                <option>2º AMARELO(A)</option>
                                                <option>3º AMARELO/BRANCO(A)</option>
                                                <option>4º VERDE(A)</option>
                                                <option>5º VERDE/BRANCO(A)</option>
                                                <option>6º AZUL(A)</option>
                                                <option>7º AZUL/BRANCO(A)</option>
                                                <option>8º MARROM(A)</option>
                                                <option>9º MARROM/BRANCO(A)</option>
                                                <option>10º VERMELHO(A)</option>
                                                <option>11º VERMELHO/BRANCO(A)</option>
                                                <option>12º VERMELHO/AMARELO(A)</option>
                                                <option>-- KIDS --</option>
                                                <option>1º BRANCO(K)</option>
                                                <option>2º CINZA(K)</option>
                                                <option>3º CINZA/BRANCO(K)</option>
                                                <option>4º LARANJA(K)</option>
                                                <option>5º LARANJA/BRANCO(K)</option>
                                                <option>6º AZUL CLARO(K)</option>
                                                <option>7º AZUL CLARO/BRANCO(K)</option>
                                                <option>8º AZUL CLARO/ROXO(K)</option>
                                                <option>9º ROXO(K)</option>
                                                <option>10º ROXO/BRANCO(K)</option>
                                                <option>11º ROXO/AMARELO(K)</option>
                                            </select>
                                        </div>
                                        <div class='col-md-6'>
                                            <label>Status Aluno</label>
                                            <select class='form-control' name='status_nao'>
                                                <option selected='selected'>Selecione o status</option>
                                                <option>Ativo</option>
                                                <option>Inativo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <button type='submit' class='btn btn-info btn-fill pull-right' class='alert-dismissible'>Cadastrar</button>
                                    <div class='clearfix'></div>
                                    <script type='text/javascript' src='../js/viacep.js'></script>";
        
        echo $formulario_responsavel_nao;
?>