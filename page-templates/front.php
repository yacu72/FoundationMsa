<?php
/*
Template Name: Front
*/
?>
<?php get_header('front'); ?>

<div class="content-wrapper content-wrapper-front">

	<section class="site-about ">

		<div class="align-middle grid-container grid-x">
			<div class="medium-6 section-img">

			</div>
			<div class="medium-6 section-contents">

				<h2 class="title">Our Services</h2>
				<p>Acting as an important intermediary with the educational institute.</p>
				<a href="" class="button">View All...</a>

			</div>
		</div>

	</section>

	<section class="unis">
		<div class="grid-container grid-x">

			<div class="small-12 grid-x medium-10 unis-wrapper">

				<div class="cell small-12 medium-6">
					<h4><i class="fa fa-graduation-cap"></i>Romanian Universities</h4>
					<a href="romanian-universities/" class="more"><i class="fa fa-angle-right"></i></a>
				</div>

				<div class="cell small-12 medium-6">
					<h4><i class="fa fa-graduation-cap"></i>Bulgarian Universities</h4>
					<a href="" class="more"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>

		</div>
	</section>

	<section class="msa-experience">
		<div class="grid-container grid-x">
			<div class="cell medium-6"></div>
			<div class="cell medium-6">
				<h2 class="title">
					<span>Apply Trough Our Platform</span>
					Reliable and Experience
				</h2>
				<p>We are a dependable professional services consultancy, providing reliable services to international medical students looking for accessible study abroad opportunities.</p>
				<a href="" class="button">Read more</a>
			</div>
		</div>
	</section>

	<section class="msa-testimonials">
		<div class="testimonials grid-container grid-x">
			<h2>
				<span>Hundreds of Happy Students Served </span>
				Testimonials
			</h2>

			<?php

			global $wpdb;

			$args = array(
				'post_type' => 'testimonial',
				'orderby' => 'rand',
				'posts_per_page' => 3,
				'meta_query' => array(
					array(
					 'key' => '_thumbnail_id',
					 'compare' => 'EXISTS',
				 )),
			);

			$query = new WP_Query( $args );

			if( $query->have_posts() ) :

				while ( $query->have_posts() )  : $query->the_post();	?>

				<div class="cell medium-4">
					<div class="quotblock">
						<?php the_post_thumbnail('thumbnail'); ?>
						<span class="quote-icon"></span>
						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>
					</div>
				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>
			<a href="testimonials" class="button know-more">More Testimonials</a>
		</div>
	</section>

	<section class="msa-news">
		<div class="grid-container grid-x">
			<h2>
				<span>There are many ways to learn.</span>
				News and Articles
			</h2>
			<div class="new-wrapper grid-margin-x grid-x">

				<?php
					$paged_listing = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args_listing = array(
						'post_type' => 'post',
						'posts_per_page' => 3,
						'offset' => 1,
						'order' => 'DESC',
						'paged' => $paged_listing,
					);

					$loop_listing = new WP_Query( $args_listing );

					while($loop_listing->have_posts()): $loop_listing->the_post();
				 ?>

				 <article class="cell medium-4 blog-item">
					 <?php the_post_thumbnail('post_grid'); ?>
					 <!--<img src="https://picsum.photos/350/150/?random" alt="">-->
					 <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					 <div class="postmeta">
						 By: <span class="post-author"><?php the_author(); ?></span>
					 </div>
					 <div class="post-content">
						 <?php the_excerpt(); ?>
					 </div>
				 </article>

			 <?php
				endwhile;
				wp_reset_query();
			 ?>
			 <a href="articles-news" class="button know-more">More News</a>
			</div><!--new wrapper-->
		</div>
	</section>

</div>

<?php get_footer();
