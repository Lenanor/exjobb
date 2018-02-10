<?php
/* Template Name: Vänförening */ 
?>

<?php get_header(); ?>

<article class="friends-wrap">
	<h2 class="sub-page">Vänförening</h2>
	<div class="background-black">
	<?php
	if(get_field('sub_heading')) {
		echo '<h3>' . get_field('sub_heading') . '</h3>';
	}
	?>
	<?php
	if(get_field('text_friends')) {
		echo '<p>' . get_field('text_friends') . '</p>';
	}
	?>
	</div>
</article>
<?php get_footer();?>