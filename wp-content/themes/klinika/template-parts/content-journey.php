<?php
$journey = get_field('patients_journey_on_the_internet');
?>

<div class="journey container-960">
    <div class="row">
        <div class="journey__title col-12"><?= $journey['title']; ?></div>
        <div class="journey__description col-12"><?= $journey['description']; ?></div>
    </div>
    <div class="row journey__first-block">
        <div class="journey__first-block-title col-12"><?= $journey['first_block_title']; ?></div>
        <div class="journey__first-block-wrapper col-6">
            <div class="journey__first-block-from"><?= $journey['text_from']; ?></div>
            <div class="journey__first-block-arrow"></div>
            <div class="journey__first-block-to"><?= $journey['text_to']; ?></div>
        </div>
        <div class="journey__first-block-percents col-6">
            <div class="journey__percents"><?= $journey['percents']; ?></div>
            <div class="journey__percents-description"><?= $journey['percent_description']; ?></div>
        </div>
    </div>
    <div class="row journey__second-block">
        <div class="journey__second-block-title col-12"><?= $journey['second_block_title']; ?></div>
        <div class="journey__second-block-wrapper col-12">
            <div class="journey__second-block-from"><?= $journey['text_from_second']; ?></div>
            <div class="journey__second-block-arrow"></div>
            <div class="journey__second-block-to"><?= $journey['text_to_second_copy']; ?></div>
        </div>
    </div>
</div>

<?php unset($journey); ?>