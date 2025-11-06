<?php
/**
 * Block Name: Invite Section
 * Description: Секция "Podcast Kultura" с ACF-полями для заголовка, картинки и подзаголовка.
 */

// Получаем ACF поля
$title = get_field('title');           // Заголовок блока
$main_image = get_field('main_image'); // Основная картинка
$subtitle = get_field('subtitle');     // Текст под заголовком
?>

<section class="section invite">
    <div class="invite__container">
        <?php if ($title): ?>
            <h2 class="title_block invite__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <div class="invite-inner">
            <?php if ($main_image): ?>
                <div class="-ibg invite-imgBx">
                    <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($main_image['alt']); ?>"/>
                </div>
            <?php endif; ?>

            <?php if ($subtitle): ?>
                <div class="invite-wrapper">
                    <div class="invite-wrapper__title"><?php echo esc_html($subtitle); ?></div>

                    <!-- Статичный контент -->
                    <div class="invite-tags">
                        <div class="invite-tags__item">
                            <div class="invite-tags__item-top">
                                <div class="invite-tags__item-icon">
                                    <img alt="" src="images/icon/geo.svg"/>
                                </div>
                            </div>
                            <div class="invite-tags__item-title">Тестовая запись БЕСПЛАТНО</div>
                            <div class="invite-tags__item-subtitle">
                                Новые клиенты могут зайти к нам на экскурсию и провести тестовую запись (30 минут) – это бесплатно!
                            </div>
                        </div>
                        <div class="invite-tags__item">
                            <div class="invite-tags__item-top">
                                <div class="invite-tags__item-icon">
                                    <img alt="" src="images/socials/tg.svg"/>
                                </div>
                                <div class="invite-tags__item-icon">
                                    <img alt="" src="images/socials/wa.svg"/>
                                </div>
                            </div>
                            <div class="invite-tags__item-title">Легко записаться</div>
                            <div class="invite-tags__item-subtitle">
                                Команда на связи каждый день с 09:30 до 20:30
                            </div>
                        </div>
                        <div class="invite-tags__item">
                            <div class="invite-tags__item-top">
                                <div class="invite-tags__item-icon">
                                    <img alt="" src="images/icon/point.svg"/>
                                </div>
                            </div>
                            <div class="invite-tags__item-title">Удобная локация и парковка</div>
                            <div class="invite-tags__item-subtitle">
                                <div class="invite-tags__item-character svg">
                                    <span><img alt="" src="images/icon/m.svg"/> Курская</span>
                                    <span></span>
                                    <span>5 минут</span>
                                </div>
                                бесплатная парковка на территории
                            </div>
                        </div>
                    </div>
                    <!-- /Статичный контент -->
                    <form class="invite-form">
                        <div class="invite-form__item inputBx">
                            <label for="2334">Имя</label>
                            <input id="2334" name="name" type="text">
                        </div>
                        <div class="invite-form__item inputBx">
                            <div class="invite-socialsBx">
                                <label>Способ связи *</label>
                                <div class="socials invite-socials">

                                    <?php if ($phone = get_field('site_phone', 'option')): ?>
                                        <a href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>" class="socials__item invite__social socials_phone">
                                            <img src="images/socials/phone.png" alt="">
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($tg = get_field('site_telegram', 'option')): ?>
                                        <a href="<?php echo esc_url($tg); ?>" target="_blank" aria-label="Telegram" class="socials__item invite__social">
                                            <img src="images/socials/tg.svg" alt="">
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                                        <a href="<?php echo esc_url($wa); ?>" target="_blank" aria-label="WhatsApp" class="socials__item invite__social">
                                            <img src="images/socials/wa.svg" alt="">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="invite-form__item inputBx">
                            <label for="3245324">Номер телефона *</label>
                            <input id="3245324" type="text" class="phone">
                        </div>
                        <div class="invite-form__item invite-form__checkBx">
                            <div class="checkBx">
                                <input type="checkbox" name="check" id="43534544">
                                <label for="43534544">Нажимая на кнопку вы соглашаетесь с условиями обработки данных и
                                    политикой конфиденциальности</label>
                            </div>
                        </div>
                        <button class="btn primary-btn invite-form__button">Записаться</button>
                    </form>


                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
