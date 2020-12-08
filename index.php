<?php get_header(); ?>
	<div class="page-content">
		<main class="main-content">
			<?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php 
					$thumbnail_id = get_post_thumbnail_id( $post->ID );
					$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
					the_post_thumbnail( 'medium', ['class' => 'post-thumbnail', 'alt' => $thumbnail_alt] );
					?>			
					<?php the_content(); ?>			
				<?php endwhile; ?>
			<?php endif; ?>
		</main>
		<aside class="main-sidebar">
			<?php dynamic_sidebar( 'content_sidebar'); ?>
		</aside>
	</div>
<?php get_footer(); ?>