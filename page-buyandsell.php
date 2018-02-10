<?php
/* Template Name: Köpa & sälja */ 
?>


<?php get_header(); ?>

<article>
    <h2 class="sub-page">Köpa & sälja</h2>
    <div class="buy-wrap">
        <div class="background-black buy-sell">
            <h3>Köpa</h3>
            <?php
            if(get_field('text_under_kopa_heading')) {
            	echo '<p>' . get_field('text_under_kopa_heading') . '</p>';
            }
            ?>
        </div>
        <div class="background-black">
            <h3>Köpvillkor</h3>
            <?php
            if(get_field('terms')) {
                echo '<p>' . get_field('terms') . '</p>';
            }
            ?>
        </div>
    </div>
</article>

<section class="contact-search-2">
    <div class="search-form-2 buy-sell-page">
        <?php get_template_part( 'template-parts/booksearch', 'form'); ?>
    </div>
</section>

<article  class="sell-wrap">
    <h3>Sälja</h3>
    <div>
        <?php
        if(get_field('text_under_salja_heading')) {
            echo '<p>' . get_field('text_under_salja_heading') . '</p>';
        }
        ?>
    </div>
</article>

<?php get_footer();?>