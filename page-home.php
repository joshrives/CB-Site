<?php
/**
 * Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CB
 */

get_header(); ?>

	<div class="full-section main-banner">
		<?php
			$image = get_field('banner_image');
			if( !empty($image) ):
		?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>
		<div class="wrap group">
			<div class="tagline">
				<h1><?php the_field('banner_tagline'); ?></h1>
				<p><?php the_field('banner_subheading'); ?></p>
				<a href = "<?php the_field('banner_button_url'); ?>" class="btn"><?php the_field('banner_button_text'); ?></a>
			</div>

		</div>
		<?php if ( get_field('show_offer') ): ?>
			<div class="special">
				<h3><?php the_field('offer_title'); ?></h3>
				<p><?php the_field('offer_details'); ?></p>
				<a href = "<?php the_field('offer_button_url');?>" class="btn"><?php the_field('offer_button_text'); ?></a>
			</div>
		<? endif;?>
	</div><!-- main-banner -->
	<div class="full-section schedule-bar">
		<div class="wrap group">
			<h3>For reliable, professional electrical service in the Dallas-Ft Worth and surrounding areas</h3>
			<p>Call 972-790-0707 or <a href = "<?php echo esc_url( home_url( '/' ) ); ?>contact/">schedule an appointment online</a></p>
		</div>
	</div>
	<div class="accolades full-section">
		<ul>
			<li>
				<a href = "http://www.bbb.org/dallas/business-reviews/electricians/c-and-b-electric-in-grand-prairie-tx-50001318">
					<img src = "<?php bloginfo('template_directory'); ?>/_i/cbbb.png">
				</a>
			<li>
				<a href="http://www.angieslist.com/companylist/us/tx/grand-prairie/candb-electric-reviews-2654010.aspx" title="Angie's List Super Service Award winner">
					<img src = "<?php bloginfo('template_directory'); ?>/_i/angies.png">
				</a>
			</li>
			<li>
				<a href = "http://www.angieslist.com/companylist/us/tx/grand-prairie/candb-electric-reviews-2654010.htm?cid=ssabadge">
					<img src = "<?php bloginfo('template_directory'); ?>/_i/angie.jpg">
				</a>
			</li>
			<li>
				<a href="http://www.bestpickreports.com/electricians/dallas/north-dallas/c-and-b-electric">
					<img src="<?php bloginfo('template_directory'); ?>/_i/bestpickreports.png" width="200" height="92" title="C &amp; B Electric | A Best Pick Certified Company" /></a><span class="assistive-text">Best Pick</span>
				</a>
			</li>
		</ul>
	</div><!--accolades-->
	<?php if ( have_rows('home_page_product') ): ?> 
	<div class="full-section home-services">
		<div class="wrap group">
			<ul class="home-service-list four-list group">
			<?php while ( have_rows('home_page_product') ) : the_row();
			$image = get_sub_field('home_product_image'); 
			?>
				<li>
					<a href = "<?php the_sub_field('home_product_url');?>">
						<h3><?php the_sub_field('home_product_title');?></h3>
						<img src = "<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</a>
					<p><?php the_sub_field('home_product_content');?></p>
					<a href = "<?php the_sub_field('home_product_url');?>" class="action"><?php the_sub_field('home_product_url_text');?></a>
				</li>
			<?php endwhile;?>
			</ul>
		</div>
	</div>
	<?php endif;?>
	<!--home-services-->

		<?php while ( have_posts() ) : the_post(); ?>


		<?php endwhile; // end of the loop. ?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
