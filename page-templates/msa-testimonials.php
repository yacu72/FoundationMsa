<?php
/**
 *Template Name: MSA Testimonials
 */
 ?>

<?php get_header( 'front' ); ?>

<!--<?php get_template_part( 'template-parts/featured-image' ); ?>-->
<div class="main-container">
	<div class="news-wrapper">
		<main class="main-content">

      <div class="testimonials grid-container">
        <div class="testimonial-inner grid-x">

          <?php
            global $wpdb;

            $args = array(
              'post_type' => 'testimonial',
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

                    <?php the_excerpt(); ?>

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
