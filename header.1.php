<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Dec 14 2017 19:46:59 GMT+0000 (UTC)  -->
<html data-wf-page="59d6d550a7327a00016aa463" data-wf-site="59d6d550a7327a00016aa462">
<head>
  <meta charset="utf-8">
  <title><?php the_title_attribute(); ?></title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/dobledos.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo get_template_directory_uri(); ?>/https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>


<style>
  .dropfown-pregunta-toggle {
  	    white-space: inherit !important;
  }
  @media (min-width: 1500px) {
		.left-nav-group {
            position: relative; 
            right: -15%;
        }
  }
  @media (min-width: 1800px) {
        .left-nav-group {
            position: relative;
            right: -32%;
        }
  }
  @media (max-width: 1280px) {
        .nav-menu{
            display:none;
        }
        .menu-mobile{
        display:block;
        }
  }
</style>
  <style>
@media (min-width: 1800px) {
.product-1-row, .product-2-row{
height:580px;
}
}
@media (max-width: 1024px) {
.product-1-row, .product-2-row{
height:280px;
}
}
@media (max-width: 768px) {
.product-1-row, .product-2-row{
width:100%;
height:auto;
}
}
</style>


<body class="bod-dobledos">
  <div class="header w-clearfix">
    <div data-collapse="medium" data-animation="default" data-duration="400" data-doc-height="1" class="nav-desktop-dobledos w-nav">
      <div class="logo-nav-cont"><a href="<?php echo get_home_url(); ?>" class="brand w-nav-brand">
      
      <?php
      
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      
      ?> 
      
      <img src="<?php echo esc_url( $image[0] ); ?>" class="image-2"></a></div>
      <nav role="navigation" class="nav-menu w-hidden-medium w-hidden-small w-hidden-tiny w-nav-menu">
        <div data-delay="0" data-hover="1" class="w-dropdown">
          <div class="nav-link w-dropdown-toggle">
            <div class="w-icon-dropdown-toggle"></div>
            <div><a href="camisas.html" class="link-dropdown-nav">CAMISAS</a></div>
          </div>
          <nav class="dropdown-list-navbar w-dropdown-list"><a href="#" class="dropdown-link-navbar w-dropdown-link">Formal</a><a href="#" class="dropdown-link-navbar w-dropdown-link">CASUAL</a><a href="#" class="dropdown-link-navbar w-dropdown-link">verano</a><a href="#" class="dropdown-link-navbar w-dropdown-link">etiqueta</a></nav>
        </div><a href="camisa-a-la-medida.html" class="nav-link w-nav-link">CAMISA A LA MEDIDA</a><a href="camisas.html" class="nav-link w-nav-link">DESCUENTOS</a><a href="#" class="nav-link w-nav-link">BONOS DE REGALO</a><a href="blog.html" class="nav-link w-nav-link">BLOG</a><a href="doble-dos.html" class="nav-link w-nav-link">DOBLE DOS</a><a href="contacto.html" class="nav-link w-nav-link">CONTACTO</a></nav>
      <div class="menu-mobile w-nav-button">
        <div class="ham-cont"><img src="images/ic_menu_24px2x.png" class="hamburguer"></div>
      </div>
      <div class="login w-clearfix">
        <a href="#" class="link-block-menu-icons w-hidden-tiny w-inline-block">
          <img src="images/ic_search_24px.svg" class="icon-nav"></a><a href="iniciar-sesion.html" class="link-block-menu-icons w-hidden-tiny w-inline-block">
          <img src="images/avatar.svg" class="icon-nav">
        </a>

        <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
            $count = WC()->cart->cart_contents_count;
            ?><a class="cart-contents link-block-menu-icons w-inline-block w-clearfix " href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php 
            if ( $count > 0 ) {
                ?>
                <div class="cart-contents-count cart-number"><?php echo esc_html( $count ); ?></div><img src="<?php echo get_template_directory_uri(); ?>/images/bag.svg" class="image">
                <?php
            }
                ?></a>
        
        <?php } ?>

        
      
          

      </div>
    </div>
  </div>
  <a href="#" class="cta-home-link w-inline-block w-clearfix">
    <div class="cta-home">
      <div class="cta-home-cont w-clearfix">
        <div class="txt-cta-home">Por tu compra en Septiembre recibe 50% en Diciembre.</div><img src="images/percentage.png" class="descuento-icon"><img src="images/Group-1014.png" data-ix="close-cta" class="cta-close-icon"></div>
    </div>
  </a>