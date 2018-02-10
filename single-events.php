<?php get_header();?>

<?php
   if(have_posts()) : 
      while(have_posts()) : 
         the_post(); 
?>
<?php 
    $image_event_single = get_field('event_photo'); 
    $date_event_single = get_field('event_date');
    $date_time_single = get_field('event_time');
    $price_event_single = get_field('event_price'); 
    $about_event_single = get_field('event_presentation'); 
    $filter_single = get_field('event_date_filter'); 
    $size_single = 'large'; 
?>

<div class="single-event">
    <article>
      <h3>Evenemang</h3>
      <h2><?php the_title() ?></h2>
      <div class="event-background single-background">
        <div class="event-single-wrap single-wrap">
          <?php if($image_event_single) {
              echo wp_get_attachment_image($image_event_single, $size_single);
          }?>
        </div> <!-- event-single-wrap -->

        <div class="event-date-time">
            <?php if($date_event_single) {
                echo '<h3>' . $date_event_single . '</h3>';
            }?>
            
            <?php if( $date_time_single) {
                echo '<p>' .  $date_time_single . '</p>';
            }?>
            
            <?php if($price_event_single) {
                echo '<p>' . $price_event_single . '</p>';
            }?>
        </div>
      
            <?php if('$about_event_single') {
              echo '<div class="event-single-about">' .
               $about_event_single . '</div>';
            }?>
      </div> <!-- event-background  -->   
    </article>

    <p class="right"><a href="http://leno.nu/exjobb/evenemang/">Till alla evenemang</a></p>    
          
    <?php
    endwhile;
    else : 
    ?>
        <p> Hoppsan, det finns inget att visa.</p>
    <?php
       endif;
    ?>
</div> <!-- single-event -->

<?php get_footer() ?>


