<section class="price_installation">
    <div class="price_installation__container">
        <?php if (get_field('installation_title')): ?>
            <h2 class="title_block" data-heading-tag="H2">
                <?php the_field('installation_title'); ?>
            </h2>
        <?php endif; ?>

        <?php if (get_field('installation_desc')): ?>
            <div class="head_desc">
                <?php the_field('installation_desc'); ?>
            </div>
        <?php endif; ?>

        <?php if (have_rows('installation_services')): ?>
            <div class="table_price">
                <div class="head">
                    <p>Услуга</p>
                    <p>Что входит?</p>
                    <p>Сроки</p>
                    <p>Стоимость</p>
                </div>
                <ul>
                    <?php while (have_rows('installation_services')): the_row(); ?>
                        <li>
                            <p class="name"><?php the_sub_field('service_name'); ?></p>
                            <div class="desc"><?php the_sub_field('service_desc'); ?></div>
                            <p class="time"><?php the_sub_field('service_time'); ?></p>
                            <p class="price"><?php the_sub_field('service_price'); ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="notice">
                <?php the_field('service_notice'); ?>
            </div>
        <?php endif; ?>


    </div>
</section>
