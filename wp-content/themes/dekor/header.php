<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="telephone=no" name="format-detection">
  <meta name="HandheldFriendly" content="true">
  <!--[if (gt IE 9)|!(IE)]><!-->
  <?php wp_head(); ?>
  <!--<![endif]-->
  
  <script>
    (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
  </script>
  <?php if(is_page_template('template-contacts.php')): ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=2f0718ad-ef43-4372-924d-467e26fb12f0&amp;lang=ru_RU" type="text/javascript"></script>
  <?php endif; ?>
</head>
  <body class="page">
    <header class="header"></header>