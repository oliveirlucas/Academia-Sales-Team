$(function () {
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa").blur(function () {

		var pesquisa = $(this).val();

		//Verificar se há algo digitado
		if (pesquisa != '') {
			var dados = {
				palavra: pesquisa
			}
			$.post('../php/buscar-pagamento.php', dados, function (retorna) {
				//Mostra dentro da ul os resultado obtidos 
				$("#tabela-pagamentos").html(retorna);
			});
			$.post('../php/buscar-contrato.php', dados, function (retorna) {
				//Mostra dentro da ul os resultado obtidos 
				$("#tabela-contrato").html(retorna);
			});
		} else {
			$("#tabela-pagamentos").html('');
			$("#tabela-contrato").html('');
		}

		$("#limpar-dados").click(function () {
			$('#tabela-pagamentos').html("");
		});
		$("#limpar-dados").click(function () {
			$('#tabela-contrato').html("");
		});
	});
});