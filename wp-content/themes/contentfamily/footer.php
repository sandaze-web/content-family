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
            <img alt="" src="/images/logo.svg"/>
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
        <div class="footer-nav-wrapper">
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
            <div class="footer-navBx">
                <?php
                wp_nav_menu([
                        'theme_location' => 'footer_menu_services',
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
        </div>
        <div class="footer-requisites">
            <div class="footer-requisites__item">ИП Мишкин А.А. ИНН 770472159084</div>
            <a class="footer-requisites__item" href="#">Написать ген. продюсеру</a>
            <a class="footer-requisites__item" target="_blank" href="https://content-family.ru/wp-content/uploads/2025/11/oferta-content-family-1.pdf">Договор оферты</a>
            <a class="footer-requisites__item" target="_blank" href="https://content-family.ru/wp-content/uploads/2025/11/politika-konfidenczialnosti.pdf">Политика конфиденциальности</a>
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

<div class="_overlay-bg modal thanks-modal ">
    <div class="content">
        <div>
            <span class="title">Спасибо! Ваша заявка принята.</span>
            <p>В ближайшее время мы свяжемся с вами для уточнения деталей</p>
        </div>
        <div class="thanks-modal__logo">
            <img src="/images/logo.svg" alt="Логотип">
        </div>
        <div class="button-close video-modal-close thanks-modal-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
</div>

<div class="_overlay-bg modal feedback-modal" style="display: none" data-popup="feedback-modal">
    <div class="feedback-modal__content">

        <form action="#" class="form-wrapper feedback-modal__form">
            <div class="calc-request__content">
                <h2 class="calc-request__title title_block">
                    Оставьте заявку
                </h2>

                <p class="calc-request__text">
                    Оставьте заявку — менеджер свяжется с вами в ближайшее время, ответит на вопросы и уточнит все детали.
                </p>

                <div class="calc-request__form">
                    <div class="calc-request-inner">
                        <div class="price-form-wrapper">
                            <div class="price-form-inputBx">
                                <label for="feedback-name">Имя</label>
                                <input id="feedback-name" name="name" type="text" required>
                            </div>

                            <div class="price-form-inputBx">
                                <label>Способ связи *</label>

                                <div class="price-socials-wrapper">
                                    <div class="socials invite-socials contact-methods">

                                        <label class="contact-method">
                                            <input type="radio" name="contact_method" value="Телефон" checked>
                                            <span class="contact-icon ">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6846 11.9067C13.0965 11.3262 12.3624 11.3262 11.7781 11.9067C11.3323 12.3487 10.8866 12.7907 10.4484 13.2402C10.3285 13.3638 10.2274 13.39 10.0813 13.3076C9.79288 13.1503 9.48574 13.0229 9.20856 12.8506C7.91632 12.0378 6.83384 10.9928 5.87495 9.81668C5.39926 9.23236 4.976 8.60684 4.6801 7.90266C4.62017 7.76033 4.63141 7.666669 4.74752 7.55058C5.19325 7.11983 5.62774 6.67785 6.06598 6.23586C6.67652 5.62158 6.67652 4.90242 6.06224 4.28439C5.71389 3.93231 5.36555 3.58771 5.01721 3.23562C4.65762 2.87604 4.30179 2.51272 3.93846 2.15688C3.3504 1.5838 2.61626 1.5838 2.03194 2.16063C1.58246 2.60261 1.15172 3.05583 0.694474 3.49032C0.271409 3.89111 0.0579992 4.38178 0.01330446 4.95486C-0.05881223 5.88752 0.17036 6.76774 0.492485 7.62549C1.15172 9.40091 2.15554 10.9778 3.37287 12.4236C5.01721 14.3788 6.97992 15.9258 9.27599 17.042C10.3098 17.5439 11.381 17.9297 12.5459 17.9934C13.3475 18.0383 14.0442 17.8361 14.6023 17.2105C14.9843 16.7835 15.4151 16.394 15.8196 15.9857C16.4189 15.3789 16.4226 14.6448 15.8271 14.0455C15.1154 13.3301 14.4 12.6184 13.6846 11.9067Z"
                                                          fill="rgb(73, 165, 249)"/>
                                                    <path d="M12.9685 8.92199L14.3506 8.68601C14.1334 7.41625 13.5341 6.26634 12.6239 5.3524C11.6612 4.38978 10.4439 3.78298 9.10298 3.5957L8.9082 4.98533C9.94574 5.13141 10.8896 5.59962 11.635 6.345C12.3392 7.04917 12.7999 7.94063 12.9685 8.92199Z"
                                                          fill="rgb(73, 165, 249)"/>
                                                    <path d="M15.1307 2.9141C13.5351 1.31846 11.5162 0.310887 9.28755 0L9.09277 1.38963C11.018 1.65931 12.7635 2.53205 14.1419 3.90669C15.4491 5.21392 16.3069 6.86574 16.6178 8.68237L17.9999 8.4464C17.6366 6.34135 16.644 4.43108 15.1307 2.9141Z"
                                                          fill="rgb(73, 165, 249)"/>
                                                </svg>
                                            </span>
                                        </label>

                                        <label class="contact-method">
                                            <input type="radio" name="contact_method" value="Max">
                                            <span class="contact-icon ">
                                            <svg width="18" height="18" viewBox="0 0 720 720" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"> <path
                                                        d="M350.4 9.60003C141.8 20.5 4.09998 184.1 12.8 390.4C16.6 480.7 52.9 558.4 61.5 644.1C63.7 666.3 57.3 693.7 82.9 703.4C114.4 715.3 162.7 695.3 189.1 677C198.1 670.9 206.7 663.8 213.3 655C240.6 673.1 266.5 690.6 299 698.4C442.1 732.7 598.9 654.2 668.6 528.1C799.6 291.2 622.5 -4.59997 350.4 9.60003ZM269.4 504C258.1 512.8 247.2 524.8 234.7 531.7C216.6 541.4 211 531.3 204.2 515.3C182.8 464.4 180.2 377.7 192.7 324.4C209.5 251.9 265.6 188.1 342.7 181.3C420.7 174.4 493.1 214 525.8 285.5C598.2 444.6 412.9 601.7 269.4 504.1V504Z"
                                                        fill="#0A0B0B"/> </svg>
                                        </span>
                                        </label>

                                        <label class="contact-method">
                                            <input type="radio" name="contact_method" value="Телеграм">
                                            <span class="contact-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                                 viewBox="0 0 20 16" fill="none">
                                                <mask id="mask0_1_20" style="mask-type:alpha"
                                                      maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="16">
                                                    <g clip-path="url(#clip0_1_20)">
                                                        <g clip-path="url(#clip1_1_20)">
                                                        <path d="M15.9595 0.587329C16.3563 0.434038 16.9241 0.231973 17.2251 0.141392C17.6287 0.0159729 17.875 -0.0188659 18.1486 0.00900514C18.3675 0.0229406 18.6001 0.0926182 18.6959 0.169263C18.7917 0.238941 18.9079 0.420103 18.9627 0.573393C19.0379 0.796361 19.0379 0.998426 18.9695 1.68127C18.9285 2.14114 18.7985 3.17237 18.689 3.98062C18.5796 4.78888 18.3333 6.41237 18.1486 7.60386C17.9571 8.79534 17.6492 10.6557 17.4577 11.7497C17.273 12.8436 17.0677 13.9724 17.013 14.2581C16.9514 14.5437 16.8214 14.9688 16.7257 15.1917C16.6231 15.4147 16.4384 15.6934 16.3221 15.7979C16.1237 15.9791 16.0484 16 15.638 16C15.2959 16 15.0838 15.9582 14.8307 15.8397C14.646 15.7492 13.2436 14.8155 11.7181 13.7703C10.1925 12.7252 8.8312 11.7566 8.6807 11.6173C8.53704 11.4779 8.37286 11.2619 8.32497 11.1365C8.27024 11.0111 8.24972 10.8299 8.27024 10.7184C8.29761 10.6139 8.4139 10.391 8.5302 10.2237C8.6465 10.0565 9.61792 9.08102 10.6919 8.05676C11.766 7.0325 12.9837 5.85495 13.3941 5.43689C13.8114 5.01882 14.2082 4.59379 14.2698 4.4823C14.3587 4.34295 14.3655 4.25934 14.3177 4.15482C14.272 4.06192 14.1808 4.01546 14.044 4.01546C13.8867 4.01546 12.9016 4.6565 9.92576 6.67018C7.77085 8.13341 5.88274 9.3876 5.73224 9.45031C5.58174 9.51999 5.28758 9.61057 5.08235 9.65238C4.7745 9.72205 4.5898 9.71509 4.06988 9.63147C3.72783 9.56876 2.94112 9.3667 2.33227 9.17857C1.71658 8.99044 1.03249 8.7605 0.806733 8.67689C0.58098 8.58631 0.314182 8.44695 0.211567 8.35637C0.0747473 8.24489 0.0200195 8.13341 0.0200195 7.96618C0.0200195 7.80592 0.0747473 7.68747 0.238931 7.52721C0.362069 7.40179 0.587821 7.24153 0.738323 7.16489C0.888825 7.08824 2.74957 6.25908 4.87712 5.31843C7.00466 4.37779 9.43321 3.31172 10.2815 2.9494C11.1298 2.58707 12.5869 1.96694 13.5309 1.57675C14.4682 1.17959 15.5627 0.733652 15.9595 0.587329Z"
                                                              fill="#A5A7A8"></path>
                                                        </g>
                                                    </g>
                                                </mask>
                                                <g mask="url(#mask0_1_20)">
                                                    <rect x="0.0200195" width="19" height="16"
                                                          fill="#49A5F9"></rect>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1_20">
                                                        <rect width="19" height="16" fill="white"
                                                              transform="translate(0.0200195)"></rect>
                                                    </clipPath>
                                                    <clipPath id="clip1_1_20">
                                                        <rect width="19" height="16" fill="white"
                                                              transform="translate(0.0200195)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        </label>

                                        <label class="contact-method">
                                            <input type="radio" name="contact_method" value="Whatsapp">
                                            <span class="contact-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                 viewBox="0 0 19 18" fill="none">
                                                <mask id="mask0_1_26" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                      x="0" y="0" width="19" height="18">
                                                    <g clip-path="url(#clip0_1_26)">
                                                        <g clip-path="url(#clip1_1_26)">
                                                            <path d="M0.0200195 18.0001L1.28064 13.5276C0.469987 12.1519 0.0431727 10.5867 0.0431727 8.97874C0.0431727 4.02784 4.07538 0 9.03163 0C13.9879 0 18.02 4.02784 18.02 8.97874C18.02 13.9296 13.9879 17.9575 9.03163 17.9575C7.48729 17.9575 5.97509 17.5626 4.63733 16.8128L0.0200195 18.0001ZM4.87338 15.1793L5.14851 15.3471C6.31488 16.0584 7.65767 16.4344 9.03163 16.4344C13.1471 16.4344 16.4953 13.0898 16.4953 8.97874C16.4953 4.86769 13.1471 1.52309 9.03163 1.52309C4.91613 1.52309 1.56791 4.86769 1.56791 8.97874C1.56791 10.4112 1.97547 11.8022 2.74642 13.0014L2.93171 13.2897L2.20576 15.8653L4.87338 15.1793Z"
                                                                  fill="#A5A7A8"></path>
                                                            <path d="M6.50533 4.80039L5.92209 4.76863C5.7389 4.75865 5.5592 4.8198 5.42073 4.93995C5.13798 5.18523 4.68586 5.65942 4.547 6.27734C4.33992 7.1987 4.65994 8.32692 5.48822 9.45513C6.31649 10.5833 7.86003 12.3885 10.5895 13.1595C11.469 13.4079 12.1609 13.2404 12.6947 12.8993C13.1175 12.6291 13.409 12.1955 13.514 11.7053L13.6072 11.2708C13.6367 11.1327 13.5665 10.9926 13.4381 10.9335L11.467 10.0259C11.339 9.967 11.1873 10.0042 11.1012 10.1156L10.3274 11.1177C10.2689 11.1934 10.1689 11.2234 10.0785 11.1917C9.5486 11.0057 7.77346 10.263 6.79944 8.38885C6.7572 8.30757 6.7677 8.2089 6.82762 8.13958L7.56717 7.28495C7.64273 7.19768 7.66182 7.07499 7.61641 6.96894L6.76674 4.98322C6.72151 4.87751 6.62014 4.80665 6.50533 4.80039Z"
                                                                  fill="#A5A7A8"></path>
                                                        </g>
                                                    </g>
                                                </mask>
                                                <g mask="url(#mask0_1_26)">
                                                    <rect x="0.0200195" width="18" height="18" fill="#35A747"></rect>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1_26">
                                                        <rect width="18" height="18" fill="white"
                                                              transform="translate(0.0200195)"></rect>
                                                    </clipPath>
                                                    <clipPath id="clip1_1_26">
                                                        <rect width="18" height="18" fill="white"
                                                              transform="translate(0.0200195)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="invite-form__item inputBx contact-input">
                            <label for="feedback-contact">Номер телефона *</label>
                            <input
                                    id="feedback-contact"
                                    name="contact_value"
                                    type="text"
                                    class="phone-invite"
                                    placeholder="+7"
                                    required
                            >
                        </div>
                    </div>

                    <div class="checkBx price-form-checkBx">
                        <input id="feedback-agree" name="agree" type="checkbox" required>
                        <label for="feedback-agree">
                            Нажимая на кнопку вы соглашаетесь на
                            <a href="#">Обработку персональных данных в порядке</a>,
                            указанном в <a href="#">Политике конфиденциальности</a>
                        </label>
                    </div>

                    <button type="submit" class="btn primary-btn price__button">
                        Оставить заявку
                    </button>

                    <input type="hidden" name="action" value="send_form_handler">
                    <input type="hidden" name="form_name" value="Обратная связь">
                </div>
            </div>
        </form>

        <div class="button-close video-modal-close feedback-modal-close">
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
<script defer="defer" src="/static/plugins/slick.min.js"></script>
<script defer="defer" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b1636bea-a71f-4f63-83f5-554063b5a20b"
        type="text/javascript"></script>
<!--==========   SCRIPTS   ==========-->
<script defer="defer" src="/js/app.js"></script>
</body>
</html>
