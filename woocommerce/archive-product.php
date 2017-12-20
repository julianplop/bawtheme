<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php
 
				$term_id = get_queried_object()->term_id;
				
				$post_id = 'product_cat_'.$term_id;
				
				
				$custom_field = get_field('titulo_categoria', $post_id); // My Advanced Custom Field Variable
				$img_fondo = get_field('img_fondo', $post_id);
				
				?>


<div class="banner">
    <div class="banner-titulo interna" style="background-image: url(<?php echo $img_fondo; ?>);">
      <div class="banner-titulo-cont">
	


		
				
				
		<h1 class="banner-titulo-txt"><?php echo $custom_field ?></h1>

      </div>
	</div><a href="#Contenido" class="banner-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-abajo-amarilla.svg" class="banner-flecha-img"></a></div>
	






  <div id="Contenido" class="contenido">
    <div class="masajes-cont">

	<?php

		$current_cat = get_query_var( 'product_cat' );
		$term =get_term_by( 'slug', $current_cat, 'product_cat');
		$term_name = $term->name; 
		

		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12,
			'product_cat' => $term_name
			);


		
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				<?php 

					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

				?>

		
				<a href="<?php echo get_permalink(); ?>" style=" background-image: -webkit-linear-gradient(270deg, hsla(0, 0%, 9%, .5), hsla(0, 0%, 9%, .5)), url('<?php echo $featured_img_url; ?>');background-image: linear-gradient(180deg, hsla(0, 0%, 9%, .5), hsla(0, 0%, 9%, .5)), url('<?php echo $featured_img_url; ?>');"  class="masajes-item w-inline-block">
					<div style="opacity:0" class="masajes-item-fondo"></div>
					<h2 class="masajes-item-titulo"><?php echo the_field('titulo_thumbnail') ?></h2>
					<p><?php echo the_field('descripcion_thumbnail'); ?></p>
				</a>


		<?php	endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>

    </div>
  </div> 






  


	

<?php get_footer( 'shop' ); ?>
