<section class="post">

  <?php $f = jml_first_image(get_the_content()); ?>
  <?php if($f): ?>  
  <div class="post-image">
      <img src="<?php echo $f ?>" class="single-center aligncenter size-large" alt="<?php the_title( $before = 'Picture: ', $after = '', $echo = true ); ?>"/>
  </div>
  <?php endif; ?>

  <header class="post-header">
    <h1 class="post-title"><?php the_title(); ?></h1>

    <p class="post-meta">
      This post was published 
      in <?php the_category(', '); ?>
      on <?php the_date(); ?> 
      (<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
      ).
    </p>
  </header>

  <div class="post-content">
    <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>
    <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
    <?php if($f): ?>  
    <?php 
      $content = apply_filters('the_content',get_the_content());
      echo preg_replace("/\[caption .+?\[\/caption\]|\< *[img][^\>]*[.]*\>/i","",$content,1); 
    ?>
    <?php else: ?>
      <?php the_content(); ?>
    <?php endif; ?>
  </div>

  <footer class="meta">
    <p><?php the_tags( $before = '<div class="tagged">Tagged as: ', $sep = ', ', $after = '</div>' )?></p>
  </footer>

</section>