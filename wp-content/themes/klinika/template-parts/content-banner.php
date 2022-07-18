<?php 
$banner = get_field('first_banner');
?>

<div class="banner">
    <div class="container-lg container-960 banner__wrapper">
        <div class="row">
            <div class="banner__content-wrapper col-6">
                <div class="banner__pre-title"><?= $banner['pre-title'] | ''?></div>
                <div class="banner__title"><?= $banner['title'] | ''?></div>
                <div class="banner__scroller">
                    <div class="banner__scroller-wrapper">
                        <span class="icon icon-scroller"></span>
                    </div>
                    <span class="banner__scroller-text"><?php _e('Nach unten scrollen', 'kl'); ?></span>
                </div>
            </div>
            <div class="banner__image-wrapper col-6">
                <?php if (isset($banner['image'])) {?>
                    <img 
                        class="banner__image"
                        src="<?= $banner['image']['url'] | ''?>" 
                        alt="<?= $banner['alt']; ?>"
                    />
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php unset($banner); ?>