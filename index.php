<?php
/**
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="page">
    <div id="news">
        <article>
            <div id="logo-pin" class="image-container">
                                <img id="logo-pin" alt="class logo, young woman wearing Central High sweater" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-logo.png">
                            </div><!-- /logo-pin -->
<?php if ( have_posts() ): ?>
<?php $leadPost = get_post(); ?>

			<h2><?php echo $leadPost->post_title; ?></h2>
			<p><time pubdate><?php echo mysql2date( 'F j, Y', $leadPost->post_date ); ?></time></p> 
			<?php echo apply_filters( 'the_content', $leadPost->post_content); ?>
            <p><?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></p>
		</article>


<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
</div><!-- /news -->
</div><!-- /page -->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>