
<?php 
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class('post'); ?>>
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail(array(500,400));
       } ?>

  <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>

<?php if (is_category() || is_single() || is_archive()) { ?>
   <span class="loopinfo"> Scritto da: <?php the_author(); ?> il <?php echo get_the_date(); ?> </span>
    <?php the_content(); ?>
      <span class="loopinfo"> <?php the_author(); ?> </span>
      

     <?php } else if ( is_page()) {
       the_content();
      } ?>
    </div>
<?php
endwhile; else: echo __( 'Nessun post presente', 'prefissotema' );
endif;
?>


