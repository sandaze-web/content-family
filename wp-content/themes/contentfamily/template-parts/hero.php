<section class="hero">
    <div class="hero__container">
        <div class="hero-inner">
            <div class="hero-main">
                <div class="hero__pretitle">
                    Подкаст-студия <?php bloginfo('name'); ?>
                </div>
                <h1 class="h1 hero__title">
                    <!--                    --><?php //= esc_html(get_field('hero_title')); ?>
                    <?= wp_kses_post(get_field('hero_title')); ?>
                </h1>
                <div class="hero__subtitle">
                    <?php if (!empty(get_field('hero_subtitle'))): ?>
                        <?= apply_filters('the_content', get_field('hero_subtitle')); ?>
                    <?php else: ?>
                        Помогаем создавать топовые подкасты по
                        качеству изображения, звука и смыслов.
                    <?php endif; ?>
                </div>
                <div class="hero-buttonBx">
                    <a href="<?php echo get_field('link_button') ? get_field('link_button') : '/#calculate-form'?>" class="btn primary-btn">
                        <?php if (!empty(get_field('button_text'))): ?>
                            <?= get_field('button_text') ?>
                        <?php else: ?>
                            Забронировать
                        <?php endif; ?>
                    </a>
                    <button class="btn link-btn hero-scroll-next">
                        <span>Подробнее</span>
                        <i class="fa-arrow-right fa-light"></i>
                    </button>
                </div>
                <div class="hero__price"><?= esc_html(get_field('price')); ?></div>
            </div>
            <?php
            $media = get_field('video_or_image'); // Название поля ACF

            if ($media):
                $mime_type = $media['mime_type']; // Получаем MIME тип файла
                ?>
                <div class="-ibg hero-mediaBx">
                    <?php if (strpos($mime_type, 'video') !== false): ?>
                        <video autoplay loop muted playsinline
                               src="<?php echo esc_url($media['url']); ?>"></video>
                        <p>видеообзор</p>
                    <?php elseif (strpos($mime_type, 'image') !== false): ?>
                        <img src="<?php echo esc_url($media['url']); ?>" alt="<?php echo esc_attr($media['alt']); ?>" />
<!--                        <p>фотообзор</p>-->
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if (is_front_page()) : ?>
        <img alt="" class="hero__bg" src="images/hero/bg.png"/>
    <?php endif; ?>
</section>