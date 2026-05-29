<?php
$examples = get_field('examples'); // repeater
?>
<section class="cases end-to-end">
    <div class="cases__container">
        <?php if ($title = get_field('cases_title')): ?>
            <h1 class="cases__title h1"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <?php if ($examples): ?>
            <div class="cases-box">
                <?php foreach ($examples as $example): ?>
                    <div class="examples__item">
                        <div class="examples__item-mediaBx">
                            <div class="examples__item-media">
                                <?php if (!empty($example['example_image'])): ?>
                                    <img src="<?php echo esc_url($example['example_image']['url']); ?>"
                                         alt="<?php echo esc_attr($example['example_image']['alt']); ?>"/>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($example['example_video'])): ?>
                                <div class="examples__item-videoWrapper">
                                    <button class="examples__item-videoBtn">
                                        <i class="fa-solid fa-play"></i>
                                    </button>

                                    <iframe class="examples__item-iframe"
                                            data-src="<?php echo esc_url($example['example_video']); ?>" allowfullscreen
                                            frameborder="0" style="display: none;"></iframe>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($example['example_title'])): ?>
                            <div class="examples__item-title"><?php echo esc_html($example['example_title']); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
