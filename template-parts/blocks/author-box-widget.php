<div class="postauthor-wrap">
 <span class="postauthor" itemscope itemprop="image" alt="Photo of <?php the_author_meta( 'display_name' ); ?>">
 <?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); } ?>
 </span>

<h4>Author Details</h4>
<h5 class="vcard author" itemprop="url" rel="author">

 <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="fn" itemprop="name">
 <span itemprop="author" itemscope itemtype="https://schema.org/Person">
 <?php the_author_meta( 'display_name' ); ?>
 </span>
 </a>
 <span class="author-aka"> a.k.a
 <span class="author-aka-name">
 <?php echo get_the_author_meta('twitter'); ?>
 </span>
 </span>
 </h5>

 <?php the_author_meta('description') ?>
 <span class="post-author-links">
 <?php //if (get_the_author_meta('facebook') != ''): ?>
 <a class="author-link f" title="Follow on Facebook" href="<?php echo get_the_author_meta('facebook'); ?>" target="_blank">
 <i class="fa fa-facebook">
 </i>
 </a>
 <?php //endif; ?>
 <?php //if (get_the_author_meta('twitter') != ''): ?>
 <a class="author-link t" title="Follow on Twitter" href="https://twitter.com/<?php echo get_the_author_meta('twitter'); ?>" target="_blank">
 <i class="fa fa-twitter">
 </i>
 </a>
 <?php// endif; ?>
 <?php if (get_the_author_meta('googleplus') != ''): ?>
 <a class="author-link g" title="Follow on Google+" href="<?php echo get_the_author_meta('googleplus'); ?>" target="_blank">
 <i class="fa fa-google-plus">
 </i>
 </a>
 <?php endif; ?>
 </span>
 </div>
