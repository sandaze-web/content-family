
<?php get_header(); ?>

<main class="main">
    <?php custom_breadcrumbs(); ?> <!-- вот сюда -->
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php get_footer(); ?>