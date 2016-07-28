<?php
require 'config/initialize.php';
$tag = new Tags_Lib;

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

	$tag->body();
		$tag->div('class="navbar"');
			$tag->div('class="navbar-inner"');
			    $tag->div('class="container"'); 
			    	$tag->a('class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"'); 
			        	$tag->span('class="icon-bar"'); $tag->span; 
			        	$tag->span('class="icon-bar"'); $tag->span; 
			        	$tag->span('class="icon-bar"'); $tag->span; 
			      	$tag->a; 
			      	// $tag->br();
			      	$tag->a('class="brand" href="'.URL_BASE.'"');
			       		$tag->img('src="'.IMG_LOGO_PATH.'" alt=""');
			      	$tag->a;
			      	$_MENU = [
			                [URL_BASE, HOME_LABEL, 'icon-home-outline'],
			                [TEACHERS_URL, TEACHERS_LABEL, 'icon-users-2'],
			                [SUBJECTS_URL, SUBJECTS_LABEL, 'icon-book'],
			                [ABOUT_URL, ABOUT_LABEL, 'icon-bank']
			              ];

			      	$tag->ul('class="nav nav-collapse pull-right"');
				        $active_css = 'min-text dactive';
				        foreach ($_MENU as $key => $value) {
				        	$tag->li();
				            	$tag->a('href="'.$value[0].'" class="'.$active_css.'"');
				              		$tag->i('class="'.$value[2].'"'); $tag->i; 
				              		$tag->printer($value[1]);
				            	$tag->a; 
				          	$tag->li;
				        }
			    	$tag->ul;
			      	$tag->div('class="nav-collapse collapse"');
			      	$tag->div;
			    $tag->div;
			$tag->div;
		$tag->div;

		new Routes_Lib;

		$_NAME = [NAME_FB_LABEL, NAME_TW_LABEL, NAME_GO_LABEL];
		$_ICON = [' icon-facebook', ' icon-twitter', 'icon-gplus'];
		$_HREF = [FACEBOOK_URL, TWITTER_URL, GOOGLE_PLUS_URL];
				

		$tag->div('class="footer" href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"');
			$tag->div('class="container"');
				$tag->p('class="pull-left"');
					$tag->a('href="#"');
						$tag->printer('www.aulafacil.com');
					$tag->a;
				$tag->p;
			
				for ($i=0; $i < count($_NAME); $i++) {
					$tag->p('class="pull-right"');
						$tag->a('href="'.$_HREF[$i].'" role="button" target="blank" data-toggle="modal"'); 
							$tag->i('class="'.$_ICON[$i].'"');$tag->i; 
							// $tag->printer(" {$_NAME[$i]} ");
						$tag->a;
					$tag->p;
			  	}

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