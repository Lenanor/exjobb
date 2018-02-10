<?php
/* Template Name: Om oss */ 
?>

<?php get_header(); ?>

<h2 class="sub-page">Om oss</h2>

<h3>
<?php
if(get_field('sub_heading_1')) {
	echo '<p>' . get_field('sub_heading_1') . '</p>';
}
?>
</h3>

<div class="info-and-map-wrap background-black">
	<div class="map">
		<?php echo do_shortcode('[gmap-embed id="253"]'); ?>
	</div>
	<?php
	if(get_field('text_1')) {
		echo '<p>' . get_field('text_1') . '</p>';
	}?>
</div>

<h3>
	<?php
if(get_field('sub_heading_2')) {
	echo '<p>' . get_field('sub_heading_2') . '</p>';
}
?>
</h3>

<!-- To make *some text* get bold in text from acf textfield--> 
<?php
$pattern = '/(.*)\*(.*)\*(.*)/';
$replacement = '$1<b class="replacement-staff">$2</b>$3';
?>

<div class="staff-wrap">	
	<?php if(get_field('staff_1')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_1');?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_2')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_2'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_3')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_3'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_4')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_4'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_5')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_5'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_6')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_6'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_7')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_7'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_8')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_8'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_9')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_9'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_10')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_10'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_11')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_11'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_12')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_12'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>	
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_13')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_13'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_14')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_14'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>		
		</div>
	<?php } ?>
	
	<?php if(get_field('staff_15')) { ?>
		<div class="background-black">
			<?php $text = get_field('staff_15'); ?>
			<div class="about-staff">
			<?php echo preg_replace($pattern, $replacement, $text); ?>
			</div>
		</div>
	<?php } ?>
</div>


<?php get_footer();?>