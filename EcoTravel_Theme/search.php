
<?php get_header() ?> <br/>


<div id="wrapper">
<div id='sidebar'> <?php dynamic_sidebar('smartslider_area_1'); ?> </div>
 <div id="contentblog">
   
        <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="elementsblog">
          
        <div <?php post_class('imageblog'); ?>>
             <?php if ( has_post_thumbnail() ) {
                 the_post_thumbnail(array(300,300));
             } ?>
        </div>
      <div class="infoblog">
          <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
            <?php 
               echo get_the_date(); ?> <br/>
               <?php _e( 'Inserito nella categoria:', 'prefissotema' ).the_category();
             the_excerpt();
           ?>
      </div>
      </div>
     <?php
        endwhile; else: echo __( 'Nessun post presente', 'prefissotema' );
         endif;
        posts_nav_link( " - ", "prec", "succ" );
     ?>

    
  </div>
</div>




<?php get_footer(); ?>