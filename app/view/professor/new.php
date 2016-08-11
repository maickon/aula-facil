<?php
$tag->div('class="container"');
	$tag->div('class="row"');
		$tag->div('class="col-md-12"');
			
			$tag->h1();
				$tag->printer('Página de Cadastro de professor.');
			$tag->h1;

			$tag->p();
				$tag->printer('Os dados preenchidos aqui serão adicionados ao site.');
				$tag->br();
			$tag->p;

			$tag->h3();
				$tag->printer('Exemplo de formulário');
			$tag->h3;

			$tag->p();
				$tag->printer('Nome::Jorge Magnus Ferreira');
				$tag->br();
				$tag->printer('Disciplinas:: História');
				$tag->br();
				$tag->printer('Valor Hora:: R$ 10,00');
				$tag->br();
				$tag->printer('Telefone:: (22) 95672-9238');
				$tag->br();
				$tag->printer('Email:: jorge_historiador@gmail.com');
				$tag->br();
				$tag->printer('Local:: IFF campos');
				$tag->br();
				$tag->printer('Profile URI:: http://www.bonstutoriais.com.br/wp-content/uploads/2012/10/Fotografias-de-familia-mixadas-por-Ulric-Collette-11.jpg');
				$tag->br();
				$tag->printer('Formação:: Bacharelado em História');
				$tag->br();
				$tag->printer('Sobre:: Formado pelo Instituto federal fluminense, com mais de 10 de experiência com aulas de história.');
			$tag->p;

			$tag->button('type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal"');
				$tag->printer(NEW_TEACHER_LABEL);
			$tag->button;

			$tag->br();
			$tag->br();

			$tag->div('id="myModal" class="modal fade" role="dialog"');
				$tag->div('class="modal-content"');
					$tag->div('class="modal-header"');
						$tag->button('type="button" class="close" data-dismiss="modal"');
							$tag->printer('&times');
						$tag->button;
						$tag->h4('class="title"');
							$tag->printer(NEW_TEACHER_LABEL);
						$tag->h4;
					$tag->div;

					$tag->form('method="post" action="'.TEACHER_SAVE_URL.'" id="form-professor"');
						$tag->div('class="modal-body"');
							$professor_helper->input_label_form(DESCRIPTION_NAME_LABEL, EXEMPLE_NAME_LABEL, 'nome');
							$professor_helper->input_label_form(DESCRIPTION_SUBJECTS_LABEL, EXEMPLE_SUBJECTS_LABEL, 'disciplinas');
							$professor_helper->input_label_form(DESCRIPTION_TIME_VALUE_LABEL, EXEMPLE_TIME_VALUE_LABEL, 'valor_hora');
							$professor_helper->input_label_form(DESCRIPTION_TELEPHONE_LABEL, EXEMPLE_TELEPHONE_LABEL, 'telefone');
							$professor_helper->input_label_form(DESCRIPTION_EMAIL_LABEL, EXEMPLE_EMAIL_LABEL, 'email','email');
							$professor_helper->input_label_form(DESCRIPTION_PLACE_LABEL, EXEMPLE_PLACE_LABEL, 'local');
							$professor_helper->input_label_form(DESCRIPTION_IMAGE_LINK_LABEL, EXEMPLE_IMAGE_LINK_LABEL, 'img_link');
							$professor_helper->input_label_form(DESCRIPTION_FORMATION_LABEL, EXEMPLE_FORMATION_LABEL, 'formacao');
							$professor_helper->text_label_form(DESCRIPTION_ABOUT_LABEL, EXEMPLE_ABOUT_LABEL, 'sobre');
						$tag->div;

						$tag->div('class="modal-footer"');
							$tag->button('type="button" id="btn-back" class="btn btn-default" data-dismiss="modal"');
								$tag->printer(BACK_BUTTON);
							$tag->button;

							$tag->input('type="submit" id="btn-save" class="btn btn-default"');
								$tag->printer(REGISTER_BUTTON);
							$tag->input;
						$tag->div;	
					$tag->form;
				$tag->div;	
			$tag->div;

		$tag->div;
	$tag->div;
$tag->div;