<div class="comments">
	
	<?php if ( post_password_required() ){
			echo "<a>La sezione commenti è privata.</a>";
			echo "</div>";
			return;
		  } ?>
  
	<div id="new_comment">
		<?php comment_form( array() ); ?>
	</div>

	<p class="info">
	  <?php
		if ( have_comments() )
			printf( _nx( "Un solo commento per questo post: ", "%s commenti per questo post: ", get_comments_number(), "Number of comments"), number_format_i18n( get_comments_number() ) );
		else echo "Non ci sono commenti...";	
	?>
	</p>

	<div>
		<?php
			wp_list_comments( array(
				"style" => "div",
				"avatar_size" => 30,
				"page" => get_the_ID()
			) );
		?>
	</div>
</div>