<?php

$tag->div('class="container"');
	$tag->h1('class="title-prof"');
		$tag->printer('Disciplinas');
	$tag->h1;
	
	$tag->div('class="row"');
		foreach ($discipline as $key => $value) {
			$tag->div('class="col-md-4"');
				$tag->a('href="'.SUBJECT_URL.$value.'" class="discipline-link"');
				$tag->div('class="discipline-link"');
					$tag->i('class="icon-book-1"'); $tag->i;
					$tag->printer($value);
				$tag->div;
				$tag->a;
	    	$tag->div;
		}
	$tag->div;
$tag->div;
