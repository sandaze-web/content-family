<?php
$formats_title = get_field('formats_title');
$formats_text = get_field('formats_text');
$formats_subtitle = get_field('formats_subtitle');
$formats_items = get_field('formats_items');
$formats_note = get_field('formats_note');
?>

<section class="formats">
    <div class="formats__container">
        <?php if ($formats_title): ?>
            <h2 class="formats__title title_block">
                <?= wp_kses_post($formats_title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($formats_text): ?>
            <p class="formats__text">
                <?= esc_html($formats_text); ?>
            </p>
        <?php endif; ?>

        <?php if ($formats_subtitle): ?>
            <h3 class="formats__subtitle">
                <?= esc_html($formats_subtitle); ?>
            </h3>
        <?php endif; ?>

        <?php if ($formats_items): ?>
            <div class="formats__scroll">
                <div class="formats__grid">
                    <?php foreach ($formats_items as $item):
                        $image = $item['formats_item_image'] ?? null;
                        $title = $item['formats_item_title'] ?? '';
                        ?>
                        <article class="formats__card -ibg">
                            <?php if ($image): ?>
                                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?: wp_strip_all_tags($title)); ?>">
                            <?php endif; ?>

                            <?php if ($title): ?>
                                <span><?= wp_kses_post($title); ?></span>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($formats_note): ?>
            <div class="formats__note notice-blue">
                <span><?= esc_html($formats_note); ?></span>
            </div>
        <?php endif; ?>
    </div>
</section>