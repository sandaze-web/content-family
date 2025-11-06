<section class="cases end-to-end">
    <div class="cases__container">
        <?php if ($title = get_field('cases_title')): ?>
            <h1 class="cases__title h1"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if (have_rows('cases_list')): ?>
            <div class="cases-box">
                <?php while (have_rows('cases_list')): the_row();
                    $image = get_sub_field('image');
                    $video = get_sub_field('video');
                    $title = get_sub_field('title');
                    ?>
                    <div class="examples__item">
                        <div class="examples__item-mediaBx">
                            <?php if ($image): ?>
                                <div class="examples__item-media">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php endif; ?>

                            <?php if ($video): ?>
                                <button class="examples__item-videoBtn videoBtn" data-src="<?php echo esc_url($video['url']); ?>">
                                    <i class="fa-solid fa-play"></i>
                                </button>
<!--                                <iframe src="--><!--" frameborder="0" allowfullscreen></iframe>-->
                            <?php endif; ?>
                        </div>

                        <?php if ($title): ?>
                            <div class="examples__item-title">
                                <?php echo esc_html($title); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($video): ?>
                            <button class="examples__item-button videoBtn" data-src="<?php echo esc_url($video['url']); ?>">Смотреть видео</button>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
