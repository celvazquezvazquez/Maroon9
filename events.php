<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Events — Maroon 9</title>
  <meta name="description" content="Upcoming Maroon 9 performances, workshops, and community events." />

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
    <span class="section-label">Mark Your Calendar</span>
    <h1 class="page-hero__title" id="page-title">Upcoming Events</h1>
    <p class="page-hero__desc">
      From performances to workshops — here is what Maroon 9 has coming up in the Fort Worth community.
    </p>
  </section>

  <!-- EVENTS GRID -->
  <section class="content-section" aria-labelledby="events-title">
    <div class="content-section__inner">
      <span class="section-label">2025 Schedule</span>
      <h2 class="section-title" id="events-title">Events &amp; Performances</h2>

      <div class="events__grid">

        <article class="event-card">
          <div class="event-card__date-bar">
            <div class="event-card__day">14</div>
            <div class="event-card__month-year">June<br />2025</div>
          </div>
          <div class="event-card__body">
            <h3 class="event-card__title">KAWP Spring Showcase</h3>
            <p class="event-card__location">Tarrant County Performing Arts Center, Fort Worth</p>
            <a href="contact.php" class="event-card__cta">Reserve a Seat</a>
          </div>
        </article>

        <article class="event-card">
          <div class="event-card__date-bar">
            <div class="event-card__day">22</div>
            <div class="event-card__month-year">July<br />2025</div>
          </div>
          <div class="event-card__body">
            <h3 class="event-card__title">Sickle Cell Awareness Walk</h3>
            <p class="event-card__location">Panther Island Pavilion, Fort Worth</p>
            <a href="contact.php" class="event-card__cta">Register to Walk</a>
          </div>
        </article>

        <article class="event-card">
          <div class="event-card__date-bar">
            <div class="event-card__day">9</div>
            <div class="event-card__month-year">Aug<br />2025</div>
          </div>
          <div class="event-card__body">
            <h3 class="event-card__title">Page to Stage Reading Festival</h3>
            <p class="event-card__location">Fort Worth Public Library, Main Branch</p>
            <a href="contact.php" class="event-card__cta">Learn More</a>
          </div>
        </article>

        <article class="event-card">
          <div class="event-card__date-bar">
            <div class="event-card__day">18</div>
            <div class="event-card__month-year">Sep<br />2025</div>
          </div>
          <div class="event-card__body">
            <h3 class="event-card__title">KAWP Fall Enrollment Day</h3>
            <p class="event-card__location">Maroon 9 Headquarters, Fort Worth</p>
            <a href="contact.php" class="event-card__cta">Sign Up</a>
          </div>
        </article>

        <article class="event-card">
          <div class="event-card__date-bar">
            <div class="event-card__day">4</div>
            <div class="event-card__month-year">Oct<br />2025</div>
          </div>
          <div class="event-card__body">
            <h3 class="event-card__title">Community Arts Night</h3>
            <p class="event-card__location">Diamond Hill Community Center, Fort Worth</p>
            <a href="contact.php" class="event-card__cta">RSVP</a>
          </div>
        </article>

        <article class="event-card">
          <div class="event-card__date-bar">
            <div class="event-card__day">15</div>
            <div class="event-card__month-year">Nov<br />2025</div>
          </div>
          <div class="event-card__body">
            <h3 class="event-card__title">Annual Gala &amp; Fundraiser</h3>
            <p class="event-card__location">Fort Worth Convention Center</p>
            <a href="contact.php" class="event-card__cta">Buy Tickets</a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-label="Call to Action">
    <div class="cta-banner__inner">
      <h2 class="cta-banner__title">Want to Perform or Volunteer?</h2>
      <p class="cta-banner__desc">
        We are always looking for community support. Reach out to learn how you can get involved at our next event.
      </p>
      <div class="cta-banner__actions">
        <a href="contact.php" class="btn btn-maroon">Contact Us</a>
        <a href="programs.php" class="btn btn-outline">Explore Programs</a>
      </div>
    </div>
  </section>

<?php layout_footer(); ?>

</body>
</html>
