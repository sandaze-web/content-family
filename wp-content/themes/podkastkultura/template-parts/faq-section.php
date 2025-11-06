<section class="section faq">
    <div class="faq__container">
        <?php if ($title = get_field('faq_title')): ?>
            <h2 class="title_block faq__title"><?php echo wp_kses_post($title); ?></h2>
        <?php endif; ?>

        <div class="faq-inner">
            <div class="faq-box">
                <?php if (have_rows('faq_items')): ?>
                    <?php while (have_rows('faq_items')): the_row(); ?>
                        <div class="faq__item">
                            <div class="faq__item-titleBx">
                                <div class="faq__item-title">
                                    <?php echo esc_html(get_sub_field('question')); ?>
                                </div>
                            </div>
                            <div class="faq__item-answer">
                                <?php echo wp_kses_post(get_sub_field('answer')); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php if ($image = get_field('faq_image')): ?>
                <div class="-ibg faq-imgBx">
                    <img src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
