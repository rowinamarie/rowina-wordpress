<!--TÄMÄ SIVU HAKEE TIETOKANNASTA SISÄLLÖT-->
<!--if we have posts on the specific page that we are on,while we have the post there show the post -->
<?php if (have_posts ()) : while (have_posts() ): the_post (); ?> 



    <div class ="card mb-3"> <!--Cardilla saa jokaisen postauksen omiin erillisiin laatikoinin -->

        <div class = "card-body">
            <!--then show the title-->
            <h3> <?php the_title();?> </h3>
            <!--and then only part of the post-->
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink();?>" class ="btn btn-success">Read more </a>
            </div>
    </div>
<?php endwhile; else : endif;?>