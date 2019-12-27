$(function () {
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa").blur(function () {

		var pesquisa = $(this).val();

		//Verificar se há algo digitado
		if (pesquisa != '') {
			var dados = {
				palavra: pesquisa
			}
			$.post('../php/buscar-aulas-personal.php', dados, function (retorna) {
				//Mostra dentro da ul os resultado obtidos 
				$(".table-responsive").html(retorna);
			});
		} else {
			$(".table-responsive").html('');
		}

		$("#limpar-dados").click(function () {
			$('#tabela-pagamentos').html("");
		});
	});
});