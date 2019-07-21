<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation">
    <ul>
        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
            <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?>
                    <?php 
                        if ($label == 'Dashboard') {
                            $class = "fal fa-tachometer-alt-fast";
                        } elseif ($label == 'Orders') {
                            $class = "fal fa-shopping-basket";
                        } elseif ($label == 'Addresses') {
                            $class = "fal fa-home-lg";
                        } elseif ($label == 'Payment methods') {
                            $class = "fal fa-credit-card-blank";
                        } elseif ($label == 'Account details') {
                            $class = "fal fa-user";
                        } elseif ($label == 'Logout') {
                            $class = "fal fa-sign-out";
                        }
                    ?>

                    <i class="<?php echo $class ?>"></i>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
