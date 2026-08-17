<?php
/**
 * layout.php
 * Consolidated layout partials for Maroon 9.
 * Usage:
 *   include 'includes/layout.php';
 *   layout_header();   // renders action bar + nav
 *   layout_footer();   // renders footer
 */

function layout_header() {
  $current = basename($_SERVER['PHP_SELF']);
  $active = function($page) use ($current) {
    return $current === $page ? ' class="active"' : '';
  };
?>
  <!-- ACTION BAR -->
  <div class="action-bar">
    <span class="action-bar__tagline">Transforming Lives Through The Arts.</span>
    <div class="action-bar__links">
      <a href="https://www.kidsactingwithpurpose.org/" target="_blank" rel="noopener">KAWP</a>
      <a href="contact.php">Contact</a>
      <a href="https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=CKCFB8KP8SXSU&ssrt=1775522398647" target="_blank" rel="noopener" class="highlight">Donate</a>
    </div>
  </div>

  <!-- PRIMARY NAVIGATION -->
  <nav class="nav" role="navigation" aria-label="Main navigation">
    <div class="nav__inner">

      <a href="index.php" class="nav__logo" aria-label="Maroon 9 Home">
        <img src="images/logo.avif" alt="Maroon 9 Logo" />
      </a>

      <ul class="nav__links" role="list">
        <li><a href="about.php"<?= $active('about.php') ?>>About</a></li>
        <li><a href="programs.php"<?= $active('programs.php') ?>>Programs</a></li>
        <li><a href="impact.php"<?= $active('impact.php') ?>>Impact</a></li>
        <li><a href="events.php"<?= $active('events.php') ?>>Events</a></li>
      </ul>

      <div class="nav__hamburger" id="hamburger" role="button" aria-label="Open menu" tabindex="0">
        <span></span><span></span><span></span>
      </div>

    </div>
    <div class="nav__mobile-menu" id="mobileMenu" role="menu">
      <a href="about.php">About</a>
      <a href="programs.php">Programs</a>
      <a href="impact.php">Impact</a>
      <a href="events.php">Events</a>
      <a href="contact.php">Contact</a>
    </div>
  </nav>
<?php
}

function layout_footer() {
?>
  <!-- FOOTER -->
  <footer class="footer" role="contentinfo">
    <div class="footer__inner">
      <div class="footer__top">

        <div>
          <div class="footer__brand-name">Maroon 9</div>
          <p class="footer__brand-desc">
            Empowering Fort Worth youth through creative arts, mentorship, and sickle cell disease advocacy since 2014.
          </p>
        </div>

        <div>
          <div class="footer__col-title">Navigate</div>
          <ul class="footer__col-links">
            <li><a href="about.php">About Us</a></li>
            <li><a href="programs.php">Programs</a></li>
            <li><a href="impact.php">Impact</a></li>
            <li><a href="events.php">Events</a></li>
          </ul>
        </div>

        <div>
          <div class="footer__col-title">Programs</div>
          <ul class="footer__col-links">
            <li><a href="programs.php#kawp">KAWP</a></li>
            <li><a href="programs.php#page-to-stage">Page to Stage</a></li>
            <li><a href="programs.php#sickle-cell-stars">Sickle Cell Stars</a></li>
          </ul>
        </div>

        <div>
          <div class="footer__col-title">Contact</div>
          <ul class="footer__col-links">
            <li><a href="contact.php">Get in Touch</a></li>
            <li><a href="contact.php">Volunteer</a></li>
            <li><a href="contact.php">Donate</a></li>
          </ul>
        </div>

      </div>
      <div class="footer__bottom">
        <span>&copy; <?php echo date('Y'); ?> Maroon 9 Community Enrichment Organization. All rights reserved.</span>
      </div>
      <p class="footer__disclaimer">
        This website was created as a class project for CTEC 4350 — Web Communication Design and Development III, University of Texas at Arlington. It is intended for educational purposes only.
      </p>
    </div>
  </footer>
<?php
}
?>
