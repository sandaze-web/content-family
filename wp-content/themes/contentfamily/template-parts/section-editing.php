<?php
$editing_title = get_field('editing_title');
$editing_text = get_field('editing_text');
$editing_subtitle = get_field('editing_subtitle');
$editing_items = get_field('editing_items');
$editing_note = get_field('editing_note');
?>

<section class="editing">
    <div class="editing__container">
        <?php if ($editing_title): ?>
            <h2 class="editing__title title_block">
                <?= wp_kses_post($editing_title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($editing_text): ?>
            <p class="editing__text">
                <?= esc_html($editing_text); ?>
            </p>
        <?php endif; ?>

        <?php if ($editing_subtitle): ?>
            <h3 class="editing__subtitle">
                <?= esc_html($editing_subtitle); ?>
            </h3>
        <?php endif; ?>

        <?php if ($editing_items): ?>
            <div class="editing__scroll">
                <div class="editing__items">
                    <?php
                    $total_items = count($editing_items);

                    foreach ($editing_items as $index => $item):
                        $text = $item['editing_item_text'] ?? '';
                        ?>
                        <div class="editing__item">
                            <div class="editing__dots">
                                <?php for ($i = 0; $i < $total_items; $i++): ?>
                                    <span class="<?= $i === $index ? 'active' : ''; ?>"></span>
                                <?php endfor; ?>
                            </div>

                            <?php if ($text): ?>
                                <p><?= esc_html($text); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($editing_note): ?>
            <div class="editing__note notice-blue">
                <span><?= esc_html($editing_note); ?></span>
            </div>
        <?php endif; ?>
    </div>
</section>