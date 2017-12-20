<?php
/*
Template Name: Membresias
*/
?>

<?php get_header(''); ?>



<div class="banner">
    <div class="banner-titulo interna membresias">
      <div class="banner-titulo-cont membresias">
        <h1 class="banner-titulo-txt membresias"><?php echo the_field('titulo_membresia'); ?></h1>
      </div>
    </div><a href="#Contenido" class="banner-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-abajo-amarilla.svg" class="banner-flecha-img"></a></div>
  
  
  
  
  <div id="Contenido" class="contenido">



    <div class="membresias-cont">

         


<?php
		
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12,
			'product_cat' => 'membre'
			);


		
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				
                <?php 

                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                    $pro_id = get_the_ID();

				?>
            
		
        <div class="membresias-item">


                <div class="memebresias-item-img"><img src="<?php echo $featured_img_url; ?>" class="image-3"></div>
                <div class="membresias-item-txt">
                <h2 class="membresias-item-txt-titulo"><?php echo the_field('titulo_interna', $pro_id); ?></h2>
                <p class="membresias-item-txt-p"><?php the_excerpt(); ?></p>
                
                </div>
                <div class="membresias-item-comprar">
                
                
                <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                </div> 



        </div>


		<?php	endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>







      




      
     
    </div>
  </div>




	






<?php get_footer(''); ?>












