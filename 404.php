<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package CB
 */

get_header(); ?>
	<header class="full-section page-header">
		<div class="wrap group">
			<h1 class="entry-title">Oops!</h1>
			<p class="entry-intro" style="margin-top: 1em;">This page does not exist. Please use the navigation bar above or return to the <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">home page</a>.</p>
		</div>
		<?php
		$image = get_field('entry_banner');

		if( !empty($image) ): ?>
		<div class="page-banner">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>
		<?php endif; ?>
	</header>
	<div id="primary" class="full-section content-area">
		<div class="wrap error-page">
			<?php if( have_rows('404_page', 'options')): ?>

			<ul class="group error-list three-list">

				<?php while( have_rows('404_page', 'options')) : the_row(); ?>
				<?php 

					$error404 = get_sub_field('404_image', 'options');

					if( !empty($error404) ): ?>
				<li>
					<img src="<?php echo $error404['url']; ?>" alt="<?php echo $error404['alt']; ?>" />
					<a href="<?php the_sub_field('404_button_link', 'options'); ?>" class="btn error-button"><?php the_sub_field('404_button_text', 'options'); ?></a>	
				</li>
				<?php endif; ?>
				<?php endwhile; ?>

			</ul>

			<?php endif; ?>
			<!-- <ul class="group error-list three-list">
				<li>
					<img src="<?php //the_field ( '404_image'); ?>" alt="<?php //get_field ( '404_image'); ?>" />
					<a href="<?php //echo esc_url( home_url( '/services' ) ); ?>" class="btn error-button">More Services</a>
				</li>
				<li>
					<img src="https://unsplash.imgix.net/photo-1414073875831-b47709631146?q=75&fm=jpg&s=731b6d5150eea8bafa63ae8194e72ebd" />
					<a href="<?php //echo esc_url( home_url( '/payments' ) ); ?>" class="btn error-button">Make a Payment</a>
				</li>
				<li>
					<img src="https://unsplash.imgix.net/photo-1414073875831-b47709631146?q=75&fm=jpg&s=731b6d5150eea8bafa63ae8194e72ebd" />
					<a href="<?php //echo esc_url( home_url( '/contact' ) ); ?>" class="btn error-button">Contact Us</a>
				</li>
			</ul> -->
		</div>
	</div>
<?php get_footer(); ?>