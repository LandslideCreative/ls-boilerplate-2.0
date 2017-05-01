				<!-- footer -->
				<footer class="footer" role="contentinfo">
					<div class="row">
						<div class="columns">
							<nav class="footer-nav">
								<?php display_navigation('footer-nav'); ?>
							</nav>
						</div>
					</div>

					<!-- copyright -->
					<section class="copyright">
						<div class="row">
							<div class="columns">
								<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br />
								Site by <a href="http://landslidecreative.com">Landslide Creative</a></p>
							</div>
						</div>
					</section>

				</footer>
			</div> <!-- /off-canvas-content -->
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>