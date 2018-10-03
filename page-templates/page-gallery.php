<?php
/**
 *Template Name: Page Gallery
 */

get_header('front'); ?>

<div class="page-head section-header page-head-photo-gallery">
	<span class="sub-title">One Picture worth a Thousand Words</span>
	<h3 class="title"><?php the_title(); ?></h3>
</div>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">

				<div class="grid-container grid-x grid-margin-x photo-gallery-wrapper">

					<?php

						global $wpdb;

						$args = array(
							'post_type' => 'photo',
							'posts_per_page' => 100,
						);

						$photo = new WP_Query( $args );
						$i = 0;

						while($photo->have_posts()) : $photo->the_post();

					 ?>

					 <div class="cell medium-4 ">

							<a href="<?php echo get_the_post_thumbnail_url();?>" data-title="<?php the_title(); ?>" data-lightbox="roadtrip" >
							 	<?php the_post_thumbnail('post_grid'); ?>
							</a>
						 	<h5 class="title"><a href="#" class=""><?php the_title(); ?></a></h5>
			 			</div>
		 			<?php $i++; endwhile; wp_reset_postdata(); ?>

				</div><!-- photo-gallery-wrapper -->

			</main>

		<?php get_sidebar(); ?>

	</div><!--main-grid -->
</div><!-- main-container -->

<?php
get_footer();
