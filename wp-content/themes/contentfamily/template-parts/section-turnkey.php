<?php
$turnkey_title = get_field('turnkey_title');
$turnkey_text = get_field('turnkey_text');
$turnkey_subtitle = get_field('turnkey_subtitle');
$turnkey_list = get_field('turnkey_list');
$turnkey_note = get_field('turnkey_note');
$turnkey_image = get_field('turnkey_image');
?>

<section class="turnkey">
    <div class="turnkey__container">
        <div class="turnkey__inner">
            <div class="turnkey__content">
                <?php if ($turnkey_title): ?>
                    <h2 class="turnkey__title title_block">
                        <?= wp_kses_post($turnkey_title); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($turnkey_text): ?>
                    <p class="turnkey__text">
                        <?= esc_html($turnkey_text); ?>
                    </p>
                <?php endif; ?>

                <?php if ($turnkey_subtitle): ?>
                    <h3 class="turnkey__subtitle">
                        <?= esc_html($turnkey_subtitle); ?>
                    </h3>
                <?php endif; ?>

                <?php if ($turnkey_list): ?>
                    <ul class="turnkey__list">
                        <?php foreach ($turnkey_list as $item):
                            $text = $item['turnkey_list_text'] ?? '';
                            ?>
                            <?php if ($text): ?>
                            <li><?= esc_html($text); ?></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if ($turnkey_note): ?>
                    <div class="turnkey__note notice-blue">
                        <span><?= esc_html($turnkey_note); ?></span>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($turnkey_image): ?>
                <div class="turnkey__image -ibg">
                    <img src="<?= esc_url($turnkey_image['url']); ?>" alt="<?= esc_attr($turnkey_image['alt'] ?: wp_strip_all_tags($turnkey_title)); ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>