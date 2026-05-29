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
                    <img src="<?php echo esc_url($main_image['url']); ?>"
                         alt="<?php echo esc_attr($main_image['alt']); ?>"/>
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
                                Новые клиенты могут зайти к нам на экскурсию и провести тестовую запись (30 минут) – это
                                бесплатно!
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
                                <div class="invite-tags__item-character ">
                                    <span><img alt="" src="images/icon/m-1.svg"/> Курская</span>
                                    <span></span>
                                    <span>6 минут</span>
                                </div>
                                бесплатная парковка на территории
                            </div>
                        </div>
                    </div>
                    <!-- /Статичный контент -->
                    <form class="invite-form form-wrapper">
                        <div class="invite-form__item inputBx">
                            <label for="2334">Имя</label>
                            <input id="2334" name="name" type="text">
                        </div>
                        <div class="invite-form__item inputBx">
                            <div class="invite-socialsBx">
                                <label>Способ связи *</label>
                                <div class="socials invite-socials contact-methods contact-input-wrapper">

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
                        <div class="invite-form__item inputBx contact-input">
                            <label for="contact-field">Номер телефона *</label>
                            <input id="contact-field" name="contact_value" type="text" class="phone-invite"
                                   placeholder="+7">
                        </div>
                        <div class="invite-form__item invite-form__checkBx">
                            <div class="checkBx">
                                <input type="checkbox" name="check" id="43534544" required>
                                <label for="43534544">*Нажимая на кнопку вы соглашаетесь с условиями обработки данных и
                                    политикой конфиденциальности</label>
                            </div>
                        </div>
                        <button class="btn primary-btn invite-form__button">Записаться</button>

                        <input type="hidden" name="action" value="send_form_handler">
                        <input type="hidden" name="form_name" value="Форма инвайта">
                    </form>


                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
