<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>
<?php
  $args = array( 'post_type' => 'podcast', 'posts_per_page' => 4 );
  $loop = new WP_Query( $args );

  while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="podcast-wrapper">

      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="home-podcast-cover-image" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>

      <h4 class="h4-title"><?php the_title(); ?></h4>
      <h4 class="box-num h4-num">Episode <?php echo CFS()->get( 'podcast_episode_number' ); ?></h4>
    </a>
<?php endwhile; ?>
