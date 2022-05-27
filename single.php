<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
get_sidebar();
get_footer();
