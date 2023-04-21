<?php
/**
 * The Template for displaying all single posts.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div <?php generate_do_attr( 'content' ); ?>>
		<main <?php generate_do_attr( 'main' ); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );

			if ( generate_has_default_loop() ) {
				while ( have_posts() ) :

					the_post();

				endwhile;
			}

            // Check rows existexists.
if( have_rows('quick-comparison') ):

    // Loop through rows.
    while( have_rows('quick-comparison') ) : the_row();

        // Load sub field value.
        $product_img = get_sub_field('product-img');
        $product_name = get_sub_field('product-name');
        $product_summary = get_sub_field('product-summary');
        $advantages1 = get_sub_field('advantages1');
        $advantages2 = get_sub_field('advantages2');
        $advantages3 = get_sub_field('advantages3');
        $aff_link = get_sub_field('aff-link');
        // Do something...
        ?>
        <div class="gb-container gb-container-910cb7e5 go-quickview">
<div class="gb-grid-wrapper gb-grid-wrapper-1daab9ad">
<div class="gb-grid-column gb-grid-column-82d82f79"><div class="gb-container gb-container-82d82f79">

<figure class="gb-block-image gb-block-image-c81a3b3a"><img decoding="async" loading="lazy" width="437" height="424" class="gb-image gb-image-c81a3b3a" src="<?php echo $product_img ?>" alt title="쿨린 고속충전 대용량 보조배터리 20000mAh 22.5W CL322" srcset="<?php echo $product_img ?> 437w, https://guideone.co.kr/wp-content/uploads/2023/04/Screenshot-2023-04-09-at-10.32.05-PM-300x291.png 300w" sizes="(max-width: 437px) 100vw, 437px" /></figure>

</div></div>

<div class="gb-grid-column gb-grid-column-27701936"><div class="gb-container gb-container-27701936">

<h4 class="gb-headline gb-headline-9765caed gb-headline-text"><?php echo $product_name ?></h4>



<p><?php echo $product_summary ?></p>

</div></div>

<div class="gb-grid-column gb-grid-column-a9d3c0d9"><div class="gb-container gb-container-a9d3c0d9">

<ul>
<li><?php echo $advantages1 ?></li>
<li><?php echo $advantages2 ?></li>
<li><?php echo $advantages3 ?></li>
</ul>

</div></div>

<div class="gb-grid-column gb-grid-column-fe718f69"><div class="gb-container gb-container-fe718f69 go-button-container">

<a class="gb-button gb-button-726652b4 gb-button-text" href="<?php echo $aff_link ?>" target="_blank" rel="nofollow noopener noreferrer">최저가 보기</a>

</div></div>
</div>
</div>

<?php

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

    get_comment();

	generate_construct_sidebars();

	get_footer();
