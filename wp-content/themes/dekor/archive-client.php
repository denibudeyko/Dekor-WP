<?php get_header(); ?>

<section class="home clients">
  <div class="content">
    <div class="clients-wrapper">
      <div class="clients-left">
        <div class="clients-title">
          <h2>Наши заказчики</h2>
        </div>
        <div class="clients-phone">
          <img src="<?php echo get_template_directory_uri()?>/static/img/assets/clients/bg.png" alt="">
        </div>
        <?php get_template_part( 'partials/content', 'menu' ); ?>
      </div>
      <div class="clients-right">
        <div class="clients-image">
          <img src="<?php echo get_template_directory_uri()?>/static/img/assets/clients/image.png" alt="">
          <div class="clients-right__text"><span>С нами работают ведущие телеканалы и<br> кино студии  России.</span>
          </div>
        </div>
      </div>
      <div class="clients-items">
        <?php 
          $args = array('post_type' => 'client', 'posts_per_page' => -1);
          $myQuery = new WP_Query($args);
        ?>
          <?php while( $myQuery->have_posts() ) : $myQuery->the_post();  ?>
			
            <a href="<?php the_permalink()?>" class="clients-item">
              <div class="clients-item__photo">
                <img src="<?php the_post_thumbnail_url();?>" alt="Client Photo">
              </div>
            </a>

          <?php endwhile;  wp_reset_postdata(); ?>



      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>