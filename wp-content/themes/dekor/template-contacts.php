<?php /* Template Name: Контакты */ ?>

<?php get_header(); ?>

<section class="contacts home">
  <div class="contacts-coord">
    <div id="log"><?php the_field('log_map')?></div>
    <div id="lat"><?php the_field('lat_map')?></div>
  </div>
  <div class="content">
    <a href="tel:+74957042292" id="bigphone">
    <img src="<?php echo get_template_directory_uri()?>/static/img/assets/contacts/phone.png" alt="">
    </a>
    <div class="contacts-wrapper">
    <?php get_template_part( 'partials/content', 'menu' ); ?>
      <div class="contacts-title">
        <h2><?php the_field('title_maps')?></h2>
      </div>
      <div class="contacts-envelope">
        <div class="contacts-info">
          <div class="contacts-info__title">
            <h2><?php the_title();?></h2>
          </div>
          <div class="contacts-phone contacts-info__item"><a href="tel:<?php the_field('phone_number')?>"><?php the_field('phone_number')?></a>
          </div>
          <div class="contacts-address contacts-info__item"><span><?php the_field('site_address')?></span>
          </div>
          <div class="contacts-mail contacts-info__item"><a href="mailto:<?php the_field('site_mail')?>"><?php the_field('site_mail')?></a>
          </div>
        </div>
        <div class="contacts-map">
          <div id="map"></div>
        </div>
      </div>
      <div class="contacts-bottom">
        <div class="contacts-icon"><span> </span>
        </div>
        <div class="contacts-form">
          <h2><?php the_field('form_title')?></h2>
            <?php echo do_shortcode('[contact-form-7 id="55" html_class="form" title="Контактная форма 1"]') ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>