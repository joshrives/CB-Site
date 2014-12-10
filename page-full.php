<?php
/**
 * Template Name: Full-Width
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CB
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<header class="full-section page-header">
		<div class="wrap group">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p class="entry-intro"><?php the_field('entry_intro'); ?></p>
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
		<div class="sm-wrap group">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="wrap group">
			<?php
			// check if the flexible content field has rows of data
			if( have_rows('page_section') ):
			?>
			<div class="entry-sub-content">
				<?php
			    // loop through the rows of data
			    while ( have_rows('page_section') ) : the_row();
			    ?>
			    <section class="group">
			        <?php
			        if( get_row_layout() == 'stacked_list' ):
			        	if( have_rows('stacked_item') ):
			        		while ( have_rows('stacked_item') ) : the_row();
			        			$image = get_sub_field('stacked_image');
		        	?>
		        	<div class="stacked-list group">
		        		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		        		<div class="stacked-content">

							<?php if (get_sub_field('stacked_title')): ?>
							<h2><?php the_sub_field('stacked_title')?></h2>
		        			<?php endif;?>

							<?php if (get_sub_field('stacked_content')): ?>
		        			<?php the_sub_field('stacked_content')?>
		        			<?php endif;?>

		        			<?php if (get_sub_field('stacked_action_url')): ?>
		        			<a href = "<?php the_sub_field('stacked_action_url')?>" class="simple-btn"><?php the_sub_field('stacked_action_text')?></a>
		        			<?php endif;?>
		        		</div>

		        	</div>
				        	<?php endwhile; ?>
			        	<?php endif;?>
			        <?php
			        elseif( get_row_layout() == 'side_by_side_list' ):
			        	if( have_rows('sbs_item') ):
	        		?>
	        		<ul class="two-list sbs-list group">
	        				<?php
			        		while ( have_rows('sbs_item') ) : the_row();
			        			$icon = get_sub_field('sbs_icon');
				        	?>
			        	<li>
			        		<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
			        		<div class="sbs-content">
			        			<h3><?php the_sub_field('sbs_title')?></h3>
								<?php the_sub_field('sbs_content')?>
			        		</div>
			        	</li>
				        	<?php endwhile; ?>
		        	</ul>
			        	<?php endif;?>
					<?php endif; ?>
			    </section>
				<?php endwhile; ?>
			</div><!--sub-content-->
			<?php endif; ?>
		</div>
	</div><!-- #primary -->
<?php endwhile; // end of the loop. ?>



<?php //get_sidebar(); ?>
<?php get_footer(); ?>
