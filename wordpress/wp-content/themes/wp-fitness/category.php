<?php get_header(); ?>
  <article class="blog-page">
    <div class="container">
      <div class="wrapper">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <div class="row blog-posts">
        <div class="col-md-4">
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('thumbnail');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->
        </div>
        <div class="col-md-8">
          <h6>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h6>
          <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
        </div>
      </div>
      <?php endwhile; else: ?>
        <?php endif; ?>
      </div><!-- wrapper -->
    </div>

  </article>
<?php get_footer(); ?>
