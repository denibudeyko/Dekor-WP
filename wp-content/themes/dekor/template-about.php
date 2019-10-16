<?php /* Template Name: О нас */ ?>

<?php get_header(); ?>


<section class="about home">
  <div class="content">
    <div class="services-wrapper">
      <div class="services-left">
        <div class="services-title">
          <h2><?php the_title()?></h2>
        </div>
        <div class="services-content">
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <?php get_template_part( 'partials/content', 'menu' ); ?>
      </div>
      <div class="services-right">
        <div class="about-image">
          <img src="<?php echo get_template_directory_uri()?>./static/img/assets/about/bg.jpg" alt="">
          <div class="about-text"><span><?php the_field('about_subtitle')?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
