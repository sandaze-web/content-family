<section class="end-to-end studio">
    <div class="studio__container">
        <?php if (get_field('studio_section_title')): ?>
            <h1 class="h1 studio__title">
                <?php the_field('studio_section_title'); ?>
            </h1>
        <?php endif; ?>

        <?php if (get_field('studio_section_text')): ?>
            <div class="content studio-content">
                <?php the_field('studio_section_text'); ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('studios')): ?>
            <div class="list_studios studio-box">
                <?php while (have_rows('studios')): the_row(); ?>
                    <div class="studio__item">
                        <div class="-ibg studio-imgBx">
                            <?php $img = get_sub_field('studio_image'); ?>
                            <?php if ($img): ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>"/>
                            <?php endif; ?>
                        </div>

                        <div class="studio__item-wrapper">
                            <div class="content studio__item-content">
                                <p><?php the_sub_field('studio_description'); ?></p>
                            </div>

                            <div class="price_main_har">
                                <div><?php the_sub_field('studio_size'); ?></div>
                                <div><?php the_sub_field('studio_heroes'); ?></div>
                            </div>

                            <div class="price_list">
                                <b>Стоимость</b>
                                <?php if (have_rows('studio_prices')): ?>
                                    <ul>
                                        <?php while (have_rows('studio_prices')): the_row(); ?>
                                            <li>
                                                <p><?php the_sub_field('condition'); ?></p>
                                                <span><?php the_sub_field('price'); ?></span>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="price-notice notice">
                                    *2 000 ₽ - аренда доп. камеры
                                    <br>

                                    500 ₽ - аренда доп. микрофона
                                </div>
                                <a href="/#calculate-form" class="btn price_list_button primary-btn">Забронировать</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
