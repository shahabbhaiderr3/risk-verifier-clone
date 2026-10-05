<?php
/**
 * The header template for Risk Verifier theme
 *
 * @package RiskVerifier
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <ul class="top-contact-list">
        <li>
          <i class="fa-solid fa-phone"></i>
          <a href="tel:+25632542598">(+256) 3254 2598</a>
        </li>
        <li>
          <i class="fa-solid fa-location-dot"></i>
          <span>121 King St. Melbourne VIC 3000, Australia</span>
        </li>
        <li>
          <i class="fa-solid fa-envelope"></i>
          <a href="mailto:info@riskverifier.com">info@riskverifier.com</a>
        </li>
      </ul>
      <div class="top-social-wrap">
        <span class="top-social-title">Follow Us On:</span>
        <div class="social-links">
          <a href="https://www.facebook.com" class="social-link" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.twitter.com" class="social-link" target="_blank" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.youtube.com" class="social-link" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.linkedin.com" class="social-link" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation Header -->
  <header class="main-header">
    <div class="container navbar">
      <!-- Brand Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" aria-label="<?php bloginfo( 'name' ); ?>">
        <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <img src="https://riskverifier.com/wp-content/uploads/2022/09/Logo-of-Risk-final-new2-scaled.png" 
                 onerror="this.onerror=null; this.src='https://riskverifier.com/wp-content/uploads/2024/06/Logo-of-Risk-2-1-scaled-e1788217669765.png';"
                 alt="<?php bloginfo( 'name' ); ?>" class="brand-logo-img">
        <?php endif; ?>
      </a>

      <!-- Desktop Nav Links -->
      <nav class="nav-menu" aria-label="Main Navigation">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'      => 'nav-links',
                'fallback_cb'    => false,
            ) );
            ?>
        <?php else : ?>
            <ul class="nav-links">
              <li><a href="<?php echo esc_url( home_url( '/#home' ) ); ?>" class="nav-link active">Home</a></li>
              <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="nav-link">Services</a></li>
              <li><a href="<?php echo esc_url( home_url( '/#how-it-works' ) ); ?>" class="nav-link">How it works</a></li>
              <li><a href="<?php echo esc_url( home_url( '/#about-us' ) ); ?>" class="nav-link">About Us</a></li>
              <li><a href="<?php echo esc_url( home_url( '/#contact-us' ) ); ?>" class="nav-link">Contact Us</a></li>
            </ul>
        <?php endif; ?>
      </nav>

      <!-- Nav Action Button -->
      <div class="nav-actions">
        <a href="<?php echo esc_url( home_url( '/#contact-us' ) ); ?>" class="vs-btn vs-btn-outline">
          Login / Signup <i class="fa-solid fa-arrow-right"></i>
        </a>
        <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle navigation menu">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Overlay -->
  <div class="mobile-nav-drawer" id="mobileDrawer">
    <div class="mobile-nav-panel">
      <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close navigation menu">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <div style="margin-bottom: 2rem;">
        <img src="https://riskverifier.com/wp-content/uploads/2022/09/Logo-of-Risk-final-new2-scaled.png" 
             alt="Risk Verifier" style="height: 40px; width: auto;">
      </div>
      <ul class="mobile-nav-list">
        <li><a href="<?php echo esc_url( home_url( '/#home' ) ); ?>" class="mobile-nav-link active">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="mobile-nav-link">Services</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#how-it-works' ) ); ?>" class="mobile-nav-link">How it works</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#about-us' ) ); ?>" class="mobile-nav-link">About Us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/#contact-us' ) ); ?>" class="mobile-nav-link">Contact Us</a></li>
      </ul>
      <div style="margin-top: 2.5rem;">
        <a href="<?php echo esc_url( home_url( '/#contact-us' ) ); ?>" class="vs-btn" style="width: 100%;">
          Get Started <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
