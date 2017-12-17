<?php 

//add support weecommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//addd custom logo
add_theme_support( 'custom-logo' );



// Styles
function theme_styles() {

    wp_enqueue_style( 'webflow_css', get_template_directory_uri() . '/css/webflow.css' );
    
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Scripts
function theme_js() {

    global $wp_scripts;
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/webflow.js', array( 'jquery' ), '', true );
 
    
}
add_action( 'wp_enqueue_scripts', 'theme_js' );



function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu'       => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );








/**
 * Ensure cart contents update when products are added to the cart via AJAX
 * 
 */
function my_header_add_to_cart_fragment( $fragments ) {
    
       ob_start();
       $count = WC()->cart->cart_contents_count;
       ?><a class="cart-contents link-block-menu-icons w-inline-block w-clearfix" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
       if ( $count > 0 ) {
           ?>
           <div class="cart-contents-count cart-number"><?php echo esc_html( $count ); ?></div><img src="<?php echo get_template_directory_uri(); ?>/images/bag.svg" class="image">
           <?php            
       }
           ?></a><?php
    
       $fragments['a.cart-contents'] = ob_get_clean();
        
       return $fragments;
   }
   add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
   

?>


