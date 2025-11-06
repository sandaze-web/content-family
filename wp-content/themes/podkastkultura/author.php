<?php
/* Template: Автор */
get_header();
?>

<?php custom_breadcrumbs(); ?> <!-- хлебные крошки -->

<section class="cases end-to-end">
    <div class="cases__container">
        <h1 class="cases__title h1">Автор: <?php the_author(); ?></h1>
    </div>
</section>

<section class="blog">
    <div class="blog__container">
        <div class="single_autor">
            <?php
            $author = get_queried_object();
            $author_id = $author->ID;
            $author_avatar = get_avatar_url($author_id, ['size' => 300]);
            $author_description = get_the_author_meta('description', $author_id);
            ?>

            <div>
                <img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr($author->display_name); ?>" width="402" height="321" loading="lazy">
            </div>

            <div>
                <span>~ <?php echo esc_html(get_the_author_meta('occupation', $author_id) ?: 'Автор и эксперт в подкастах'); ?></span>
                <p><?php echo $author_description ? wp_kses_post($author_description) : 'Этот автор пока не добавил описание.'; ?></p>
            </div>
        </div>

        <div class="blog_list">
            <?php if (have_posts()) : while (have_posts()) : the_post();
                $post_id = get_the_ID();
                $thumbnail = get_the_post_thumbnail_url($post_id, 'large');
                $excerpt = get_the_excerpt();
                $read_time = get_field('read_time', $post_id);
                $views = get_field('views', $post_id);
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

            <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Этот автор пока не опубликовал записи.</p>';
            endif; ?>
        </div>

        <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('« Назад'),
            'next_text' => __('Вперед »'),
        ));
        ?>
    </div>
</section>

<?php get_footer(); ?>
