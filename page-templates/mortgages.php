<?php // Template Name: Mortgages

get_header(); ?>

<main>

    <?php get_template_part('parts/header/page-header'); ?>

    <?php get_template_part('parts/content/mortgages-intro'); ?>

    <?php get_template_part('parts/content/purchase-remortgage'); ?>

    <?php get_template_part('parts/form/mortgages-form'); ?>

    <?php get_template_part('parts/content/testimonial-scroll'); ?>

</main>

<?php get_footer(); ?>