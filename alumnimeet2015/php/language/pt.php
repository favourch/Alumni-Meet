<?php

/*	--------------------------------------------------
	:: FORM FRMEWORK PRO WITH AJAX LANGUAGE
	-------------------------------------------------- */
	
	// Site Configuration
    	
    $lang['website_title']		                           = 'Form Framework Pro'; 
    $lang['website_author']		                           = ''.$company.' - Estúdio de desenhador e devenvolvedor Web'; 
	$lang['website_description']		                   = 'Form Framework Pro um conjunto de formulários seguros e leves en ajax para o seu site'; 
	$lang['website_keywords']		                       = 'Form Framework Pro, formulário, phpmailer, auto resposta, smtp, upload de arquivos'; 
	
    // Form
	
    $lang['form_title']		                               = 'Registo de Eventos';
	$lang['form_placeholder_firstname']		               = 'Insira o seu primeiro Nome'; 
	$lang['form_placeholder_lastname']		               = 'Insira o seu último Nome'; 
    $lang['form_placeholder_useremail']			           = 'Insira o seu endereço de Email'; 
    $lang['form_placeholder_userphone']			           = 'Insira o seu Telefone'; 
	$lang['form_option_1_event']		                   = 'Seleccione o seu Evento'; 
 	$lang['form_option_2_event']		                   = 'Evento em New York 2014'; 
	$lang['form_option_3_event']		                   = 'Evento em Los Angeles 2015'; 
	$lang['form_option_4_event']		                   = 'Evento em Chicago 2016'; 
	$lang['form_option_5_event']		                   = 'Evento em Seattle 2017'; 
	$lang['form_option_6_event']		                   = 'Evento em Atlanta 2018';
	$lang['form_placeholder_message']		               = 'Insira a sua Observação';  
	$lang['form_placeholder_captcha']		               = 'Insira o código de Verificação';
	$lang['form_button_submit']		                       = 'Enviar Mensagem'; 
	$lang['form_button_reset']		                       = 'Agagar os dados'; 
	$lang['form_footer']		                           = 'Subscreva a nossas Campanhas de email <a href="#">Clique Aqui</a>'; 
	
	// Form processor
	
    $lang['processor_wrong_security_token']		           = '<div class="error-message"><i class="icon-close"></i>Atenção o seu código de segurança está errado</div>'; 
    $lang['processor_according_event']		               = '<div class="error-message"><i class="icon-close"></i>Algum erro aconteceu na configuração dos eventos</div>'; 
  	$lang['processor_duplicate_email']	                   = '<div class="error-message"><i class="icon-close"></i>Este email já existe na nossa base de dados</div>';
    $lang['processor_subject']				               = 'Mensagem enviada do formulário de suporte '.$company.'';   	
	$lang['processor_automail_subject']	                   = 'Nós recebemos o seu pedido de suporte';
	$lang['processor_successful']				           = '<div class="success-message"><i class="icon-checkmark"></i>Parabéns! A sua mensagem foi enviada com successo</div>';
	$lang['processor_unsuccessful']				           = '<div class="error-message"><i class="icon-close"></i>Atenção! Ouve um erro ao enviar a sua mensagem</div>';

	// Message form
	 
    $lang['message_form_1']		                           = 'Olá '.$name.''; 
	$lang['message_form_2']		                           = 'Uma pessoa chamada '.$_POST["firstname"].' '.$_POST["lastname"].' contactou-o'; 
	$lang['message_form_3']		                           = 'O seu email é : '.$_POST["useremail"].''; 
    $lang['message_form_4']                                = 'O seu telefone é : '.$_POST["userphone"].'';
	$lang['message_form_5']		                           = 'O seu evento é : '.$_POST["event"].'';
	$lang['message_form_6']		                           = 'A sua mensagem é : '.$_POST["usermessage"].'';  
	$lang['message_form_7']		                           = 'O IP do cliente é : '.$_SERVER['REMOTE_ADDR'].''; 
    $lang['message_form_8']                                = 'Este email foi enviado em : '.$localtime.'';
	
	// Message form
	 
    $lang['message_form_9']		                           = 'Olá '.$yourname.''; 
	$lang['message_form_10']		                       = 'Uma pessoa chamada '.$_POST["firstname"].' '.$_POST["lastname"].' contactou-o'; 
	$lang['message_form_11']		                       = 'O seu email é : '.$_POST["useremail"].''; 
    $lang['message_form_12']                               = 'O seu telefone é : '.$_POST["userphone"].'';
	$lang['message_form_13']		                       = 'O seu evento é : '.$_POST["event"].'';
	$lang['message_form_14']		                       = 'A sua mensagem é : '.$_POST["usermessage"].'';  
	$lang['message_form_15']		                       = 'O IP do cliente é : '.$_SERVER['REMOTE_ADDR'].''; 
    $lang['message_form_16']                               = 'Este email foi enviado em : '.$localtime.'';
	
	// Automessage form
	 
    $lang['automessage_form_1']		                       = 'Olá '.$_POST["firstname"].' '.$_POST["lastname"].''; 
	$lang['automessage_form_2']		                       = 'Nós recebemos o seu pedido para o evento no nosso email'; 
	$lang['automessage_form_3']		                       = 'Iremos processar o seu pedido tão breve quanto possivel'; 
    $lang['automessage_form_4']                            = 'Se precisar de alguma ajuda adicional não hesite em contactar-nos';
	$lang['automessage_form_5']                            = 'O nosso endereço da web : <a href="'.$website.'">'.$website.'</a>';	 
?>