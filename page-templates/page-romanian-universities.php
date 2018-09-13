<?php
/*
Template Name: unis by country
*/
get_header('front'); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">



			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php //comments_template(); ?>
			<?php endwhile; ?>

			<form action="" class="search-uni grid-container grid-margin-x grid-x">
        <select name="" id="" class="cell medium-4 select-program">
          <option value="">Select Program...</option>
          <option value="">Medicine</option>
          <option value="">Dentistry</option>
          <option value="">Veterinary</option>
        </select>
        <select name="" id="" class="cell medium-4 select-language">
          <option value="">Select Language...</option>
          <option value="">English</option>
          <option value="">French</option>
          <option value="">Romanian</option>
        </select>
        <input class="cell medium-4 button" type="submit" value="SEARCH">
      </form>

			<div class="schools-wrapper grid-container">
			 <div class="schools-holder grid-margin-x grid-x">
      	<?php
        $args = array(
          'post_type' => 'book',
          'category_name' => 'Romania',
        );
        $books = new WP_Query($args);

        if( $books->have_posts()):
          while( $books->have_posts() ): $books->the_post();
       ?>

			 		<div class="school-cell cell medium-4">

			 			<div class="scholl-image">
			 				<?php the_post_thumbnail( ); ?>
			 			</div>
			 			<div class="school-text">
							<h4><a href="<?php echo  the_permalink(); ?>"><?php the_title(); ?></a></h4>
			 				<div class="school-content">
			 					<?php the_excerpt(); ?>
			 				</div>
			 			</div>
			 		</div>
				<?php
				    endwhile;
				  endif;
				?>
			 </div>
			</div>
		 </main>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
