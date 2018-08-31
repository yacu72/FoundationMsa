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

			<div class="section-column cell medium-9">
				<p>We are a dependable professional services consultancy, providing reliable services to international medical students looking for accessible study abroad opportunities.</p>
			</div>
			<div class="section-column cell medium-3">
				Apply button
			</div>			
		</div>
	</div>
	</section>

	<section class="section-4">
		<div class="section-inner grid-x">

			<div class="section-column cell medium-12">
				About Us
			</div>

		</div>
	</section>	

	<section class="section-2">
		<div class="section-inner grid-x grid-margin-x">

			<div class="section-column cell medium-8 grid-x grid-margin-x">

				<div class="cell medium-12">
					blog featured
				</div>			

				<div class="cell medium-6">
					blog item
				</div>

				<div class="cell medium-6">
					blog item
				</div>				

			</div>

			<div class="section-column cell medium-4">
				
				<div class="cell medium-12">
					Top Schools
				</div>

				<div class="cell medium-12">
					Social Links
				</div>

			</div>			

		</div>
	</section>	

	<section class="section-3">
		<div class="section-inner grid-x grid-margin-x">

		<div class="section-column cell medium-4">
			Med Schools
		</div>

		<div class="section-column cell medium-4">
		 Med Programs
		</div>

		<div class="section-column cell medium-4">
			Apply Now
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