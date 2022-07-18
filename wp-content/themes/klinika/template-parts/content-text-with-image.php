
<?php $item = $args['item']; ?>
<div class="text-with-image__item row">
    <div class="text-with-image__content-wrapper col-6">
        <div class="text-with-image__title"><?= $item['title'];?></div>
        <div class="text-with-image__text"><?= $item['text'];?></div>
        <div class="text-with-image__details">
            <div class="text-with-image__percents"><?= $item['percents']; ?></div>
            <div class="text-with-image__percents-details"><?= $item['percents_data']; ?></div>
        </div>
    </div>
    <div class="text-with-image__image-wrapper col-6">
        <img src="<?= $item['image']['url'];?>" 
             alt="<?= $item['image']['alt'];?>" 
             class="text-with-image__image"
        />
    </div>
    <div class="text-with-image__step-arrow"></div> 
</div>

<?php unset($item); ?>