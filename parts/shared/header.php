<header>
<div id="hgroup">
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>
</div><!-- /hgroup -->

<a href="#main_menu" class="nav_collapse"
                     id="nav_collapse">Menu &equiv;</a> 

<nav id="main_menu">
    <?php wp_nav_menu(
        array( 'theme_location' => 'primary', 'container' => false )
        );
    ?>
    <?php if( !is_user_logged_in() ) {echo '<span style="font-size:x-large">Please </span>';} wp_loginout(); ?>
</nav>
<div class="image-container">
    <img alt="Central High School's South Lawn" src="<?php echo get_stylesheet_directory_uri(); ?>/img/south_lawn.png">
</div>

</header>
