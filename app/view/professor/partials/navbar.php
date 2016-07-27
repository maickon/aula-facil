<?php
$tag->div('class="navbar"');
  $tag->div('class="navbar-inner"');
    $tag->div('class="container"'); 
      $tag->a('class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"'); 
        $tag->span('class="icon-bar"'); $tag->span; 
        $tag->span('class="icon-bar"'); $tag->span; 
        $tag->span('class="icon-bar"'); $tag->span; 
      $tag->a; 
      $tag->a('class="brand" href="'.URL_BASE.'"');
        $tag->img('src="'.IMG_LOGO_PATH.'" alt=""');
      $tag->a;
      $_MENU = [
                [URL_BASE, HOME_LABEL],
                [TEACHERS_URL, TEACHERS_LABEL],
                [SUBJECTS_URL, SUBJECTS_LABEL],
                [ABOUT_URL, ABOUT_LABEL]
              ];

      $tag->ul('class="nav nav-collapse pull-right"');
        $active_css = 'min-text dactive';
        foreach ($_MENU as $key => $value) {
          $tag->li();
          	$tag->a('href="'.$value[0].'" class="'.$active_css.'"');
          		$tag->i('class="icon-home-outline"'); $tag->i; 
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