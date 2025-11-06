<?php
$title = get_field('title');
$link_text = get_field('link_text');
$link_url = get_field('link_url');
$studios = get_field('studios'); // repeater
?>

<section class="studios">
    <div class="studios__container">
        <div class="studios-titleBx">
            <?php if ($title): ?>
                <h2 class="title_block studios__title"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($link_url): ?>
                <a class="studios-feedback" href="<?php echo esc_url($link_url); ?>">
                    <div class="studios__star">
                        <svg fill="none" height="22" width="23" viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 0L14.2148 8.40326H23L15.8926 13.5967L18.6073 22L11.5 16.8065L4.39261 22L7.10738 13.5967L0 8.40326H8.78521L11.5 0Z"
                                  fill="#49A5F9"/>
                        </svg>
                    </div>
                    <div class="studios-feedback__link">
                        <span>5 на Яндекс.картах</span>
                        <i class="fa-arrow-right fa-light"></i>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <?php if ($studios): ?>
            <div class="studios-inner">
                <?php foreach ($studios as $index => $studio): ?>
                    <div class="studios-box">
                        <div class="studios-contentBx show">
                            <div class="studios-content">
                                <div class="studios-content-main">
                                    <div class="studios-content__title">
                                        Студия №<?php echo $index + 1; ?>
                                    </div>

                                    <div class="studios-content__desc">
                                        <?php echo esc_html($studio['description']); ?>
                                    </div>

                                    <div class="studios-content-tags">
                                        <div class="studios-content-tags__item">
                                            <span>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M0 6C0 3.17157 0 1.75736 0.87868 0.87868C1.75736 0 3.17157 0 6 0C8.82843 0 10.2426 0 11.1213 0.87868C12 1.75736 12 3.17157 12 6C12 8.82843 12 10.2426 11.1213 11.1213C10.2426 12 8.82843 12 6 12C3.17157 12 1.75736 12 0.87868 11.1213C0 10.2426 0 8.82843 0 6ZM7.2 3.45C6.95147 3.45 6.75 3.24853 6.75 3C6.75 2.75147 6.95147 2.55 7.2 2.55H9C9.24853 2.55 9.45 2.75147 9.45 3V4.8C9.45 5.04853 9.24853 5.25 9 5.25C8.75147 5.25 8.55 5.04853 8.55 4.8V4.0864L7.2182 5.4182C7.04246 5.59393 6.75754 5.59393 6.5818 5.4182C6.40607 5.24246 6.40607 4.95754 6.5818 4.7818L7.9136 3.45H7.2ZM5.4182 6.5818C5.59393 6.75754 5.59393 7.04246 5.4182 7.2182L4.0864 8.55H4.8C5.04853 8.55 5.25 8.75147 5.25 9C5.25 9.24853 5.04853 9.45 4.8 9.45H3C2.75147 9.45 2.55 9.24853 2.55 9V7.2C2.55 6.95147 2.75147 6.75 3 6.75C3.24853 6.75 3.45 6.95147 3.45 7.2V7.9136L4.7818 6.5818C4.95754 6.40607 5.24246 6.40607 5.4182 6.5818ZM5.25 3C5.25 3.24853 5.04853 3.45 4.8 3.45H4.0864L5.4182 4.7818C5.59393 4.95754 5.59393 5.24246 5.4182 5.4182C5.24246 5.59393 4.95754 5.59393 4.7818 5.4182L3.45 4.0864V4.8C3.45 5.04853 3.24853 5.25 3 5.25C2.75147 5.25 2.55 5.04853 2.55 4.8V3C2.55 2.75147 2.75147 2.55 3 2.55H4.8C5.04853 2.55 5.25 2.75147 5.25 3ZM6.5818 7.2182C6.40607 7.04246 6.40607 6.75754 6.5818 6.5818C6.75754 6.40607 7.04246 6.40607 7.2182 6.5818L8.55 7.9136V7.2C8.55 6.95147 8.75147 6.75 9 6.75C9.24853 6.75 9.45 6.95147 9.45 7.2V9C9.45 9.24853 9.24853 9.45 9 9.45H7.2C6.95147 9.45 6.75 9.24853 6.75 9C6.75 8.75147 6.95147 8.55 7.2 8.55H7.9136L6.5818 7.2182Z"
                                                          fill="white"/>
                                                </svg>

                                            </span>
                                            <span><?php echo esc_html($studio['size']); ?></span>
                                        </div>
                                        <div class="studios-content-tags__item">
                                            <span><i class="fa-solid fa-user"></i></span>
                                            <span><?php echo esc_html($studio['heroes']); ?></span>
                                        </div>
                                    </div>

                                    <?php if ($studio['button_text']): ?>
                                        <button class="btn primary-btn studios__button">
                                            <?php echo esc_html($studio['button_text']); ?>
                                        </button>
                                    <?php endif; ?>
                                </div>

                                <?php if ($studio['video']): ?>
                                    <div class="studios-content-videoBtn videoBtn"
                                         data-src="<?php echo esc_url($studio['video']['url']); ?>">
                                        <div class="-ibg studios-content-videoImg">
                                            <img alt="" src="<?php echo esc_url($studio['video_preview']['url']); ?>"/>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="studios-content-btnBx">
                                <div class="studios-content__btn">
                                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 0.5L7.79289 7.79289C8.18342 8.18342 8.18342 8.81658 7.79289 9.20711L0.5 16.5"
                                              stroke="white" stroke-linecap="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <?php if ($studio['configurations']): ?>
                            <div class="studios-configurations">

                                <!-- 🔹 Кнопки конфигураций -->
                                <div class="studios-config__tabs">
                                    <?php foreach ($studio['configurations'] as $config_index => $config): ?>
                                        <button
                                                class="studios-config__tab <?php echo $config_index !== 0 ? 'active' : ''; ?>"
                                                data-config="<?php echo $config_index; ?>"
                                        >
                                            <?php echo esc_html($config['configuration_name']); ?>
                                        </button>
                                    <?php endforeach; ?>
                                </div>

                                <!-- 🔹 Галереи конфигураций -->
                                <div class="studios-config__galleries">
                                    <?php foreach ($studio['configurations'] as $config_index => $config): ?>
                                        <div
                                                class="studios-config__gallery <?php echo $config_index === 0 ? 'active' : ''; ?>"
                                                data-config-gallery="<?php echo $config_index; ?>"
                                        >
                                            <?php if ($config['configuration_gallery']): ?>
                                                <div class="swiper studios-slider">
                                                    <div class="swiper-wrapper studios-wrapper">
                                                        <?php foreach ($config['configuration_gallery'] as $image): ?>
                                                            <div class="swiper-slide studios-slide">
                                                                <div class="-ibg studios-slide__imgBx">
                                                                    <img src="<?php echo esc_url($image['url']); ?>"
                                                                         alt="<?php echo esc_attr($image['alt']); ?>"/>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="pagination studios-pagination"></div>
                                                </div>

                                                <div class="swiper studios-nav">
                                                    <div class="swiper-wrapper studios-nav-wrapper">
                                                        <?php foreach ($config['configuration_gallery'] as $image): ?>
                                                            <div class="-ibg studios-nav__item swiper-slide">
                                                                <img src="<?php echo esc_url($image['url']); ?>"
                                                                     alt="<?php echo esc_attr($image['alt']); ?>"/>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
