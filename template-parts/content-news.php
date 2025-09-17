<section class="news fade-in">
  <div class="container">
    <h2>HEALTH UPDATE &amp; NEWS</h2>
    <p class="section-intro">Stay informed with the latest health tips and hospital updates.</p>

    <div class="news-grid">
      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3
      );
      $news_query = new WP_Query($args);

      if ( $news_query->have_posts() ) :
        while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
          <div class="news-card">
            
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="news-thumb">
                <?php the_post_thumbnail( 'medium', array( 'class' => 'news-img' ) ); ?>
              </div>
            <?php else : ?>
              <div class="news-thumb">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/news-placeholder.jpg' ); ?>" alt="<?php the_title_attribute(); ?>" class="news-img" />
              </div>
            <?php endif; ?>

            <h3><?php the_title(); ?></h3>
            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No news available at the moment.</p>
      <?php endif; ?>
    </div>
  </div>
</section>
