<!doctype html>
<html>
<head>
	<meta charset='utf=-8'>
	<title>Jacqueline Tropp</title>
	<?php wp_head(); ?>
</head>

<body> 

<div id='wrapper'>
	<div id="header">
		<div class='row'>
			<div class='col'>
				<div class="nav-container" role='navigation'>
					<div class="navbar-header">
					 
    				<ul class="nav navbar-expand-md" id='topnav'>
							<?php
					wp_nav_menu( array(
    				'theme_location'	=> 'Top',
   					'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
					'container'			=> 'div',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'bs-example-navbar-collapse-1',
					'menu_class'		=> 'navbar-nav mr-auto',
    				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
   					'walker'			=> new WP_Bootstrap_Navwalker()
								) );
										?>


					<div class="nav navbar-nav navbar-right" id='social'>
						<?php
						wp_nav_menu( array(
    					'theme_location'	=> 'Social',
    					'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
						'container'			=> 'div',
						'container_class'	=> 'collapse navbar-collapse',
						'container_id'		=> 'bs-example-navbar-collapse-1',
						'menu_class'		=> 'navbar-nav mr-auto',
    					'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    					'walker'			=> new WP_Bootstrap_Navwalker()
							) );
										?>
					</div>
					</ul>
				</div>
			</div>
			</div>
		</div>					
				
				<div class='row'>
					<div class='col' id='headerimage'>

						<img src="<?php header_image(); ?>">
					</div>
				</div>

		<div class='row'>
		<div class='col'>

		<div class="navbar justify-content-center">
			<ul class="nav justify-content sticky-top navbar-expand-md"  id='primarynav'>
     			 <?php
						wp_nav_menu( array(
   					'theme_location'	=> 'Primary',
    				'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
					'container'			=> 'div',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'bs-example-navbar-collapse-1',
					'menu_class'		=> 'navbar-nav mr-auto',
    				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    				'walker'			=> new WP_Bootstrap_Navwalker()
						) );
						?>
  			</ul>
  		</div>
  		
  		</div>
 		</div>

 		<div class='row'>
 			<div class='col'>
 				<div class='content'>



