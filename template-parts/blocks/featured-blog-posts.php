<?php

  $args_1 = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'orderby' => 'DESC',
    'offset' => 2,
  );

  $query_first_post = new WP_Query( $args_1 );

  $args_2 = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'orderby' => 'DESC',
    'offset' => 3,
  );

  $query_list_post = new WP_Query( $args_2 );

 ?>

<!-- Posts panel container -->
<div class="posts-panel grid">

  <!-- Panel's header -->
  <header class="panel-header">
    <h2 class="panel-title">News & Articles</h2>
  </header>

  <!-- Panel's content -->
  <div class="panel-content">

    <!-- Pinned post section -->
    <section class="pinned-post">
      <!-- Post item -->
      <?php while ( $query_first_post->have_posts() ) : $query_first_post->the_post(); ?>

        <div class="post-item">

          <!-- Post's thumbnail -->
          <a href="#" class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </a>

          <!-- Post's text -->
          <div class="post-text">

            <!-- Post's title -->
            <a href="<?php the_permalink(); ?>">
              <h3 class="post-title"><?php the_title(); ?></h3>
            </a>
            <div class="post-meta">
              <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text"><?php the_author(); ?></a></span>
              <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text"><?php the_date(); ?></span></span>
            </div>

            <!-- Post's summary -->
            <div class="post-summary">
              <?php  the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="post-read-more">Read more<span class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>


    </section>

    <!-- Posts list -->
    <section class="posts-list">

      <?php while ( $query_list_post->have_posts() ) : $query_list_post->the_post(); ?>
        <div class="post-item">
        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
          <?php the_post_thumbnail(); ?>
        </a>
        <div class="post-text">
          <a href="<?php the_permalink(); ?>">
            <h3 class="post-title"><?php the_title(); ?></h3>
          </a>
          <div class="post-meta">
            <span class="meta"><span class="meta-icon fa fa-user-circle-o" aria-hidden="true"></span><a class="meta-text"><?php the_author(); ?></a></span>
            <span class="meta"><span class="meta-icon fa fa-clock-o" aria-hidden="true"></span><span class="meta-text"><?php the_date(); ?></span></span>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

    </section>

  </div>
</div>
