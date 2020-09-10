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
						'location':		'required',
						'armored_door':	'required',
						'windows':		'required',
						'zones':		'required',
						'accesses[]':	'required',
						'budget':		'required',
						'firstname_quote':		'required',
						'lastname_quote':		'required',
						'email_quote':		'required',
						'phone_quote':	'required',
						'message_general':		'required',
						'terms':		'required' 	// BE CAREFUL: last has no comma
					}, messages: {
						'location':		{ required: 	 'Localização obrigatorio' },
						'armored_door':	{ required: 	 'Porta blindada obrigatorio' },
						'windows':		{ required: 	 'Janelas obrigatorio' },
						'zones':		{ required: 	 'Areas obrigatorio' },
						'accesses[]':	{ required: 	 'Acessos obrigatorio' },
						'budget':		{ required: 	 'Despesas obrigatorio' },
						'firstname_quote':		{ required: 	 'Nome obrigatorio' },
						'lastname_quote':		{ required: 	 'Sobre nome obrigatorio' },
						'email_quote':		{ required: 	 'Email obrigatorio' },					
						'phone_quote':	{ required:  'Telefone obrigatorio' },
						'message_general':		{ required:  'Descrição obrigatorio' },
						'terms':		{ required:  'Aceite os termos' },
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
			