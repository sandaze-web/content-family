<?php
/**
 * Block Name: Оборудование
 * Description: Секция с карточками оборудования.
 */

$title = get_field('title');
$items = get_field('equipment_items'); // repeater
?>

<section class="section equipment">
    <div class="equipment__container">
        <?php if ($title): ?>
            <h2 class="title_block equipment__title">
                <?php echo wp_kses_post($title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($items): ?>
            <div class="equipment-box">
                <?php foreach ($items as $item): ?>
                    <div class="equipment__item">
                        <?php if (!empty($item['image'])): ?>
                            <div class="-ibg equipment__item-imgBx">
                                <img src="<?php echo esc_url($item['image']['url']); ?>"
                                     alt="<?php echo esc_attr($item['image']['alt']); ?>">
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($item['tag'])): ?>
                            <div class="equipment__item-tag"><?php echo esc_html($item['tag']); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($item['title'])): ?>
                            <div class="equipment__item-title"><?php echo esc_html($item['title']); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($item['subtitle'])): ?>
                            <div class="equipment__item-subtitle"><?php echo esc_html($item['subtitle']); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
