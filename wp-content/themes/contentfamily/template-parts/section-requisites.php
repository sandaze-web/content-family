<section class="section requisites">
    <div class="requisites__container">
        <div class="requisites-titleBx">
            <div class="title_block requisites__title">Реквизиты</div>
            <div class="requisites__items">
                <?php if ( have_rows('requisites_items') ): ?>
                    <?php while ( have_rows('requisites_items') ) : the_row(); ?>
                        <div class="requisites__item">
                            <span><?php the_sub_field('label'); ?>:</span>
                            <span><?php the_sub_field('value'); ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>