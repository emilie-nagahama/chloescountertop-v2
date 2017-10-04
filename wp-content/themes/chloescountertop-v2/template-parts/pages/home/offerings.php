<?php if( have_rows('featured_offerings') ): ?>

	<ul class="home-offering">

	<?php while( have_rows('featured_offerings') ): the_row();

		// vars
		$cta_image = get_sub_field('featured_offering_image');
		$cta_title = get_sub_field('offering_name');
		$cta_details = get_sub_field('offering_detail');
    $cta_link = get_sub_field('offering_link');

		?>

		<li class="offering">

			<?php if( $cta_link ): ?>
				<a href="<?php echo $cta_link; ?>">
			<?php endif; ?>

				<img src="<?php echo $cta_image ?>" alt="<?php echo $cta_image ?>" />

        <h3 class="offering-title"><?php echo $cta_title; ?></h3>
        <p class="offering-details"><?php echo $cta_details; ?></p>
			<?php if( $cta_link ): ?>
				</a>
			<?php endif; ?>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
