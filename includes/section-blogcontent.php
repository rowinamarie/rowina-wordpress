
<?php if (have_posts ()) : while (have_posts() ): the_post (); ?> 

<p> <?php echo get_the_date ('d.m.Y');?>   </p>

    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
   ?>

   <p> Kirjoittaja: <?php echo $fname?> <?php echo $lname?> </p>

    <?php the_content(); ?>


    <!--Tagien tulostus sivun alalaitaan-->
    <?php
    $tags = get_the_tags();
    foreach ($tags as $tag): // tämä aloittaa loopin
    ?>

     <a href=" <?php echo get_tag_link($tag -> term_id); ?>">
        <?php echo $tag ->name;?>
     </a><!--linkkaa tägiin-->

    <?php endforeach?> <!--lopettaa loopin-->
<

<?php endwhile; else : endif;?>