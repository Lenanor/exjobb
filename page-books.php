<?php
/* Template Name: Boktips */ 
?>

<?php get_header(); ?>

<article class="books-heading-text">
<h2 class="sub-page">Boktips</h2>
	<?php
	if(get_field('presentation_text_books')) {
	echo '<p>' . get_field('presentation_text_books') . '</p>';
	}
	?>
	<a href="#mc_embed_signup">Prenumerera på vårt nyhetsbrev om böcker!</a>
</article>

<?php
$args = array(
    'post_type' => 'books',
    'posts_per_page' => 8
);

$query = new WP_Query( $args );?>

<div class="page-loop-items-wrap green">
    <?php if( $query->have_posts() ) : ?>
        <?php while( $query->have_posts() ) : $query->the_post() ?>
    
        <?php 
        $image_book = get_field('picture_book');
        $author_book = get_field('author_book');
        $price_book = get_field('price_book');
        $about_books = custom_field_excerpt('about_book');
        $size = 'medium'; 
        ?>
    
        <div class="items-wrap book-wrap">
            <a href="<?php the_permalink(); ?>">

                <div class="book-image-wrap"><?php 
                    if($image_book) { 
                        echo wp_get_attachment_image( $image_book, $size );
                    }?></div>
                 
                 <div class="book-wrap">

                    <div class="title_etc">
				        <?php 
            	        if('the_title') { 
            	        echo '<h3>' . get_the_title() . '</h3>';
            	        }?>

				        <?php 
                        if($author_book) { 
                        echo '<p class="bold">' . $author_book . '</p>';
                        }?>
    
                        <?php 
                        if($price_book) { 
                        echo '<p class="bold">' . $price_book . '</p>';
                        }?>
                    </div>
                

                    <?php 
                    if($about_books) { 
                    echo $about_books;
                    }?>

                </div>

            </a>
        </div>
    
        <?php endwhile; ?>
    <?php else : ?>
        <p>Å nej, inga böcker finns inlagda!</p>
    <?php endif; wp_reset_postdata();?>
</div>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
	<form action="https://leno.us17.list-manage.com/subscribe/post?u=993a963198fd4453053c51a7c&amp;	id=ac274bcbec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="	validate" target="_blank" novalidate>
	    <div id="mc_embed_signup_scroll">
		<h2>Rönnells nyhetsbrev<br>om böcker</h2>
	<div class="indicates-required"><span class="asterisk">*</span>obligatoriskt</div>
	<div class="mc-field-group">
		<label for="mce-EMAIL">E-postadress<span class="asterisk">*</span>
	</label>
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
	<div class="mc-field-group">
		<label for="mce-FNAME">Förnamn  <span class="asterisk">*</span>
	</label>
		<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
	</div>
	<div class="mc-field-group">
		<label for="mce-LNAME">Efternamn  <span class="asterisk">*</span>
	</label>
		<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
	</div>
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    <!-- real people should not fill this in and expect good things - do not remove this or 	risk form bot signups-->
	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="	b_993a963198fd4453053c51a7c_ac274bcbec" tabindex="-1" value=""></div>
	    <div class="clear"><input type="submit" value="Prenumerera" name="subscribe" id="	mc-embedded-subscribe" class="button"></div>
	    </div>
	</form>
</div> <!--End mc_embed_signup-->

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new 	Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';	ftypes[2]='text'; }(jQuery));var $mcj = jQuery.noConflict(true);</script>


<?php get_footer();?>