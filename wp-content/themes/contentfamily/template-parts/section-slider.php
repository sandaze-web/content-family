<section class="sections photo_block">
    <div class="sections__container">
        <div class="head_block head_block_center">
            <?php $title = get_field('title_block'); ?>
            <?php if ($title) : ?>
                <h2 class="title_block"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php $desc = get_field('desc'); ?>
            <?php if ($desc) : ?>
                <div class="subtitle center_subtitle">
                    <?php echo wp_kses_post($desc); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php $photos = get_field('photos'); ?>
    <?php if (!empty($photos) && is_array($photos)) : ?>
        <div class="photo_block_scroll">
            <div class="photo_block-wrapper">
                <?php for ($i = 0; $i < count($photos); $i += 2) : ?>
                    <div class="photo_row">
                        <?php
                        $img1 = $photos[$i];
                        $img1_url = $img1['url'] ?? '';
                        $img1_alt = $img1['alt'] ?? 'Закадровая картинка';
                        ?>
                        <?php if ($img1_url) : ?>
                            <div class="photo_blockBx -ibg">
                                <img src="<?php echo esc_url($img1_url); ?>" alt="<?php echo esc_attr($img1_alt); ?>">
                            </div>
                        <?php endif; ?>

                        <?php if (isset($photos[$i + 1])) : ?>
                            <?php
                            $img2 = $photos[$i + 1];
                            $img2_url = $img2['url'] ?? '';
                            $img2_alt = $img2['alt'] ?? 'Закадровая картинка';
                            ?>
                            <?php if ($img2_url) : ?>
                                <div class="photo_blockBx -ibg">
                                    <img src="<?php echo esc_url($img2_url); ?>" alt="<?php echo esc_attr($img2_alt); ?>">
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>
</section>