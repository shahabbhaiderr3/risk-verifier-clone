<?php
/**
 * The main template file
 *
 * @package RiskVerifier
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php
  if ( is_front_page() ) {
      get_template_part( 'front-page' );
  } else {
      if ( have_posts() ) :
          while ( have_posts() ) :
              the_post();
              ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?> style="padding: 4rem 1.5rem;">
                <header class="entry-header" style="margin-bottom: 2rem;">
                  <h1 class="entry-title sec-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8;">
                  <?php the_content(); ?>
                </div>
              </article>
              <?php
          endwhile;
      else :
          ?>
          <div class="container" style="padding: 5rem 1.5rem; text-align: center;">
            <h2 class="sec-title"><?php esc_html_e( 'Nothing Found', 'riskverifier' ); ?></h2>
            <p><?php esc_html_e( 'It seems we cannot find what you are looking for.', 'riskverifier' ); ?></p>
          </div>
          <?php
      endif;
  }
  ?>
</main>

<?php
get_footer();
