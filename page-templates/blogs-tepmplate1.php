<?php
/**
 *Template Name: Blogs Template 1
 */
 ?>



<?php get_header(); ?>

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

<!--<?php get_template_part( 'template-parts/featured-image' ); ?>-->
<div class="main-container">
	<div class="news-wrapper">
		<main class="main-content">

		<section class="featured-blog">
			<div class="slides wrap grid-padding-x">

        <?php

        $args = array(
       	 'post-type' => 'post',
       	 'tag' => 'romania',
       	 'posts_per_page' => '3'
        );

       $loop_romania = new WP_Query( $args );
       $i = 0;

         while ( $loop_romania->have_posts() ) : $loop_romania->the_post();
           if ( $i == 0 ){ ?>

             <div class="item item-large">
               <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail(); ?>
               </a>
               <div class="overlay">
                 <div class="post-meta">
                   <h2 class="heading"><?php the_title(); ?></h2>
                   <span class="post-author"><?php the_author(); ?></span>
                   <span class="meta-sep"></span>
                   <span class="meta-date"><?php the_date(); ?></span>
                 </div>
               </div>
             </div>

           <?php } else { ?>

             <div class="item item-small">
               <a href="<?php the_permalink(); ?>">
                 <?php the_post_thumbnail(); ?>
               </a>
               <div class="overlay">
                 <div class="post-meta">
                   <h2 class="heading"><?php the_title(); ?></h2>
                   <span class="post-author"><?php the_author(); ?></span>
                   <span class="meta-sep"></span>
                   <span class="meta-date"><?php the_date(); ?></span>
                 </div>
               </div>
             </div>

           <?php }
           $i++;

         endwhile;

        ?>

			</div>

		</section>

		<section class="section-medical-schools">
			<div class="section-head">
				<h4 class="title">
					<a href="">European Medical Schools</a>
				</h4>
			</div>

			<div class="section-content">
				<div class="post-container">
					<div class="post-wrap">

						<div class="item" >
							<article class="grid-post post-style-1">
							<div class="post-header">
								<div class="post-thumb">
									<a href=""><img src="https://unsplash.it/501/?random"></a>
								</div>
								<div class="meta-title">
									<h2 class="post-title"><a href="">Romanian University</a></h2>
									<span class="post-author">By <a href="">Shae Klark</a></span>
									<span class="post-date">August 12, 2009</span>
								</div>
							</div>
							<div class="post-content">
								<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous…</p>
							</div>
							</article>
						</div>

						<div class="item" >
							<article class="grid-post post-style-1">
							<div class="post-header">
								<div class="post-thumb">
									<a href=""><img src="https://unsplash.it/502/?random"></a>
								</div>
								<div class="meta-title">
									<h2 class="post-title"><a href="">Romanian University</a></h2>
									<span class="post-author">By <a href="">Shae Klark</a></span>
									<span class="post-date">August 12, 2009</span>
								</div>
							</div>
							<div class="post-content">
								<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous…</p>
							</div>
							</article>
						</div>

						<div class="item" >
							<article class="grid-post post-style-1">
							<div class="post-header">
								<div class="post-thumb">
									<a href=""><img src="https://unsplash.it/503/?random"></a>
								</div>
								<div class="meta-title">
									<h2 class="post-title"><a href="">Romanian University</a></h2>
									<span class="post-author">By <a href="">Shae Klark</a></span>
									<span class="post-date">August 12, 2009</span>
								</div>
							</div>
							<div class="post-content">
								<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous…</p>
							</div>
							</article>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="section call-to-action gird-x">
			<div class="section-head">

			</div>

			<div class="section-content cell text-center">
				<span class="h3">September Registration Call, limited seats.</span> <a class="button large round">Apply Now</a>
			</div>
		</section>


		<section class="grid-x grid-margin-x">

			<div class="section-column cell medium-8">
				<div class="section-column-inner  grid-margin-x grid-x">

					<div class="column-container cell medium-6">

						<div class="section-head">
							<h4 class="title">
								<a href="">Studying Overseas</a>
							</h4>
						</div>

						<article class="grid-post post-style-1">
							<div class="post-header">
								<div class="post-thumb">
									<a href=""><img src="https://unsplash.it/506/?random"></a>
								</div>
								<div class="meta-title">
									<h2 class="post-title"><a href="">Romanian University</a></h2>
									<span class="post-author">By <a href="">Shae Klark</a></span>
									<span class="post-date">August 12, 2009</span>
								</div>
							</div>
							<div class="post-content">
								<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous…</p>
							</div>
						</article>
					</div>

					<div class="column-container cell medium-6">

						<div class="section-head">
							<h4 class="title">
								<a href="">Romanian Life</a>
							</h4>
						</div>

						<article class="grid-post post-style-1">
							<div class="post-header">
								<div class="post-thumb">
									<a href=""><img src="https://unsplash.it/507/?random"></a>
								</div>
								<div class="meta-title">
									<h2 class="post-title"><a href="">Romanian University</a></h2>
									<span class="post-author">By <a href="">Shae Klark</a></span>
									<span class="post-date">August 12, 2009</span>
								</div>
							</div>
							<div class="post-content">
								<p>More off this less hello salamander lied porpoise much over tightly circa horse taped so innocuously outside crud mightily rigorous…</p>
							</div>
						</article>
					</div>

				</div>

			</div>
			<div class="section-column side-column medium-4">

				<div class="section-head section-head-1">
					<h4 class="title">
						Top Schools
					</h4>
				</div>

				<div class="section-content items-style-1">

					<div class="item " >
						<a href="">
							<div class="item-thumb">
								<img src="https://unsplash.it/601/200?random" >
							</div>
							<span class="label">Iasi Med School</span>
						</a>
					</div>

					<div class="item ">
						<a href="">
							<div class="item-thumb">
								<img src="https://unsplash.it/603/200?random" >
							</div>
							<span class="label">Cluj Med School</span>
						</a>
					</div>

				</div>

				<div class="section-head section-head-1">
					<h4 class="title">
						Follow Us
					</h4>
				</div>

				<div class="social-icons">
					<a class="social-link" href="">
						<i class="fa fa-facebook"></i>
					</a>
					<a class="social-link" href="">
						<i class="fa fa-twitter"></i>
					</a>
				</div>

			</div>
		</section>

			<!--<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>-->
		</main>
		<?php //get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
