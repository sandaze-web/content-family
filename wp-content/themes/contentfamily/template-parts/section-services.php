<?php
$services_title = get_field('services_title');
$services_list = get_field('services_list');
?>

<?php if ($services_list): ?>
    <section class="services">
        <div class="services__container">
            <?php if ($services_title): ?>
                <h2 class="services__title title_block">
                    <?= wp_kses_post($services_title); ?>
                </h2>
            <?php endif; ?>

            <div class="services__grid">
                <?php foreach ($services_list as $service):
                    $name = $service['service_name'] ?? '';
                    $link = $service['service_link'] ?? null;
                    $video = $service['service_video'] ?? null;
                    $poster = $service['service_poster'] ?? null;
                    $featured = !empty($service['service_featured']);

                    $url = $link['url'] ?? '#';
                    $target = $link['target'] ?? '_self';
                    $title = $link['title'] ?? wp_strip_all_tags($name);

                    $video_url = is_array($video) ? ($video['url'] ?? '') : '';
                    $poster_url = is_array($poster) ? ($poster['url'] ?? '') : '';
                    ?>

                    <a class="services__item <?= $featured ? 'services__item--featured' : ''; ?>"
                       href="<?= esc_url($url); ?>"
                       target="<?= esc_attr($target); ?>"
                       aria-label="<?= esc_attr($title); ?>">

                        <?php if ($poster_url): ?>
                            <img class="services__poster"
                                 src="<?= esc_url($poster_url); ?>"
                                 alt="<?= esc_attr(wp_strip_all_tags($name)); ?>">
                        <?php endif; ?>

                        <?php if ($video_url && !wp_is_mobile()): ?>
                            <video class="services__video"
                                   src="<?= esc_url($video_url); ?>"
                                   muted
                                   loop
                                   playsinline
                                   preload="metadata">
                            </video>
                        <?php endif; ?>

                        <span class="services__overlay"></span>

                        <span class="services__name">
                            <?= wp_kses_post($name); ?>
                        </span>

                        <span class="services__arrow" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M4.5 11.5L11.5 4.5M11.5 4.5H5.5M11.5 4.5V10.5"
                                      stroke="currentColor"
                                      stroke-width="1.5"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>