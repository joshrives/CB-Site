<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CB
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="full-section site-footer" role="contentinfo">
		<div class="wrap group">
			<div class="footer-company">
				<h3>C&amp;B Electric &amp; Security</h3>
				<p>Providing reliable, quality service to the DFW metroplex &amp; surrounding areas since 1973.</p>
			</div>
			<!-- .company-info -->
			<div class="footer-about">
				<h3>Our Commitment</h3>
				<p>We are dedicated to on-time, quality installation &amp; repair. C&amp;B provides an efficient &amp; professional service department, with competitive pricing. We offer our customers a convenient “one stop solution” for all their electrical, audio/visual, security &amp; home surveillance needs, with just one phone call. <a href = "<?php echo esc_url( home_url( '/' ) ); ?>about/">Read More &raquo;</a></p>
			</div>
			<div class="footer-contact">
				<h3>Contact Us</h3>
				<ul class="contact-icons">
					<li class="group">
						<span class="icon-office"></span>
						<span class="contact-content"><a href="https://www.google.com/maps/dir/Current+Location/225+Gilbert+Circle+Grand+Prairie+TX+75050">225 Gilbert Circle Grand Prairie, Texas</a></span>
					</li>
					<li class="group">
						<span class="icon-phone"></span>
						<span class="contact-content"><a href="tel:972-790-0707">972-790-0707</a></span>
					</li>
					<li class="group">
						<span class="icon-mail"></span>
						<span class="contact-content"><a href="mailto:info@cbeltx.com">Contact Us</a></span>
					</li>
					<li class="social-icons"><a href = "#"><span class="icon-twitter"></span><span class="assistive-text">Twitter</span></a></li>
					<li class="social-icons"><a href = "#"><span class="icon-facebook"></span><span class="assistive-text">Facebook</span></a></li>
				</ul>
			</div>
		</div>
		<hr />
		<div class="footer-dealers wrap group">
			<h3>Authorized Dealers</h3>
			<ul class="section-1">
				<li class="icon-1"><a href="http://www.control4.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/control4.jpg"><span class="assistive-text">Control 4 Authorized Dealer</span></a></li>
				
				<li class="icon-2"><script type="text/javascript" src="http://www.angieslist.com/webbadge/insertwebbadge.js?bid=866aab39c19c6edf59892d658525055c"></script><script type="text/javascript">if (BADGEBOX) BADGEBOX.PlaceBadge();</script><noscript><div id="ssanslnk"><a href="http://www.angieslist.com/companylist/us/tx/grand-prairie/candb-electric-reviews-2654010.aspx" title="Angie's List Super Service Award winner">DALLAS/FT. WORTH electrician</a></div></noscript></li>
			</ul>
			<ul class="section-2">
				<li class="icon-3"><a href="http://www.bestpickreports.com/electricians/dallas/north-dallas/c-and-b-electric"><img src="http://www.bestpickreports.com/assets/logos/dal/candbelectric/bestpickreports.png" width="200" height="92" title="C &amp; B Electric | A Best Pick Certified Company" /></a><span class="assistive-text">Best Pick</span></a></li>
				
				<li class="icon-4"><a href="http://www.beamvac.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/beam.jpg"><span class="assistive-text">Beam Authorized Dealer</span></a></li>
			</ul>
			<ul class="section-3">
				<li class="icon-5"><a href="http://www.generac.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/generac.jpg"><span class="assistive-text">Generac Authorized Dealer</span></a></li>
				
				<li class="icon-6"><a href="http://www.definitivetech.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/DT.jpg"><span class="assistive-text">Definitive Technologies Authorized Dealer</span></a></li>
			</ul>		
		</div>
	</footer><!-- #colophon -->
	<nav class="full-section footer-nav">
		<div class="wrap group">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'footer-menu' ) ); ?>
			<ul class="copyright">
				<li>&copy; <?php echo date("Y"); ?> C&amp;B Electric TECL #17456</li>
				<li>&copy; <?php echo date("Y"); ?> C&amp;B Security B11558</li>
			</ul>
		</div>
	</nav>
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_js/production.min.js"></script>
</body>
</html>
