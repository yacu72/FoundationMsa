<?php
/**
 *Template Name: MSA Testimonials
 */
 ?>

<?php get_header( 'front' ); ?>

<div class="page-head section-header">
  <span class="sub-title">Hundreds of Happy Students</span>
  <h3 class="title">Testimonials</h3>
</div>

<div class="main-container">
	<div class="testimonials-wrapper">
		<main class="main-content">

      <div class="testimonials grid-container">
        <div class="testimonials testimonial-inner grid-x">

          <?php
            global $wpdb;

            $args = array(
              'post_type' => 'testimonial',
              'posts_per_page' => 60,
              'meta_query' => array(
                array(
                 'key' => '_thumbnail_id',
                 'compare' => 'EXISTS',
               )),
            );

            $query = new WP_Query( $args );

            if( $query->have_posts() ) {

              while ( $query->have_posts() )  { $query->the_post(); ?>

                <div class="cell medium-4 grid-item">
                  <div class="quoteblock">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <span class="quote-icon"><i class="fa fa-quote-right"></i></span>
                    <h3><?php the_title() ?></h3>

                    <?php the_content(); ?>

                  </div><!--quoteblock -->
                </div>

          <?php    }
            }
          ?>

        </div>
      </div>

		</main>
		<?php //get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
