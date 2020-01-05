$(document).ready(function() {
    $("input[name='matricula_nao']").blur(function() {
        var $nome_aluno_nao = $("input[name='nome_aluno_nao']");
        var $telefone_nao = $("input[name='telefone_nao']");
        var $cpf_nao = $("input[name='cpf_nao']");
        var $rg_nao = $("input[name='rg_nao']");
        var $data_nao = $("input[name='data_nao']");
        var $email_nao = $("input[name='email_nao']");
        var $cep_nao = $("input[name='cep_nao']");
        $.getJSON('../php/cadastro/filtro_atualizar_aluno_nao.php', {
            matricula_nao: $(this).val()
        }, function(json) {
            $nome_aluno_nao.val(json.nome_aluno_nao);
            $telefone_nao.val(json.telefone_nao);
            $cpf_nao.val(json.cpf_nao);
            $rg_nao.val(json.rg_nao);
            $data_nao.val(json.data_nao);
            $email_nao.val(json.email_nao);
            $cep_nao.val(json.cep_nao);
        });
    });
});