<?php
/*
Template Name: Prensa
*/
?>

<?php get_header(''); ?>



	
<div class="banner">



    <div class="banner-titulo interna membresias" style="background-image: url(<?php echo the_field('img_fondo_prensa'); ?>);">
      <div class="banner-titulo-cont prensa">
        <h1 class="banner-titulo-txt prensa"><?php echo the_field('titulo_prensa'); ?></h1>
      </div>
    </div><a href="#Contenido" class="banner-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-abajo-amarilla.svg" class="banner-flecha-img"></a></div>







	<div id="Contenido" class="contenido blanco">
    	<div class="prensa-cont">


      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      
          $terms = get_terms( 'medios' ); ?>
      
          
          <?php   foreach ( $terms as $term ) { ?>

				   <?php 
				   
					   $term_id = get_term( $term );
					   $img_logo_medio = get_field('img_medio', $term_id); 
				   
				   ?>
				   
            
				<div class="prensa-item" data-ix="prensa-item">

					<div class="prensa-item-detalle">
						<div data-animation="outin" data-easing="ease-in-out" data-duration="500" data-infinite="1" class="slider w-slider">
							<div class="mask w-slider-mask">

											<?php $args = array(
													'post_type' => 'prensa',
													'tax_query' => array(
													array(
														'taxonomy' => 'medios',
														'field'    => 'slug',
														'terms'    => $term->slug,
													),
													),
												);
											?>

										

										<?php $loop = new WP_Query($args); ?>
										<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
											
														<?php $postids = get_the_ID()?>
																<div class="slide w-slide">
																	<a href="<?php echo the_field('link_articulo', $postids); ?>"target="_blank"  class="prensa-item-slider-cont w-inline-block">
																	<h3 class="prensa-item-slider-titulo"><?php echo the_title(); ?></h3>
																	<div class="prensa-ite-slider-texto"><?php echo the_field('autor_articulo', $postids); ?></div>
																	<div class="prensa-item-slider-go">Ir al artículo</div>
																	</a>
																</div>

															<?php endwhile; ?>

															<?php else: ?>
																<h1>No posts here!</h1>
															<?php endif; ?>
															<?php wp_reset_postdata(); ?>

							</div>
							<div class="left-arrow w-slider-arrow-left">
							<div class="prensa-item-slider-flecha"></div>
							</div>
							<div class="right-arrow w-slider-arrow-right">
							<div class="prensa-item-slider-flecha"></div>
							</div>
							<div class="w-slider-nav w-slider-nav-invert w-round"></div>


						</div>
					</div>
					<div class="prensa-item-cont"><img src="<?php echo $img_logo_medio; ?>" class="prensa-item-img"></div>
				</div> 
        
            <!--       
                // The $term is an object, so we don't need to specify the $taxonomy.
                $term_link = get_term_link( $term );
              
                // If there was an error, continue to the next term.
                if ( is_wp_error( $term_link ) ) {
                  continue;
                }
              
                // We successfully got a link. Print it out.
                echo '<div><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';
              '</div>'; -->
      
    <?php  } ?>


      
      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

		</div>

	</div>

		











      








































  <?php get_footer(''); ?>












