<?php
/**
 * Template Name: Front Page For Hospital Web
 * Description: The homepage template for Saint Nicholas Hospital.
 *
 * @package snh-hospital
 */

get_header(); ?>

<main>
  <?php get_template_part('template-parts/content', 'hero'); ?>
  <?php get_template_part('template-parts/content', 'services'); ?>
  <?php get_template_part('template-parts/content', 'about'); ?>
  <?php get_template_part('template-parts/content', 'specialists'); ?>
  <?php get_template_part('template-parts/content', 'testimonials'); ?>
  <?php get_template_part('template-parts/content', 'news'); ?>
</main>

<?php get_footer(); ?>
