<?php
	$tag->body();
		$tag->div('class="container"');
			$tag->div('class="row"');
				$tag->div('class="col-md-12"');
					$tag->h1();
						$tag->small();
							$tag->printer('Na ');
						$tag->small;
						$tag->printer('Aula Fácil');
						$tag->small();
							$tag->printer('você encontra o seu professor mais próximo...');
						$tag->small;
					$tag->h1;
				$tag->div;
 

				$tag->div('class="col-md-9"');
					foreach ($professores as $key => $value) {
						$nome = explode(' ', $value['Nome']);
						$id = explode('.', $value['id']);
						$prev_disciplina = $home_helper->prev_text($value['Disciplinas'], 20);
						$tag->div('class="profdata col-md-4"');
							$tag->span('class="title"');
								$tag->a('href="'.TEACHER_URL.$id[0].'"');
									$tag->printer("<i class=\" icon-user-1\"></i>{$nome[0]}");
								$tag->a;
							$tag->span;
							$tag->span();
								$tag->printer("<i class=\"icon-book-1\"></i>{$prev_disciplina}");
							$tag->span;
							$tag->br();
							$tag->span(); 
								$tag->printer("<i class=\"icon-right-hand\"></i>Hora/Aula {$value['Valor Hora']}");
							$tag->span;
							$tag->br();
							$tag->span();
								$tag->printer("<i class=\"icon-phone\"></i>{$value['Telefone']}");
							$tag->span;
						$tag->div;
					}
					
				$tag->div;

				$tag->div('class="col-md-3"');
					$tag->h3();
						$tag->small();
							$tag->printer('Últimas ');
						$tag->small;
						$tag->printer('Postagens...');
					$tag->h3;
					foreach ($all_posts as $key => $value) {
						$id = explode('.', $value['id']);
						$tag->p();	
							$tag->span('class="post-title"');
								$tag->a('href="'.POST_URL.$id[0].'"');
									$tag->printer($value['Titulo']);
								$tag->a;
							$tag->span;
							$tag->br();
							$tag->small();
								$tag->printer("Postado: {$value['Data']} - {$value['Hora']}");
							$tag->small;
						$tag->p;
					}
					if (count($all_posts) > 3) {
						$tag->span('class="post-title"');
							$tag->a('href="#"');
								$tag->printer('Leia mais...');
							$tag->a;
						$tag->span;
					}
				$tag->div;
			$tag->div;
		$tag->div;

			$_IMGS = [IMG_DR_PATH, IMG_FB_PATH, IMG_GO_PATH, IMG_PIN_PATH, IMG_ST_PATH, IMG_TW_PATH];
			
			$tag->div('class="row social"');
			  $tag->ul('class="social-icons"');
			  	foreach ($_IMGS as $key => $value) {
				    $tag->li();
				    	$tag->a('href="#"');
				    		$tag->img('src="'.$value.'" alt=""');
				    	$tag->a;
				    $tag->li;
			  	}
			  $tag->ul;
			$tag->div;

			$tag->div('class="footer" href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"');
				$tag->div('class="container"');
					$tag->p('class="pull-left"');
						$tag->a('href="http://dzyngiri.com"');
							$tag->printer('www.aulafacil.com');
						$tag->a;
					$tag->p;
				
					$tag->p('class="pull-right"');
						$tag->a('href="#myModal" role="button" data-toggle="modal"'); 
							$tag->i('class="icon-mail"');$tag->i; 
							$tag->printer('CONTACT');
						$tag->a;
					$tag->p;
				$tag->div;
			$tag->div;
				
			$tag->div('id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"');
				$tag->div('class="modal-header"');
					$tag->button('type="button" class="close" data-dismiss="modal" aria-hidden="true"');
						$tag->printer('×');
					$tag->button;
					
					$tag->h3('id="myModalLabel"');
						$tag->i('class="icon-mail"');$tag->i; 
						$tag->printer('Contact Me');
					$tag->h3;
				$tag->div;
				
				$tag->div('class="modal-body"');
					$tag->form('action="#"');
						$tag->iput('type="text" placeholder="Yopur Name"');
						$tag->iput('type="text" placeholder="Your Email"');
						$tag->iput('type="text" placeholder="Website (Optional)"');
						$tag->textarea('rows="3" style="width:80%"'); $tag->textarea;
						$tag->br;
						$tag->button('type="submit" class="btn btn-large"');
						$tag->i('class="icon-paper-plane"');$tag->i; 
						$tag->printer('SUBMIT');
						$tag->button;
					$tag->form;
				$tag->div;
			$tag->div;
		// <!-- CORE JS -->
		$_JS = [JS_JQUERY,
				JS_BOOTSTRAP
				];
		foreach ($_JS as $key => $value) {
		    $tag->script('src="' . $value . '"'); 
		    $tag->script;
		}

		$tag->script();
			$tag->printer('$(\'#myModal\').modal(\'hidden\')');
		$tag->script;
	$tag->body;
$tag->html;