<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>



  
<div data-w-id="dc866dbc-654e-7558-25e6-13952ae8daf3" class="load-home"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo-boutique.svg"  class="logo-intro"></div>

<div class="modal-promo-cont">
    <div class="modal-inner promo">
      <div class="modal-promo-cont-inner">
        <div class="modal-promo"><img src="<?php echo get_template_directory_uri(); ?>/images/icono-cerrar-negro.svg" class="modal-cerrar promo" data-ix="cerrar-modal-promo">
          <div class="modal-promo-img" style="background-image: url(<?php echo the_field('promo_imagen') ?>)"></div>
          <div class="modal-promo-txt">
            <div class="modal-promo-inner">
              <div class="modal-promo-titulo-cont">
                <h1 class="modal-promo-titulo"><?php echo the_field('promo_titulo') ?></h1>
                <div class="modal-promo-sub"><?php echo the_field('promo_subtitulo') ?></div>
              </div>
              <?php echo the_field('promo_texto') ?>

              <a class="boton-amarillo promo" href="<?php echo the_field('promo_link') ?>">
                  
                    <div class="boton-amarillo-txt">Ver Más</div>
               
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="banner">
<div class="banner-titulo">
  <div class="banner-titulo-cont">
    <h1 class="banner-titulo-txt"><?php echo pll__('Un viaje a<br><span class="banner-titulo-txt-big">Tailandia</span>'); ?></h1>
  </div>
</div><a href="#Servicios" class="banner-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/flecha-abajo-amarilla.svg" class="banner-flecha-img"></a></div>
<div id="Servicios" class="servicios">
<div class="servicios-cont">



<?php   
            
  $term = get_field("categoria1_home");
  $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url(  $thumb_id );

  if( $term ): ?>

    <div data-w-id="f0e5d1fc-d2e9-6443-facc-df07b8aa0174" class="servicios-item">
      <div data-w-id="89272be3-590c-b3f2-0e2a-a39b20f7e30f" style="-webkit-transform:translateX(300PX) translateY(0) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-moz-transform:translateX(300PX) translateY(0) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);-ms-transform:translateX(300PX) translateY(0) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);transform:translateX(300PX) translateY(0) translateZ(0) scaleX(1) scaleY(1) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skewX(0) skewY(0);opacity:0%" class="servicios-item-txt">
        <h2 class="servicios-item-txt-titulo"><?php echo $term->name; ?></h2>
        <p class="serviciositem-txt-p"><?php echo $term->description; ?></p><a href="<?php echo get_term_link( $term ); ?>" class="servicios-item-img-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-1.svg" class="image"></a></div>
      <div class="servicios-item-img">
        <div class="servicios-item-img-cont" >
          <div data-w-id="a5e80598-bbe6-e2e2-f3f4-455d0b0d9bf2" style="width:0%" class="servicios-item-img-fondo"></div>
          <div data-w-id="9ed91e4b-8981-6691-7f54-eabe920ab9f0" style="width:0%; background-image: url(' <?php echo $image; ?> ')" class="servicios-item-img-foto _1" ></div>
        </div>
      </div>
    </div>

  <?php endif; ?>



  <?php   
            
  $term = get_field("categoria2_home");
  $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url(  $thumb_id );

  if( $term ): ?>

    <div data-w-id="0b615359-526a-1d88-d71f-acda4b04aa90" class="servicios-item odd">
        <div class="servicios-item-txt odd">
          <h2 class="servicios-item-txt-titulo odd"><?php echo $term->name; ?></h2>
          <p class="serviciositem-txt-p odd"><?php echo $term->description; ?></p><a href="<?php echo get_term_link( $term ); ?>" class="servicios-item-img-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-1.svg" class="image"></a></div>
        <div class="servicios-item-img odd">
          <div class="servicios-item-img-cont odd">
            <div class="servicios-item-img-fondo odd"></div>
            <div class="servicios-item-img-foto _2" style=" background-image: url(' <?php echo $image; ?> ')"></div>
          </div>
        </div>
      </div>
    

  <?php endif; ?>



  
  <?php   
            
  $term = get_field("categoria3_home");
  $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url(  $thumb_id );

  if( $term ): ?>


<div data-w-id="d8007c57-8127-c063-44b9-eda65c395023" class="servicios-item">
        <div class="servicios-item-txt">
          <h2 class="servicios-item-txt-titulo"><?php echo $term->name; ?></h2>
          <p class="serviciositem-txt-p"><?php echo $term->description; ?></p><a href="<?php echo get_term_link( $term ); ?>" class="servicios-item-img-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-1.svg" class="image"></a></div>
        <div class="servicios-item-img">
          <div class="servicios-item-img-cont">
            <div class="servicios-item-img-fondo"></div>
            <div style="background-image: url(' <?php echo $image; ?> ')" class="servicios-item-img-foto _3"></div>
          </div>
        </div>
      </div>

   

  <?php endif; ?>




  <?php   
            
  $term = get_field("categoria4_home");
  $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url(  $thumb_id );

  if( $term ): ?>

    <div data-w-id="96f93461-d8f2-1cef-ae05-2847fddc7774" class="servicios-item odd">
        <div class="servicios-item-txt odd">
          <h2 class="servicios-item-txt-titulo odd"><?php echo $term->name; ?></h2>
          <p class="serviciositem-txt-p odd"><?php echo $term->description; ?></p><a href="<?php echo get_term_link( $term ); ?>" class="servicios-item-img-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-1.svg" class="image"></a></div>
        <div class="servicios-item-img odd">
          <div class="servicios-item-img-cont odd">
            <div class="servicios-item-img-fondo odd"></div>
            <div style="background-image: url(' <?php echo $image; ?> ')" class="servicios-item-img-foto _4"></div>
          </div>
        </div>
      </div>
   

  <?php endif; ?>





  <?php   
            
  $term = get_field("categoria5_home");
  $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url(  $thumb_id );

  if( $term ): ?>

   <div data-w-id="9118e704-52c1-d736-a53a-37652458f05c" class="servicios-item">
        <div class="servicios-item-txt">
          <h2 class="servicios-item-txt-titulo"><?php echo $term->name; ?></h2>
          <p class="serviciositem-txt-p"><?php echo $term->description; ?></p><a href="<?php echo get_term_link( $term ); ?>" class="servicios-item-img-flecha w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-1.svg" class="image"></a></div>
        <div class="servicios-item-img">
          <div class="servicios-item-img-cont">
            <div class="servicios-item-img-fondo"></div>
            <div style="background-image: url(' <?php echo $image; ?> ')" class="servicios-item-img-foto _5"></div>
          </div>
        </div>
      </div>

  <?php endif; ?>


</div>
</div>
<div class="beneficios">
<div class="beneficios-cont">
  <h2 class="beneficios-titulo"><?php the_field('beneficios_home'); ?></h2>
  <p class="beneficios-txt"><?php the_field('beneficios_parrafo_home'); ?></p>
</div>
</div>







<?php get_footer(); ?>








