<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('front'); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
		<?php

			$al_cat_slug = get_queried_object()->slug;
			$al_cat_name = get_queried_object()->name;
		?>

		<h2>Photos Taged with: <?php echo $al_cat_name; ?></h2>
			<div class="grid-container grid-x grid-margin-x photo-gallery-wrapper">
				<?php
				    $al_tax_post_args = array(
				        'post_type' => 'photo', // Your Post type Name that You Registered
				        'posts_per_page' => -1,
				        'order' => 'ASC',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'photo_tag',
				                'field' => 'slug',
				                'terms' => $al_cat_slug
				            )
				        )
				    );
				    $al_tax_post_qry = new WP_Query($al_tax_post_args);

				    if($al_tax_post_qry->have_posts()) :

				       while($al_tax_post_qry->have_posts()) :

				            $al_tax_post_qry->the_post();
				?>
				<div class="cell medium-4 ">

					<a href="<?php echo get_the_post_thumbnail_url();?>" data-title="<?php the_title(); ?>" data-lightbox="roadtrip" >
						 <?php the_post_thumbnail('post_grid'); ?>
					</a>
					<h5 class="title"><a href="#" class=""><?php the_title(); ?></a></h5>
				</div>
				<?php $i++; ?>
				<?php
				        endwhile; wp_reset_postdata();
				    endif;
				?>
			</div><!-- photo-gallery-wrapper -->

		</main>

		<?php get_sidebar(); ?>

	</div><!-- main-grid -->
</div><!-- main-container -->

<?php get_footer();
