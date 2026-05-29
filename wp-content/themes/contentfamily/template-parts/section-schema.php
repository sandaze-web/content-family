<section class="section schema">
    <div class="schema__container">
        <?php if ($title = get_field('schema_title')): ?>
            <h2 class="title_block schema__title"><?php echo wp_kses_post($title); ?></h2>
        <?php endif; ?>

<!--            --><?php //if (have_rows('schema_list')): ?>
<!--                <ul class="schema-counts">-->
<!--                    --><?php //while (have_rows('schema_list')): the_row(); ?>
<!--                        <li>--><?php //echo esc_html(get_sub_field('item')); ?><!--</li>-->
<!--                    --><?php //endwhile; ?>
<!--                </ul>-->
<!--            --><?php //endif; ?>

<!--            --><?php //if ($image = get_field('schema_image')): ?>
<!--                <div class="schema-imgBx">-->
<!--                    <img src="--><?php //echo esc_url($image['url']); ?><!--"-->
<!--                         alt="--><?php //echo esc_attr($image['alt']); ?><!--"/>-->
<!--                </div>-->
<!--            --><?php //endif; ?>

            <div class="room">
<!--                <div class="btnBx">-->
<!--                    <button class="btn_purple scroll_form btn primary-btn">Забронировать</button>-->
<!--                </div>-->
                <div class="left">
                    <div class="wc"><p>WC</p></div>
                    <div class="grim"><p>Гримерная</p></div>
                    <div class="studio1"><p>Студия 1</p></div>
                    <div class="studio2"><p>Студия 2</p></div>
                    <div class="office"><p>Офис</p></div>
                </div>
                <?php if ($image = get_field('schema_image')): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"/>
                <?php endif; ?>
            </div>
    </div>
</section>
