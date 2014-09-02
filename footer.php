			<section class="footer-gallery" >
				<div class="p-wrap clear">
					<div class="col-1-3 m-full p-l img-1">
					</div>
					
					<div class="col-1-3 hide-m-and-below p-l img-2">
					</div>
					
					<div class="col-1-3 m-full p-l img-3">
					</div>
					
				</div>

			</section>
            
			


            <section class="footer-items footer-1">
                <div class="page-wrapper clear">
                   
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
			</section>

    <footer class="footer-2">      
          <p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
                All rights reserved. <a href="http://taglinegroup.com"> Website Design</a> by Tagline.
				</p>  
			</footer>	
		</div>
		<!-- /wrapper -->
        
		<?php wp_footer(); ?>
	</body>
</html>
