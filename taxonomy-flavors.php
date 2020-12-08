<?php get_header(); ?>
	<div class="page-content">
		<main class="main-content">
			<header class="flavors-header">
				<h1><?php print get_queried_object()->name; ?></h1>
			</header>
			<?php if ( have_posts() ) : ?>
				<ul class="ice-cream-list">
					<?php while( have_posts() ) : the_post(); ?>
						<li>
							<?php 
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
							the_post_thumbnail( 'thumb', ['class' => 'ice-cream-image', 'alt' => $thumbnail_alt] );
							?>					
							<h2 class="title"><?php the_title(); ?></h2>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							<div class="button-wrapper">
								<a href="<?php the_permalink(); ?>" class="read-more button"><?php print __( 'Read more', 'ice-cream-eater' ); ?></a>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
		        <div class="pager">
		          <div class="nav-previous alignleft"><?php previous_posts_link( '&lt; Previous' ); ?></div>
		          <div class="nav-next alignright"><?php next_posts_link( 'Next &gt;' ); ?></div>
		        </div>				
			<?php endif; ?>
		</main>
		<aside class="main-sidebar">
			<?php dynamic_sidebar( 'content_sidebar'); ?>
		</aside>
	</div>
<?php get_footer(); ?>