<?php
/**
 * Header Template
 * 
 * @package Travel_Landing
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="header__container container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo">
            <?php bloginfo( 'name' ); ?>
        </a>
        
        <?php travel_landing_get_nav_menu(); ?>
    </div>
</header>
