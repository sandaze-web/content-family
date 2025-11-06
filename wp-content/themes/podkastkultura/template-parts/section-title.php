<section class="cases end-to-end">
    <div class="cases__container">
        <?php if ($title = get_field('title')): ?>
            <h1 class="h1 cases__title"><?php echo wp_kses_post($title); ?></h1>
        <?php endif; ?>
    </div>
</section>