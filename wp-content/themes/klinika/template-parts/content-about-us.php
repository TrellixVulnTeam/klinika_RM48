<?php
$about_us = get_field('about_us');
?>

<div class="about-us">
    <div class="container-lg container-960 about-us__list">
        <?php foreach($about_us as $item) : ?>
            <!-- <div class="about-us__item row">
                <div class="about-us__content-wrapper col-6">
                    <div class="about-us__title"><?= $item['title'];?></div>
                    <div class="about-us__text"><?= $item['text'];?></div>
                    <div class="about-us__details">
                        <div class="about-us__percents"><?= $item['percents']; ?></div>
                        <div class="about-us__percents-details"><?= $item['percents_data']; ?></div>
                    </div>
                </div>
                <div class="about-us__image-wrapper col-6">
                    <img src="<?= $item['image']['url'];?>" 
                         alt="<?= $item['image']['alt'];?>" 
                         class="about-us__image"
                    />
                </div>
                <div class="about-us__step-arrow"></div>
            </div> -->
            <?php get_template_part( 'template-parts/content', 'text-with-image', ['item' => $item] ); ?>
        <?php endforeach; ?>
    </div>
</div>

<!-- <pre><?php var_dump($about_us['percents']);?></pre> -->