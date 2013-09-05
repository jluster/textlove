<?php get_header(); ?>
  
      <div class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="post">
            <header class="post-header">
              <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <p class="post-meta">
                This post was published 
                in <?php the_category(', '); ?>
                on <?php the_date(); ?> 
                (<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                ).
              </p>
            </header>

            <div class="post-description">
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
        <nav class="navigation">
          <div style='text-align: center;'><strong>Navigate: <?php posts_nav_link(' or ','Later','Earlier'); ?> entries...</strong></div>
        </nav>
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>


    </div>

<?php get_footer(); ?>