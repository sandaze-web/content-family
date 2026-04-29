<?php
$title = get_field('title');
$left_text = get_field('left_text');
$right_text = get_field('right_text');
?>

<section class="home sections">
    <div class="home__container">
        <div class="home-head">
            <?php if ($title): ?>
                <h2 class="title_block"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>
        </div>

        <div class="home-text">
            <div class="home-col">
                <?php if ($left_text): ?>
                    <div class="home-content">
                        <?php echo wp_kses_post($left_text); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="home-col">
                <?php if ($right_text): ?>
                    <div class="home-content">
                        <?php echo wp_kses_post($right_text); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>