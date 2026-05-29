<?php
$platforms_title = get_field('platforms_title');
$platforms_list = get_field('platforms_list');
?>

<?php if ($platforms_list): ?>
    <section class="platforms">
        <div class="platforms__container">
            <?php if ($platforms_title): ?>
                <h2 class="platforms__title title_block">
                    <?= wp_kses_post($platforms_title); ?>
                </h2>
            <?php endif; ?>

            <div class="platforms__slider">
                <?php foreach ($platforms_list as $platform):
                    $image = $platform['platform_image'] ?? null;
                    $name = $platform['platform_name'] ?? '';
                    ?>
                    <div class=" platforms__slide">
                        <?php if ($image): ?>
                            <img src="<?= esc_url($image['url']); ?>"
                                 alt="<?= esc_attr($image['alt'] ?: wp_strip_all_tags($name)); ?>">
                        <?php endif; ?>
                        <?php if ($name): ?>
                            <span class="platforms__name"><?= wp_kses_post($name); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>