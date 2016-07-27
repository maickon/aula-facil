<?php

require 'partials/header.php';
require 'partials/navbar.php';

$tag->div('class="container"');
	$tag->div('class="row"');
		foreach ($all as $key => $value) {
			$id = explode('.', $value['id']);
			$tag->div('class="col-md-9"');
				$tag->div('class="col-md-3"');
					$tag->img('src="'.$value['Profile URI'].'" class="thumbnail"');
				$tag->div;

				$tag->div('class="col-md-9"');
					$tag->p('class="title"');
						$tag->a('href="'.TEACHER_URL.$id[0].'"');
							$tag->printer($value['Nome']);
						$tag->a;
					$tag->p;

					$tag->span('class="sub-title"');
						$tag->i('class="icon-book-1"'); $tag->i;	
						$tag->printer("{$value['Disciplinas']}");

						$tag->i('class="icon-right-hand"'); $tag->i;	
						$tag->printer("{$value['Valor Hora']} (hora/aula)");

						$tag->i('class="icon-phone"'); $tag->i;	
						$tag->printer("{$value['Telefone']}");
					$tag->span;

					$tag->p();
						$tag->printer($helper->prev_text($value['Sobre'], 140));
					$tag->p;
				$tag->div;

			$tag->div;
		}
	$tag->div;
$tag->div;

require 'partials/footer.php';