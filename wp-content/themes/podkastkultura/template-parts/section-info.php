<section class="section info">
    <div class="info__container">
        <div class="info-inner">
            <div class="info-main">
                <?php if ($title = get_field('info_title')): ?>
                    <h2 class="info__title title_block"><?php echo wp_kses_post($title); ?></h2>
                <?php endif; ?>

                <div class="info-content">
                    <?php if ($content = get_field('info_services')): ?>
                        <?php echo $content; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="info-helper">
                <div class="info-wrapper <?php if (get_field('arrow_to_slide')): echo 'arrow_to_slide'?> <?php endif; ?>">
                    <div class="info-slider swiper">
                        <div class="info-slider-wrapper swiper-wrapper">
                            <?php if (have_rows('info_slides')): ?>
                                <?php while (have_rows('info_slides')): the_row();
                                    $image = get_sub_field('image');
                                    ?>
                                    <?php if ($image): ?>
                                        <div class="info__slide swiper-slide">
                                            <div class="-ibg info__slide-imgBx">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="arrows info-arrows">
                        <div class="arrow info__arrow prev">
                            <i class="fa-arrow-right fa-regular"></i>
                        </div>
                        <div class="arrow info__arrow next">
                            <i class="fa-arrow-right fa-regular"></i>
                        </div>
                    </div>

                    <div class="info__pagination"></div>
                </div>

                <?php if ($notice = get_field('info_notice')): ?>
                    <div class="info__notice">
                        <p><?php echo esc_html($notice); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
