<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'characters_default' 	=> 'O campo :field não pode conter caracteres especiais ou números',
	'characters_default_num'=> 'O campo :field não pode conter caracteres especiais',
	'alpha'         		=> 'O campo :field precisa conter apenas letras',
	'alpha_dash'    		=> 'O campo :field precisa conter apenas letras, números e traços',
	'alpha_numeric' 		=> 'O campo :field precisa conter apenas letras e números',
	'color'         		=> 'O campo :field precisa ser uma cor',
	'credit_card'   		=> 'O campo :field precisa ser um número de cartão de crédito válido',
	'date'          		=> 'O campo :field precisa ser uma data',
	'decimal'       		=> 'O campo :field precisa ser um decimal com :param2 casas decimais',
	'digit'         		=> 'O campo :field precisa ser numérico',
	'email'         		=> 'O campo :field precisa ser um e-mail válido',
	'email_domain'  		=> 'O campo :field precisa ser um domínio de email válido',
	'equals'        		=> 'O campo :field precisa ser igual a :param2',
	'exact_length'  		=> 'O campo :field precisa ter exatamente :param2 caracteres',
	'in_array'      		=> 'O campo :field precisa ser uma das opções disponíveis',
	'ip'            		=> 'O campo :field precisa ser um número de IP',
	'matches'       		=> 'O campo :field precisa ser igual a o campo :param3',
	'min_length'    		=> 'O campo :field não pode ter menos de :param2 caracteres',
	'max_length'    		=> 'O campo :field não pode ter mais de :param2 caracteres',
	'not_empty'     		=> 'O campo :field não pode estar vazio',
	'numeric'       		=> 'O campo :field precisa ser um número',
	'mobile'         		=> 'O campo :field precisa ser um número de celular válido',
	'phone'         		=> 'O campo :field precisa ser um número de telefone válido',
	'range'         		=> 'O campo :field precisa estar entre :param2 e :param3',
	'regex'         		=> 'O campo :field não está corretamente formatado',
	'url'           		=> 'O campo :field precisa ser uma URL',

	'min_age' 				=> 'Para participar da promoção é necessário que o usuário tenha mais que :param2 anos',
	'cpf' 					=> 'O campo :field precisa ser um CPF válido',
	'email_used'			=> 'O e-mail informado já foi utilizado por um cadastro (CPF) diferente',
	'terms_of_use'			=> 'Para finalizar o cadastro é necessário que você aceite o regulamento',
	'pincode'				=> 'O campo :field informado não é válido',
	'pincode_used'			=> 'O campo :field informado já foi utilizado',
	'captcha'				=> 'O campo :field não foi digitado corretamente',
	'participacion_start'	=> 'A promoção Habib\'s 25 anos terá início a partir de '.date('d/m/Y', strtotime(Kohana::$config->load('site.date_start'))),
	'participacion_end'		=> 'A promoção Habib\'s 25 anos teve seu término em '.date('d/m/Y H:i:s', strtotime(Kohana::$config->load('site.date_end'))),
);