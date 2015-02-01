<?php get_header(); ?>

	<main role="main">
		
	<section class="col-md-12" id="main-content">
		<?php if (is_category()) : ?>
			<h2><?php echo single_cat_title() ?></h2> <!-- archive name -->

			<!-- the archive posts -->
			<div id="product-showcase-area" class="row">			
			<?php 
				// $args sets the post type show to be 'product'; normal posts will not show. cat sets the catgory to $cat (native WP variable) which is the active category id
				$args = array( 'post_type' => 'product', 'cat' => $cat ); // 'posts_per_page' => 4    add this to limit posts per page
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="product-showcase col-md-6">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('main-thumb', array('class' => 'aligncenter')) ?></a>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<div class="product-showcase-excerpt">
							<?php the_excerpt(); ?>
						</div>
						<div class="row product-showcase-more-links">
							<div class="col-xs-6">
								<a href="<?php the_permalink(); ?>">
									<button type="button" class="btn btn-info btn-block">詳細</button>
								</a>
							</div>
							<div class="col-xs-6">
								<a href="http://lalamary.com/order-and-gift">
									<button type="button" class="btn btn-primary btn-block orderbutton">注文</button>
								</a>
							</div>					
						</div> <!-- close .product-showcase-more-links -->
					</div> <!-- close .product-showcase -->
				<?php endwhile; ?>
			</div> <!-- close .product-showcase-area -->
		<?php endif ?>
		
		<!-- pagination 
		<div class="row">
			<div class="col-md-12">
				<?php posts_nav_link('', '<< Newer posts', 'Older posts >>') ?>
			</div>
		</div> -->

	</section>
	</main>

<?php get_footer(); ?>