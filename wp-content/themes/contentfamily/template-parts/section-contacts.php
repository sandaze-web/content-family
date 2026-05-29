<section class="section contacts">
    <div class="contacts__container">
        <div class="contacts-titleBx">
            <?php if ($title = get_field('contacts_title')): ?>
                <h2 class="title_block contacts__title"><?php echo wp_kses_post($title); ?></h2>
            <?php endif; ?>

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
                <?php if ($tg = get_field('site_telegram', 'option')): ?>
                    <a class="contacts__item tg" href="<?php echo esc_url($tg); ?>" target="_blank" aria-label="Telegram">
                        <div class="contacts__item-title">Написать в Telegram</div>
                    </a>
                <?php endif; ?>
                <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                    <a class="contacts__item svg wa" href="<?php echo esc_url($wa); ?>" target="_blank" aria-label="WhatsApp">
                        <div class="contacts__item-title">Написать в WhatsApp</div>
                        <img alt="" src="/images/socials/wa.svg"/>
                    </a>
                <?php endif; ?>

                <div class="contacts__item">
                    <?php if ($address = get_field('site_address', 'option')): ?>
                        <div class="contacts__item-title">Адрес</div>
                        <div class="contacts__item-address">
                            <?php echo esc_html($address); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (have_rows('contacts_metro')): ?>
                        <div class=" contacts__item-metroBx">
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

                    <div class="contacts__item-parkingBx">
                        <div class="contacts__item-parking">P</div>
                        <div class="contacts__item-parking__text">
                            Бесплатно для клиентов студии
                        </div>
                    </div>

                    <img alt="" class="contacts__item-point" src="/images/icon/point.svg"/>
                </div>
            </div>

            <div class="contacts-map js-map" data-x="55" data-y="55" id="map"></div>
        </div>
    </div>
</section>
