
<?php

	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => '4',
    'orderby'        => 'rand',
	);

  $i = 0;

	$query = new WP_Query( $args );

?>

<div class="featured-testimonials-section grid-x">
  <div class="row columns">
    <h1>Testimonials</h1>
  </div>
  <div class="featured-testimonials row grid-x">

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="medium-6 columns">
      <div class="testimonial">
          <div class="profile-pic hide-for-small-only">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <div class="featured-testimonials-quotation">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>


  <?php endwhile; ?>

</div>
