<?php
$additional_title = get_field('additional_title');
$additional_text = get_field('additional_text');
$additional_subtitle = get_field('additional_subtitle');
$additional_items = get_field('additional_items');
$additional_note = get_field('additional_note');
$additional_btn_link = get_field('additional_btn_link');
?>

<section class="additional">
    <div class="additional__container">
        <div class="additional-inner">
            <div class="additional__intro">
                <?php if ($additional_title): ?>
                    <h2 class="additional__title title_block">
                        <?= wp_kses_post($additional_title); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($additional_text): ?>
                    <p class="additional__text">
                        <?= esc_html($additional_text); ?>
                    </p>
                <?php endif; ?>

                <?php if ($additional_btn_link): ?>
                    <a href="<?= esc_url($additional_btn_link); ?>" class="additional__btn primary-btn btn">
                        <?php if (!empty(get_field('button_text'))): ?>
                            <?= get_field('button_text') ?>
                        <?php else: ?>
                            Забронировать
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="additional__content">
                <?php if ($additional_subtitle): ?>
                    <h3 class="additional__subtitle">
                        <?= esc_html($additional_subtitle); ?>
                    </h3>
                <?php endif; ?>

                <?php if ($additional_items): ?>
                    <div class="additional__grid">
                        <?php foreach ($additional_items as $index => $item):
                            $image = $item['additional_item_image'] ?? null;
                            $title = $item['additional_item_title'] ?? '';
                            $wide = !empty($item['additional_item_wide']);
                            ?>
                            <article class="additional__card -ibg <?= $wide ? 'additional__card--wide' : ''; ?>">
                                <?php if ($image): ?>
                                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?: wp_strip_all_tags($title)); ?>">
                                <?php endif; ?>

                                <?php if ($title): ?>
                                    <span><?= wp_kses_post($title); ?></span>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if ($additional_note): ?>
                    <div class="additional__note notice-blue">
                        <?= esc_html($additional_note); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>