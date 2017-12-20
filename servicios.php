<?php
/*
Template Name: Servicios
*/
?>

<?php get_header(); ?>


<div class="banner">
		<div class="banner-titulo interna membresias">
			<div class="banner-titulo-cont prensa">
				<h1 class="banner-titulo-txt prensa"><?php the_field('titulo_servicios') ?></h1>
			</div>
		</div><a href="#Contenido" class="banner-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-abajo-amarilla.svg" class="banner-flecha-img"></a>
</div>
		
<div id="Contenido" class="contenido blanco">

	<!-- contenedor -->
	<div class="servicios-interna-cont">


		<!-- loop categoria 1 -->
		<?php   
		$term = get_field("categoria_servicio1");
		if( $term ): ?>

			<div class="servicios-interna-cat">

				<a class="servicios-interna-titulo" href="<?php echo get_term_link( $term ); ?>"><h2 class="servicios-title"><?php echo $term->name; ?></h2></a>
			
				<!-- inner loop -->
				<?php
					$term_name = $term->name; 
					$args = array(
						'post_type' => 'product',
						'product_cat' => $term_name
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<?php 
							$currency = get_woocommerce_currency_symbol(); 
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$product =  get_the_ID();
						?>

						<div class="servicios-interna-item">
							<div class="servicios-interna-top">
								<h3 class="servicios-interna-sub"><a class="link-masajes-servicios" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3> 
								<div class="servicios-interna-top-right">
									<div class="servicios-interna-precio">Desde  <span class="custom-prc"><?php echo $currency; echo number_format($price,0)  ?> + IVA </span> </div>
									<!--  -->
								</div>
							</div>
							<div class="servicios-interna-linea"></div>
							<div class="servicios-interna-descripcion"><?php echo the_field('descripcion_thumbnail', $product); ?></div>
						</div>
				<?php	endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>					
			</div>
		<?php endif; ?>
		<!-- end loop -->




		<!-- loop categoria 2 -->
		<?php   
		$term = get_field("categoria_servicio2");
		if( $term ): ?>

			<div class="servicios-interna-cat">

				<a class="servicios-interna-titulo" href="<?php echo get_term_link( $term ); ?>"><h2 class="servicios-title"><?php echo $term->name; ?></h2></a>
			
				<!-- inner loop -->
				<?php
					$term_name = $term->name; 
					$args = array(
						'post_type' => 'product',
						'product_cat' => $term_name
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<?php 
							$currency = get_woocommerce_currency_symbol(); 
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$product =  get_the_ID();
						?>

						<div class="servicios-interna-item">
							<div class="servicios-interna-top">
								<h3 class="servicios-interna-sub"><a class="link-masajes-servicios" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3> 
								<div class="servicios-interna-top-right">
									<div class="servicios-interna-precio">Desde  <span class="custom-prc"><?php echo $currency; echo number_format($price,0)  ?> + IVA </span> </div>
									<!--  -->
								</div>
							</div>
							<div class="servicios-interna-linea"></div>
							<div class="servicios-interna-descripcion"><?php echo the_field('descripcion_thumbnail', $product); ?></div>
						</div>
				<?php	endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>					
			</div>
		<?php endif; ?>
		<!-- end loop -->


		<!-- loop categoria 4 -->
		<?php   
		$term = get_field("categoria_servicio3");
		if( $term ): ?>

			<div class="servicios-interna-cat">

				<a class="servicios-interna-titulo" href="<?php echo get_term_link( $term ); ?>"><h2 class="servicios-title"><?php echo $term->name; ?></h2></a>
			
				<!-- inner loop -->
				<?php
					$term_name = $term->name; 
					$args = array(
						'post_type' => 'product',
						'product_cat' => $term_name
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<?php 
							$currency = get_woocommerce_currency_symbol(); 
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$product =  get_the_ID();
						?>

						<div class="servicios-interna-item">
							<div class="servicios-interna-top">
								<h3 class="servicios-interna-sub"><a class="link-masajes-servicios" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3> 
								<div class="servicios-interna-top-right">
									<div class="servicios-interna-precio">Desde  <span class="custom-prc"><?php echo $currency; echo number_format($price,0)  ?> + IVA </span> </div>
									<!--  -->
								</div>
							</div>
							<div class="servicios-interna-linea"></div>
							<div class="servicios-interna-descripcion"><?php echo the_field('descripcion_thumbnail', $product); ?></div>
						</div>
				<?php	endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>					
			</div>
		<?php endif; ?>
		<!-- end loop -->



		


		<!-- loop categoria 4 -->
		<?php   
		$term = get_field("categoria_servicio4");
		if( $term ): ?>

			<div class="servicios-interna-cat">

				<a class="servicios-interna-titulo" href="<?php echo get_term_link( $term ); ?>"><h2 class="servicios-title"><?php echo $term->name; ?></h2></a>
			
				<!-- inner loop -->
				<?php
					$term_name = $term->name; 
					$args = array(
						'post_type' => 'product',
						'product_cat' => $term_name
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<?php 
							$currency = get_woocommerce_currency_symbol(); 
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$product =  get_the_ID();
						?>

						<div class="servicios-interna-item">
							<div class="servicios-interna-top">
								<h3 class="servicios-interna-sub"><a class="link-masajes-servicios" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3> 
								<div class="servicios-interna-top-right">
									<div class="servicios-interna-precio">Desde  <span class="custom-prc"><?php echo $currency; echo number_format($price,0)  ?> + IVA </span> </div>
									<!--  -->
								</div>
							</div>
							<div class="servicios-interna-linea"></div>
							<div class="servicios-interna-descripcion"><?php echo the_field('descripcion_thumbnail', $product); ?></div>
						</div>
				<?php	endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>					
			</div>
		<?php endif; ?>
		<!-- end loop -->




		<!-- loop categoria 5 -->
		<?php   
		$term = get_field("categoria_servicio5");
		if( $term ): ?>

			<div class="servicios-interna-cat">

				<a class="servicios-interna-titulo" href="<?php echo get_term_link( $term ); ?>"><h2 class="servicios-title"><?php echo $term->name; ?></h2></a>
			
				<!-- inner loop -->
				<?php
					$term_name = $term->name; 
					$args = array(
						'post_type' => 'product',
						'product_cat' => $term_name
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<?php 
							$currency = get_woocommerce_currency_symbol(); 
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$product =  get_the_ID();
						?>

						<div class="servicios-interna-item">
							<div class="servicios-interna-top">
								<h3 class="servicios-interna-sub"><a class="link-masajes-servicios" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3> 
								<div class="servicios-interna-top-right">
									<div class="servicios-interna-precio">Desde  <span class="custom-prc"><?php echo $currency; echo number_format($price,0)  ?> + IVA </span> </div>
									<!--  -->
								</div>
							</div>
							<div class="servicios-interna-linea"></div>
							<div class="servicios-interna-descripcion"><?php echo the_field('descripcion_thumbnail', $product); ?></div>
						</div>
				<?php	endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>					
			</div>
		<?php endif; ?>
		<!-- end loop -->



		<!-- loop categoria 6 -->
		<?php   
		$term = get_field("categoria_servicio6");
		if( $term ): ?>

			<div class="servicios-interna-cat">

				<a class="servicios-interna-titulo" href="<?php echo get_term_link( $term ); ?>"><h2 class="servicios-title"><?php echo $term->name; ?></h2></a>
			
				<!-- inner loop -->
				<?php
					$term_name = $term->name; 
					$args = array(
						'post_type' => 'product',
						'product_cat' => $term_name
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
							
						<?php 
							$currency = get_woocommerce_currency_symbol(); 
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$product =  get_the_ID();
						?>

						<div class="servicios-interna-item">
							<div class="servicios-interna-top">
								<h3 class="servicios-interna-sub"><a class="link-masajes-servicios" href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3> 
								<div class="servicios-interna-top-right">
									<div class="servicios-interna-precio">Desde  <span class="custom-prc"><?php echo $currency; echo number_format($price,0)  ?> + IVA </span> </div>
									<!--  -->
								</div>
							</div>
							<div class="servicios-interna-linea"></div>
							<div class="servicios-interna-descripcion"><?php echo the_field('descripcion_thumbnail', $product); ?></div>
						</div>
				<?php	endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>					
			</div>
		<?php endif; ?>
		<!-- end loop -->
		
	</div>
</div>






<?php get_footer(); ?>








