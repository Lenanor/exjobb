<?php get_header() ?>

<?php
   if(have_posts()) : 
      while(have_posts()) : 
         the_post(); 
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>
      
<?php
      endwhile;
   else : 
?>

      Hoppsan, det finns inget att visa.

<?php
   endif;
?>

<?php get_footer() ?>

