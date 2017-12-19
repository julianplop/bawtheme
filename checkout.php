<?php
/*
Template Name: Checkout
*/
?>

<?php get_header('checkout'); ?>

<div class="navbar-checkout"><a href="#" class="navbar-logo w-nav-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/Group-6.svg" class="navbar-logo-img"></a></div>
  <div class="checkout-fondo">
    <div class="checkout-txt-cont">
      <h1 class="checkout-txt">Tailandia<br><span class="checkout-txt-sub">en una experiencia</span></h1>
    </div>
  </div>



 <div class="checkout-cont">
    <div class="checkout-inner">
      <h2 class="checkout-titulo">Checkout</h2>
      <div class="checkout-form w-form">
		
	  




				
				
	  <?php echo do_shortcode('[woocommerce_checkout]'); ?>				





   
        </div>
      </div>
    </div>
  </div>





<?php get_footer('checkout'); ?>








