<?php get_header(); ?>

<?php custom_breadcrumbs(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- 🔥 ДОБАВИЛ ЭТО -->

    <section class="cases end-to-end">
        <div class="cases__container">
            <h1 class="cases__title h1"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="single">
        <div class="single__container">
            <div class="single_blog_block">
                <div class="left">
                    <div class="sticky">
                        <div class="blog_info">
                            <div class="date"><?php echo get_the_date(); ?></div>
                            <div class="time"><?= get_field('read_time') ?> мин</div>
                        </div>

                        <div class="blog_list_autor">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                                <div>
                                    <p><b>Автор: </b><?php the_author(); ?></p>
                                    <span>- <?php the_author_meta('description'); ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="center">
                    <div class="gutenberg_block">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'post_img']); ?>
                        <?php endif; ?>

                        <div class="blog_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

<!--                <div class="right">-->
<!--                    <div class="blog_about sticky anchors post_anchors">-->
<!--                        <p>Содержание</p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </section>

    <section class="cases end-to-end">
        <div class="cases__container">
            <h1 class="cases__title h1">Похожие статьи</h1>
        </div>
    </section>

    <section class="blog">
        <div class="blog__container">
            <div class="blog_list">
                <?php
                $related = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => [get_the_ID()],
                        'orderby' => 'rand'
                ]);
                if ($related->have_posts()) :
                    while ($related->have_posts()) : $related->the_post();
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
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?> <!-- 🔥 И ЗАКРЫВАЕМ ЦИКЛ -->

<?php get_footer(); ?>
