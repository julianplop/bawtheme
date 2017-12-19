<?php 

//add support weecommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );


}






//woocommerce 

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);








remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);



//product order info

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);



remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);


//checkout
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
add_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_coupon_form', 15 );






//addd custom logo
add_theme_support( 'custom-logo' );



// Styles
function theme_styles() {

    //wp_enqueue_style( 'webflow_css', get_template_directory_uri() . '/css/webflow.css' );
    
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


// Scripts
function theme_js() {

    global $wp_scripts;
    //wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/webflow.js', array( 'jquery' ), '', true );
 
    
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

//declarar menus

function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu'       => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );



//oculatar barra admin
show_admin_bar( false );







 //add global fields
 //Custom Theme Settings
 add_action('admin_menu', 'add_gcf_interface');
 
 function add_gcf_interface() {
     add_options_page('Global Custom Fields', 'Global Custom Fields', '8', 'functions', 'editglobalcustomfields');
 }
 
 function editglobalcustomfields() {
     ?>
     <div class='wrap'>
     <h2>Global Custom Fields</h2>

     <h3>Links Social Media</h3>
     <form method="post" action="options.php">
     <?php wp_nonce_field('update-options') ?>
 
     <p><strong>Facebook</strong><br />
     <input type="text" name="facebook" size="45" value="<?php echo get_option('facebook'); ?>" /></p>

     <p><strong>Instagram</strong><br />
     <input type="text" name="instagram" size="45" value="<?php echo get_option('instagram'); ?>" /></p>

     <p><strong>Twitter</strong><br />
     <input type="text" name="twitter" size="45" value="<?php echo get_option('twitter'); ?>" /></p>

     <p><input type="submit" name="Submit" value="Update Options" /></p>
 
     <input type="hidden" name="action" value="update" />
     <input type="hidden" name="page_options" value="facebook,instagram,twitter" />
 
     </form>
     </div>
     <?php
    }


    //minicart


    // Add Shortcode
    function custom_mini_cart() {
        
            echo '<a href="#" class="dropdown-back" data-toggle="dropdown"> ';
                echo '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
                echo '<div class="basket-item-count" style="display: inline;">';
                    echo '<span class="cart-items-count count">';
                        echo WC()->cart->get_cart_contents_count();
                    echo '</span>';
                echo '</div>';
            echo '</a>';
            echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
                    echo '<li> <div class="widget_shopping_cart_content">';
                            woocommerce_mini_cart();
                        echo '</div></li></ul>';
        
        }
        add_shortcode( '[custom-mini-cart]', 'custom_mini_cart' );




        //declare widget


        /**
         * Register our sidebars and widgetized areas.
         *
         */
        function arphabet_widgets_init() {
        
            register_sidebar( array(
                'name'          => 'MiniCart',
                'id'            => 'mini-cart',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<h2 class="hidden">',
                'after_title'   => '</h2>',
            ) );
        
        }
        add_action( 'widgets_init', 'arphabet_widgets_init' );
        

        //Setting a default value for a radio button field
        
        function custom_override_checkout_fields ( $fields ) {
            $fields['order']['beneficiario']['default'] = 'One';
            return $fields;
        } // End custom_override_checkout_fields()
        
        add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );



























/**
 * Ensure cart contents update when products are added to the cart via AJAX
 * 
 */
function my_header_add_to_cart_fragment( $fragments ) {
    
       ob_start();
       $count = WC()->cart->cart_contents_count;
       ?><a class="iconbar-icon" data-ix="carrito-open" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
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






// function iconic_variable_price_format( $price, $product ) {
    
//        $prefix = sprintf('%s: ', __('Desde', 'iconic'));
    
//        $min_price_regular = $product->get_variation_regular_price( 'min', true );
//        $min_price_sale    = $product->get_variation_sale_price( 'min', true );
//        $max_price = $product->get_variation_price( 'max', true );
//        $min_price = $product->get_variation_price( 'min', true );
    
//        $price = ( $min_price_sale == $min_price_regular ) ?
//            wc_price( $min_price_regular ) :
//            '<del>' . wc_price( $min_price_regular ) . '</del>' . '<ins>' . wc_price( $min_price_sale ) . '</ins>';
    
//        return ( $min_price == $max_price ) ?
//            $price :
//            sprintf('%s%s', $prefix, $price);
    
//    }
    
//    add_filter( 'woocommerce_variable_sale_price_html', 'iconic_variable_price_format', 10, 2 );
//    add_filter( 'woocommerce_variable_price_html', 'iconic_variable_price_format', 10, 2 );




// Hook in
add_filter( 'woocommerce_checkout_fields' , 'my_theme_custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function my_theme_custom_override_checkout_fields( $fields ) {
     foreach ($fields as $fieldset) {
         foreach ($fieldset as $field) {
             $field['class'] = array('form-input');
         }
     }
     return $fields;
}

  

?>
        




