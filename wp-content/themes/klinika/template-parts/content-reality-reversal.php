<?php
$reality_reversal = get_field('reality_reversal')
?>
<div class="reality-reversal">
    <div class="container-lg container-960">
        <div class="row">
            <div class="reality-reversal__title col-12"><?= $reality_reversal['title']; ?></div>
            <div class="reality-reversal__description col-12">
                <?= $reality_reversal['description']; ?>
            </div>
        </div>
        <div class="row g-5">
            <div class="reality-reversal__content-wrapper col-6">
                <div class="reality-reversal__content-inner-wrapper">
                    <div class="reality-reversal__search row">
                        <div class="reality-reversal__search-icon"></div>
                        <div class="reality-reversal__search-lebel"><?= $reality_reversal['details'][0]['search_lebel']; ?></div>
                        <div class="reality-reversal__search-text"><?= $reality_reversal['details'][0]['search_text']; ?></div>
                    </div>
                    <div class="reality-reversal__results row">
                        <div class="reality-reversal__result reality-reversal__result-first col-6">
                            <div class="reality-reversal__images">
                                <div class="reality-reversal__top-text"><?= $reality_reversal['details'][0]['first_column_label']; ?></div>
                                <div class="reality-reversal__image-first" style="height: <?= $reality_reversal['details'][0]['first_column_image_height']; ?>px">
                                    <img src="<?= get_template_directory_uri(); ?>/images/lines.png" alt="Lines" />
                                </div>
                                <div class="reality-reversal__bottom-text"><?= $reality_reversal['details'][0]['first_column_text']; ?></div>
                            </div>
                        </div>
                        <div class="reality-reversal__result reality-reversal__result-second col-6">
                            <div class="reality-reversal__images">
                                    <div class="reality-reversal__icon icon icon-<?= $reality_reversal['details'][0]['second_column_likedislike'] ? 'like': 'dislike'; ?>"></div>
                                <div class="reality-reversal__image-first" style="height: <?= $reality_reversal['details'][0]['second_column_height']; ?>px">
                                </div>
                                <div class="reality-reversal__bottom-text"><?= $reality_reversal['details'][0]['second_column_text']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reality-reversal__list gray-list-icon">
                    <?php foreach ($reality_reversal['details'][0]['details_list'] as $item) : ?>
                        <div class="reality-reversal__item"><?= $item["text"]; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="reality-reversal__content-wrapper col-6">
                <div class="reality-reversal__content-inner-wrapper">
                    <div class="reality-reversal__search">
                        <div class="reality-reversal__search-icon"></div>
                        <div class="reality-reversal__search-lebel"><?= $reality_reversal['details'][1]['search_lebel']; ?></div>
                        <div class="reality-reversal__search-text"><?= $reality_reversal['details'][1]['search_text']; ?></div>
                    </div>
                    <div class="reality-reversal__results row">
                        <div class="reality-reversal__result reality-reversal__result-first col-6">
                            <div class="reality-reversal__images">
                                <div class="reality-reversal__top-text"><?= $reality_reversal['details'][1]['first_column_label']; ?></div>
                                <div class="reality-reversal__image-first" style="height: <?= $reality_reversal['details'][1]['first_column_image_height']; ?>px">
                                    <img src="<?= get_template_directory_uri(); ?>/images/lines.png" alt="Lines" />
                                </div>
                                <div class="reality-reversal__bottom-text"><?= $reality_reversal['details'][1]['first_column_text']; ?></div>
                            </div>
                        </div>
                        <div class="reality-reversal__result reality-reversal__result-second col-6">
                            <div class="reality-reversal__images">
                                    <div class="reality-reversal__icon icon icon-<?= $reality_reversal['details'][1]['second_column_likedislike'] ? 'like': 'dislike'; ?>"></div>
                                <div class="reality-reversal__image-first" style="height: <?= $reality_reversal['details'][1]['second_column_height']; ?>px">
                                </div>
                                <div class="reality-reversal__bottom-text"><?= $reality_reversal['details'][1]['second_column_text']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reality-reversal__list green-list-icon">
                    <?php foreach ($reality_reversal['details'][1]['details_list'] as $item) : ?>
                        <div class="reality-reversal__item"><?= $item["text"]; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="reality-reversal__text"><?= $reality_reversal['text']; ?></div>
        </div>
    </div>
</div>

<?php unset($reality_reversal, $item);?>