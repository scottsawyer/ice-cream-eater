<?php get_header(); ?>
	<div class="page-content">
		<main class="main-content">
			<?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
					<article class="article ice-cream-article">
						<header class="panel ice-cream-header">
							<h1 class="ice-cream-title"><?php the_title(); ?></h1>
							<figure class="ice-cream-image">
							<?php 
							$thumbnail_id = get_post_thumbnail_id( $post->ID );
							$thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );

							the_post_thumbnail( 'medium', ['alt' => $thumbnail_alt] );

							print '<figcaption>' . get_the_post_thumbnail_caption( $post->ID ) . '</figcaption>';
							?>
						</figure>
							<div class="ice-cream-content">
								<?php the_content(); ?>
							</div>
						</header>
						<aside class="additional-info">
							<?php
							if ( $flavors = get_the_term_list( $post->ID, 'flavors', '<li class="types_item">', '</li><li class="flavor">', '' ) ) :
								?>
								<div class="panel">
									<h3><?php print __( 'Ice Cream Flavors', 'ice-cream-eaters' ); ?></h3>
									<ul class="flavors-list">
										<?php print $flavors; ?>
									</ul>
								</div>
								<?php
							endif;
							?>
							<div class="panel">
								<h3><?php print __( 'Nutrition Information', 'ice-cream-eater' ); ?></strong></h3>
								<ul class="nutrition">
								<?php 
									$serving_size = get_post_meta( get_the_ID(), '_wp_builder_5fceef7a45432_serving_size', true );
									$calories = get_post_meta( get_the_ID(), '_wp_builder_5fceef7a45432_calories', true ); 
									$carbs = get_post_meta( get_the_ID(), '_wp_builder_5fceef7a45432_carbohydrates', true );
									$fat = get_post_meta( get_the_ID(), '_wp_builder_5fceef7a45432_fat', true );
									if ( $serving_size ) {
										print '<li>' . __( 'Serving Size', 'ice-cream-eater' ) . ': <strong>' . $serving_size . '</strong></li>';
									}
									if ( $calories ) {
										print '<li>' . __( 'Calories', 'ice-cream-eater' ) . ': <strong>' . $calories . '</strong></li>';
									}
									if ( $carbs ) {
										print '<li>' . __( 'Carbs', 'ice-cream-eater' ) . ': <strong>' . $carbs . '</strong></li>';
									}
									if ( $fat ) {
										print '<li>' . __( 'Fat', 'ice-cream-eater' ) . ': <strong>' . $fat . '</strong></li>';
									}
								?>
								</ul>
							</div>
						</aside>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</main>
		<aside class="main-sidebar">
			<?php dynamic_sidebar( 'content_sidebar'); ?>
		</aside>
	</div>
<?php get_footer(); ?>