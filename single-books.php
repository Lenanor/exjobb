<?php get_header();?>

<?php
   if(have_posts()) : 
      while(have_posts()) : 
         the_post(); 
?>
<?php 
    $book_author = get_field('author_book');
    $book_pic = get_field('picture_book');
    $book_about = get_field('about_book');
    $book_isbn = get_field('isbn_book');
    $book_price = get_field('price_book');
    $book_other = get_field('other_book'); 
    $size = 'large'; 
?>

<div class="single-book">
    <article>
      <h3> Boktips</h3>
      <h2><?php the_title() ?></h2>
      <div class="book-background single-background">
        <div class="book-single-wrap single-wrap">
          <?php if($book_pic) {
              echo wp_get_attachment_image($book_pic, $size);
          }?>
        
          <div class="book-single-right">
            <h3><?php the_title(); ?></h3>
            
            <?php if($book_author) {
                echo '<p>Av: ' . $book_author . '</p>';
            }?>
            
            <?php if($book_isbn) {
                echo '<p>ISBN: ' . $book_isbn . '</p>';
            }?>
            
            <?php if($book_price) {
                echo '<p>Pris: ' . $book_price . '</p>';
            }?>
            
            <?php if($book_other) {
                echo '<p>' . $book_other . '</p>';
            }?>
          </div> <!-- book-single-right -->
        </div> <!-- book-single-wrap -->
      
        <?php if($book_about) {
            echo '<div class="book-single-about">' . $book_about . '</div>';
        }?>
      </div> <!-- book-background  -->   
    </article>
    
    <p class="right"><a href="http://leno.nu/exjobb/boktips/">Till alla boktips</a></p>     
          
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