<?php
$clients_title = get_field('clients_title');
$clients_subtitle = get_field('clients_subtitle');
$clients_items = get_field('clients_items');
$clients_note = get_field('clients_note');
?>

<section class="clients">
    <div class="clients__container">
        <?php if ($clients_title): ?>
            <h2 class="clients__title title_block">
                <?= wp_kses_post($clients_title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($clients_subtitle): ?>
            <h3 class="clients__subtitle">
                <?= esc_html($clients_subtitle); ?>
            </h3>
        <?php endif; ?>

        <?php if ($clients_items): ?>
            <div class="clients__scroll">
                <div class="clients__grid">
                    <?php foreach ($clients_items as $item):
                        $image = $item['clients_item_image'] ?? null;
                        $title = $item['clients_item_title'] ?? '';
                        ?>
                        <article class="clients__card -ibg">
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

        <?php if ($clients_note): ?>
            <div class="clients__note notice-blue">
                <?= esc_html($clients_note); ?>
            </div>
        <?php endif; ?>
    </div>
</section>