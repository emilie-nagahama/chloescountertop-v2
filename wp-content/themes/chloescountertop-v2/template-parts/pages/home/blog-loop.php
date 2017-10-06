<div class="underline-thin blue">
  <h3 class="secondary-section-title">Blog: Recent Posts</h3>
</div>

<div class="post-recent-wrap">

  <?php
     $args = array( 'post_type' => array('post', 'event'), 'numberposts' => 6);
     $latest_posts = get_posts( $args ); // returns an array of posts
  ?>

  <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

     <?php /* Content from your array of post results goes here */ ?>
    <div class="latest-news-single">

      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <a href="<?php the_permalink(); ?>" class="latest-thumb-wrapper-small" style="background-image: url('<?php echo $thumb['0'];?>')">
         <div class="home-post-wrapper">
           <h4><?php the_title(); ?></h4>
         </div>
      </a>

    </div><!-- .latest-news-single -->
  <?php endforeach; wp_reset_postdata(); ?>

</div>


<a class="button-link" href="<?php get_template_directory_uri()?>/blog">See More Blog Posts</a>
