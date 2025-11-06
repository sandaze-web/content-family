<?php
/* Template Name: Стандартная страница */
get_header();
?>

<?php custom_breadcrumbs(); ?> <!-- хлебные крошки -->

<section class="cases end-to-end">
    <div class="cases__container">
        <h1 class="cases__title h1"><?php the_title(); ?></h1>
    </div>
</section>

<section class="page-content">
    <div class="page-content__container content">
        <?php
        // Если есть миниатюра — выводим
        if (has_post_thumbnail()) :
            echo '<div class="page-thumbnail">';
            the_post_thumbnail('large', ['class' => 'page_img', 'loading' => 'lazy', 'decoding' => 'async']);
            echo '</div>';
        endif;

        // Основной контент страницы
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
