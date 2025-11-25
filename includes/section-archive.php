<!--TÄMÄ SIVU HAKEE TIETOKANNASTA SISÄLLÖT-->

<?php
//if we have posts on the specific page that we are on,while we have the post there show the post
if (have_posts ()) : while (have_posts() ): the_post (); ?> 

<!--then show the t-->
<h3> <?php the_title();?> </h3>
 <!--and then only part of the post-->
    <?php the_excerpt(); ?>

<?php endwhile; else : endif;?>