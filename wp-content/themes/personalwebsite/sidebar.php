<div class="header">

	<div class="name">nikki martin</div>

	<div class="socialMedia">
		<a href="https://www.facebook.com/nikki.lee.martin" target="_blank"><img src="<?php echo "$directory_prefix" . "images/fb.png" ?>" alt="Facebook" class="socialMedia__image"></a>
		<a href="https://github.com/nicleemart" target="_blank"><img src="<?php echo "$directory_prefix" . "images/github.png" ?>" alt="GitHub" class="socialMedia__image"></a>
		<a href="https://www.linkedin.com/in/nikki-martin-7b9645a2" target="_blank"><img src="<?php echo "$directory_prefix" . "images/linkedin.png" ?>" alt="LinkedIn" class="socialMedia__image"></a>
	</div>

</div>

<div class="navigation">

	<div class="navTitle">Navigation</div>
		<div class="navHeader">Main</div>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>

	
</div>
