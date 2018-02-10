<?php
/* Template Name: Startsida */ 
?>
<?php get_header() ?>

<header>
	<div class="open-contact-search-wrap">
		<?php get_template_part( 'template-parts/contact', 'info'); ?>
		<?php get_template_part( 'template-parts/booksearch', 'form'); ?>
	</div> <!-- open-contact-search-wrap -->

	<div id="image-info-wrap">
		<div class="header-image-collage"><img class="header-image" src="<?php echo get_template_directory_uri(); ?>/src/img/ronnells_collage.png" alt="Rönnells antikvariat"></div>

		<article id="logo-text-wrap">	
			<!-- Logo -->
			<h1><img src="<?php echo get_template_directory_uri(); ?>/src/img/logo.svg" alt="Rönnells antikvariat"></h1>
			<!-- Text from acf and replacement pattern for bold text --> 
			<?php 
			$text_intro = get_field('text_in_header');
			$pattern_intro = '/(.*)\*(.*)\*(.*)/';
			$replacement_intro = '<p>$1<b>$2</b>$3<p>';
			echo preg_replace($pattern_intro, $replacement_intro, $text_intro); 
			?>
		</article>	<!-- logo-text-wrap -->		
	</div> <!-- image-info-wrap -->

	<div class="chevron-icon-wrap"> 
		<i class="fa fa-chevron-down fa-2x" aria-hidden="true"></i>
	</div>
	

</header>

<!-- Contact info and searchform visible < 768px -->
<section class="contact-search-2 search-2-start">
	<div class="contact-info-2">
		<?php get_template_part( 'template-parts/contact', 'info'); ?>
	</div>
	<!-- Facebook and instagram icons -->
	<div class="social-media-icons-wrap"> 
	  	<a href="https://www.instagram.com/ronnellsantikvariat/">
  			<i class="fa fa-circle-thinner fa-instagram" aria-hidden="true"></i>
  		</a>
	  	<a href="https://www.facebook.com/R%C3%B6nnells-Antikvariat-384343618291688/">
  			<i class="fa fa-circle-thinner fa-facebook" aria-hidden="true"></i>
  		</a>	
	</div>
	<div class="search-form-2"><?php get_template_part('template-parts/booksearch', 'form'); ?></div>
</section>

<!-- Books carousel -->
<section class="carousel">
	<h2 id="heading-books"><a href="http://localhost:3000/Wordpress/ronnells/bocker/">Boktips</a></h2>
	<?php get_template_part( 'template-parts/break', 'lineblack'); ?>
	<?php get_template_part( 'template-parts/carousel', 'books'); ?>
	<?php get_template_part( 'template-parts/break', 'lineblack'); ?>
</section>

<!-- Events carousel -->
<section class="carousel">
	<h2 id="heading-events"><a href="http://localhost:3000/Wordpress/ronnells/evenemang/">Evenemang</a></h2>
		<?php get_template_part( 'template-parts/break', 'lineblack'); ?>
		<?php get_template_part( 'template-parts/carousel', 'events'); ?>
		<?php get_template_part( 'template-parts/break', 'lineblack'); ?>
</section>

<!-- Other carousel -->
<section class="carousel">
	<h2 id="heading-other"><a href="http://localhost:3000/Wordpress/ronnells/annat/">Annat</a></h2>
		<?php get_template_part( 'template-parts/break', 'lineblack'); ?>
		<?php get_template_part( 'template-parts/carousel', 'other'); ?>
		<?php get_template_part( 'template-parts/break', 'lineblack'); ?>
</section>

<div class="square-block-wrap">
	<div class="first-square-section">
		<article class=" square white-square square-white-container">
			<?php if(get_field('square_white_heading')) {
			echo '<h2>' . get_field('square_white_heading') . '</h2>';
			}?>		
			<?php if(get_field('square_white_text')) {
			echo get_field('square_white_text') ;
			}?>	
		</article>
		
		<article class="square black-square square-black-1-container">
			<?php if(get_field('square_black_1_heading')) {
			echo '<h2>' . get_field('square_black_1_heading') . '</h2>';
			}?>		
			<?php if(get_field('square_black_1_text')) {
			echo get_field('square_black_1_text');
			}?>
		</article> 
	</div> <!-- first-square-section -->
	
	<article class="square square-green-container">
		<?php if(get_field('square_green_heading')) {
		echo '<h2>' . get_field('square_green_heading') . '</h2>';
		}?>		
		<?php if(get_field('square_green_text')) {
		echo get_field('square_green_text');
		}?>
	</article>
	<article class="black-square square square-black-2-container">
		<?php if(get_field('square_black_2_heading')) {
		echo '<h2>' . get_field('square_black_2_heading') . '</h2>';
		}?>		
		<?php if(get_field('square_black_2_text')) {
		echo get_field('square_black_2_text');
		}?>	
	</article>
	<article id="friends-wrap" class="square white-square">
		<?php if(get_field('square_white_2_heading')) {
		echo '<h2>' . get_field('square_white_2_heading') . '</h2>';}?>
		<?php if(get_field('square_white_2_text')) {
		echo get_field('square_white_2_text');}?>
	</article>

</div> <!-- square-block-wrap -->

<!-- Instagram feed -->
<section class="section-instagram-wrap">
	<img src="<?php echo get_template_directory_uri(); ?>/src/img/raster.svg" class="raster-image"/>
	<h2> Rönnells på <br> Instagram </h2>
	<!-- Instagram feed -->
	<?php echo do_shortcode('[instagram-feed]'); ?>
</section>

<?php get_footer() ?>