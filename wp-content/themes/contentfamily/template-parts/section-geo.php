<section class="section geo">
    <div class="geo__container">
        <?php if (get_field('title')): ?>
            <h2 class="title_block geo__title"><?php the_field('title'); ?></h2>
        <?php endif; ?>

        <div class="geo-box">
            <?php if( have_rows('routes') ): ?>
                <?php while( have_rows('routes') ): the_row();
                    $title = get_sub_field('title');
                    $video = get_sub_field('video');
                    $icon = get_sub_field('icon');
                    ?>
                    <div class="geo__item">
                        <div class="geo__item-title">
                            <?php if( $icon ): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                            <?php endif; ?>
                            <?php echo esc_html($title); ?>
                        </div>
                        <div class="geo__item-video">
                            <?php if( $video ): ?>
                                <video src="<?php echo esc_url($video['url']); ?>" controls data-plyr-config='{ "volume": "0.3" }'></video>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
