<?php

// Template Name: contact

?>

<?php

get_header();

?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post-entry">
		<?php the_content(); ?>
	</div><!-- entry -->

<?php endwhile; ?>
<?php endif; ?>



<?php

get_footer();

?>

