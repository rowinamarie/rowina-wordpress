<!--TÄMÄ SIVU HAKEE TIETOKANNASTA SISÄLLÖT-->
<!--if we have posts on the specific page that we are on,while we have the post there show the post -->
<?php if (have_posts ()) : while (have_posts() ): the_post (); ?> 

<!--then show the title-->
<h3> <?php the_title();?> </h3>
 <!--and then only part of the post-->
    <?php the_excerpt(); ?>

    <a href="<?php the_permalink();?>">Read more </a>

<?php endwhile; else : endif;?>