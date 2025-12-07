<?php
/**
 * Block Name: Услуги и цены
 * Description: Секция с калькулятором аренды и формой бронирования.
 */

$title = get_field('title');
$studios = get_field('studios');
$services = get_field('services');
$options = get_field('options');
$extra_options = get_field('extra_options'); // Чекбоксы: Без оператора, Онлайн-трансляция
$notice = get_field('notice');
?>

<section class="section price">
    <div class="price__container">
        <?php if ($title): ?>
            <h2 class="title_block price__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <form action="#" class="price-inner">
            <div class="price-main">
                <div class="price-wrapper">

                    <?php if ($studios): ?>
                        <div class="price-box price-studios">
                            <div class="price__item">
                                <div class="price__item-title">Студия</div>
                                <div class="price-grid">
                                    <?php foreach ($studios as $index => $studio): ?>
                                        <?php $price = !empty($studio['price']) ? floatval($studio['price']) : 0; ?>
                                        <div class="price-studios__item">
                                            <div class="price-studios__input radioBx">
                                                <input type="radio"
                                                       name="services_studio"
                                                       id="studio-<?php echo $index; ?>"
                                                       data-price="<?php echo esc_attr($price); ?>"
                                                        <?php echo $index === 0 ? 'checked' : ''; ?>>
                                                <label for="studio-<?php echo $index; ?>">
                                                    <?php echo esc_html($studio['name']); ?>
                                                </label>
                                            </div>
                                            <?php if (!empty($studio['image'])): ?>
                                                <div class="-ibg price-studios__item-imgBx">
                                                    <img src="<?php echo esc_url($studio['image']['url']); ?>"
                                                         alt="<?php echo esc_attr($studio['image']['alt']); ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="price-box">
                        <div class="price-grid">
                            <?php if ($services): ?>
                                <div class="price__item">
                                    <div class="price__item-title">Основная услуга</div>
                                    <div class="price-inputs">
                                        <?php foreach ($services as $index => $service): ?>
                                            <?php $price = !empty($service['price']) ? floatval($service['price']) : 0; ?>
                                            <div class="price-studios__input radioBx">
                                                <input type="radio"
                                                       name="services_variant"
                                                       id="service-<?php echo $index; ?>"
                                                       data-price="<?php echo esc_attr($price); ?>"
                                                        <?php echo $index === 0 ? 'checked' : ''; ?>>
                                                <label for="service-<?php echo $index; ?>">
                                                    <?php echo esc_html($service['name']); ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($options): ?>
                                <div class="price__item">
                                    <div class="price__item-title">Опции</div>
                                    <div class="price-inputs">
                                        <?php foreach ($options as $index => $option): ?>
                                            <?php $price = !empty($option['price']) ? floatval($option['price']) : 0; ?>
                                            <div class="price-studios__input radioBx">
                                                <input type="checkbox"
                                                       name="services_option"
                                                       id="option-<?php echo $index; ?>"
                                                       data-price="<?php echo esc_attr($price); ?>"
                                                >
                                                <label for="option-<?php echo $index; ?>">
                                                    <?php echo esc_html($option['name']); ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($extra_options): ?>
                                <div class="price__item">
                                    <div class="price__item-title">Дополнительно</div>
                                    <div class="price-inputs">
                                        <?php foreach ($extra_options as $index => $extra): ?>
                                            <?php $price = !empty($extra['price']) ? floatval($extra['price']) : 0; ?>
                                            <div class="price-studios__input radioBx">
                                                <input type="checkbox"
                                                       name="extra_option[]"
                                                       id="extra-<?php echo $index; ?>"
                                                       data-price="<?php echo esc_attr($price); ?>">
                                                <label for="extra-<?php echo $index; ?>">
                                                    <?php echo esc_html($extra['name']); ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="price-count">
                        <div class="price-count__title">Кол-во часов</div>
                        <div class="price-countBx">
                            <button class="price-countBx__button min">
                                <svg fill="none" height="2" viewBox="0 0 10 2" width="10" xmlns="http://www.w3.org/2000/svg"> <path d="M1 1H9" stroke="#0B1014" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </svg>
                            </button>
                            <input class="price-countBx__input" type="number" value="1" min="1">
                            <button class="price-countBx__button plus">
                                <svg fill="none" height="10" viewBox="0 0 10 10" width="10" xmlns="http://www.w3.org/2000/svg"> <path d="M1 5H9" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> <path d="M5 9V1" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/> </svg>
                            </button>
                        </div>
                    </div>

                    <?php if ($notice): ?>
                        <div class="price__notice"><?php echo wp_kses_post($notice); ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="price-formBx">
                <div class="price-form">
                    <div class="price__item-title">Забронировать</div>
                    <div class="price-form-wrapper">
                        <div class="price-form-inputBx">
                            <label for="name">Имя</label>
                            <input id="name" name="name" type="text" required>
                        </div>

                        <div class="price-form-inputBx">
                            <label for="contact">Способ связи *</label>
                            <div class="price-socials-wrapper">
                                <div class="socials price-socials">
                                    <?php if ($phone = get_field('site_phone', 'option')): ?>
                                        <a class="socials__item price-socials__item socials_phone" href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>">
                                            <img alt="" src="images/socials/phone.png"/>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($tg = get_field('site_telegram', 'option')): ?>
                                        <a class="socials__item price-socials__item socials_tg" href="<?php echo esc_url($tg); ?>" target="_blank">
                                            <img alt="" src="images/socials/tg.svg"/>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                                        <a class="socials__item price-socials__item socials_wa" href="<?php echo esc_url($wa); ?>" target="_blank">
                                            <img alt="" src="images/socials/wa.svg"/>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-form-inputBx">
                        <label for="phone">Номер телефона *</label>
                        <input id="phone" class="phone" name="phone" type="text" required>
                    </div>

                    <div class="price-form-sumBx">
                        <div class="price-form-sumBx__title">Итого: стоимость аренды студии</div>
                        <input readonly class="price-form-sumBx__count" value="0 ₽">
                        <svg class="price-form-sumBx__border" fill="none" preserveAspectRatio="none" viewBox="0 0 393 94" xmlns="http://www.w3.org/2000/svg"> <path d="M383 1H10C4.75329 1 0.5 5.25329 0.5 10.5V83.5C0.5 88.7467 4.75329 93 10 93H383C388.247 93 392.5 88.7467 392.5 83.5V10.5C392.5 5.25329 388.247 1 383 1Z" stroke="#49A5F9" stroke-dasharray="29 29"/> </svg>
                    </div>

                    <div class="checkBx price-form-checkBx">
                        <input id="agree" name="agree" type="checkbox" required>
                        <label for="agree">Нажимая на кнопку, вы соглашаетесь с условиями обработки данных и политикой
                            конфиденциальности</label>
                    </div>

                    <button type="submit" class="btn primary-btn price__button">Забронировать</button>

                    <input type="hidden" name="action" value="send_form_handler">
                    <input type="hidden" name="form_name" value="форма инвайта">
                </div>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('input[type="radio"][data-price]');
            const checkboxes = document.querySelectorAll('input[type="checkbox"][data-price]');
            const hoursInput = document.querySelector('.price-countBx__input');
            const plusBtn = document.querySelector('.price-countBx__button.plus');
            const minusBtn = document.querySelector('.price-countBx__button.min');
            const totalEl = document.querySelector('.price-form-sumBx__count');

            function calculateTotal() {
                let total = 0;
                let optionPrice = 0

                // Радио кнопки
                document.querySelectorAll('input[type="radio"][data-price]:checked').forEach(r => {
                    total += parseFloat(r.dataset.price) || 0;
                });

                // Чекбоксы опций (Онлайн-трансляция и т.д.)
                document.querySelectorAll('input[type="checkbox"][data-price]').forEach((c, index) => {
                    if(index === 0 ) return
                    if (c.checked) {
                        optionPrice += parseFloat(c.dataset.price) || 0
                    }
                });

                // Проверка Без оператора
                const withoutOperator = document.querySelector('input[name="services_option"][id="option-0"]');
                if (withoutOperator && withoutOperator.checked) {
                    total *= 0.7; // уменьшаем на 30%
                    total += optionPrice
                }else {
                    total += optionPrice
                }

                // Количество часов
                const hours = parseInt(hoursInput.value) || 1;
                total *= hours;

                totalEl.value = total.toLocaleString('ru-RU') + ' ₽';
            }


            radios.forEach(r => r.addEventListener('change', calculateTotal));
            checkboxes.forEach(c => c.addEventListener('change', calculateTotal));

            plusBtn.addEventListener('click', () => {
                hoursInput.value = parseInt(hoursInput.value) + 1;
                calculateTotal();
            });

            minusBtn.addEventListener('click', () => {
                let val = parseInt(hoursInput.value);
                if (val > 1) hoursInput.value = val - 1;
                calculateTotal();
            });

            hoursInput.addEventListener('input', calculateTotal);

            calculateTotal();
        });
    </script>
</section>
