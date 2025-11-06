<?php
/* Template Name: Блог */
get_header();
?>

<?php custom_breadcrumbs(); ?> <!-- вот сюда -->
<section class="cases end-to-end">
    <div class="cases__container">
        <h1 class="cases__title h1"><?= the_title() ?></h1>
    </div>
</section>

<section class="blog">
    <div class="blog__container">
        <div class="blog_list">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 9, // сколько записей показывать
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $post_id = get_the_ID();
                    $author_id = get_the_author_meta('ID');
                    $author_name = get_the_author_meta('display_name');
                    $author_avatar = get_avatar_url($author_id);
                    $excerpt = get_the_excerpt();
                    $thumbnail = get_the_post_thumbnail_url($post_id, 'large');
                    $read_time = get_field('read_time', $post_id); // если добавишь ACF поле “время чтения”
                    $views = get_field('views', $post_id); // если используешь плагин просмотров
                    ?>

                    <div class="blog_bl">
                        <div class="blog_list_block">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>" loading="lazy">
                            </a>

                            <div class="center">
                                <div class="iko">
                                    <a href="<?php the_permalink(); ?>">
                                        <span><?php the_title(); ?></span>
                                        <p><?php echo wp_trim_words($excerpt, 25, '...'); ?></p>
                                    </a>
                                </div>

                                <div>
                                    <div class="blog_info">
                                        <div class="date"><?php echo get_the_date('d.m.Y'); ?></div>
                                        <?php if ($read_time) : ?>
                                            <div class="time"><?php echo esc_html($read_time); ?> мин</div>
                                        <?php endif; ?>
                                        <?php if ($views) : ?>
                                            <div class="see"><?php echo esc_html($views); ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="blog_list_autor">
                                        <a href="<?php echo get_author_posts_url($author_id); ?>">
                                            <img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author_name); ?>">
                                            <div>
                                                <p><?php echo esc_html($author_name); ?></p>
                                                <span>- Автор</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="right">
                                <div class="blog_info">
                                    <div class="date"><?php echo get_the_date('d.m.Y'); ?></div>
                                    <?php if ($read_time) : ?>
                                        <div class="time"><?php echo esc_html($read_time); ?> мин</div>
                                    <?php endif; ?>
                                    <?php if ($views) : ?>
                                        <div class="see"><?php echo esc_html($views); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Пока нет записей.</p>';
            endif;
            ?>

        </div>

        <?php
        // пагинация
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('« Назад'),
            'next_text' => __('Вперед »'),
        ));
        ?>

    </div>
</section>

<?php get_footer(); ?>
