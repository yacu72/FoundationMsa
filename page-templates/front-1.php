<?php
/*
Template Name: Front 1
*/
?>

<?php get_header(''); ?>



<div class="front-1-wrapper">

	<header class="main-header" role="banner">
		<div class="header-inner grid-x">

			<div class="site-logo-img cell medium-3">
				<a href=""></a>
			</div>

			<nav class=" cell medium-9 show-for-medium">
				<?php foundationpress_sec_nav(); ?>
			</nav>

		</div>

	</header>

	<section class="section-1 ">
		<div class="grid-container">
			<div class="front-hero-inner grid-x grid-margin-x">

				<div class="intro section-column cell medium-8">
					<p>We're transparent and community driven. We believe the students we work with, are uplifting the world and connecting cultures.</p>
				</div>
				<div class="action-wrapper section-column cell medium-4">
					<a href="" class="button large round">Apply Now!</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-4">
		<div class="section-inner grid-x">

			<div class="section-column cell medium-8">
				<?php get_template_part( 'template-parts/blocks/product-feature-section' ); ?>
			</div>

			<div class="section-column cell medium-4">
				<?php get_template_part( 'template-parts/blocks/testimonial-slider' ); ?>
			</div>

		</div>
	</section>

	<section class="section-2">
		<div class="section-inner grid-x grid-margin-x">

			<div class="section-column cell medium-12 grid-x grid-margin-x">

				<?php get_template_part( 'template-parts/blocks/featured-blog-posts'); ?>

			</div>

		</div>
	</section>

	<section class="section-3">
		<div class="section-inner grid-x grid-margin-x">

		<div class="section-column cell">
			<?php get_template_part( 'template-parts/blocks/featured-testimonials-1'); ?>
		</div>

		</div>
	</section>

	<section class="section-4">
		<div class="section-inner grid-x grid-margin-x">
			<div class="section-column cell">
				<?php get_template_part( 'template-parts/blocks/vertical-testimonial'); ?>
			</div>
		</div>
	</section>

	<div class="main-container">
	</div>



	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php endwhile; ?>
	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
