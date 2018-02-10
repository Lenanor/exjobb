<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<title> <?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?> </title>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?> >
	
<?php get_template_part( 'template-parts/menu'); ?>
			
<div id='site-content'>	

<?php if(is_front_page()) {

}else{ 
?>
<div class="header-logo-heading">
	<h1><img id="header-logo" src="<?php echo get_template_directory_uri();?>/src/img/logo.svg" alt="Rönnells antikvariat"></h1>
</div>
<?php 
} 
?>
			



	