<?php get_header(); ?>

<section class="home clients work">
  <div class="content">
    <div class="work-wrapper">
      <div class="work-title">
        <h2>Наши заказчики </h2>
      </div>
      <div class="work-envelope">
        <div class="work-client">
          <img src="<?php echo the_post_thumbnail_url();?>" alt="">
        </div>

        <div class="work-items">
          <?php $client = get_field('client_gallery'); ?>
          <?php foreach($client as $item): ?>
            <a href="<?php echo $item['url'] ?>" data-fancybox="gallery" class="work-item">
              <img src="<?php echo $item['sizes']['medium_large'] ?>" alt="Work Item">
            </a>
          <?php endforeach; ?>
        </div>
      </div>
     <?php get_template_part( 'partials/content', 'menu' ); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>