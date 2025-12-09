<?php get_header(); ?>

<section class="page-wrap">
<div class = "container">

      
                <h1>Search results for '<?php echo get_search_query(); ?>' </h2>
                <!--Näyttää kategorian nimen-->
                <h3> <?php echo single_cat_title(); ?> </h3>

                <?php get_template_part('includes/section', 'archive'); ?>

                <!--Näyttää linkit blogi-sivun alalaidassa-->
                <?php previous_posts_link(); ?>
                <?php next_posts_link(); ?>
              

         
        </div>
</section>

<?php get_footer(); ?>
