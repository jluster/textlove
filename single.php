<?php get_header(); ?>
      <div class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'frags/single', get_post_format() ); ?>
        <?php endwhile; ?>
        <nav class="posts-nav">
          <?php previous_post_link( $format='&laquo; %link', $link='%title', $in_same_cat = false, $excluded_categories = '' ); ?>
          | <?php next_post_link( $format='%link &raquo;', $link='%title', $in_same_cat = false, $excluded_categories = '' ); ?>
        </nav>
        <h1 class='content-subhead'>Comments</h1>
        <?php comments_template(); ?>
      <?php else: ?>
        <!-- no posts found -->
      <?php endif; ?>


    </div>

<?php get_footer(); ?>