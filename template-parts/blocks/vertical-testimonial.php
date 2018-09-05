
<?php

	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => '1',
    'orderby'        => 'rand',
	);


	$query = new WP_Query( $args );

	while ( $query->have_posts() ) : $query->the_post();

?>

<div class="testimonial-block-vertical">
  <div class="testimonial-block-vertical-quote">
    <?php the_content(); ?>
  </div>
  <div class="testimonial-block-vertical-person">
    <?php the_post_thumbnail('thumbnail'); ?>
    <div>
      <p class="testimonial-block-vertical-name"><?php the_title(); ?></p>
    </div>
  </div>
</div>

<?php endwhile; ?>
