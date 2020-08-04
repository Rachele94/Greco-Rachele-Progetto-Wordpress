
<?php get_header(); ?>

<div id="wrapper">
   <div id="content">
     <div class="post">
         <?php get_template_part('loop'); ?>
         <?php get_sidebar(); ?>
       </div>
   </div>
</div>

<?php get_footer(); ?>