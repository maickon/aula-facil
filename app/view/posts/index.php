<?php
$tag->div('class="container"');
	$tag->div('class="row"');
		$tag->div('class="col-md-9"');
			
			foreach ($all as $key => $value) {
				$tag->h1('class="title-prof"');
					$tag->a('href="'.POST_URL.$value['id'].'"');
						$tag->i('class="icon-newspaper"'); $tag->i;
						$tag->printer($value['Titulo']);
					$tag->a;
				$tag->h1;
				
				$tag->p();
					$tag->i('class=" icon-user-1"'); $tag->i;
					$tag->printer($value['PostadoPor']);

					$tag->i('class="icon-calendar"'); $tag->i;
					$tag->printer("{$value['Data']} às {$value['Hora']}");
					
					$tag->i('class="icon-tags"'); $tag->i;
					$tag->printer($value['Tags']);
				$tag->p;
				$tag->hr();
			}
		$tag->div;

		$tag->div('class="col-md-3"');
			$tag->h1('class="adsense-title"');
				$tag->i('class="icon-megaphone-1"'); $tag->i;
				$tag->printer('Publicidade');
			$tag->h1;
			$tag->img('src="http://www.jensense.com/archives/verticalimagestext.gif"');
		$tag->div;

	$tag->div;
$tag->div;