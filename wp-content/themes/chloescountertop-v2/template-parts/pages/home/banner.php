<ul class="home-slider">
<?php if( have_rows('home_banners') ): ?>
  <?php while( have_rows('home_banners') ): the_row();

    // vars
    $banner_image = get_sub_field('banner_image');
    $uppercase_text = get_sub_field('banner_text_all_caps');
    $italic_text = get_sub_field('banner_text_italics');
    $active_image = get_sub_field('use_image_instead_of_text');
    $banner_link = get_sub_field('button_link');
    $banner_text = get_sub_field('button_text');
    $secondary_banner_image = get_sub_field('banner_image_top');
    $add_class = get_sub_field('use_dark_text_colour');

    if( $add_class ) :
      $dark_text_class = 'make-dark-blue';
    endif;

    if( $active_image === true ) : ?>
      <li class="pull-text_right home-slide" style="background-image: url(<?php echo $banner_image; ?>)">
    <?php else : ?>
      <li class="home-slide" style="background-image: url(<?php echo $banner_image; ?>)">
    <?php endif; ?>

      <div class="home-banner-text">

        <?php if( $active_image ): ?>
        	<img src="<?php echo $secondary_banner_image; ?>" alt="">
        <?php else : ?>
          <h2 class="<?php echo $dark_text_class ?>">
            <span class="banner-text-sans"><?php echo $uppercase_text ?> </span>
            <span class="banner-text-serif"><?php echo $italic_text ?></span>
          </h2>
        <?php  endif; ?>


        <?php if( $banner_link ): ?>
          <a href="<?php echo $banner_link; ?>" class="<?php echo $dark_text_class; ?> home-slide-link"><?php echo $banner_text; ?></a>
        <?php endif; ?>

      </div>

    </li>

  <?php endwhile; ?>
<?php endif; ?>
</ul>
