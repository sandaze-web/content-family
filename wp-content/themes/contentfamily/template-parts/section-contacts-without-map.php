<section class="section contacts price_page">
    <div class="contacts__container">
        <div class="contacts-titleBx">
            <div class="contacts-text">
                <?php if ($title = get_field('contacts_title')): ?>
                    <h2 class="title_block contacts__title"><?php echo wp_kses_post($title); ?></h2>
                <?php endif; ?>

                <?php if ($text = get_field('contacts_text')): ?>
                    <p class="contacts__text"><?php echo wp_kses_post($text); ?></p>
                <?php endif; ?>
            </div>
            <?php if ($work_time = get_field('contacts_work_time')): ?>
                <div class="contacts-timeBx">
                    <div class="contacts-timeBx__icon">
                        <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9998 0C5.37257 0 0 5.37273 0 11.9998C0 18.6269 5.37257 24 11.9998 24C18.627 24 24 18.6269 24 11.9998C24 5.37273 18.627 0 11.9998 0ZM17.1876 14.2822H12.1002C12.083 14.2822 12.067 14.278 12.05 14.2774C12.0329 14.2782 12.017 14.2822 11.9997 14.2822C11.5414 14.2822 11.1698 13.9106 11.1698 13.4522V4.98C11.1698 4.52168 11.5414 4.15007 11.9997 4.15007C12.458 4.15007 12.8297 4.52168 12.8297 4.98V12.6223H17.1873C17.6457 12.6223 18.0173 12.9939 18.0173 13.4522C18.0173 13.9106 17.646 14.2822 17.1876 14.2822Z"
                                  fill="#49A5F9"></path>
                        </svg>
                    </div>
                    <div class="contacts-time">
                        <span><?php echo wp_kses_post($work_time); ?></span>
                        <span>* По согласованию</span>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="contacts-inner">
            <div class="contacts-main">
                <?php if ($phone = get_field('site_phone', 'option')): ?>
                    <a class="contacts__item" href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>">
                        <div class="contacts__item-title">Позвонить</div>
                        <div class="contacts__item-phone"><?php echo esc_html($phone); ?></div>
                    </a>
                <?php endif; ?>
                <?php if ($max = get_field('site_maks', 'option')): ?>
                    <a class="contacts__item max svg" href="<?php echo esc_url($max); ?>" target="_blank" aria-label="Telegram">
                        <div class="contacts__item-title">Написать в MAX</div>
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_289_3478)">
                                <path d="M21.0088 0C24.8698 0 28 3.13015 28 6.99121V21.0088C28 24.8698 24.8698 28 21.0088 28H6.99121C3.13015 28 0 24.8698 0 21.0088V6.99121C0 3.13015 3.13015 0 6.99121 0H21.0088ZM14.1738 3.34668C8.27704 3.34668 3.29997 7.90923 3.2998 13.9746C3.2998 16.5141 3.76972 18.267 4.18359 19.8408C4.53107 21.1183 4.83789 22.2891 4.83789 23.6738C4.98638 25.5181 8.38382 24.4401 9.45703 23.0605C11.1534 24.2869 12.1296 24.5937 14.2295 24.5938C20.0351 24.5628 24.7199 19.8369 24.7002 14.0312C24.7002 8.13442 20.0757 3.34676 14.1738 3.34668ZM14.3164 8.58887V8.59375C17.2925 8.76421 19.5841 11.2879 19.4678 14.2666C19.2678 17.2386 16.7253 19.5033 13.75 19.3604C12.8184 19.2857 11.9222 18.9667 11.1533 18.4355C10.6885 18.9004 9.94306 19.5037 9.64648 19.4326C9.02821 19.2691 8.30223 16.1264 8.71094 13.5459C9.20657 10.429 11.4448 8.44087 14.3164 8.58887Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_289_3478">
                                    <rect width="28" height="28" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if ($tg = get_field('site_telegram', 'option')): ?>
                    <a class="contacts__item svg tg" href="<?php echo esc_url($tg); ?>" target="_blank" aria-label="Telegram">
                        <div class="contacts__item-title">Написать в Telegram</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <mask id="mask0_1_20" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="16">
                                <g clip-path="url(#clip0_1_20)">
                                    <g clip-path="url(#clip1_1_20)">
                                        <path d="M15.9595 0.587329C16.3563 0.434038 16.9241 0.231973 17.2251 0.141392C17.6287 0.0159729 17.875 -0.0188659 18.1486 0.00900514C18.3675 0.0229406 18.6001 0.0926182 18.6959 0.169263C18.7917 0.238941 18.9079 0.420103 18.9627 0.573393C19.0379 0.796361 19.0379 0.998426 18.9695 1.68127C18.9285 2.14114 18.7985 3.17237 18.689 3.98062C18.5796 4.78888 18.3333 6.41237 18.1486 7.60386C17.9571 8.79534 17.6492 10.6557 17.4577 11.7497C17.273 12.8436 17.0677 13.9724 17.013 14.2581C16.9514 14.5437 16.8214 14.9688 16.7257 15.1917C16.6231 15.4147 16.4384 15.6934 16.3221 15.7979C16.1237 15.9791 16.0484 16 15.638 16C15.2959 16 15.0838 15.9582 14.8307 15.8397C14.646 15.7492 13.2436 14.8155 11.7181 13.7703C10.1925 12.7252 8.8312 11.7566 8.6807 11.6173C8.53704 11.4779 8.37286 11.2619 8.32497 11.1365C8.27024 11.0111 8.24972 10.8299 8.27024 10.7184C8.29761 10.6139 8.4139 10.391 8.5302 10.2237C8.6465 10.0565 9.61792 9.08102 10.6919 8.05676C11.766 7.0325 12.9837 5.85495 13.3941 5.43689C13.8114 5.01882 14.2082 4.59379 14.2698 4.4823C14.3587 4.34295 14.3655 4.25934 14.3177 4.15482C14.272 4.06192 14.1808 4.01546 14.044 4.01546C13.8867 4.01546 12.9016 4.6565 9.92576 6.67018C7.77085 8.13341 5.88274 9.3876 5.73224 9.45031C5.58174 9.51999 5.28758 9.61057 5.08235 9.65238C4.7745 9.72205 4.5898 9.71509 4.06988 9.63147C3.72783 9.56876 2.94112 9.3667 2.33227 9.17857C1.71658 8.99044 1.03249 8.7605 0.806733 8.67689C0.58098 8.58631 0.314182 8.44695 0.211567 8.35637C0.0747473 8.24489 0.0200195 8.13341 0.0200195 7.96618C0.0200195 7.80592 0.0747473 7.68747 0.238931 7.52721C0.362069 7.40179 0.587821 7.24153 0.738323 7.16489C0.888825 7.08824 2.74957 6.25908 4.87712 5.31843C7.00466 4.37779 9.43321 3.31172 10.2815 2.9494C11.1298 2.58707 12.5869 1.96694 13.5309 1.57675C14.4682 1.17959 15.5627 0.733652 15.9595 0.587329Z" fill="#A5A7A8"></path>
                                    </g>
                                </g>
                            </mask>
                            <g mask="url(#mask0_1_20)">
                                <rect x="0.0200195" width="19" height="16" fill="#49A5F9"></rect>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_20">
                                    <rect width="19" height="16" fill="white" transform="translate(0.0200195)"></rect>
                                </clipPath>
                                <clipPath id="clip1_1_20">
                                    <rect width="19" height="16" fill="white" transform="translate(0.0200195)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                    <a class="contacts__item svg wa" href="<?php echo esc_url($wa); ?>" target="_blank" aria-label="WhatsApp">
                        <div class="contacts__item-title">Написать в WhatsApp</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                            <mask id="mask0_1_26" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="19" height="18">
                                <g clip-path="url(#clip0_1_26)">
                                    <g clip-path="url(#clip1_1_26)">
                                        <path d="M0.0200195 18.0001L1.28064 13.5276C0.469987 12.1519 0.0431727 10.5867 0.0431727 8.97874C0.0431727 4.02784 4.07538 0 9.03163 0C13.9879 0 18.02 4.02784 18.02 8.97874C18.02 13.9296 13.9879 17.9575 9.03163 17.9575C7.48729 17.9575 5.97509 17.5626 4.63733 16.8128L0.0200195 18.0001ZM4.87338 15.1793L5.14851 15.3471C6.31488 16.0584 7.65767 16.4344 9.03163 16.4344C13.1471 16.4344 16.4953 13.0898 16.4953 8.97874C16.4953 4.86769 13.1471 1.52309 9.03163 1.52309C4.91613 1.52309 1.56791 4.86769 1.56791 8.97874C1.56791 10.4112 1.97547 11.8022 2.74642 13.0014L2.93171 13.2897L2.20576 15.8653L4.87338 15.1793Z" fill="#A5A7A8"></path>
                                        <path d="M6.50533 4.80039L5.92209 4.76863C5.7389 4.75865 5.5592 4.8198 5.42073 4.93995C5.13798 5.18523 4.68586 5.65942 4.547 6.27734C4.33992 7.1987 4.65994 8.32692 5.48822 9.45513C6.31649 10.5833 7.86003 12.3885 10.5895 13.1595C11.469 13.4079 12.1609 13.2404 12.6947 12.8993C13.1175 12.6291 13.409 12.1955 13.514 11.7053L13.6072 11.2708C13.6367 11.1327 13.5665 10.9926 13.4381 10.9335L11.467 10.0259C11.339 9.967 11.1873 10.0042 11.1012 10.1156L10.3274 11.1177C10.2689 11.1934 10.1689 11.2234 10.0785 11.1917C9.5486 11.0057 7.77346 10.263 6.79944 8.38885C6.7572 8.30757 6.7677 8.2089 6.82762 8.13958L7.56717 7.28495C7.64273 7.19768 7.66182 7.07499 7.61641 6.96894L6.76674 4.98322C6.72151 4.87751 6.62014 4.80665 6.50533 4.80039Z" fill="#A5A7A8"></path>
                                    </g>
                                </g>
                            </mask>
                            <g mask="url(#mask0_1_26)">
                                <rect x="0.0200195" width="18" height="18" fill="#35A747"></rect>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_26">
                                    <rect width="18" height="18" fill="white" transform="translate(0.0200195)"></rect>
                                </clipPath>
                                <clipPath id="clip1_1_26">
                                    <rect width="18" height="18" fill="white" transform="translate(0.0200195)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                <?php endif; ?>

                <a target="_blank" href="https://yandex.ru/maps/213/moscow/house/melnitskiy_pereulok_6s1/Z04YcAJoQEwDQFtvfXt0cnhrbA==/?ll=37.659196%2C55.753448&z=17.6" class="contacts__item link">
                    <?php if ($address = get_field('site_address', 'option')): ?>
                        <div class="contacts__item-address"><?php echo esc_html($address); ?></div>
                    <?php endif; ?>
                    <?php if (have_rows('contacts_metro')): ?>
                        <div class="svg contacts__item-metroBx">
                            <?php while (have_rows('contacts_metro')): the_row(); ?>
                                <div class="contacts__item-metro">
                                    <div class="contacts__item-icons">
                                        <?php
                                        $metro_icons = get_sub_field('metro_icon'); // теперь это массив изображений
                                        if ($metro_icons): ?>
                                            <div class="metro-icons">
                                                <?php foreach ($metro_icons as $icon): ?>
                                                    <img
                                                            alt="<?php echo esc_attr($icon['alt']); ?>"
                                                            src="<?php echo esc_url($icon['url']); ?>"
                                                            class="metro-icon"
                                                    />
                                                <?php endforeach; ?>
                                            </div>
                                        <?php else: ?>
                                            <img alt="иконка метро" src="/images/icon/m.svg" class="metro-icon"/>
                                        <?php endif; ?>
                                    </div>
                                    <span><?php echo esc_html(get_sub_field('metro_name')); ?></span>
                                    <span class="dash"></span>
                                    <span><?php echo esc_html(get_sub_field('metro_time')); ?></span>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>
</section>