<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	
	


    <!-- Le styles -->
     <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->   
 
	<?php wp_enqueue_script("jquery"); ?> 
	<?php wp_head(); ?>
  </head>

  <body>

  <div class='container'>
	  <div class='row'>

		  <div class='navbar navbar-default navbar-static-top' role="navigation">
			<div class='container'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#responsive-menu'>
						<span class='sr-only'>Open</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a href='#' class='navbar-brand'>LOGO</a>
				</div>											
					
		<?php 		
		
			$menu = wp_nav_menu( array(
				'theme_location'  => 'top',
				'menu'            => 'mymenu', 
				'container'       => 'div', 
				'container_class' => 'collapse navbar-collapse', 
				'container_id'    => 'responsive-menu',
				'menu_class'      => 'nav navbar-nav', 
				'menu_id'         => 'ul-resp',
				'echo'            => 0,
				'fallback_cb'     => '__return_empty_string',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 2,
				'walker'          => new mainMenuWalker
		) ); 
		
		
// добавляем ко всем пунктам класс my__class
$menu = str_replace('class="menu-item', 'class="menu-item dropdown', $menu );
$menu = str_replace('class=menu-item-has-children','class=menu-item-has-children dropdown',$menu);
// выводим на экран
echo $menu;
		
		
		
		?>
		
		
		
		
				
			</div>
		  </div>
	  </div>
  </div>




    <div class="container">