$(document).ready(function() {
    $("input[name='matricula_sim']").blur(function() {
        var $nome_aluno = $("input[name='nome_aluno']");
        var $data_aluno = $("input[name='data_aluno']");
        var $cpf_aluno = $("input[name='cpf_aluno']");
        var $nome_responsavel = $("input[name='nome_responsavel']");
        var $ddd = $("input[name='ddd']");
        var $telefone = $("input[name='telefone']");
        var $cpf_responsavel = $("input[name='cpf_responsavel']");
        var $rg = $("input[name='rg']");
        var $data_responsavel = $("input[name='data_responsavel']");
        var $email = $("input[name='email']");
        var $cep = $("input[name='cep']");
        var $numero = $("input[name='numero']");
        $.getJSON('../php/cadastro/filtro_atualizar_aluno_sim.php', {
            matricula_sim: $(this).val()
        }, function(json) {
            $nome_aluno.val(json.nome_aluno);
            $data_aluno.val(json.data_aluno);
            $cpf_aluno.val(json.cpf_aluno);
            $nome_responsavel.val(json.nome_responsavel);
            $ddd.val(json.ddd);
            $telefone.val(json.telefone);
            $cpf_responsavel.val(json.cpf_responsavel);
            $rg.val(json.rg);
            $data_responsavel.val(json.data_responsavel);
            $email.val(json.email);
            $cep.val(json.cep);
            $numero.val(json.numero);
        });
    });
});