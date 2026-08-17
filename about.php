<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us — Maroon 9</title>
  <meta name="description" content="Learn about Maroon 9's mission, history, and values." />

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
    <span class="section-label">Our Story</span>
    <h1 class="page-hero__title" id="page-title">About Maroon 9</h1>
    <p class="page-hero__desc">
      A community-driven organization built on legacy, love, and the transformative power of the arts.
    </p>
  </section>

  <!-- MISSION SECTION -->
  <section class="about" aria-labelledby="mission-title">
    <div class="about__inner">
      <div class="about__image-wrap">
        <img src="images/kidsinblue.avif" alt="Youth participants in Maroon 9 program" class="about__image" />
        <div class="about__image-badge">
          <strong>10+</strong>
          Years of Impact
        </div>
      </div>
      <div>
        <span class="section-label">Our Mission</span>
        <h2 class="section-title section-title--white" id="mission-title">Empowering Youth Through the Arts</h2>
        <p class="section-body">
          Maroon 9 Community Enrichment Organization was founded to provide Fort Worth youth with meaningful creative outlets and academic support. We believe that the arts are not a luxury — they are a lifeline.
        </p>
        <p class="section-body">
          Founded in memory of a loved one lost to Sickle Cell Disease, our organization carries forward a legacy of hope, healing, and advocacy for underserved youth across Tarrant County.
        </p>
        <div class="about__values">
          <div class="about__value">
            <div class="about__value-name">Creativity</div>
            <div class="about__value-desc">Dynamic arts-centered storytelling and expression</div>
          </div>
          <div class="about__value">
            <div class="about__value-name">Empathy</div>
            <div class="about__value-desc">Authentic stories and participant voices at the center</div>
          </div>
          <div class="about__value">
            <div class="about__value-name">Empowerment</div>
            <div class="about__value-desc">Leadership, confidence, and growth opportunities</div>
          </div>
          <div class="about__value">
            <div class="about__value-name">Advocacy</div>
            <div class="about__value-desc">Education and awareness around Sickle Cell Disease</div>
          </div>
        </div>
        <a href="contact.php" class="btn btn-primary">Get Involved</a>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-label="Call to Action">
    <div class="cta-banner__inner">
      <h2 class="cta-banner__title">Join Our Mission</h2>
      <p class="cta-banner__desc">
        Whether you are a parent, educator, sponsor, or community member — there is a place for you in the Maroon 9 family.
      </p>
      <div class="cta-banner__actions">
        <a href="contact.php" class="btn btn-maroon">Contact Us</a>
        <a href="programs.php" class="btn btn-outline">See Our Programs</a>
      </div>
    </div>
  </section>

<?php layout_footer(); ?>

</body>
</html>
