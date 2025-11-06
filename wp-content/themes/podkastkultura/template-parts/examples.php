<?php
/**
 * Block Name: Примеры подкастов
 * Description: Секция с примерами подкастов и видео.
 */

$title = get_field('title');
$subtitle = get_field('subtitle');
$examples = get_field('examples'); // repeater
?>

<section class="section examples">
    <div class="examples__container">
        <div class="examples-titleBx">
            <?php if ($title): ?>
                <h2 class="title_block examples__title"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($subtitle): ?>
                <div class="examples__subtitle"><?php echo wp_kses_post($subtitle); ?></div>
            <?php endif; ?>

            <div class="arrows examples-arrows">
                <button class="arrow examples__arrow prev">
                    <i class="fa-arrow-right fa-light"></i>
                </button>
                <button class="arrow examples__arrow next">
                    <i class="fa-arrow-right fa-light"></i>
                </button>
            </div>
        </div>

        <?php if ($examples): ?>
            <div class="examples-inner">
                <div class="swiper examples-slider">
                    <div class="swiper-wrapper examples-wrapper">
                        <?php foreach ($examples as $example): ?>
                            <div class="swiper-slide examples__item">
                                <div class="examples__item-mediaBx">
                                    <div class="examples__item-media">
                                        <?php if (!empty($example['example_image'])): ?>
                                            <img src="<?php echo esc_url($example['example_image']['url']); ?>"
                                                 alt="<?php echo esc_attr($example['example_image']['alt']); ?>"/>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($example['example_video'])): ?>
                                        <div class="examples__item-videoWrapper">
                                            <button class="examples__item-videoBtn" >
                                                <i class="fa-solid fa-play"></i>
                                            </button>

                                            <iframe class="examples__item-iframe" data-src="<?php echo esc_url($example['example_video']); ?>" allowfullscreen frameborder="0" style="display: none;"></iframe>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($example['example_title'])): ?>
                                    <div class="examples__item-title"><?php echo esc_html($example['example_title']); ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="pagination examples-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</section>
