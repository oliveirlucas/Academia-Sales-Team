$(function () {
	$("input[name='matricula_filtro']").blur(function () {
        $.post('../php/cadastro/formulario-responsavel-nao.php', function (retorna) {
            //Mostra dentro da ul os resultado obtidos 
            $("#formulario-cadastro").html(retorna);
        });
    });
});