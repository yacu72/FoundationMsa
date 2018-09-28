<?php
/**
 *Template Name: Blogs Template 2
 */
 ?>

 <?php
  $term_link = get_tag_link( 7 );// Romania
  //print_r($term_link);
 ?>

<?php get_header( 'front' ); ?>

<!--<?php get_template_part( 'template-parts/featured-image' ); ?>-->
<div class="main-container">
	<div class="news-wrapper">
		<main class="main-content">

      <section class="featured-blog">
        <div class="section-inner grid-container grid-x grid-margin-x">
          <div class="cell section-column medium-7">
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'order' => 'DESC',
              );

              $loop = new WP_Query( $args );

              while($loop->have_posts()): $loop->the_post();
             ?>

             <article class="post-wrapper">
               <?php the_post_thumbnail('post_featured'); ?>
               <!--<img src="https://picsum.photos/600/150/?random" alt="">-->
               <header>
                 <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <div class="postmeta">By: <span class="author"><?php the_author(); ?></span></div>
               </header>

               <div class="post-content">
                 <?php the_excerpt(); ?>
               </div>
             </article>

           <?php endwhile; wp_reset_query(); ?>
           </div>
          <div class="cell section-column medium-5">
            <?php get_sidebar(  ); ?>
            <!--<div class="block block-tags">

              <?php
            		$tags = get_tags();
            		if ($tags) {
            	?>
              <h3>Tags</h3>
              <ul class="tags">

                <?php
              			foreach ($tags as $tag) {
              				echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></li>';
              			}
              	?>
              </ul>

              <?php
            		}
            	?>

            </div>-->
          </div>
        </div>
      </section>

      <section class="call-to-action">
        <div class="section-inner">
          <div class="section-column">
            Apply now!
          </div>
        </div>
      </section>

      <section class="blog-listing">
        <div class="section-inner grid-container grid-x grid-margin-x">

          <?php
            $paged_listing = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args_listing = array(
              'post_type' => 'post',
              'posts_per_page' => 6,
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

        </div>
      </section>

		</main>
		<?php //get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
