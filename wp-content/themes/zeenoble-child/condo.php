<?php
/*
Template Name: Condo Template
*/
?>
<?php get_header(); ?>

<div id="wrap">
		
		<section id="content-condo" class="primary clearfix" role="main">
		
		<?php 
			$args = array(
				'post_type'=>'condo',
				'orderby'=>'title',
				'ordery'=>'ASC'
				);
			$the_query = new WP_Query($args);
		?>
		<article class="widget-condo">
			<?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php 
						$image = get_field('gallery');
						
						// vars
						$url = $image['url'];
						$title = $image['title'];
						$alt = $image['alt'];
						$caption = $image['caption'];

						// thumbnail / small / medium
						$size = 'thumbnail';
						$thumb = $image['sizes'][ $size ];
						$width = $image['sizes'][ $size . '-width' ];
						$height = $image['sizes'][ $size . '-height' ];
					?>
					<a href="<?php esc_url(the_permalink()) ?>" rel="bookmark">
						<img class="alignleft wp-post-image" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
					</a>
					<h2 class="post-title">
						<a href="<?php esc_url(the_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<div class="entry clearfix">
							
						<?php  echo apply_filters( 'the_content', get_field( 'about', get_the_ID() ) ); //echo the_field('about','Read More')?>
						<?php //echo apply_filters( 'the_excerpt', get_field( 'about', get_the_ID() ) ); ?>
						<?php //echo custom_field_excerpt('about'); //the_field('about'); ?>
					</div>
					<div class="postinfo-condo clearfix"></div>
				</article>
			<?php endwhile; endif;?>
		</article>
		<?php //comments_template(); ?>
		
		</section>
		
		<?php //get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>	