<section class="hero">
    <div class="hero__container">
        <div class="hero-inner">
            <div class="hero-main">
                <div class="hero__pretitle">
                    Подкаст-студия <?php bloginfo('name'); ?>
                </div>
                <h1 class="h1 hero__title">
                    <?= esc_html(get_field('hero_title')); ?>
                </h1>
                <div class="hero__subtitle">
                    Помогаем создавать топовые подкасты по
                    качеству изображения, звука и смыслов.
                </div>
                <div class="hero-buttonBx">
                    <button class="btn primary-btn">Забронировать</button>
                    <button class="btn link-btn">
                        <span>Подробнее</span>
                        <i class="fa-arrow-right fa-light"></i>
                    </button>
                </div>
                <div class="hero__price"><?= esc_html(get_field('price')); ?></div>
            </div>
            <div class="-ibg hero-mediaBx">
                <video autoplay="" loop="" muted="" playsinline=""
                       src="<?php echo esc_url(get_field('video')['url']); ?>"></video>
                <p>видеообзор</p>
            </div>
        </div>
    </div>
    <img alt="" class="hero__bg" src="images/hero/bg.png"/>
</section>