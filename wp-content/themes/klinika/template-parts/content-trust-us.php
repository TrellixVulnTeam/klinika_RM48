<?php
$trust_us = get_field('trust_us');
?>

<div class="trust-us">
    <div class="container-xl">
        <div class="trust-us__title"><?= $trust_us['title']; ?></div>
    </div>
    <!-- <div id="myCarousel" class="carousel slide container-xl" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php for($i=0; $i <= count( $trust_us['logos'])-1 ; $i++) {?>
                        <img src="<?= $trust_us['logos'][$i]['url']; ?>" class="d-block w-100" alt="<?= $trust_us['logos'][$i]['alt']; ?>">
                <?php } ?>
            </div>
            <div class="carousel-item">
                <?php for($i=0; $i <= count( $trust_us['logos'])-1 ; $i++) {?>
                        <img src="<?= $trust_us['logos'][$i]['url']; ?>" class="d-block w-100" alt="<?= $trust_us['logos'][$i]['alt']; ?>">
                <?php } ?>
            </div>
        </div>

    </div> -->
    <div class="trust-us__logo-list container-xl">
        <?php for($i=0; $i <= count( $trust_us['logos'])-1 ; $i++) {?>
                <img src="<?= $trust_us['logos'][$i]['url']; ?>" 
                     class="trust-us__logo-item" 
                     alt="<?= $trust_us['logos'][$i]['alt']; ?>"
                />
        <?php } ?>
    </div>
</div>
<?php unset($trust_us, $i); ?>