<?php get_header(); ?>
      <div class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <section class="post">
            <header class="post-header">
              <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="post-description">
              <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>
              <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
              <?php the_content(); ?>
            </div>
          </section>
        <?php endwhile; ?>
        <nav class="posts-nav">
          <?php previous_post_link( $format='&laquo; %link', $link='%title', $in_same_cat = false, $excluded_categories = '' ); ?>
          | <?php next_post_link( $format='%link &raquo;', $link='%title', $in_same_cat = false, $excluded_categories = '' ); ?>
        </nav>
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>


    </div>

<?php get_footer(); ?>