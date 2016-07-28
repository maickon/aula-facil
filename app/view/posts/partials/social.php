<?php
$_IMGS = [
	IMG_DR_PATH, 
	IMG_FB_PATH, 
	IMG_GO_PATH, 
	IMG_PIN_PATH, 
	IMG_ST_PATH, 
	IMG_TW_PATH
	];

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