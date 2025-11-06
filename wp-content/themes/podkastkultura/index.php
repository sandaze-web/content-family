<?php
/**
 * Index template (fallback)
 * @package PodkastKultura
 */
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'podkastkultura'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
