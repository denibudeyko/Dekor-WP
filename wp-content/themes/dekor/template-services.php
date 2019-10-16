<?php /* Template Name: Услуги */ ?>

<?php get_header(); ?>



<section class="services home">
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

          <ul class="services-list">
            <?php $servicesList = get_field('services'); ?>
            <?php foreach($servicesList as $item): ?>
              <li><?php echo $item['item']?></li>
            <?php endforeach; ?>
          </ul>

          <?php the_field('services_bottom'); ?>
        </div>
        <?php get_template_part( 'partials/content', 'menu' ); ?>
      </div>
      <div class="services-right">
        <div class="services-center">
          <div class="services-center__lines"><span></span><span></span>
          </div>
          <div class="services-images">
           
            <?php $galleryPhoto = get_field('gallery_photo'); ?>
            <?php foreach($galleryPhoto as $photo): ?>
              <a href="<?php echo $photo['url']?>" data-fancybox="serv_image" class="services-image">
                <img src="<?php echo $photo['sizes']['medium']?>" alt="">
              </a>
            <?php endforeach; ?>
          
          
          </div>
        </div>
        <div class="services-video">
          <h2>Видео</h2>
          <a href="<?php the_field('services_video')?>" data-fancybox>
          <img src="<?php echo get_template_directory_uri()?>./static/img/assets/services/video.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
