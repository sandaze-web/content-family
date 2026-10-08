<?php
$prices_title = get_field('prices_title');
$prices_tabs  = get_field('prices_tabs');
?>

<section class="prices">
    <div class="prices__container">
        <?php if ($prices_title): ?>
            <h2 class="prices__title title_block">
                <?= wp_kses_post($prices_title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($prices_tabs): ?>
            <div class="prices__tabs" data-prices-tabs>
                <div class="prices__tabs-nav" role="tablist">
                    <?php foreach ($prices_tabs as $index => $tab):
                        $tab_title = $tab['prices_tab_title'] ?? '';
                        $is_active = $index === 0;
                        ?>
                        <?php if ($tab_title): ?>
                        <button
                            class="prices__tab-btn <?= $is_active ? 'is-active' : ''; ?>"
                            type="button"
                            role="tab"
                            aria-selected="<?= $is_active ? 'true' : 'false'; ?>"
                            data-prices-tab="<?= esc_attr($index); ?>"
                        >
                            <?= esc_html($tab_title); ?>
                        </button>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="prices__tabs-content">
                    <?php foreach ($prices_tabs as $index => $tab):
                        $items = $tab['prices_items'] ?? [];
                        $is_active = $index === 0;
                        ?>
                        <div
                            class="prices__tab-panel <?= $is_active ? 'is-active' : ''; ?>"
                            role="tabpanel"
                            data-prices-panel="<?= esc_attr($index); ?>"
                        >
                            <?php if ($items): ?>
                                <div class="prices__table">
                                    <div class="prices__table-head">
                                        <div class="prices__table-cell">Услуги</div>
                                        <div class="prices__table-cell">Описание</div>
                                        <div class="prices__table-cell">Стоимость</div>
                                    </div>

                                    <div class="prices__table-body">
                                        <?php foreach ($items as $item):
                                            $name        = $item['prices_item_name'] ?? '';
                                            $description = $item['prices_item_description'] ?? '';
                                            $price       = $item['prices_item_price'] ?? '';
                                            ?>
                                            <div class="prices__table-row">
                                                <div class="prices__table-cell prices__table-name">
                                                    <?php if ($name): ?>
                                                        <?= esc_html($name); ?>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="prices__table-cell prices__table-description">
                                                    <?php if ($description): ?>
                                                        <?= esc_html($description); ?>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="prices__table-cell prices__table-price">
                                                    <?php if ($price): ?>
                                                        <?= esc_html($price); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>