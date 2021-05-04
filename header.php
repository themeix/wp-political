<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'political'); ?></a>

  <!-- ==================== Header Area ========================= -->
  <?php if (get_theme_mod('preloader_settings', '1')) : ?>
    <div class="preloader">
      <div class="lds-ripple">
        <div></div>
        <div></div>
      </div>
    </div>
  <?php endif; ?>

  <?php political_header(); ?>