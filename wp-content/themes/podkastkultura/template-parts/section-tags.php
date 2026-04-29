<?php
$texts = get_field('texts');
$media_items = get_field('media_items');
?>

<section class="tags">
    <div class="tags__container">
        <div class="tags-layout">

            <?php if ($texts): ?>
                <div class="tags-texts">
                    <?php foreach ($texts as $item): ?>
                        <?php if (!empty($item['text'])): ?>
                            <div class="tags-card">
                                <div class="tags-card__text">
                                    <?php echo wp_kses_post($item['text']); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($media_items): ?>
                <div class="tags-media">
                    <?php foreach ($media_items as $media): ?>
                        <?php
                        $media_type   = $media['media_type'] ?? '';
                        $image        = $media['image'] ?? null;
                        $video        = $media['video'] ?? null;
                        $video_poster = $media['video_poster'] ?? null;
                        ?>

                        <div class="tags-media__item <?php echo $media_type === 'video' ? 'tags-media__item--video' : ''; ?>">
                            <?php if ($media_type === 'image' && !empty($image['url'])): ?>
                                <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>"
                                        decoding="async"
                                />

                            <?php elseif ($media_type === 'video' && !empty($video['url'])): ?>
                                <video
                                        class="js-plyr-video"
                                        controls
                                        playsinline
                                        <?php if (!empty($video_poster['url'])): ?>
                                            poster="<?php echo esc_url($video_poster['url']); ?>"
                                        <?php endif; ?>
                                >
                                    <source src="<?php echo esc_url($video['url']); ?>" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>