<?php
/**
 * Footer Template
 * 
 * @package Travel_Landing
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo">
                <?php bloginfo( 'name' ); ?>
            </a>
            <p class="footer__description">
                Discover amazing destinations and create unforgettable memories with our travel services.
            </p>
        </div>
        
        <div class="footer__column">
            <h4 class="footer__title">Quick Links</h4>
            <ul class="footer__links">
                <li><a href="#destinations" class="footer__link">Destinations</a></li>
                <li><a href="#booking" class="footer__link">Book Now</a></li>
                <li><a href="#about" class="footer__link">About Us</a></li>
                <li><a href="#contact" class="footer__link">Contact</a></li>
            </ul>
        </div>
        
        <div class="footer__column">
            <h4 class="footer__title">Support</h4>
            <ul class="footer__links">
                <li><a href="#" class="footer__link">Help Center</a></li>
                <li><a href="#" class="footer__link">Terms of Service</a></li>
                <li><a href="#" class="footer__link">Privacy Policy</a></li>
                <li><a href="#" class="footer__link">FAQs</a></li>
            </ul>
        </div>
        
        <div class="footer__column">
            <h4 class="footer__title">Contact</h4>
            <ul class="footer__links">
                <li><a href="mailto:info@travelagency.com" class="footer__link">info@travelagency.com</a></li>
                <li><a href="tel:+1234567890" class="footer__link">+1 (234) 567-890</a></li>
                <li class="footer__link">123 Travel Street<br>Adventure City, AC 12345</li>
            </ul>
        </div>
    </div>
    
    <div class="footer__bottom container">
        <p class="footer__copyright">
            &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
        </p>
        <div class="footer__payment">
            <span class="footer__payment-icon">VISA</span>
            <span class="footer__payment-icon">MC</span>
            <span class="footer__payment-icon">AMEX</span>
            <span class="footer__payment-icon">PP</span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
