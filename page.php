<?php get_header(); ?>

	<main role="main">

	<section class="col-md-12" id="main-content">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?>>
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="row">
				<div class="col-md-12">
					<?php the_post_thumbnail('main-thumb') ?>
					<?php the_content() ?>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</section>
	</main>

<?php get_footer(); ?>
