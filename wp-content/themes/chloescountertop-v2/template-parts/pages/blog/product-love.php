<?php $args = array(
           'posts_per_page' => 4,
           'orderby' => 'date',
           'category__not_in' => 'uncategorized',
           'category_name' => 'product-love',
        );

     $cat_loop = new WP_Query( $args ); ?>

 <?php if ( $cat_loop->have_posts() ) : ?>

     <?php while ( $cat_loop->have_posts() ) : $cat_loop->the_post(); ?>

       <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
       <a class="blog-feed-cat" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $thumb['0'];?>')">
          <div class="home-post-wrapper">
            <h4><?php the_title(); ?></h4>
          </div>
       </a>

     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
 <?php else : ?>
 <?php endif; ?>
