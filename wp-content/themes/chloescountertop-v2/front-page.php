<?php
/**
 * Template Name: Home
 *
 * @package Chloes_Countertop_Theme_V2
 */

get_header(); ?>


<div id="home-banner" class="banner">
  <?php get_template_part( 'template-parts/pages/home/home-banner'); ?>
</div>


<div class="container">

  <div class="home-podcast-feed">
    <div class="underline-thin blue">
      <h3 class="secondary-section-title"><?php the_field('podcast_heading'); ?></h3>
    </div>

    <div class="post-recent-wrap">
      <?php get_template_part( 'template-parts/pages/home/home-pod' ); ?>
    </div><!-- end .home-recent-wrap -->


    <a class="button-link" href="<?php get_template_directory_uri()?>/podcast">See All Podcast</a>
  </div>
</div>

<div class="container home-embed-container">
  <div class="home-offerings">
    <h2 class="h2-tag blue"><span>Living in Light Retreat</span></h2>
  </div>

  <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://player.vimeo.com/video/209450928' frameborder='0' webkitAllowFullScreen mozallowfullscreen autoplay allowFullScreen></iframe></div>

      <a class="button-link" href="<?php get_template_directory_uri()?>/retreats/">Retreat Details</a>
</div>


<!-- <div class="full-width home-optin"> -->
  <?php //get_template_part( 'template-parts/pages/home/home-optin'); ?>
<!-- </div> -->


<div class="container">
  <div class="home-blog-feed">
    <div class="underline-thin blue">
      <h3 class="secondary-section-title">Blog: Recent Posts</h3>
    </div>

    <div class="post-recent-wrap">
      <?php get_template_part( 'template-parts/pages/home/home-recent' ); ?>
    </div>


    <a class="button-link" href="<?php get_template_directory_uri()?>/blog">See More Blog Posts</a>
  </div>


  <div class="home-offerings">
    <h2 class="h2-tag blue"><span><?php the_field('offerings_heading'); ?></span></h2>
    <?php get_template_part('template-parts/pages/home/offerings'); ?>
  </div>

</div> <!-- .container -->



<div class="full-width home-optin">
  <?php get_template_part( 'template-parts/pages/home/home-optin'); ?>
</div>

<?php get_footer(); ?>
