$(function () {
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa").blur(function () {

		var pesquisa = $(this).val();

		//Verificar se há algo digitado
		if (pesquisa != '') {
			var dados = {
				palavra: pesquisa
			}
			$.post('../php/financeiro/buscar-dados-aluno-financeiro.php', dados, function (retorna) {
				//Mostra dentro da ul os resultado obtidos 
				$("#dadosAluno").html(retorna);
			});
			$.post('../php/financeiro/buscar-pagamento.php', dados, function (retorna) {
				//Mostra dentro da ul os resultado obtidos 
				$("#tabela-pagamentos").html(retorna);
			});
		} else {
			$("#formulario-aluno").html('');
			$("#tabela-pagamentos").html('');
		}
		$("#limpar-dados").click(function () {
			$('#formulario-aluno').html("");
		});
		$("#limpar-dados").click(function () {
			$('#tabela-pagamentos').html("");
		});
	});
});