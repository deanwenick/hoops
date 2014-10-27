<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="page">
    <div id="content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article>
<h1 class="article-header"><?php echo get_the_title(); ?></h1>

<?php if ( is_user_logged_in() ) {
    the_content();
    } else {
        echo "<p>Please log in to view the classmate directory</p>";
    }
?>

<?php endwhile; ?>
</article>

</div><!-- /content -->
</div><!-- /page -->
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>