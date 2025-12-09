<?php get_header(); ?>

<section class = "page-wrap">
<div class = "container">

        <?php if (has_post_thumbnail()): ?> <!--tarkistaa onko asetettu kuvaa-->
                
                <!--blog-large viittaa functions.php:ssa määriteltyyn kuvan kokoons-->
                <img src = "<?php the_post_thumbnail_url(
                    'blog-large',
                ); ?>" alt="<?php the_title(); ?>"
                class="img-fluid mb-3 img-thumbnail">

        <?php endif; ?>

        <h1><?php the_title(); ?> </h1> 

        <?php get_template_part('includes/section', 'blogcontent'); ?>

</div>
</section>

<?php get_footer(); ?>
