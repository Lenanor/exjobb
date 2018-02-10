<?php
/* Template Name: Annat */ 
?>

<?php get_header(); ?>

<article class="other-heading-text">
    <h2 class="sub-page">Annat</h2>
    
    <?php
    if(get_field('presentation_text_other')) {
    	echo get_field('presentation_text_other');
    }
    ?>
</article>

<?php
$args = array(
    'post_type'=>'other',
    'posts_per_page'=>9
);

$query = new WP_Query( $args );?>

<div class="page-loop-items-wrap bg-other">
	
    <?php if( $query->have_posts() ) : ?>
        <?php while( $query->have_posts() ) : $query->the_post() ?>
    
        <?php
        $price_other = get_field('other_price'); 
        $image_other = get_field('other_photo');
        $about_other = custom_field_excerpt('other_presentation'); 
        $size = 'medium'; 
        ?>
    
        <div class="items-wrap">
            <a href="<?php the_permalink(); ?>">
                <div class="img-wrap">
                    <?php 
                    if($image_other) {
                        echo wp_get_attachment_image($image_other, $size);
                    }?>
                </div>

                <div class="about">
            	<?php 
            	if('the_title') { 
            	echo '<h3>' . get_the_title() . '</h3>';
            	}?>

                <?php 
                if($price_other) { 
                echo '<p id="price-other">' . $price_other . ' kr</p>';
                }?>
				
                <?php 
                if($about_other) { 
                echo $about_other;
                }?>
                </div>  	
            </a>
        </div>

        <?php endwhile; ?>
    <?php else : ?>
        <p>Å nej, inget finns inlagt på den här sidan!</p>
    <?php endif; wp_reset_postdata();?>
</div>


<?php get_footer();?>