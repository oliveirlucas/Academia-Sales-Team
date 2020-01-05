$(function () {
	$("#responsavel-nao").click(function () {
        $.post('../php/cadastro/formulario-responsavel-atualizar-nao.php', function (retorna) {
            //Mostra dentro da ul os resultado obtidos 
            $("#formulario-cadastro").html(retorna);
        });
    });
    $("#responsavel-sim").click(function () {
        $.post('../php/cadastro/formulario-responsavel-atualizar-sim.php', function (retorna) {
            //Mostra dentro da ul os resultado obtidos 
            $("#formulario-cadastro").html(retorna);
        });
	});
});