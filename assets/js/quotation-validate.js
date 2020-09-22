/* FORM WIZARD VALIDATION SIGN UP ======================================== */

$('form#custom').attr('action', 'save-calculadora');

$(function() {
'use strict';
	$('#custom').stepy({
		backLabel:	'Passo anterior',
		block:		true,
		errorImage:	true,
		nextLabel:	'Próxima Etapa',
		titleClick:	true,
		description:	true,
		legend:			false,
		validate:	true
	});
	
	
	$('#custom').validate({

		errorPlacement: function(error, element) {
			
		$('#custom .stepy-error').append(error);
		}, rules: {
			'localizacao':'required',
			'porta_blindada':'required',
			'janelas':'required',
			'areas':'required',
			'accesses[]':'required',
			'despesas':'required',
			'nome':'required',
			'sobre_nome':'required',
			'email':'required',
			'telefone':'required',
			'message_general':		'required',
			'terms':'required' 	// BE CAREFUL: last has no comma
		}, messages: {
			'localizacao':{ required:'Localização obrigatorio' },
			'porta_blindada':{ required:'Você tem a porta blindada?' },
			'janelas':{ required:'Quantas janelas você deseja proteger?' },
			'areas':{ required:'Quantas áreas você deseja proteger?' },
			'accesses[]':{ required: 'Acessos obrigatorio' },
			'despesas':{ required:'Qual é o seu orçamento?' },
			'nome':{ required:'Nome obrigatorio' },
			'sobre_nome':{ required:'Sobre nome obrigatorio' },
			'email':{ required:'Email obrigatorio' },					
			'telefone':{ required:'Telefone obrigatorio' },
			'message_general':{ required:'Descrição obrigatorio' },
			'terms':{ required: 'Aceite os termos' },
		},
		submitHandler: function(form) 
		{
		if($('input#website').val().length == 0)
		{ 
		form.submit();
		}
		}
	});

});
