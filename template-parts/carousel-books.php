<?php

$args = array(
    'post_type' => 'books',
    'posts_per_page' => 7
);

$query = new WP_Query( $args );?>
<div class="carousel-wrapper">
<div class="responsive">
    <?php if( $query->have_posts() ) : ?>
        <?php while( $query->have_posts() ) : $query->the_post() ?>
    
        <?php 
        $image_book = get_field('picture_book');
        //$title = get_field('titel');
        $author_book = get_field('author_book');
        $other_book = get_field('other_book');
        $size = 'medium'; 
        ?>
    
        <div class="carousel-item-wrapper carousel-books">

            <a href="<?php the_permalink(); ?>">
                <?php 
                if($image_book) { ?>
                    <div class="img-wrap">
                    <?php echo wp_get_attachment_image( $image_book, $size );?>
                    </div>
                <?php } ?>
                <div class="carousel-item-wrapper-info">
                    <?php 
                    if($author_book) {
                        echo '<h3>' . $author_book . '</h3>';
                    }
                    if('the_title') { 
                        echo '<p>' . get_the_title() . '</p>';
                    }
                    ?>
                </div>
            </a>
        </div>
    
        <?php endwhile; ?>
    <?php else : ?>
        <p>Å nej, inga böcker att visa!</p>
    <?php endif; wp_reset_postdata();?>
</div>

</div>

                


