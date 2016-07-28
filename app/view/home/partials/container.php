<?php
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
				$tag->i('class="icon-megaphone-1"'); $tag->i;
				$tag->printer('Publicidade');
			$tag->h3;

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