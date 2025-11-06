<section class="about end-to-end">
    <div class="about__container">
        <div class="about-titleBx">
            <?php if ($title = get_field('about_title')): ?>
                <h2 class="about__title h1"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <?php if ($tagline = get_field('about_tagline')): ?>
                <div class="about__tag"><?php echo esc_html($tagline); ?></div>
            <?php endif; ?>
        </div>

        <div class="about-inner">
            <div class="about-wrapper">
                <?php if ($quote = get_field('about_quote')): ?>
                    <div class="about-quote">
                        <?php
                        $name = get_field('about_name');
                        $quote = str_replace('{name}', esc_html($name), $quote);
                        echo wp_kses_post($quote);
                        ?>
                    </div>
                <?php endif; ?>

                <div class="about-content">
                    <?php if ($text = get_field('about_text')): ?>
                        <p><?php echo wp_kses_post($text); ?></p>
                    <?php endif; ?>

                    <?php if (have_rows('about_links')): ?>
                        <div class="about-links">
                            <?php while (have_rows('about_links')): the_row();
                                $link = get_sub_field('link');
                                $title = get_sub_field('title');
                                $subtitle = get_sub_field('subtitle');
                                ?>
                                <?php if ($link): ?>
                                    <a href="<?php echo esc_url($link); ?>" class="about-links__item">
                                        <p>
                                            <?php echo esc_html($title); ?><br>
                                            <?php if ($subtitle): ?>
                                                <span><?php echo esc_html($subtitle); ?></span>
                                            <?php endif; ?>
                                        </p>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($image = get_field('about_image')): ?>
                <div class="-ibg about-imgBx">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
