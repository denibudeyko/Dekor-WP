<?php /* Template Name: Главная */ ?>

<?php get_header(); ?>
<section class="home">
  <div class="content">
    <div class="home-wrapper">
      <div class="home-left">
        <div class="home-left__line"></div>
        <div class="home-square">
          <img src="<?php echo get_template_directory_uri()?>./static/img/assets/home/square.png" alt="">
          <a href="index.html" class="logo">
          <img src="<?php echo get_template_directory_uri()?>./static/img/assets/home/logo.png" alt="">
          </a>
          <div class="home-square__text"></div>
        </div>
        <?php get_template_part( 'partials/content', 'menu' ); ?>
      </div>
      <div class="home-right">
        <div class="home-image">
          <img src="<?php echo get_template_directory_uri()?>./static/img/assets/home/image.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
  

<?php wp_footer(); ?>