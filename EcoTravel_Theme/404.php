<?php get_header(); ?>

   <div id="content404">
     <div class="post404">
       <h1 class="title404"><?php _e('Ops...', 'prefissotema') ?><br/></h1>
         <?php _e('Ci dispiace, ma la pagina o il contenuto richiesto non è stato trovato.', 'prefissotema') ?><br/>
          <?php _e('Clicca qui per tornare alla ' ) ?> <a href="<?php echo home_url() ?>">Homepage</a>

      </div>
   </div>
<?php get_footer(); ?>