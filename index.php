<?php get_header(); ?>
      <?php
      $paged = (get_query_var('paged'));
      if ($paged >= 2): ?>
        <h1 class='content-subhead'>More and Less</h1>
        <div style='text-align: center;'><em>You are on page <?php echo ${paged}; ?>. Go <a href='<?php echo home_url() ?>'>Home</a>?</em></div>
        <div style='text-align: center;'>Navigate: <?php posts_nav_link(' or ','Later','Earlier'); ?> entries...</div>
        <h1 class='content-subhead'>Posts On Page <?php echo ${paged}; ?></h1>
      <?php endif; ?>

      <div class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'frags/front', get_post_format() ); ?>
        <?php endwhile; ?>
        <h1 class="content-subhead">Navigate</h1>
        <nav class="navigation">
          <div style='text-align: center;'><strong>Navigate: <?php posts_nav_link(' or ','Later','Earlier'); ?> entries...</strong></div>
        </nav>
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>


    </div>

<?php get_footer(); ?>