<?php
/* Template Name: Utgivning */ 
?>


<?php get_header(); ?>

<h2 class="sub-page"> Utgivning </h2>

<?php
if(get_field('text_under_utgivning_header')) {
	echo get_field('text_under_utgivning_header');
}
?>

<h3> Senast utgivet </h3>

<?php
$args = array(
    'post_type' => 'publishing',
    'posts_per_page' => 9
);

$query = new WP_Query( $args );?>

<div class="page-loop-items-wrap pink">
    <?php if( $query->have_posts() ) : ?>
        <?php while( $query->have_posts() ) : $query->the_post() ?>
    
        <?php 
        $image_publishing = get_field('bild');
        $author_publishing = get_field('forfattare_artist');
        $pages_publishing = get_field('antal_sidor');
        $bind_publishing = get_field('typ_av_bindning');
        $isbn_publishing = get_field('isbn');
        $price_publishing = get_field('pris');
        $other_publishing = get_field('ovrigt');
        $about_publishing = custom_field_excerpt('om_boken');

        $image_format = get_field_object('image_format');
        $value = $image_format['value'];
        
        $image_size = 'medium';

 
        ?>

        <div class="items-wrap">
            <a href="<?php the_permalink(); ?>">

                <div class="publish-image-wrap">
                    <?php 
                    if($image_publishing) {
                        echo wp_get_attachment_image($image_publishing, $image_size, "", ["class" => $value]);
                    }?>
                </div>
                
                <div class="publish-wrap">
                    <div class="title_etc">
                        <?php 
                        if('the_title') { 
                        echo '<h3>' . get_the_title() . '</h3>  ';
                        }?>
                    
                        <?php
                        if($author_publishing) {
                        echo '<p>' . $author_publishing . '</p>';
                        }?>

                        <?php 
                        if($pages_publishing) { 
                        echo '<p>' . $pages_publishing . '</p>  ';
                        }?>
        
                        <?php 
                        if($bind_publishing) { 
                        echo '<p>' . $bind_publishing . '</p>   ';
                        }?>
        
                        <?php 
                        if($isbn_publishing) { 
                        echo '<p>' . $isbn_publishing . '</p>   ';
                        }?>
        
                        <?php 
                        if($price_publishing) { 
                        echo '<p>' . $price_publishing . '</p>  ';
                        }?>
        
                        <?php 
                        if($other_publishing) { 
                        echo '<p>' . $other_publishing . '</p>  ';
                        }?>
                    </div>

                    <?php 
                    if( $about_publishing) { 
                    echo $about_publishing;
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