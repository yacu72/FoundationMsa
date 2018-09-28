<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header('front'); ?>

<div class="page-head section-header">
	<span class="sub-title">Latets news for students</span>
	<h3 class="title"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h3>
</div>

<div class="main-container">

	<div class="main-grid">
		<main class="posts-main-content">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<div class="grid-container grid-x grid-margin-x">

					<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'post' ); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; // End have_posts() check. ?>
			</div>
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>

			<?php endif; ?>

		</main>
		<?php //get_sidebar(); ?>

	</div>
</div>
<?php get_footer();
