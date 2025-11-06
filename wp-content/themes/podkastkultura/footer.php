<?php
/**
 * Footer template
 * @package PodkastKultura
 */
?>
</main>
<footer class="section footer">
    <div class="footer__container">
        <div class="footer-logoBx">
            <img alt="" src="images/logo.svg"/>
        </div>
        <div class="footer-media">
            <a class="footer-media__item email" href="mailto: hello@content-family.ru">hello@content-family.ru</a>
            <div class="footer-media-socials">
                <?php if ($vk = get_field('site_vk', 'option')): ?>
                    <a class="footer-media__item circle vk" href="<?php echo esc_url($vk); ?>" target="_blank" aria-label="Вконтакте"></a>
                <?php endif; ?>
                <?php if ($inst = get_field('site_instagram', 'option')): ?>
                    <a class="footer-media__item circle inst" href="<?php echo esc_url($inst); ?>" target="_blank" aria-label="Instagram"></a>
                <?php endif; ?>

                <?php if ($youtube = get_field('site_youtube', 'option')): ?>
                    <a class="footer-media__item circle youtube" href="<?php echo esc_url($youtube); ?>" target="_blank" aria-label="Youtube"></a>
                <?php endif; ?>
            </div>
            <div class="footer-media-main">
                <?php if ($phone = get_field('site_phone', 'option')): ?>
                    <a class="footer-media__item phone" href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>"> <?php echo esc_html($phone); ?></a>
                <?php endif; ?>
                <?php if ($tg = get_field('site_telegram', 'option')): ?>
                    <a class="footer-media__item circle tg" href="<?php echo esc_url($tg); ?>" target="_blank" aria-label="Telegram"></a>
                <?php endif; ?>
                <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                    <a class="footer-media__item circle wa" href="<?php echo esc_url($wa); ?>" target="_blank" aria-label="WhatsApp"></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-navBx">
            <?php
            wp_nav_menu([
                    'theme_location' => 'footer_menu',
                    'container' => false,
                    'menu_class' => 'footer-nav',
                    'depth' => 1,
                    'fallback_cb' => false,
                    'link_before' => '<span class="footer-nav__link">',
                    'link_after' => '</span>',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            ]);
            ?>
        </div>
        <div class="footer-requisites">
            <div class="footer-requisites__item">ИП Мишкин А.А. ИНН 770472159084</div>
            <a class="footer-requisites__item" href="#">Написать ген. продюсеру</a>
            <a class="footer-requisites__item" href="/dogovor-offerty">Договор офферты</a>
            <a class="footer-requisites__item" href="#">Политика конфиденциальности</a>
        </div>
        <div class="footer-notice">
            Информация на сайте носит ознакомительный характер и не является публичной офертой, определяемой положениями
            статьи 437 Гражданского кодекса РФ.
        </div>
    </div>
</footer>

<div class="_overlay-bg modal video-modal">
    <div class="video-modal-inner">
        <div class="video-modal-content">
            <div id="video-container"></div>
        </div>
        <div class="button-close video-modal-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<!--==========   PLUGINS JS   ==========-->
<script defer="defer" src="/static/plugins/jquery.min.js"></script>
<script defer="defer" src="/static/plugins/jquery.maskedinput.min.js"></script>
<script defer="defer" src="/static/plugins/swiper-bundle.min.js"></script>
<script defer="defer" src="/static/plugins/plyr.js"></script>
<script defer="defer" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b1636bea-a71f-4f63-83f5-554063b5a20b"
        type="text/javascript"></script>
<!--==========   SCRIPTS   ==========-->
<script defer="defer" src="/js/app.js"></script>
</body>
</html>
