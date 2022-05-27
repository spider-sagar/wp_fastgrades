<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fastgrades
 */

get_header();
?>

	<div class="innerPageSection blogPageSection">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(''); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php
//get_sidebar();
get_footer();
