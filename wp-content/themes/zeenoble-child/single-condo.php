<?php get_header(); ?>
<?php 
	$image = get_field('gallery');
	
	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail / small / medium / large
	$size = 'large';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];
?>
	<div id="wrap">
		<section id="content-condo" class="primary clearfix" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>"<?php post_class();?>>
					<h2 class="page-title"><?php the_title(); ?></h2>
					<div class="entry clearfix">
						<?php the_field('detail'); ?>
						<div id="image-codo" style=" text-align:center ">
							<img class="wp-post-image" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						</div>
					</div>
					<?php //edit_post_link(__( 'Edit', 'zeeNoble_language' )); ?>
				</article>
			<?php endwhile; endif;?>
		</section>
	</div>
<?php get_footer();?>



