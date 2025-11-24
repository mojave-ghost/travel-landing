<?php
/**
 * Main Template File
 * 
 * @package Travel_Landing
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="hero__container container">
        <div class="hero__content">
            <h1 class="hero__title">Travel safely and live a new and full life</h1>
            <p class="hero__description">
                Explore breathtaking destinations around the world with our expertly curated travel packages. 
                Your adventure starts here.
            </p>
            <div class="hero__cta">
                <a href="#booking" class="btn btn--primary">Book Now</a>
            </div>
        </div>
        
        <div class="hero__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-traveler.png" 
                 alt="Happy traveler with backpack" 
                 width="782" 
                 height="772">
        </div>
    </div>
</section>

<!-- Features Bar -->
<section class="features">
    <div class="features__grid container">
        <div class="feature">
            <div class="feature__icon">💰</div>
            <h3 class="feature__title">No Hidden Fees</h3>
            <p class="feature__text">Transparent pricing with no surprises</p>
        </div>
        
        <div class="feature">
            <div class="feature__icon">✅</div>
            <h3 class="feature__title">Best Price Guarantee</h3>
            <p class="feature__text">We match or beat any competitor price</p>
        </div>
        
        <div class="feature">
            <div class="feature__icon">🌍</div>
            <h3 class="feature__title">Global Coverage</h3>
            <p class="feature__text">150+ destinations worldwide</p>
        </div>
        
        <div class="feature">
            <div class="feature__icon">🛡️</div>
            <h3 class="feature__title">Safe & Secure</h3>
            <p class="feature__text">Your safety is our top priority</p>
        </div>
    </div>
</section>

<!-- Top Destinations -->
<section id="destinations" class="destinations section">
    <div class="container">
        <div class="destinations__header">
            <h2 class="destinations__title">Top Destinations</h2>
            <p>Discover the world's most amazing places</p>
        </div>
        
        <div class="destinations__grid">
            <article class="destination-card">
                <div class="destination-card__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rome-colosseum.png" 
                         alt="Rome Colosseum" 
                         width="474" 
                         height="639">
                </div>
                <div class="destination-card__content">
                    <h3 class="destination-card__title">Rome, Italy</h3>
                    <p class="destination-card__location">🏛️ Historic Landmarks</p>
                    <p class="destination-card__price">From $1,299</p>
                    <a href="#booking" class="btn btn--primary">Book Now</a>
                </div>
            </article>
            
            <article class="destination-card">
                <div class="destination-card__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/architecture.png" 
                         alt="Beautiful Architecture" 
                         width="474" 
                         height="639">
                </div>
                <div class="destination-card__content">
                    <h3 class="destination-card__title">Barcelona, Spain</h3>
                    <p class="destination-card__location">🏗️ Architectural Wonders</p>
                    <p class="destination-card__price">From $999</p>
                    <a href="#booking" class="btn btn--primary">Book Now</a>
                </div>
            </article>
            
            <article class="destination-card">
                <div class="destination-card__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coastal-town.png" 
                         alt="Coastal Town" 
                         width="474" 
                         height="639">
                </div>
                <div class="destination-card__content">
                    <h3 class="destination-card__title">Santorini, Greece</h3>
                    <p class="destination-card__location">🌊 Coastal Paradise</p>
                    <p class="destination-card__price">From $1,499</p>
                    <a href="#booking" class="btn btn--primary">Book Now</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section id="booking" class="booking section section--gray">
    <div class="booking__container container">
        <div class="booking__content">
            <h2 class="booking__title">Book now and trip a perfect Vacay</h2>
            <p>Start planning your dream vacation today. Our expert team is ready to help you create unforgettable memories.</p>
            
            <div class="booking__features">
                <div class="booking__feature">
                    <span class="booking__feature-icon">✓</span>
                    <div>
                        <strong>Easy Booking Process</strong>
                        <p>Simple 3-step booking system</p>
                    </div>
                </div>
                
                <div class="booking__feature">
                    <span class="booking__feature-icon">✓</span>
                    <div>
                        <strong>24/7 Customer Support</strong>
                        <p>We're here whenever you need us</p>
                    </div>
                </div>
                
                <div class="booking__feature">
                    <span class="booking__feature-icon">✓</span>
                    <div>
                        <strong>Flexible Cancellation</strong>
                        <p>Free cancellation up to 48 hours</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="booking__form">
            <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                <input type="hidden" name="action" value="travel_booking">
                <?php wp_nonce_field( 'travel_booking_nonce' ); ?>
                
                <div class="form__group">
                    <label for="destination" class="form__label">Destination</label>
                    <select id="destination" name="destination" class="form__select" required>
                        <option value="">Select a destination</option>
                        <option value="rome">Rome, Italy</option>
                        <option value="barcelona">Barcelona, Spain</option>
                        <option value="santorini">Santorini, Greece</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form__group">
                    <label for="checkin" class="form__label">Check-in Date</label>
                    <input type="date" id="checkin" name="checkin" class="form__input" required>
                </div>
                
                <div class="form__group">
                    <label for="checkout" class="form__label">Check-out Date</label>
                    <input type="date" id="checkout" name="checkout" class="form__input" required>
                </div>
                
                <div class="form__group">
                    <label for="guests" class="form__label">Number of Guests</label>
                    <select id="guests" name="guests" class="form__select" required>
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                        <option value="5+">5+ Guests</option>
                    </select>
                </div>
                
                <div class="form__group">
                    <label for="name" class="form__label">Full Name</label>
                    <input type="text" id="name" name="name" class="form__input" required>
                </div>
                
                <div class="form__group">
                    <label for="email" class="form__label">Email Address</label>
                    <input type="email" id="email" name="email" class="form__input" required>
                </div>
                
                <button type="submit" class="form__submit">Book Your Trip</button>
            </form>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section id="about" class="why-choose section">
    <div class="why-choose__container container">
        <div class="why-choose__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-choose-us.png" 
                 alt="Happy travelers exploring" 
                 width="321" 
                 height="161">
        </div>
        
        <div class="why-choose__content">
            <h2 class="why-choose__title">Why Choose Us?</h2>
            <p>We make your travel dreams come true with exceptional service and unforgettable experiences.</p>
            
            <div class="why-choose__list">
                <div class="why-choose__item">
                    <span class="why-choose__icon">⭐</span>
                    <div class="why-choose__item-content">
                        <h4>Expert Travel Guides</h4>
                        <p>Professional guides with deep local knowledge</p>
                    </div>
                </div>
                
                <div class="why-choose__item">
                    <span class="why-choose__icon">💎</span>
                    <div class="why-choose__item-content">
                        <h4>Curated Experiences</h4>
                        <p>Hand-picked destinations and activities</p>
                    </div>
                </div>
                
                <div class="why-choose__item">
                    <span class="why-choose__icon">🎯</span>
                    <div class="why-choose__item-content">
                        <h4>Personalized Service</h4>
                        <p>Tailored trips to match your preferences</p>
                    </div>
                </div>
                
                <div class="why-choose__item">
                    <span class="why-choose__icon">🌟</span>
                    <div class="why-choose__item-content">
                        <h4>10+ Years Experience</h4>
                        <p>Trusted by thousands of happy travelers</p>
                    </div>
                </div>
            </div>
            
            <a href="#booking" class="btn btn--primary">Start Your Journey</a>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="newsletter">
    <div class="newsletter__container container">
        <h2 class="newsletter__title">Subscribe to Our Newsletter</h2>
        <p class="newsletter__description">
            Get exclusive travel deals, destination guides, and insider tips delivered to your inbox.
        </p>
        
        <form class="newsletter__form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="travel_newsletter">
            <?php wp_nonce_field( 'travel_newsletter_nonce' ); ?>
            
            <input type="email" 
                   name="newsletter_email" 
                   class="newsletter__input" 
                   placeholder="Enter your email address" 
                   required>
            <button type="submit" class="newsletter__submit">Subscribe</button>
        </form>
    </div>
</section>

<?php
get_footer();
