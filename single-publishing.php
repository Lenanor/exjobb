<?php get_header();?>

<?php
   if(have_posts()) : 
      while(have_posts()) : 
         the_post(); 
?>
<?php 
    $image_publishing = get_field('bild');
    $author_publishing = get_field('forfattare_artist');
    $pages_publishing = get_field('antal_sidor');
    $bind_publishing = get_field('typ_av_bindning');
    $isbn_publishing = get_field('isbn');
    $price_publishing = get_field('pris');
    $other_publishing = get_field('ovrigt');
    $about_publishing = get_field('om_boken');
    // $image_format = get_field_object('image_format');
    // $value = $image_format['value'];
    $size = 'large'; 
?>

<div class="single-book">
    <article>
      <h3>Utgivning</h3>
      <h2><?php the_title() ?></h2>
      <div class="publish-background single-background">
        <div class="book-single-wrap single-wrap">
          <?php if($image_publishing) {
              echo wp_get_attachment_image($image_publishing, $size);
          }?>
        
          <div class="book-single-right">
            <h3><?php the_title(); ?></h3>
            
            <?php if($author_publishing) {
                echo '<p>' . $author_publishing . '</p>';
            }?>
            
            <?php if($isbn_publishing) {
                echo '<p>' . $isbn_publishing . '</p>';
            }?>
            
            <?php if($price_publishing) {
                echo '<p>' . $price_publishing . '</p>';
            }?>
            
            <?php if($other_publishing) {
                echo '<p>' . $other_publishing . '</p>';
            }?>
          </div> <!-- book-single-right -->
        </div> <!-- book-single-wrap -->
      
        <?php if($about_publishing) {
            echo '<div class="book-single-about">' . $about_publishing . '</div>';
        }?>
      </div> <!-- book-background  -->   
    </article>
    
    <p class="right"><a href="http://leno.nu/exjobb/utgivning/">Till all utgivning</a></p>     
          
    <?php
          endwhile;
       else : 
    ?>
    
          <p> Hoppsan, det finns inget att visa.</p>
    
    <?php
       endif;
    ?>
</div> <!-- single-book -->

<?php get_footer() ?>