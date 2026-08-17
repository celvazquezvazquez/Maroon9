<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Maroon 9 Community Enrichment Organization</title>
  <meta name="description" content="Maroon 9 empowers youth in Fort Worth through creative arts and sickle cell advocacy." />

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

  <!-- HERO SECTION -->
  <section class="hero" aria-label="Hero">
    <div class="hero__bg" role="img" aria-label="Youth performing on stage"></div>
    <div class="hero__content">
      <span class="hero__tag">Fort Worth, TX &middot; Youth Arts &amp; Advocacy</span>
      <h1 class="hero__title">Art That Opens Doors.</h1>
      <p class="hero__desc">
        Maroon 9 empowers youth through education, mentorship, and real opportunities to grow.
      </p>
      <div class="hero__actions">
        <a href="programs.php" class="btn btn-primary">Explore Programs</a>
        <a href="contact.php" class="btn btn-outline">Change a Life Today</a>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section class="about" id="about" aria-labelledby="about-title">
    <div class="about__inner">

      <div class="about__image-wrap">
        <img src="images/kidsinblue.avif" alt="Maroon 9 youth participants" class="about__image" />
        <div class="about__image-badge">
          <strong>10+</strong>
          Years of Impact
        </div>
      </div>

      <div>
        <span class="section-label">Who We Are</span>
        <h2 class="section-title section-title--white" id="about-title">About Maroon 9</h2>
        <p class="section-body">
          Across Tarrant County, youth face challenges that can shape their entire futures. Maroon 9 Community Enrichment Organization uses the power of theatre arts to give young people the space to express themselves, grow academically, and develop into leaders.
        </p>
        <p class="section-body">
          Founded in memory of a loved one lost to Sickle Cell Disease, our work is rooted in legacy, community healing, and the belief that every young person deserves to be seen, heard, and empowered.
        </p>
        <div class="about__values">
          <div class="about__value">
            <div class="about__value-name">Creativity</div>
            <div class="about__value-desc">Arts-centered storytelling and expression</div>
          </div>
          <div class="about__value">
            <div class="about__value-name">Empathy</div>
            <div class="about__value-desc">Authentic stories and participant voices</div>
          </div>
          <div class="about__value">
            <div class="about__value-name">Empowerment</div>
            <div class="about__value-desc">Leadership and growth opportunities</div>
          </div>
          <div class="about__value">
            <div class="about__value-name">Prevention</div>
            <div class="about__value-desc">Advocacy around Sickle Cell Disease</div>
          </div>
        </div>
        <a href="about.php" class="btn btn-primary">Learn More About Us</a>
      </div>

    </div>
  </section>

  <!-- PROGRAMS SECTION -->
  <section class="programs" id="programs" aria-labelledby="programs-title">
    <div class="programs__inner">

      <div class="programs__header">
        <div>
          <span class="section-label">What We Offer</span>
          <h2 class="section-title" id="programs-title">Our Programs</h2>
        </div>
        <a href="programs.php" class="btn btn-maroon">View All Programs</a>
      </div>

      <div class="programs__grid">

        <article class="program-card">
          <img src="images/kidsinblue.avif" alt="In-School Programs — youth in classroom theatre workshop" class="program-card__image" />
          <div class="program-card__body">
            <div class="program-card__tag">In-School &bull; Free</div>
            <h3 class="program-card__title">In-School Programs</h3>
            <p class="program-card__desc">
              We bring theatre arts directly into classrooms through acting, singing, dancing, and media arts — curriculum-aligned and led by experienced teaching artists who help students build creativity, confidence, and communication skills.
            </p>
            <a href="programs.php#in-school" class="program-card__link">Learn More</a>
          </div>
        </article>

        <article class="program-card">
          <img src="images/Courage and Resilience- Harriet.avif" alt="KAWP Youth Performance Group — Harriet production" class="program-card__image" />
          <div class="program-card__body">
            <div class="program-card__tag">Performance &bull; Free</div>
            <h3 class="program-card__title">KAWP Youth Performance Group</h3>
            <p class="program-card__desc">
              An ensemble for youth ages 9–17 to develop acting, singing, and dancing skills through original productions that celebrate cultural heritage, resilience, and community — building confidence and collaboration with every performance.
            </p>
            <a href="programs.php#kawp" class="program-card__link">Learn More</a>
          </div>
        </article>

        <article class="program-card">
          <img src="images/Empowering Young Creators.webp" alt="Private Lessons and Group Classes" class="program-card__image" />
          <div class="program-card__body">
            <div class="program-card__tag">Lessons &bull; Free</div>
            <h3 class="program-card__title">Private Lessons &amp; Group Classes</h3>
            <p class="program-card__desc">
              One-on-one and group instruction in acting, singing, dancing, and media arts — tailored to each student's goals. Private sessions offer focused coaching, while group classes build teamwork, performance experience, and creative community.
            </p>
            <a href="programs.php#lessons" class="program-card__link">Learn More</a>
          </div>
        </article>

        <article class="program-card">
          <img src="images/When Culture Meets Cowtown.avif" alt="Educator Development — When Culture Meets Cowtown" class="program-card__image" />
          <div class="program-card__body">
            <div class="program-card__tag">Educators &bull; Free</div>
            <h3 class="program-card__title">Educator Development</h3>
            <p class="program-card__desc">
              Interactive workshops that equip teachers with theatre-based strategies to boost student engagement, foster social-emotional learning, and create inclusive classrooms where every student feels empowered to participate.
            </p>
            <a href="programs.php#educator" class="program-card__link">Learn More</a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- IMPACT SECTION -->
  <section class="impact" id="impact" aria-labelledby="impact-title">
    <div class="impact__inner">

      <div>
        <span class="section-label">Our Numbers</span>
        <h2 class="section-title" id="impact-title">Making a Real Difference</h2>
        <p class="section-body">
          Every performance, every rehearsal, and every mentorship session adds up. Here's a look at the measurable impact Maroon 9 has made in the Fort Worth community.
        </p>
        <div class="impact__stats">
          <div class="impact__stat">
            <div class="impact__stat-number">500+</div>
            <div class="impact__stat-label">Youth Served</div>
          </div>
          <div class="impact__stat">
            <div class="impact__stat-number">10+</div>
            <div class="impact__stat-label">Years Active</div>
          </div>
          <div class="impact__stat">
            <div class="impact__stat-number">3</div>
            <div class="impact__stat-label">Core Programs</div>
          </div>
          <div class="impact__stat">
            <div class="impact__stat-number">100%</div>
            <div class="impact__stat-label">Community Driven</div>
          </div>
        </div>
      </div>

      <div>
        <img src="images/landingpage.avif" alt="Maroon 9 youth on stage" class="impact__image" />
      </div>

    </div>
  </section>

  <!-- CTA BANNER -->
  <section class="cta-banner" aria-label="Call to Action">
    <div class="cta-banner__inner">
      <h2 class="cta-banner__title">Ready to Change a Life?</h2>
      <p class="cta-banner__desc">
        Whether you want to enroll a young person, volunteer, or donate — your support makes a direct impact in the lives of Fort Worth youth.
      </p>
      <div class="cta-banner__actions">
        <a href="contact.php" class="btn btn-maroon">Get Involved</a>
        <a href="programs.php" class="btn btn-outline">Explore Programs</a>
      </div>
    </div>
  </section>

<?php layout_footer(); ?>

</body>
</html>
