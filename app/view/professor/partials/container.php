<?php
	
$tag->div('class="container"');
	$tag->div('class="row"');
		$tag->div('class="col-md-9"');
			$tag->div('class="col-md-3"');
				$tag->img('src="'.$professor_view['Profile URI'].'" class="thumbnail"');
			$tag->div;
			$tag->div('class="col-md-9"');
				$tag->h1('class="title-prof"');
					$tag->i('class="icon-graduation-cap"'); $tag->i;
					$tag->printer($professor_view['Nome']);
				$tag->h1;
				
				$tag->p();
					$tag->printer($professor_view['Sobre']);
				$tag->p;

				$tag->p();
					$tag->i('class="icon-attach"'); $tag->i;
					$tag->printer($professor_view['Disciplinas']);
				$tag->p;

				$tag->p();
					$tag->i('class="icon-right-hand"'); $tag->i;
					$tag->printer($professor_view['Valor Hora']);
				$tag->p;

				$tag->p();
					$tag->i('class="icon-phone"'); $tag->i;
					$tag->printer($professor_view['Telefone']);
				$tag->p;

				$tag->p();
					$tag->i('class="icon-mail"'); $tag->i;
					$tag->printer($professor_view['Email']);
				$tag->p;

				$tag->p();
					$tag->i('class="icon-location"'); $tag->i;
					$tag->printer($professor_view['Local']);
				$tag->p;

				$tag->p();
					$tag->i('class="icon-book"'); $tag->i;
					$tag->printer($professor_view['Formação']);
				$tag->p;

			$tag->div;
		$tag->div;

		
		$tag->div('class="col-md-9"');
			$tag->p('class="title-prof"');
				$tag->printer('Outros professores...');
			$tag->p;
			foreach ($professores as $key => $value) {
				if (!empty($value)) {
					$tag->div('class="col-md-4"');
						$tag->span('class="title"');
							$tag->a('href="'.TEACHER_URL.$value['id'].'"');
								$tag->printer($value['Nome']);
							$tag->a;
						$tag->span;
						$tag->p();
							$tag->printer($value['Disciplinas']);
						$tag->p;
						$tag->p();
							$tag->printer($value['Valor Hora']);
						$tag->p;
					$tag->div;
				}
			}
		$tag->div;
	$tag->div;
$tag->div;

			

			
				
			
	