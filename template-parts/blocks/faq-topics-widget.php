<section class="widget widget_tag_list">
  <h6>Topics</h6>
  <div class="taglist">
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
