<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>


  <div class="section1-home">
    <div data-animation="slide" data-nav-spacing="4" data-duration="500" data-infinite="1" class="slider-home w-clearfix w-slider">
      <div class="w-slider-mask">
        <div class="slide-home w-slide">
          <div class="copy-slider w-clearfix">
            <h1 class="heading">CAMISAS A LA MEDIDA</h1>
            <p class="text-slider">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. </p><a href="#" class="btn-transparente w-button">CONOCER MÁS</a></div>
        </div>
        <div class="w-slide"></div>
      </div>
      <div class="slide-nav w-slider-nav w-round"></div>
    </div>
  </div>
  <div class="section2-home">

           


    <div class="product-1-row w-row">
      <div class="column-categoria w-col w-col-4 w-col-stack">
        <div class="categoria">
        <?php   
            
            $term = get_field("categoria1_home");
            $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url(  $thumb_id );

        
            if( $term ): ?>


            <div class="crop w-clearfix">
            
   

            <img src= "<?php echo $image; ?> " srcset="<?php echo $image; ?>, <?php echo $image; ?>, <?php echo $image; ?>" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 33vw" data-w-id="ca8c1084-a272-c941-920d-3e2170ab47e9" class="img-categoria">
            
            
            
            <a href="<?php echo get_term_link( $term ); ?>" class="btn-transparente btn-categora w-button"><?php echo $term->name; ?></a></div>
        
        <?php endif; ?>

          
        </div>
      </div>
      <div class="column-categoria w-col w-col-4 w-col-stack">
        <div class="categoria">


          <div class="crop w-clearfix"><img src="images/promociones.png" srcset="images/promociones-p-500.png 500w, images/promociones.png 560w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 33vw" data-w-id="38edc0f3-ba52-00d0-0592-df8871201cb3" class="img-categoria"><a href="#" class="btn-transparente btn-categora w-button">PROMOCIONES</a></div>
        </div>
      </div>
      <div class="column-categoria w-col w-col-4 w-col-stack">
        <div class="categoria">
          <div class="crop w-clearfix"><img src="images/Mask-Group-6.png" srcset="images/Mask-Group-6-p-500.png 500w, images/Mask-Group-6.png 560w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 33vw" data-w-id="301c5210-dafd-c288-3dde-4c8556b6b540" class="img-categoria"><a href="#" class="btn-transparente btn-categora w-button">BONO DE REGALO</a></div>
        </div>
      </div>
    </div>
    <div class="product-2-row w-row">
      <div class="column-categoria w-col w-col-4 w-col-stack w-col-small-small-stack">
        <div class="categoria">
          <div class="crop w-clearfix"><img src="images/Group-10252x.png" srcset="images/Group-10252x-p-500.png 500w, images/Group-10252x-p-800.png 800w, images/Group-10252x.png 1121w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 33vw" data-w-id="66264c8e-8621-bf13-86d1-875ad88b58cc" class="img-categoria"><a href="#" class="btn-transparente btn-categora w-button">CAMISAS A LA MEDIDA</a></div>
        </div>
      </div>
      <div class="column-categoria w-col w-col-8 w-col-stack w-col-small-small-stack">
        <div class="categoria-beneficio2 w-clearfix">
          <div class="beneficio-cont beneficio-cont-alargado">
            <h3 class="beneficio-title">TELAS IMPORTADAS</h3>
            <p class="p-beneficios p-beneficios2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum</p>
          </div><img src="images/Group-390.png" srcset="images/Group-390-p-500.png 500w, images/Group-390.png 560w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 33vw" class="beneficio-img"></div>
      </div>
    </div>
    <div class="product-2-row w-row">
      <div class="column-categoria w-col w-col-4 w-col-stack w-col-small-small-stack">
        <div class="categoria-beneficio w-clearfix"><img src="images/Group-390.png" srcset="images/Group-390-p-500.png 500w, images/Group-390.png 560w" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 33vw" class="beneficio-img beneficio-img-2">
          <div class="beneficio-cont beneficio-cont-2">
            <h3 class="beneficio-title">TELAS IMPORTADAS</h3>
            <p class="p-beneficios">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum </p>
          </div>
        </div>
      </div>
      <div class="column-4 w-col w-col-8 w-col-stack w-col-small-small-stack">
        <div class="categoria-cta w-clearfix">
          <div class="cta-text">
            <div class="cta-banner-text">!Asesórate con un <br>experto camisero!</div><a href="#" class="round-btn btn-cta-contactar w-button">CONTACTAR</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section3-testimonios">
    <div class="categoria-testimonio testiomonio-banner3">
      <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-testimonio-home w-slider">
        <div class="text-block">TESTIMONIOS</div>
        <div class="w-slider-mask">
          <div class="slide-testimonio slite-testimonio2 w-slide">
            <p class="testimonio-text">&quot;This lamp gives you a directed light that’s good for lighting up tables, bar tops or surfaces where you dine, play games or get creative. It’s easy to place and a favorite among our customers.&quot;</p>
            <h3 class="testimonio-nombre testimonio-nombre2">Andrés Jimenez</h3>
          </div>
          <div class="slide-testimonio slite-testimonio2 w-slide">
            <p class="testimonio-text">&quot;This lamp gives you a directed light that’s good for lighting up tables, bar tops or surfaces where you dine, play games or get creative. It’s easy to place and a favorite among our customers.&quot;</p>
            <h3 class="testimonio-nombre testimonio-nombre2">Andrés Jimenez</h3>
          </div>
        </div>
        <div class="w-slider-arrow-right">
          <div class="icon w-icon-slider-right"></div><img src="images/arrow-white.svg" class="arrow-right arrow-right-testimonio-2"></div>
      </div>
    </div>
  </div>
  <div class="footer">
    <a href="#email-form" class="footer-top w-hidden-main w-inline-block">
      <h3 class="footer-top-txt">Volver Arriba</h3><img src="images/Symbol-42x.png" class="im-arrow-top"></a>
    <div class="container w-container">
      <div class="sm">
        <div class="sm-icon"><a href="#" class="link-sm w-inline-block"><img src="images/Group-1025.png" class="img-sm"></a></div>
        <div class="sm-icon"><a href="#" class="link-sm w-inline-block"><img src="images/Group-1026.png" class="img-sm"></a></div>
        <div class="sm-icon"><a href="#" class="link-sm w-inline-block"><img src="images/Group-1027.png" class="img-sm"></a></div>
      </div>
      <div class="row-footer w-row">
        <div class="column-footer w-col w-col-4 w-col-medium-4 w-col-small-4">
          <div class="footer-column-cont"><a href="ayuda.html" class="footer-1link">AYUDA</a><a href="como-comprar.html" class="footer-1link">¿Cómo Comprar?</a><a href="contacto.html" class="footer-2link">Contacto</a><a href="terminos-y-condiciones.html" class="footer-2link">Términos y condiciones</a><a href="politicas-de-privacidad-y-uso.html" class="footer-2link">Políticas de privacidad y uso</a><a href="preguntas-frecuentes.html" class="footer-2link">Preguntas frecuentes</a></div>
        </div>
        <div class="column-footer w-col w-col-4 w-col-medium-4 w-col-small-4">
          <div class="footer-column-cont"><a href="#" class="footer-1link">CAMISAS</a><a href="site-map.html" class="footer-1link">SITE MAP</a><a href="#" class="footer-1link">DOBLE DOS</a><a href="tiendas-doble-dos.html" class="footer-1link">TIENDAS DOBLE DOS</a></div>
        </div>
        <div class="column-footer w-col w-col-4 w-col-medium-4 w-col-small-4">
          <div class="footer-column-cont">
            <p class="footer-contact-info">Teléfonos : +57(1) 2311836<br> Horarios de Atención :<br> Lunes - Sábado: 9 A.M - 6 P.M</p>
            <div class="copy-right-txt">Doble Dos. Todos los derechos reservados</div>
            <div class="copy-right-txt">Desarrollado por <a target="_blank" href="http://www.cannedhead.com/" class="lin-canned">Canned Head</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>



