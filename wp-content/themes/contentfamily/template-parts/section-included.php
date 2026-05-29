<?php
$title = get_field('title');
$items = get_field('items');
?>

<section class="included">
    <div class="included__container">
        <div class="included-grid">
            <div class="included-head">
                <?php if ($title): ?>
                    <h2 class="title_block"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>

            <?php if ($items): ?>
                <div class="included-list">
                    <?php foreach ($items as $item): ?>
                        <div class="included-item">
                            <div class="included-card">
                                <?php if (!empty($item['name'])): ?>
                                    <span class="included-name">
                                        <?php echo esc_html($item['name']); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if (!empty($item['text'])): ?>
                                    <div class="included-text">
                                        <?php echo wp_kses_post($item['text']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>