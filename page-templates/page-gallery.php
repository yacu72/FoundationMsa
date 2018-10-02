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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; ?>
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

				 <a href="<?php echo get_the_post_thumbnail_url();?>"  data-lightbox="roadtrip" >
					 	<?php the_post_thumbnail('post_grid'); ?>
				 </a>
				 <h5 class="title"><a href="#" class=""><?php the_title(); ?></a></h5>
			 </div>
		 <?php $i++; endwhile; wp_reset_postdata(); ?>
	 </div>





		</main>
		<aside class="sidebar">
			photo topics
			<?php //get_template_part( 'template-parts/blocks/faq-topics-widget'); ?>
		</aside>
		<?php //get_sidebar(); ?>

	</div>
</div>
<?php
get_footer();
