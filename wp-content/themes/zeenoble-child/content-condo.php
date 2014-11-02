<?php
/*
* Template for displaying art Custom post type entries
*/
?>


<article id="post-<?php the_ID(); ?>"<?php post_class();?>>
	<h2 class="page-title"><?php the_title(); ?></h2>
	<div class="entry clearfix">
		<?php the_field('detail'); ?>
		<div id="image-codo" style=" text-align:center ">
			<img src="<?php the_field('gallery');?>"> 		
		</div>
		
	</div>
	
	<?php edit_post_link(__( 'Edit', 'zeeNoble_language' )); ?>
</article>