<?php
$feedback = get_field('you_want_to_learn_more');
?>

<div class="feedback">
    <div class="container-960">
        <div class="row">
            <div class="feedback__title col-12"><?= $feedback['title']; ?></div>
            <div class="feedback__description col-12"><span><?= $feedback['description']; ?></span></div>
        </div>
        <div class="row gx-5">
            <div class="feedback__form-wrapper col-6">
                <div class="feedback__form"><?= do_shortcode($feedback['form']); ?></div>
            </div>
            <div class="feedback__content-wrapper col-6">
                <div class="feedback__content-image"><img src="<?= $feedback['image']['url']; ?>" alt="<?= $feedback['image']['alt']; ?>" /></div>
                <div class="feedback__list-title"><?= $feedback['list_title']; ?></div>
                <ul class="feedback__list">
                    <?php foreach ($feedback['list'] as $item) : ?>
                        <li class="feedback__list-item"><?= $item['text']; ?></li> 
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="feedback__logos">
            <?php foreach ($feedback['logos'] as $logo) : ?>
                <div class="feedback__logo"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php unset($feedback, $item, $logo); ?>