<?php

$args = array(
    'post_type' => 'events',
    'posts_per_page' => 9
);

$query = new WP_Query( $args );?>
<div class="carousel-wrapper">
    <div class="responsive">
        <?php if( $query->have_posts() ) : ?>
            <?php while( $query->have_posts() ) : $query->the_post() ?>
        
            <?php 
            $image_event = get_field('event_photo');
            $date_event = get_field('event_date');
            $time_event = get_field('event_time'); 
            $size = 'thumbnail'; 
            ?>
            
            <div class="carousel-item-wrapper" id="events">
                <a href="<?php the_permalink(); ?>" id="events-link">
                    <?php 
                    if($image_event) { ?>
                        <div class="img-event-wrap">
                        <?php echo wp_get_attachment_image($image_event, $size);?>
                        </div>
                    <?php } ?> 
                    <div class="event-date-time-wrap">
                        <?php
                        if($date_event) {
                        echo '<p class="date-event">' . $date_event . '</p>';
                        }?>
        
                        <?php
                        if($time_event) {
                        echo '<p class="time-event">' . $time_event . '</p>';
                        }?>
                    </div>
                    <h3 class="carousel-item-wrapper-info"><?php the_title() ?></h3>
                </a>
            </div>
        
            <?php endwhile; ?>
        <?php else : ?>
            <p> Å nej, det finns inga evenemang just nu!</p>
        <?php endif; wp_reset_postdata();?>
    </div> <!-- responsive -->
</div> <!-- carousel-wrapper -->





