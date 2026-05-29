<?php
$benefits_title = get_field('benefits_title');
$benefits_text = get_field('benefits_text');
$benefits_subtitle = get_field('benefits_subtitle');
$benefits_items = get_field('benefits_items');
$benefits_note = get_field('benefits_note');
?>

<section class="benefits">
    <div class="benefits__container">
        <?php if ($benefits_title): ?>
            <h2 class="benefits__title title_block">
                <?= wp_kses_post($benefits_title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($benefits_text): ?>
            <p class="benefits__text">
                <?= esc_html($benefits_text); ?>
            </p>
        <?php endif; ?>

        <?php if ($benefits_subtitle): ?>
            <h3 class="benefits__subtitle">
                <?= esc_html($benefits_subtitle); ?>
            </h3>
        <?php endif; ?>

        <?php if ($benefits_items): ?>
            <div class="benefits__scroll">
                <div class="benefits__items">
                    <?php foreach ($benefits_items as $item):
                        $icon = $item['benefits_item_icon'] ?? null;
                        $text = $item['benefits_item_text'] ?? '';
                        ?>
                        <div class="benefits__item">
                            <?php if ($icon): ?>
                                <div class="benefits__icon">
                                    <img src="<?= esc_url($icon['url']); ?>" alt="<?= esc_attr($icon['alt'] ?: $text); ?>">
                                </div>
                            <?php endif; ?>

                            <?php if ($text): ?>
                                <p><?= esc_html($text); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($benefits_note): ?>
            <div class="benefits__note notice-blue">
                <?= esc_html($benefits_note); ?>
            </div>
        <?php endif; ?>
    </div>
</section>