

</div> <!-- site content -->

<div id='site-footer'>

	<a href="http://localhost:3000/Wordpress/ronnells/"><img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="Rönnells antikvariat logotype"></a>

	<?php get_template_part( 'template-parts/contact', 'info'); ?>

	<div class="icons-wrap"> 
		<!-- facebook circle and symbol -->
		<span class="fa-stack fa-lg">
  			<a href="https://www.facebook.com/R%C3%B6nnells-Antikvariat-384343618291688/"><i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
  			<i class="fa fa-facebook fa-stack-1x" aria-hidden="true"></i></a>
		</span>
		<!-- instagram circle and symbol -->
		<span class="fa-stack fa-lg">
  			<a href="https://www.instagram.com/ronnellsantikvariat/"><i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
  			<i class="fa fa-instagram fa-stack-1x" aria-hidden="true"></i></a>
		</span>
	  	<a href="http://www.svaf.se/"><img class="svaf-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/svaf.png" alt="Logotyp för Svenska antikvariatföreningen"/></a>
	  	<a href="https://www.ilab.org/"><img class="ilab-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/ilab.png" alt="Logotyp för ILAB"/></a>
	  	<a href="http://www.ronnellsvanner.se/"><img class="rv-logo" src="<?php echo get_template_directory_uri(); ?>/src/img/rv.png" alt="Logotyp för Rönnells vänner"/></a>
	</div> <!-- icons-wrap -->
	
	<p>RÖNNELLS ANTIKVARIAT <?php echo date("Y"); ?></p> 
	
</div>

<?php wp_footer() ?>
</body>
</html>