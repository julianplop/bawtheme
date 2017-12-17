<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Dec 16 2017 21:22:26 GMT+0000 (UTC)  -->
<html data-wf-page="5a26bd87de4eb400019d7bd1" data-wf-site="5a26bd87de4eb400019d7bd0">
<head>
  <meta charset="utf-8">
  <title><?php the_title_attribute(); ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/baw.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Playfair Display:regular,italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

</head>

<body class="body">

  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="fondo w-hidden-medium w-hidden-small w-hidden-tiny"></div>
    <a href="<?php echo get_home_url(); ?>" class="navbar-logo w-nav-brand">

       
    <?php
      
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      
      ?> 


      <img src="<?php echo esc_url( $image[0] ); ?>" class="navbar-logo-img">
    </a>

  

    <nav role="navigation" class="navbar-menu w-nav-menu">
      <div class="navbar-menu-txt">

      <?php
        wp_nav_menu( array(
            'menu'       => 'header-menu',
            'menu_class' => 'navbar-menu w-nav-menu',
            'container'  => 'false'
        ) );
      ?>

        
    
        <!-- <a class="menu-item idioma-link" data-ix="hover-menu-2">
          <div class="navbar-menu-item-idioma-txt">EN</div>


        </a><a href="#" class="navbar-menu-item w-inline-block" data-ix="carrito-open"><img src="images/noun_968248_cc.svg" class="navbar-menu-item-img"></a></div> -->

 

       <!-- <a href="servicios.html" class="navbar-menu-item w-inline-block" >
          <div class="navbar-menu-item-txt">Servicios</div>
          <div class="navbar-dropdown w-hidden-medium w-hidden-small w-hidden-tiny">
            <div class="navbar-dropdpwn-item">Masajes</div>
            <div class="navbar-dropdpwn-item">Rituales Thai</div>
            <div class="navbar-dropdpwn-item">Spa Masajes</div>
            <div class="navbar-dropdpwn-item">Zonas Humedas</div>
            <div class="navbar-dropdpwn-item">Bonos de Regalo</div>
            <div class="navbar-dropdpwn-item ver-todos">Ver todos los servicios</div>
          </div>
      
        <a href="promociones.html" class="navbar-menu-item w-inline-block" data-ix="hover-menu">
          <div class="navbar-menu-item-txt">Promociones</div>
        </a>
        <a href="membresias.html" class="navbar-menu-item w-inline-block" data-ix="hover-menu">
          <div class="navbar-menu-item-txt">Membresías</div>
        </a>
        <a href="prensa.html" class="navbar-menu-item w-inline-block" data-ix="hover-menu">
          <div class="navbar-menu-item-txt">Prensa</div>
        </a>
        <a href="blog.html" class="navbar-menu-item w-inline-block" data-ix="hover-menu">
          <div class="navbar-menu-item-txt">Blog</div>
        </a>
      </div>
      <div class="navbar-menu-icons w-hidden-medium w-hidden-small w-hidden-tiny">
        <a class="navbar-menu-item w-inline-block" data-ix="contacto-open">
          <div class="navbar-menu-item-txt">Contacto</div>
        </a>
        <a class="navbar-menu-item w-inline-block" data-ix="hover-menu-2">
          <div class="navbar-menu-item-idioma-txt">EN</div>
        </a><a href="#" class="navbar-menu-item w-inline-block" data-ix="carrito-open"><img src="images/noun_968248_cc.svg" class="navbar-menu-item-img"></a></div> -->
    </nav>
    <div class="navbar-menu-button w-nav-button">
      <div class="navbar-menu-button-icon w-icon-nav-menu"></div>
    </div>
    <div class="modal-carrito-contacto" data-ix="cerrar-modal">
      <div class="modal-inner">
        <div class="modal-cont">
          <div class="modal-contacto"><img src="images/icono-cerrar-negro.svg" class="modal-cerrar" data-ix="cerrar-modal">
            <div class="modal-contacto-hola">Hola,<br>déjanos tus datos, tu mensaje<br>y hablaremos lo mas pronto posible</div>
            <div class="w-form">
              <form id="wf-form-Contacto" name="wf-form-Contacto" data-name="Contacto"><input type="text" class="form-input w-input" maxlength="256" name="Nombre" data-name="Nombre" placeholder="Tu nombre" id="Nombre" required=""><input type="email" class="form-input w-input" maxlength="256" name="Correo" data-name="Correo" placeholder="Correo Electrónico" id="Correo" required=""><input type="text" class="form-input w-input" maxlength="256" name="Telefono" data-name="Telefono" placeholder="Teléfono" id="Telefono" required=""><textarea id="Mensaje" name="Mensaje" placeholder="Tu mensaje" maxlength="5000" data-name="Mensaje" required="" class="form-input w-input"></textarea>
                <div class="form-checkbox w-checkbox"><input type="checkbox" id="Terminos y Condiciones" name="Terminos-y-Condiciones" data-name="Terminos y Condiciones" required="" class="form-checkbox-icono w-checkbox-input"><label for="Terminos y Condiciones" class="form-checkbox-txt w-form-label">Acepto los términos y condiciones</label></div><input type="submit" value="Enviar" data-wait="Por favor espera..." class="boton-enviar w-button"></form>
              <div class="success-message w-form-done">
                <div>¡Gracias! Hemos recibido tu mensaje</div>
              </div>
              <div class="error-message w-form-fail">
                <div>Lo sentimos, hay un error en tu mensaje</div>
              </div>
            </div>
            <div class="modal-contacto-texto"><a href="preguntas-frecuentes.html" class="modal-contacto-texto-link">Preguntas Frecuentes</a> / No se hacen reservas por mail</div>
            <div class="modal-contacto-iconos"><a href="#" class="modal-contacto-iconos-item"></a><a href="#" class="modal-contacto-iconos-item"></a><a href="#" class="modal-contacto-iconos-item"></a><a href="#" class="modal-contacto-iconos-item"></a></div>
          </div>
          <div class="modal-carrito"><img src="images/icono-cerrar-negro.svg" class="modal-cerrar" data-ix="cerrar-modal">
            <div class="modal-carrito-titulo">Tu pedido</div>
            <div class="servicios-interna-item modal">
              <div class="servicios-interna-top">
                <h3 class="servicios-interna-sub">Pasión</h3>
                <div class="servicios-interna-top-right modal">
                  <div class="servicios-interna-comprar-numero modal">
                    <div class="servicios-interna-comprar-mas"></div>
                    <div class="servicios-interna-comprar-mas numero">1</div>
                    <div class="servicios-interna-comprar-mas"></div>
                  </div>
                  <div class="servicios-interna-comprar-cont modal">
                    <div class="servicios-interna-comprar-mas"></div>
                    <div class="servicios-interna-comprar-carrito"></div>
                  </div>
                </div>
              </div>
              <div class="servicios-interna-linea"></div>
              <div class="servicios-interna-bottom">
                <div class="servicios-interna-descripcion">Especificaciones del producto</div>
                <div class="servicios-interna-precio">$190.000 COP</div>
              </div>
            </div>
            <div class="servicios-interna-item modal">
              <div class="servicios-interna-top">
                <h3 class="servicios-interna-sub">Pasión</h3>
                <div class="servicios-interna-top-right modal">
                  <div class="servicios-interna-comprar-numero modal">
                    <div class="servicios-interna-comprar-mas"></div>
                    <div class="servicios-interna-comprar-mas numero">1</div>
                    <div class="servicios-interna-comprar-mas"></div>
                  </div>
                  <div class="servicios-interna-comprar-cont modal">
                    <div class="servicios-interna-comprar-mas"></div>
                    <div class="servicios-interna-comprar-carrito"></div>
                  </div>
                </div>
              </div>
              <div class="servicios-interna-linea"></div>
              <div class="servicios-interna-bottom">
                <div class="servicios-interna-descripcion">Especificaciones del producto</div>
                <div class="servicios-interna-precio">$190.000 COP</div>
              </div>
            </div>
            <div class="modal-carrito-subtotal">
              <div class="modal-carrito-subtotal-texto">Subtotal</div>
              <div class="modal-carrito-subtotal-texto">$500.000 COP</div>
            </div>
            <div class="modal-carrito-comprar-cont">
              <div class="checkbox-cont">
                <div class="checkbox-icono modal">
                  <div class="checkbox-icono-txt"></div>
                </div>
                <div class="checkbox-texto modal">Acepto los términos y condiciones</div>
              </div>
              <a class="boton-comprar w-inline-block">
                <div class="boton-comprar-txt">Ir al checkout</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="iconbar">
    <div class="iconbar-icon"><img src="images/sobre-amarillo.svg" class="iconbar-icon-img"></div>
    <div class="iconbar-icon" data-ix="contacto-open">
      <div class="navbar-menu-item-idioma-txt">EN</div>
    </div>
    <div class="iconbar-icon" data-ix="carrito-open"><img src="images/noun_968248_cc.svg" class="iconbar-icon-img"></div>
  </div>
  <div data-w-id="dc866dbc-654e-7558-25e6-13952ae8daf3" class="load-home"><img src="images/Logo-boutique.svg" data-w-id="d09e384d-ef59-5130-c820-c50364817315" class="logo-intro"></div>
  