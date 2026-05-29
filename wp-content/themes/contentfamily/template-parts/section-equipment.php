<?php
$equipment_title = get_field('equipment_title');
$equipment_text = get_field('equipment_text');
$equipment_subtitle = get_field('equipment_subtitle');
$equipment_note = get_field('equipment_note');
$equipment_items = get_field('equipment_items');
?>

<section class="equipment">
    <div class="equipment__container">
        <?php if ($equipment_title): ?>
            <h2 class="equipment__title title_block">
                <?= wp_kses_post($equipment_title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($equipment_text): ?>
            <p class="equipment__text">
                <?= esc_html($equipment_text); ?>
            </p>
        <?php endif; ?>

        <?php if ($equipment_subtitle): ?>
            <h3 class="equipment__subtitle">
                <?= esc_html($equipment_subtitle); ?>
            </h3>
        <?php endif; ?>

        <?php if ($equipment_items): ?>
            <div class="equipment__scroll">
                <div class="equipment__grid">
                    <?php foreach ($equipment_items as $item):
                        $image = $item['equipment_item_image'] ?? null;
                        $badge = $item['equipment_item_badge'] ?? '';
                        $text = $item['equipment_item_text'] ?? '';
                        ?>
                        <article class="equipment__card">
                            <div class="equipment__image <?= $image ? '-ibg' : 'equipment__image--empty'; ?>">
                                <?php if ($image): ?>
                                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?: $badge); ?>">
                                <?php endif; ?>

                                <?php if ($badge): ?>
                                    <span class="equipment__badge"><?= esc_html($badge); ?></span>
                                <?php endif; ?>
                            </div>

                            <?php if ($text): ?>
                                <p><?= esc_html($text); ?></p>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($equipment_note): ?>
            <div class="equipment__note notice-blue">
                <span><?= esc_html($equipment_note); ?></span>
            </div>
        <?php endif; ?>
    </div>
</section>