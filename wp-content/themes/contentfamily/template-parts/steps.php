<?php
/**
 * Block Name: Как происходит запись подкаста
 * Description: Секция с шагами записи подкаста.
 */

$title = get_field('title');
$steps = get_field('steps'); // repeater
?>

<section class="section steps">
    <div class="steps__container">
        <?php if ($title): ?>
            <h2 class="title_block steps__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if (get_field('subtitle')): ?>
            <div class="subtitle center_subtitle">
                <?= apply_filters('the_content', get_field('subtitle')); ?>
            </div>
        <?php endif; ?>


        <?php if (get_field('title_h3')): ?>
            <h3 class="title_block steps__title"><?php echo esc_html(get_field('title_h3')); ?></h3>
        <?php endif; ?>

        <?php if ($steps): ?>
            <div class="steps-box">
                <?php foreach ($steps as $index => $step): ?>
                    <div class="steps__item">
                        <div class="steps__item-circles">
                            <?php for ($i = 0; $i < count($steps); $i++): ?>
                                <span class="<?php echo $i === $index ? 'active' : ''; ?>"></span>
                            <?php endfor; ?>
                        </div>

                        <?php if (!empty($step['step_title'])): ?>
                            <div class="steps__item-title"><?php echo esc_html($step['step_title']); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($step['step_subtitle'])): ?>
                            <div class="steps__item-subtitle"><?php echo esc_html($step['step_subtitle']); ?></div>
                        <?php endif; ?>

                        <?php if ($index === 0): ?>
                            <div class=" steps__item-socials">
                                <?php if ($phone = get_field('site_phone', 'option')): ?>
                                    <a class="steps__item-phone" href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>">
                                        <?php echo esc_html($phone); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if ($tg = get_field('site_telegram', 'option')): ?>
                                    <a class="steps__item-social" href="<?php echo esc_url($tg); ?>" target="_blank" aria-label="Telegram">
                                        <img alt="" class="" src="/images/socials/tg.svg"/>
                                    </a>
                                <?php endif; ?>

                                <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                                    <a class="steps__item-social" href="<?php echo esc_url($wa); ?>" target="_blank" aria-label="WhatsApp">
                                        <img alt="" class="svg" src="/images/socials/wa.svg"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
