<!DOCTYPE html>
<html>
<head>
	<title>Prev-Next Widget</title>
	<link rel="stylesheet" type="text/css" href="prev-next.css">
</head>

<body>
<div class="post-nav">
<?php
	if (is_single()) { ?>   <!-- tests for single page-->
		<div class="prev">
			<?php previous_post('%', 'prev', 'no'); ?>   <!-- ('display with link%', 'text displayed', "title y/n") -->
		</div>
		<div class="next">
			<?php next_post('%', 'next', 'no'); ?>
		</div>		
	<?php }	?>
	<?php if (is_home() || is_front_page() || is_archive() || is_search() || is_paged() && have_posts()) { ?>  <!-- tests if for post list page, and posts-->
		<div class="new">
			<?php echo get_previous_posts_link('newer posts'); ?>    <!-- ('test displayed', max # pages) -->
		</div>
		<div class="old">
			<?php echo get_next_posts_link('older posts'); ?>
		</div>		
	<?php } ?>
</div>

</body>
</html>