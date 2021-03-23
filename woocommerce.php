<?php get_header(); ?>

<?php get_template_part('template-parts/political-page-title'); ?>
<section class="single-product-content my-5">
    <div class="container">
        <div class="row col-md-12">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>