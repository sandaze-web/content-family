<?php
/**
 * Template Name: Главная
 * @package PodkastKultura
 */
get_header();
?>

    <main class="main">
        <?php
        // Gutenberg контент страницы
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </main>

<?php get_footer(); ?>