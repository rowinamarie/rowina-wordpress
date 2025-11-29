
<?php if (have_posts ()) : while (have_posts() ): the_post (); ?> 

  <!--Kategorioiden tulostus sivun ylälaitaan-->

  <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>

        <a href= "<?php echo get_category_link($cat -> term_id);?>">
        <?php echo $cat->name;?>
    
    </a>
    
    <?php endforeach;?>

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

     <a href=" <?php echo get_tag_link($tag -> term_id); ?>" class="badge badge-success">
        <?php echo $tag ->name;?>
     </a><!--linkkaa tägiin-->

    <?php endforeach?> <!--lopettaa loopin-->

    <!--kommenttiosio-->
    <?php //comments_template(); ?>
    

  


<?php endwhile; else : endif;?>