<?php get_header();?>

<?php
   if(have_posts()) : 
      while(have_posts()) : 
         the_post(); 
?>
<?php 
    $image_other_single = get_field('other_photo');
    $price_other_single = get_field('other_price'); 
    $about_other_single = get_field('other_presentation'); 
    $size_single = 'large'; 
?>

<div class="single-other">
    <article>
      <h3>Annat</h3>
      <h2><?php the_title() ?></h2>
      <div class="other-background single-background">
        <div class="other-single-wrap single-wrap">
          <?php if($image_other_single) {
              echo wp_get_attachment_image($image_other_single, $size_single);
          }?>
        </div> <!-- other-single-wrap -->
      
            <?php if('$about_other_single') {
              echo '<div class="other-single-about">' .
               $about_other_single;
            }?>
 
            <?php if($price_other_single) {
                echo '<p>Pris: ' . $price_other_single . ' kr</p>' . '</div>';
            }?>
      </div> <!-- other-background  -->   
    </article>
    
    <p class="right"><a href="http://leno.nu/exjobb/annat/">Till Annat</a></p>     
          
    <?php
    endwhile;
    else : 
    ?>
        <p> Hoppsan, det finns inget att visa.</p>
    <?php
       endif;
    ?>
</div> <!-- single-other -->

<?php get_footer() ?>


