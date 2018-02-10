<?php

$args = array(
    'post_type' => 'other',
    'posts_per_page' => 9
);

$query = new WP_Query( $args );?>
<div class="carousel-wrapper">
    <div class="responsive">
        <?php if( $query->have_posts() ) : ?>
            <?php while( $query->have_posts() ) : $query->the_post() ?>
        
            <?php 
            $image_other = get_field('other_photo');
            // $date_event = get_field('event_date');
            // $time_event = get_field('event_time'); 
            $size = 'medium'; 
            ?>
            
            <div class="carousel-item-wrapper" id="other">
                <a href="<?php the_permalink(); ?>" id="other-link">
                    <?php 
                    if($image_other) { ?>
                        <div class="img-other-wrap">
                        <?php echo wp_get_attachment_image($image_other, $size);?>
                        </div>
                    <?php } ?> 

                    <h3 class="carousel-item-wrapper-info"><?php the_title() ?></h3>
                </a>
            </div>
        
            <?php endwhile; ?>
        <?php else : ?>
            <p> Å nej, det finns inga evenemang just nu!</p>
        <?php endif; wp_reset_postdata();?>
    </div> <!-- responsive -->
</div> <!-- carousel-wrapper -->





