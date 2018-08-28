<?php
/**
Template Name: Blogs Template 1
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="news-wrapper">
		<main class="main-content">

		<h1>MSA News</h1>

		<section class="featured-blog">
			<div class="slides wrap grid-padding-x">

				<div class="item item-large">
					<a href="">
						<img src="https://unsplash.it/301/?random">
					</a>
					<div class="overlay">
						<div class="post-meta">
							<h2 class="heading">Romanian New Programs</h2>
							<span class="post-author">Shae One</span>
							<span class="meta-sep"></span>
							<span class="meta-date">August 14, 2009</span>
						</div>
					</div>
				</div>

				<div class="item item-small">
					<img src="https://unsplash.it/302/?random">
					<div class="overlay">
						<div class="post-meta">
							<h2 class="heading">Romanian New Programs</h2>
							<span class="post-author">Shae One</span>
							<span class="meta-sep"></span>
							<span class="meta-date">August 14, 2009</span>
						</div>
					</div>
				</div>

				<div class="item item-small">
					<img src="https://unsplash.it/303/?random">
					<div class="overlay">
						<div class="post-meta">
							<h2 class="heading">Romanian New Programs</h2>
							<span class="post-author">Shae One</span>
							<span class="meta-sep"></span>
							<span class="meta-date">August 14, 2009</span>
						</div>
					</div>
				</div>	

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
							<article class="grid-post">
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
							<article class="grid-post">
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
							<article class="grid-post">
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
