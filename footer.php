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
						<span class="contact-content"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact/">Contact Us</a></span>
					</li>
					<li class="social-icons"><a href = "https://twitter.com/CB_electric"><span class="icon-twitter"></span><span class="assistive-text">Twitter</span></a></li>
					<li class="social-icons"><a href = "https://www.facebook.com/pages/CB-Electric-Inc/186668344702128"><span class="icon-facebook"></span><span class="assistive-text">Facebook</span></a></li>
				</ul>
			</div>
		</div>
		<hr />
		<div class="footer-dealers wrap group">
			<h3>Authorized Dealers</h3>
			<ul>
				<li><a href="http://www.control4.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/control4.jpg"><span class="assistive-text">Control 4 Authorized Dealer</span></a></li>
				<li><a href="http://www.beamvac.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/beam.jpg"><span class="assistive-text">Beam Authorized Dealer</span></a></li>
				<li><a href="http://www.generac.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/generac.jpg"><span class="assistive-text">Generac Authorized Dealer</span></a></li>
				
				<li><a href="http://www.definitivetech.com/"><img src="<?php bloginfo('template_directory'); ?>/_i/DT.jpg"><span class="assistive-text">Definitive Technologies Authorized Dealer</span></a></li>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59135289-1', 'auto');
  ga('send', 'pageview');

</script>
<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_js/production.min.js"></script>-->
</body>
</html>
