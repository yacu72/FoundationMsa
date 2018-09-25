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

		<h2>FAQ's <?php echo $al_cat_name; ?></h2>
			<ul class="accordion" data-allow-all-closed="true" data-accordion data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" id="deeplinked-accordion">
			<?php
			    $al_tax_post_args = array(
			        'post_type' => 'hrf_faq', // Your Post type Name that You Registered
			        'posts_per_page' => 999,
			        'order' => 'ASC',
			        'tax_query' => array(
			            array(
			                'taxonomy' => 'topic',
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
			<li class="accordion-item " data-accordion-item>
				<a href="#deeplink <?php $i; ?> " class="accordion-title"><h5><?php the_title(); ?></h5></a>
				<div class="accordion-content" data-tab-content id="deeplink1">
					<?php the_content(); ?>
				</div>
			</li>
		<?php $i++; ?>
		<?php
		        endwhile; wp_reset_postdata();
		    endif;
		?>

		</main>
		<aside class="sidebar">
			<section class="widget widget_tag_cloud">
				<h6>Topics</h6>
				<div class="tagcloud">
					<ul>
					<?php
						$topics = get_terms( array(
							'taxonomy' => 'topic',
							'hide_empty' => false,
						));

						foreach($topics as $topic) { ?>
							<li> <a href="/topic/<?php echo $topic->slug; ?>"><?php echo $topic->name; ?></a> </li>
					<?php	}	?>
				</ul>
				</div>
			</section>
		</aside>
		<?php //get_sidebar(); ?>

	</div>
</div>

<?php get_footer();
