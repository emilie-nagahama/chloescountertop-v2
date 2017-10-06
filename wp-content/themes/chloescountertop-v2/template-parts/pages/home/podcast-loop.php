<?php
/**
 * Template part for displaying posts.
 *
 * @package Chloes_Countertop_Theme_V2
 */
?>
<div class="underline-thin blue">
  <h3 class="secondary-section-title"><?php the_field('podcast_heading'); ?></h3>
</div>

<div class="post-recent-wrap">
  <?php
    $args = array( 'post_type' => 'podcast', 'posts_per_page' => 4 );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="podcast-wrapper">

        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="home-podcast-cover-image" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>

        <h4 class="h4-title"><?php the_title(); ?></h4>
        <h4 class="box-num h4-num"><?php _e('Episode ', 'creative_ritual'); ?><?php the_field( 'podcast_episode_number' ); ?></h4>
      </a>
  <?php endwhile; ?>
</div>

<a class="button-link" href="<?php get_template_directory_uri()?>/podcast"><?php _e('See All Podcast', 'creative_ritual'); ?></a>
