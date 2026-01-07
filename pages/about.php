<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<section class="parallax foodfusion-parallax">

  <!-- PAGE TITLE -->
  <div class="heading">
    <h1>About <span>Us</span></h1>
  </div>

  <!-- THIS CREATES SCROLL SPACE -->
  <div class="parallax-spacer"></div>

  <!-- BACKGROUND DEPTH -->
  <div class="parallax__layer parallax__layer--back">
    <div class="bg-gradient"></div>
  </div>

  <!-- MID DEPTH – FLOATING PLATES & FOOD -->
  <div class="parallax__layer parallax__layer--back2">
    <img src="../assets/images/plates/plate1.png" class="floating plate a">
    <img src="../assets/images/plates/plate2.png" class="floating plate b">
    <img src="../assets/images/plates/plate3.png" class="floating plate c">
    <img src="../assets/images/plates/plate4.png" class="floating plate d">

    <img src="../assets/images/food1.png" class="floating food f1">
    <img src="../assets/images/food2.png" class="floating food f2">
  </div>

  <!-- FOREGROUND STORY -->
  <div class="parallax__layer parallax__layer--base">

    <div class="story-flow">

      <!-- PHASE 1 -->
      <section class="story-phase">
        <div class="story-card">
          <h2>Where It <span>Began</span></h2>
          <p>
            FoodFusion was born from shared meals, cultural exchanges,
            and the belief that food tells stories.
          </p>
        </div>

        <div class="story-card">
          <h2>Why We Exist</h2>
          <p>
            To preserve culinary heritage while encouraging creative fusion.
          </p>
        </div>
      </section>

      <!-- PHASE 2 -->
      <section class="story-phase">
        <div class="story-card offset-left">
          <h2>Food Without Borders</h2>
          <p>
            Recipes travel. Cultures blend.
            FoodFusion celebrates how flavors evolve across places and people.
          </p>
        </div>

        <div class="story-card offset-right">
          <h2>Stories From the Community</h2>
          <p>
            Every dish holds a memory — shared by home cooks,
            chefs, and storytellers around the world.
          </p>
        </div>

        <div class="story-card center">
          <h2>The Future of FoodFusion</h2>
          <p>
            A living archive of taste, culture, and creativity —
            built together, one story at a time.
          </p>
        </div>
      </section>

      <!-- COMMUNITY -->
      <section class="story-phase">
        <div class="story-card center community-intro">
          <h2>Our Community</h2>
          <p>
            FoodFusion is shaped by people — home cooks, creators,
            chefs, and culture-keepers from around the world.
          </p>
        </div>

        <div class="community-cards">
          <div class="community-card">
            <img src="../assets/images/community-cook.jpg">
            <span>Shared Recipes</span>
          </div>

          <div class="community-card">
            <img src="../assets/images/cta/food20.jpg">
            <span>Real Stories</span>
          </div>

          <div class="community-card">
            <img src="../assets/images/events/christmas.jpg">
            <span>Connected Cultures</span>
          </div>
        </div>
      </section>

      <!-- TEAM -->
      <section class="story-phase">
        <div class="story-card center team-intro">
          <h2>Meet the Team</h2>
          <p>
            The minds and hearts behind FoodFusion —
            storytellers, designers, and food lovers.
          </p>
        </div>

        <div class="team-cards">
          <div class="team-card">
            <img src="../assets/images/yussef.jpg">
            <h4>Founder</h4>
            <span>Culinary Vision & Culture</span>
          </div>

          <div class="team-card">
            <img src="../assets/images/strip5.jpg">
            <h4>Creative Lead</h4>
            <span>Design & Storytelling</span>
          </div>

          <div class="team-card">
            <img src="../assets/images/amara.jpg">
            <h4>Community Lead</h4>
            <span>People & Engagement</span>
          </div>
        </div>
      </section>

    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
