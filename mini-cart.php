//add mini cart 
function cwm_custom_mini_cart() { 
    global $woocommerce;
    
    ?>
    <div class="cwm-mini-cart-wrapper">
   <div class="cwm-mini-cart-inner">
        <div class="item-count" >
            <span class="cart-items-count">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="cwm-item-count-ajax" >
             <?php echo WC()->cart->get_cart_contents_count();?> 
            </span>
            
            </span>
            <span>Items</span>
        </div>
        <div class="cwm-total-amount">
           <?php echo get_woocommerce_currency_symbol(); ?>
           <span class="cwm-ajax-total">
            <?php echo $amount2 = floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );?>
          </span>
        </div>
        <div class="cwm-my-order">
        <a class="cwm-checkout" href="<?php echo $woocommerce->cart->get_checkout_url()?>"> My Order</a>
        </div>
    </div>
 </div>

<?php }
add_shortcode( 'cwm-custom-mini-cart', 'cwm_custom_mini_cart' );

// show the code whatever you want by echo 
example echo do_shortcode('[cwm-custom-mini-cart]');
