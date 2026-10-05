<?php
/**
 * The footer template for Risk Verifier theme
 *
 * @package RiskVerifier
 */
?>
  <!-- Site Footer -->
  <footer class="site-footer">
    <img src="https://riskverifier.com/wp-content/uploads/2024/06/tb8-shape-10.png" alt="" class="footer-decor-shape">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: About & Offices -->
        <div class="footer-col">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="https://riskverifier.com/wp-content/uploads/2024/06/Logo-of-Risk-2-1-scaled-e1788217669765.png" 
                 onerror="this.onerror=null; this.src='https://riskverifier.com/wp-content/uploads/2022/09/Logo-of-Risk-final-new2-scaled.png';"
                 alt="<?php bloginfo( 'name' ); ?>" class="footer-logo-img">
          </a>
          <h4 class="regional-offices-title">Regional Offices</h4>
          <p class="regional-offices-text">Texas | Ottawa | Reading (UK) | Islamabad</p>
          <img src="https://riskverifier.com/wp-content/uploads/elementor/thumbs/pbsa_fullname-color_transparent-scaled-rsrhi3cj628iq6cz4hf8qqv1jm1e2n5jna2epo7fpi.png" 
               alt="PBSA Professional Background Screening Association" class="accreditation-badge">
        </div>

        <!-- Col 2: Services -->
        <div class="footer-col">
          <h3 class="footer-col-title">Our Services</h3>
          <ul class="footer-menu">
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Criminal Records Check</a></li>
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Civil Records Search</a></li>
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Credit &amp; Finance Report</a></li>
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Vital Records Verification</a></li>
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Identity &amp; Credentials</a></li>
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> See More Services</a></li>
          </ul>
        </div>

        <!-- Col 3: Useful Links -->
        <div class="footer-col">
          <h3 class="footer-col-title">Useful Links</h3>
          <ul class="footer-menu">
            <li><a href="#home"><i class="fa-solid fa-angle-right"></i> Home</a></li>
            <li><a href="#services"><i class="fa-solid fa-angle-right"></i> Services</a></li>
            <li><a href="#how-it-works"><i class="fa-solid fa-angle-right"></i> How its Works</a></li>
            <li><a href="#about-us"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
            <li><a href="#contact-us"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>
          </ul>
        </div>

        <!-- Col 4: Newsletter -->
        <div class="footer-col newsletter-box">
          <h3 class="footer-col-title">Newsletter</h3>
          <p>Subscribe Our Newsletter For Getting Quick Updates and news.</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Enter Your Email" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe Now</button>
          </form>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p>Copyright &copy; <?php echo date( 'Y' ); ?> Risk Verifier. All Rights Reserved.</p>
        <div class="social-links">
          <a href="https://www.facebook.com" class="social-link" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.twitter.com" class="social-link" target="_blank" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.youtube.com" class="social-link" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.linkedin.com" class="social-link" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating Scroll To Top Button -->
  <a href="#home" class="scroll-to-top" id="scrollToTop" aria-label="Scroll to top">
    <i class="fa-solid fa-arrow-up"></i>
  </a>

  <?php wp_footer(); ?>
</body>
</html>
