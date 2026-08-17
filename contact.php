<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact — Maroon 9</title>
  <meta name="description" content="Get in touch with Maroon 9 to volunteer, donate, or enroll a youth in our programs." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&family=Playfair+Display:ital,wght@1,400&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/styles.css" />
  <script language="JavaScript" type="text/javascript" src="js/main.js"></script>
</head>
<body>

<?php
  include 'includes/layout.php';
  layout_header();
?>

  <!-- PAGE HERO -->
  <section class="page-hero" aria-labelledby="page-title">
    <span class="section-label">Get in Touch</span>
    <h1 class="page-hero__title" id="page-title">Contact Us</h1>
    <p class="page-hero__desc">
      Whether you want to enroll, volunteer, donate, or partner with us — we would love to hear from you.
    </p>
  </section>

  <!-- CONTACT SECTION -->
  <section class="content-section" aria-labelledby="contact-title">
    <div class="content-section__inner">
      <div class="contact-grid">

        <!-- Contact Info -->
        <div>
          <span class="section-label">Reach Out</span>
          <h2 class="section-title" id="contact-title">Let's Connect</h2>

          <div class="contact-info__item">
            <div class="contact-info__label">Email</div>
            <div class="contact-info__value">info@maroon9org.com</div>
          </div>

          <div class="contact-info__item">
            <div class="contact-info__label">Location</div>
            <div class="contact-info__value">Fort Worth, Texas</div>
          </div>

          <div class="contact-info__item">
            <div class="contact-info__label">Programs</div>
            <div class="contact-info__value">KAWP &bull; Page to Stage &bull; Sickle Cell Stars</div>
          </div>

          <div class="contact-info__item">
            <div class="contact-info__label">How You Can Help</div>
            <div class="contact-info__value">Enroll a Youth &bull; Volunteer &bull; Donate &bull; Sponsor</div>
          </div>
        </div>

        <!-- Contact Form -->
        <div>
          <form id="contactForm" action="#" method="post">
            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" id="fullName" name="fullName" placeholder="Your full name" required />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="your@email.com" required />
            </div>
            <div class="form-group">
              <label for="reason">Reason for Contact</label>
              <select id="reason" name="reason">
                <option value="">Select one...</option>
                <option value="enroll">Enroll a Youth</option>
                <option value="volunteer">Volunteer</option>
                <option value="donate">Donate</option>
                <option value="sponsor">Become a Sponsor</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell us how we can help..."></textarea>
            </div>
            <button type="submit" class="btn btn-maroon">Send Message</button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-label="Call to Action">
    <div class="cta-banner__inner">
      <h2 class="cta-banner__title">Every Dollar Makes a Difference</h2>
      <p class="cta-banner__desc">
        Your donation funds program equipment, mentors, event venues, and direct support for youth participants.
      </p>
      <div class="cta-banner__actions">
        <a href="programs.php" class="btn btn-maroon">See Our Programs</a>
        <a href="impact.php" class="btn btn-outline">See Our Impact</a>
      </div>
    </div>
  </section>

<?php layout_footer(); ?>

</body>
</html>
