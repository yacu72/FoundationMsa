<?php
/*
Template Name: Front
*/
?>
<?php get_header('front'); ?>
<div class="content-wrapper">



	<header class="front-hero " role="banner">
		<div class="sticky-shrinknav-header">
			<div class="marketing sticky-shrinknav-header-title" > 

				<div class="site-logo">
					<a href="#" class="site-logo-img"></a>
				</div>
				<div class="tagline">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
					<a class="button hollow" href="#">Find Out More...</a>
				</div>

				<div class="watch">

				</div>
			</div>

			<!--Sticky Header -->
			<ul class="menu align-center sticky-shrinknav-menu">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">About</a></li>
			  <li><a href="#">Gallery</a></li>
			  <li><a href="#">Contact</a></li>
			</ul>		
		</div>
	</header>



	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<section class="intro" role="main">
		<div class="fp-intro">

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php
						wp_link_pages(
							array(
								'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
								'after'  => '</p></nav>',
							)
						);
					?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</div>

		</div>

	</section>
	<?php endwhile; ?>
	<?php do_action( 'foundationpress_after_content' ); ?>

	<section class="med-schools">
		<div class="section-inner">
			<header>
				<h2>Med Schools Applications 2018</h2>
				<h4>We've helped 100s of students from the UK, Sweden, Finland, Germany, Norway, Portugal, South Africa, Ghana, Nigeria, Malaysia, Greece, Italy, Canada, US and the REST OF THE WORLD, get accepted to study medicine in Romania and to Study Medicine in Bulgaria. It's important that we start with your application early in the application cycle to get ahead of the competition.

		We know the European application process backwards, because we've been doing this for over 12yrs!</h4>

				<a class="button large radius" href="#">Apply Now!</a>
			</header>
		</div>
	</section>


	<section class="testimonials" > 
		<div class="section-inner">
			<header>
				<h2>Testimonials</h2>
			</header>

		  <div class="featured-testimonials grid-x">
		    <div class="small-12 medium-6 cell">
		      <div class="testimonial">
		        <img class="profile-pic hide-for-small-only" src="https://unsplash.it/201/?random">
		        <p class="featured-testimonials-quotation">Hide when guests come over instantly break out into full speed make cat go crazy. Meow mix meow meow cat things and purring. catnip.</p>
		      </div>
		    </div>
		    <div class="small-12 medium-6 cell">
		      <div class="testimonial">
		        <img class="profile-pic hide-for-small-only" src="https://unsplash.it/202/?random">
		        <p class="featured-testimonials-quotation">Hide when guests come over instantly break out into full speed make cat go crazy. Meow mix meow meow cat things and purring. catnip.</p>
		      </div>
		    </div>
		  </div>
		</div>

	</section>

	<section class="blogs" >
		<div class="section-inner" >

			<div class="wide-article-link">

			  <div class="article-wrapper">
			    <div class="article-body">
			      <h4 class="article-title">
			        <a href="#">
			          Honing its dynamic pricing formula, Vacasa wants to make homeowners more cash than Airbnb
			        </a>
			      </h4>
			      <p class="article-author"><em>by <a href="#">TechCrunch</a></em></p>
			      <p class="article-elipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat longshoreman... <a href="#" class="read-more">Read more</a></p>
			      <div class="article-social">
			        <a href="#" class="button social comments">
			          <i class="fa fa-comments-o" aria-hidden="true"></i> 0
			        </a>
			        <a href="#" class="button social facebook">
			          <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
			        </a>
			        <a href="#" class="button social twitter">
			          <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
			        </a>
			      </div>
			    </div>
			    <div class="article-photo flex-container align-middle">
			      <img src="https://unsplash.it/102/?random">
			    </div>
			  </div>

			  <div class="article-wrapper">
			    <div class="article-body">
			      <h4 class="article-title">
			        <a href="#">
			          Honing its dynamic pricing formula, Vacasa wants to make homeowners more cash than Airbnb
			        </a>
			      </h4>
			      <p class="article-author"><em>by <a href="#">TechCrunch</a></em></p>
			      <p class="article-elipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat longshoreman... <a href="#" class="read-more">Read more</a></p>
			      <div class="article-social">
			        <a href="#" class="button social comments">
			          <i class="fa fa-comments-o" aria-hidden="true"></i> 0
			        </a>
			        <a href="#" class="button social facebook">
			          <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
			        </a>
			        <a href="#" class="button social twitter">
			          <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
			        </a>
			      </div>
			    </div>
			    <div class="article-photo flex-container align-middle">
			      <img src="https://unsplash.it/101/?random">
			    </div>
			  </div>		  

			</div>

			<div class="med-schools-cards">

				<div class="card-flex-article card">
				  <div class="card-image">
				    <img src="https://unsplash.it/205/?random">
				  </div>
				  <div class="card-section">
				    <h3 class="article-title">Romanian Schools</h3>
				    <p class="article-summary">This is a quick summary area of the first few sentences from the post. It will be a few sentences.</p>
				  </div>
				   <div class="card-divider align-middle">
				  </div>
				  <div class="card-divider align-middle">
				  	<a class="button hollow">Learn more...</a>
				  </div>
				</div>

				<div class="card-flex-article card">
				  <div class="card-image">
				    <img src="https://unsplash.it/206/?random">
				  </div>
				  <div class="card-section">
				    <h3 class="article-title">Bulgarian Schools</h3>
				    <p class="article-summary">This is a quick summary area of the first few sentences from the post. It will be a few sentences.</p>
				  </div>
				   <div class="card-divider align-middle">
				  </div>
				  <div class="card-divider align-align-middle">
				  	<a class="button hollow">Learn more...</a>
				  </div>
				</div>			

			</div>

		</div>
	</section>

</div>

<?php get_footer();
