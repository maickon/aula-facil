<?php
$tag->html();
	$tag->head();
		$tag->title(); 
			$tag->printer('Aula Fácil');
		$tag->title;
		$_CSS = [ CSS_BOOTSTRAP, CSS_LAYOUT, CSS_FONTELLO, CSS_FANCYBOX, CSS_STYLE_IE, CSS_STYLE_SINGLE_PAGE, CSS_INDEX];
	        // <!-- CORE CSS -->
	        foreach ($_CSS as $key => $value) {
	            $tag->link('href="' . $value . '" rel="stylesheet"');
	        }
	$tag->head;