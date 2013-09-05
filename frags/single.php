<article <?php post_class(); ?>>
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
    <?php the_content(); ?>
    <?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
  </div>
  
  <footer class="meta">
    <p><?php the_tags( $before = '<div class="tagged">Tagged as: ', $sep = ', ', $after = '</div>' )?></p>
  </footer>

</article>