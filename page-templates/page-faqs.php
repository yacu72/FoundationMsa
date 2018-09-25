<?php
/**
 *Template Name: Page Faqs
 */

get_header('front'); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'template-parts/content', 'page' ); ?>
				<h2><?php the_title(); ?></h2>
			<?php endwhile; ?>
				<ul class="accordion" data-allow-all-closed="true" data-accordion data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" id="deeplinked-accordion">
			<?php
				global $wpdb;

				$args = array(
					'post_type' => 'hrf_faq',
				);

				$faqs = new WP_Query( $args );
				$i = 0;

				while($faqs->have_posts()) : $faqs->the_post();

			 ?>
			 <li class="accordion-item " data-accordion-item>
				 <a href="#deeplink <?php $i; ?> " class="accordion-title"><h5><?php the_title(); ?></h5></a>
				 <div class="accordion-content" data-tab-content id="deeplink1">
					 <?php the_content(); ?>
				 </div>
			 </li>
		 <?php $i++; endwhile; wp_reset_postdata(); ?>
	 </ul>





		</main>
		<aside class="sidebar">
			<?php get_template_part( 'template-parts/blocks/faq-topics-widget'); ?>
		</aside>
		<?php //get_sidebar(); ?>

	</div>
</div>
<?php
get_footer();
