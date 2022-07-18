<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying Home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Klinika
 * @since 1.0.0
 */

get_header();

$text_with_image = get_field('design_is_also_not_a_democracy');
?>

<section class="section-banner">
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
</section>
<section class="section-trust-us">
    <?php get_template_part( 'template-parts/content', 'trust-us' ); ?>
</section>
<section class="section-about-us">
    <?php get_template_part( 'template-parts/content', 'about-us' ); ?>
</section>
<section class="section-reality-reversal">
    <?php get_template_part( 'template-parts/content', 'reality-reversal' ); ?>
</section>
<section class="section-journey">
    <?php get_template_part( 'template-parts/content', 'journey' ); ?>
</section>
<section class="section-text-image">
    <div class="container-960">
        <?php get_template_part( 'template-parts/content', 'text-with-image', ['item' => $text_with_image] ); ?>
    </div>
</section>
<section class="section-feedback">
    <?php get_template_part( 'template-parts/content', 'feedback' ); ?>
</section>
<section class="section-bottom-content">
    <?php get_template_part( 'template-parts/content', 'bottom' ); ?>
</section>

<?php
get_footer();



