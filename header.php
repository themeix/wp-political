<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'churel'); ?></a>
  <!-- ==================== Header Area ========================= -->
  <!-- <div class="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div> -->
<?php get_template_part( 'template-parts/headers/header-1'); ?>