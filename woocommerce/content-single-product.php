<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>


<div class="producto">
	<div class="producto-inner">

	<div class="producto-inner-top"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-izquiera-amarilla.svg" class="producto-flecha-atras">

	<?php 


    global $post;
    $args = array( 'taxonomy' => 'product_cat',);
    $terms = wp_get_post_terms($post->ID,'product_cat', $args);
    $count = count($terms); 
    if ($count > 0) {
        foreach ($terms as $term) {
		   $name_cat = $term->name;
		   $url = get_term_link( $term );
		   $nombre = $post->name;
           
        }
    }

?>  
		
        <div class="producto-ruta-txt"><a href="<?php echo get_home_url(); ?>" class="producto-ruta-txt-link">Inicio</a> / <a href="<?php echo $url ?>" class="producto-ruta-txt-link"><?php echo $name_cat; ?></a> / <a href="<?php echo get_permalink(); ?>" class="producto-ruta-txt-link"><?php the_title_attribute(); ?></a></div>
      </div>



	
		<div class="producto-inner-principal">





			<?php
				/**
				 * woocommerce_before_single_product hook.
				 *
				 * @hooked wc_print_notices - 10
				 */
				do_action( 'woocommerce_before_single_product' );

				if ( post_password_required() ) {
					echo get_the_password_form();
					return;
				}
			?>



			
		

				<div class="producto-info">


					<div class="producto-info-titulo">
            			<h1 class="producto-info-titulo-txt"><?php the_field('titulo_interna') ?></h1>
          			</div>


					<?php



				

						/**
						 * woocommerce_single_product_summary hook.
						 *
						 * @hooked woocommerce_template_single_title - 5
						 * @hooked woocommerce_template_single_rating - 10
						 * @hooked woocommerce_template_single_price - 10
						 * @hooked woocommerce_template_single_excerpt - 20
						 * @hooked woocommerce_template_single_add_to_cart - 30
						 * @hooked woocommerce_template_single_meta - 40
						 * @hooked woocommerce_template_single_sharing - 50
						 * @hooked WC_Structured_Data::generate_product_data() - 60
						 */
						do_action( 'woocommerce_single_product_summary' );
					?>

					
				</div>

				<div class="producto-img">


				<div data-animation="slide" data-duration="500" data-infinite="1" class="slider-2 w-slider">
					<div class="mask-2 w-slider-mask">
						<div class="slide-2 w-slide">
							<div class="producto-slide-cont" style=" background-image: url('<?php echo the_field('img_producto1'); ?>"></div>
						</div>
						<div class="slide-2 w-slide">
							<div class="producto-slide-cont _2" style=" background-image: url('<?php echo the_field('img_producto2'); ?>"></div>
						</div>
						<div class="slide-2 w-slide">
							<div class="producto-slide-cont _3" style=" background-image: url('<?php echo the_field('img_producto3'); ?>"></div>
						</div>
					</div>

					<div class="left-arrow-2 w-slider-arrow-left">
						<div class="w-icon-slider-left"></div>
					</div>
					<div class="right-arrow-2 w-slider-arrow-right">
						<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-1.svg" class="image-4">
					</div>

					<div class="w-slider-nav w-round"></div>
          		</div>


				
					<?php
						/**
						 * woocommerce_before_single_product_summary hook.
						 *
						 * @hooked woocommerce_show_product_sale_flash - 10
						 * @hooked woocommerce_show_product_images - 20
						 */
						do_action( 'woocommerce_before_single_product_summary' );
					?>

				</div>




				<?php
					/**
					 * woocommerce_after_single_product_summary hook.
					 *
					 * @hooked woocommerce_output_product_data_tabs - 10
					 * @hooked woocommerce_upsell_display - 15
					 * @hooked woocommerce_output_related_products - 20
					 */
					do_action( 'woocommerce_after_single_product_summary' );
				?>
		

	
		</div>
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
