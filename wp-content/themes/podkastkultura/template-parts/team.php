<?php
/**
 * Block Name: Команда
 * Description: Секция с командой и описанием членов команды.
 */

$title = get_field('title');
$team_members = get_field('team_members'); // repeater
?>

<section class="section team">
    <div class="team__container">
        <div class="team-titleBx">
            <?php if ($title): ?>
                <h2 class="title_block team__title"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <div class="arrows team__arrows">
                <button class="arrow prev team__arrow">
                    <i class="fa-arrow-right fa-light"></i>
                </button>
                <button class="arrow next team__arrow">
                    <i class="fa-arrow-right fa-light"></i>
                </button>
            </div>
        </div>

        <?php if ($team_members): ?>
            <div class="swiper team-box">
                <div class="swiper-wrapper team-wrapper">
                    <?php foreach ($team_members as $member): ?>
                        <div class="swiper-slide team__item">
                            <div class="team__item-wrapper">
                                <?php if (!empty($member['photo'])): ?>
                                    <div class="-ibg team__item-imgBx">
                                        <img src="<?php echo esc_url($member['photo']['url']); ?>"
                                             alt="<?php echo esc_attr($member['photo']['alt']); ?>"/>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($member['description'])): ?>
                                    <div class="team__item-content">
                                        <?php echo esc_html($member['description']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if (!empty($member['name'])): ?>
                                <div class="team__item-name"><?php echo esc_html($member['name']); ?></div>
                            <?php endif; ?>

                            <?php if (!empty($member['profession'])): ?>
                                <div class="team__item-prof"><?php echo esc_html($member['profession']); ?></div>
                            <?php endif; ?>

                            <?php if (!empty($member['description'])): ?>
                                <div class="team__item-content mobile">
                                    <?php echo esc_html($member['description']); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="pagination team-pagination"></div>
        <?php endif; ?>
    </div>
</section>
