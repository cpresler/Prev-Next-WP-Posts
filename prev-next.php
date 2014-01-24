<!DOCTYPE html>
<html>
<head>
	<title>Prev-Next Widget</title>
	<link rel="stylesheet" type="text/css" href="prev-next.css">
</head>

<body>
<div class="post-nav">
<?php
	if (is_single()) { 
		if (have_posts()) { 
			while (have_posts()) {
			 the_post(); ?>
			 	<div class="prev">
			 		<?php previous_post_link('%link', 'prev'); ?>
					</div>
				<div class="next">
					<?php next_post_link('%link', 'next'); ?>
				</div>
		<?php }
		}
	 } else { ?>
		<div class="new">
			<?php echo get_previous_posts_link('newer posts'); ?>    <!-- ('text displayed', max # pages) -->
		</div>
		<div class="old">
			<?php echo get_next_posts_link('older posts'); ?>
		</div>		
<?php } ?>

</div>

</body>
</html>