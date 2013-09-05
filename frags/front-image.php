<section class="post">
  <header class="post-header">
    <h2 class="post-title"><a href="<?php the_permalink() ?>">
    <?php if (is_sticky()): ?>
      <i class="icon-pushpin icon-muted"></i>
    <?php else: ?>
    <i class="icon-picture icon-muted"></i>
    <?php endif; ?>
    <?php the_title(); ?></a></h2>
    <p class="post-meta">
      This <a href="<?php the_permalink(); ?>">image</a> was published 
      in <?php the_category(', '); ?>
      on <?php the_date(); ?> 
      (<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
      )<?php if (is_sticky()): ?> and is <strong>sticky</strong><?php endif; ?>.
      <?php if(function_exists('post_read_time')): ?>
         <?php post_read_time(); ?>
      <?php endif; ?>
    </p>
  </header>

  <div class="post-description">
    <?php if ($url = jml_first_image(get_the_content(), 'thumbnail')): ?>
    <div class="firstimg">
      <a href="<?php the_permalink(); ?>"><img src="<?php echo $url?>" /></a>
    </div>
    <?php endif; ?>
    <?php the_excerpt(); ?>
  </div>
</section>