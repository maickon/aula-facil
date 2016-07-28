<?php
	
$tag->div('class="container"');
	$tag->div('class="row"');
		$tag->div('class="col-md-9"');
			
			$tag->h1('class="title-prof"');
				$tag->i('class="icon-attach"'); $tag->i;
				$tag->printer($posts_view['Titulo']);
			$tag->h1;
			
			$tag->p();
				$tag->i('class=" icon-user-1"'); $tag->i;
				$tag->printer($posts_view['PostadoPor']);

				$tag->i('class="icon-calendar"'); $tag->i;
				$tag->printer("{$posts_view['Data']} às {$posts_view['Hora']}");
				
				$tag->i('class="icon-tags"'); $tag->i;
				$tag->printer($posts_view['Tags']);
				
			$tag->p;

			$tag->p();
				$tag->printer($posts_view['Texto']);
			$tag->p;

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

			

			
				
			
	