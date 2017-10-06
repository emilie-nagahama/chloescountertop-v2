<?php
/**
 * Template Name: Home
 *
 * @package Chloes_Countertop_Theme_V2
 */

get_header(); ?>


<div id="home-banner" class="banner">
  <?php get_template_part( 'template-parts/pages/home/banner'); ?>
</div>

<div class="container home-podcast-feed">
	<?php get_template_part( 'template-parts/pages/home/podcast-loop' ); ?>
</div>

<div class="container home-embed-container">
	<?php get_template_part( 'template-parts/pages/home/living-in-light' ); ?>
</div>

<div class="container home-blog-feed">
	<?php get_template_part( 'template-parts/pages/home/blog-loop' ); ?>
</div> <!-- .container -->

<div class="container home-offerings">
	<?php get_template_part('template-parts/pages/home/offerings'); ?>
</div>

<div class="full-width home-optin">
  <?php get_template_part( 'template-parts/pages/home/optin-bar'); ?>
</div>

<?php get_footer(); ?>
