<?php
/* Template Name: Evenemang */ 
?>

<?php get_header(); ?>

<article class="event-heading-text">
    <h2 class="sub-page"> Evenemang</h2>
    
    <?php
    if(get_field('presentation_text_events')) {
    	echo get_field('presentation_text_events');
    }
    ?>
    <a href="#">Prenumerera på vårt nyhetsbrev om evenemang!</a>
</article>

<?php
$args = array(
    'post_type' => 'events',
    'posts_per_page' => 9
);

$query = new WP_Query( $args );?>

<div class="page-loop-items-wrap pink">
	
    <?php if( $query->have_posts() ) : ?>
        <?php while( $query->have_posts() ) : $query->the_post() ?>
    
        <?php
        $date_filter = get_field('event_date_filter');
        $date_event = get_field('event_date');
        $date_time = get_field('event_time');
        $price_event = get_field('event_price'); 
        $image_event = get_field('event_photo');
        $about_event = custom_field_excerpt('event_presentation'); 
        $size = 'medium'; 
        ?>

        <div class="items-wrap">
            <a href="<?php the_permalink(); ?>">
                <?php 
                if($image_event) {
                    echo wp_get_attachment_image($image_event, $size);
                }?>
                
                <div class="about">
				
				<div class="event-date-time-wrap">
				    <?php
            	   if($date_event) {
            	   echo '<p class="date-event">' . $date_event .  '</p>';
            	   }?>
    
            	   <?php
            	   if($date_time) {
            	   echo '<p class="time-event">' . $date_time . ' </p>';
            	   }?>
				</div>
                
                
                    <?php 
                    if('the_title') { 
                    echo '<h3>' . get_the_title() . '</h3>';
                    }?>
    
                    <?php 
                    if($about_event) { 
                    echo $about_event;
                    }?>
    
                    <?php 
                    if($price_event) { 
                    echo '<p>' . $price_event . '</p>';
                    }?>
                </div>
            	
            </a>
        </div>

        <?php endwhile; ?>
    <?php else : ?>
        <p>Å nej, inga evenemang finns inlagda!</p>
    <?php endif; wp_reset_postdata();?>
</div>


<?php get_footer();?>