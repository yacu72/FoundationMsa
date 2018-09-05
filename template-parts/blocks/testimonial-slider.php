<?php
/**
 * Testimonial slider with Orbit
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!-- Custom query for testimonials -->
<?php

	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => '4',
    'orderby'        => 'rand',
	);

  $i = 0;

	$query = new WP_Query( $args );

?>

<!-- slider code -->

<div class="orbit testimonial-slider-container" role="region" aria-label="testimonial-slider" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <li class="orbit-slide">
        <div class="testimonial-slide row">
          <div class="small-12 large-9 column">
            <div class="row align-middle testimonial-slide-content">
              <div class="medium-4 column hide-for-small-only profile-pic">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
              <div class="testimonial-slide-text">
                <div class="testimonial-slide-quotation">
                  <?php the_content(); ?>
                </div>
                <div class="testtimonial-slide-author-container">
                  <div class="small-profile-pic show-for-small-only">
                    <?php the_post_thumbnail('thumbnail'); ?>
                  </div>
                  <div class="testimonial-slide-author-info">
                    <?php the_title(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>

    <?php endwhile; ?>
  </ul>
</div>
<!-- slider close -->
