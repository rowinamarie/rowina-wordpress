<!--TÄMÄ SIVU HAKEE TIETOKANNASTA SISÄLLÖT-->

<?php
//if we have posts on the specific page that we are on,while we have the post there show the post
if (have_posts ()) : while (have_posts() ): the_post (); ?> 
 <!--and then the content of the post-->
    <?php the_content(); ?>

<?php endwhile; else : endif;?>