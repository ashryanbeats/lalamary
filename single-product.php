<?php get_header(); ?>

	<main role="main">

	<section class="col-md-12" id="main-content">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?>>
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="row">
				<div class="col-md-7 product-content">
					<?php the_post_thumbnail('main-thumb', array('class' => 'aligncenter')) ?>
				</div>
				<div class="col-md-5 product-details">
					<h3><?php the_title(); ?>の詳細</h3>
					<ul>
						<?php
						$fields = get_field_objects(); // Documentation: http://www.advancedcustomfields.com/resources/get_field_objects/
						
						if ($fields )
						{
							/* for more than two fields
							foreach ($fields as $field_name => $field) 
							{
								if ($field['label'] !== '¥') // Put a colon between label and value except for ¥ label
								{
									echo '<li>' . $field['label'] . ': ' . $field['value'] . '</li>';
								}
								else
								{
									echo '<li>' . $field['label'] . ' ' . $field['value'] . '</li>';
								}
							}*/ 
							foreach ($fields as $field_name => $field)
							{
								echo '<li>' . $field['label'] . ' ' . $field['value'] . '</li>';
							}
						}
						?>
					</ul>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://lalamary.com/order-and-gift">
								<button type="button" id="product-order" class="btn btn-primary btn-block">注文する</button>
							</a>
						</div>
					</div>
					<hr />
					<div id="product-content">
						<h3><?php the_title(); ?>について</h3>
						<?php the_content() ?>
					</div>
				</div>
			</div>
			<!-- <hr />
			<p>カテゴリ：<?php the_category('、 '); ?></p> -->
		</article>
	<?php endwhile; endif; ?>
	</section>
	
	</main>

<?php get_footer(); ?>