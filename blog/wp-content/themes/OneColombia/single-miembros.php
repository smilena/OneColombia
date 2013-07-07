<?php
/**
 * Sample template for displaying single miembros posts.
 * Save this file as as single-miembros.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


    <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <h2>Custom Fields</h2>

        <strong>Imagen:</strong> <img src="<?php print_custom_field('Imagen:to_image_src'); ?>" /><br />




<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>