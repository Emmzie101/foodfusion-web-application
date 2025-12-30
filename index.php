<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>




<body>

<!-- JOIN US MODAL -->
<div class="join-modal" id="joinModal">

<div class="join-overlay" onclick="closeJoin()"></div>


  <div class="join-card">
    <button class="join-close" onclick="closeJoin()">×</button>

    <h2>Join Food Fusion</h2>
    <p>Be part of a community where food tells stories.</p>

    <form method="POST" action="/foodfusion/auth/register.php" class="join-form">

      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="text" name="last_name" placeholder="Last Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>

      <button type="submit">Create Account</button>

    </form>
  </div>

</div>

<section class="community-highlight">

  <div class="community-inner">

    <!-- LEFT: TEXT -->
    <div class="community-text">
      <h2>
        Cooked by the <span>community</span>.<br>
        Powered by <span>stories</span>.
      </h2>

      <p>
        Food Fusion is more than recipes. It’s a shared space where
        cultures, memories, and traditions are passed from one kitchen
        to another.
      </p>

      <?php if (isset($_SESSION['user_id'])): ?>
        <a href="share-recipe.php" class="btn-primary">
          Share Your Recipe
        </a>
      <?php else: ?>
        <a href="/foodfusion/auth/register.php" class="btn-primary">
          Join Us!
        </a>
      <?php endif; ?>
    </div>

    <!-- RIGHT: FLOATING CARDS -->
    <div class="community-cards">

      <div class="floating-card card-1">
        <img src="assets/images/yussef-food.jpg" alt="Community Recipe">
        <div class="card-meta">
          <img src="assets/images/yussef.jpg" alt="User">
          <span>Youssef</span>
        </div>
      </div>

      <div class="floating-card card-2">
        <img src="assets/images/amara-food.jpg" alt="Community Recipe">
        <div class="card-meta">
          <img src="assets/images/amara.jpg" alt="User">
          <span>Amara</span>
        </div>
      </div>

      <div class="floating-card card-3">
        <img src="assets/images/lucia-food.jpg" alt="Community Recipe">
        <div class="card-meta">
          <img src="assets/images/lucia.jpg" alt="User">
          <span>Lucia</span>
        </div>
      </div>

    </div>

  </div>

</section>



<!-- Parallax transition -->
<section class="parallax-transition">
  <h2 class="transition-text">Explore the experience</h2>
</section>


<section class="feature-strip reveal-section">
    <img src="assets/images/plate-small 1.png" class="floating-plate plate-1">
<img src="assets/images/plate-small 2.png" class="floating-plate plate-2">



  <div class="feature-card">
    <img src="assets/images/many-meals.jpg" alt="">
    <h3>Recipe Collection</h3>
    <p>Discover curated dishes from around the world.</p>
  </div>

  <div class="feature-card">
    <img src="assets/images/Recipes-Journal-Bundle.jpg" alt="">
    <h3>Community Cookbook</h3>
    <p>Recipes shared by real people, real cultures.</p>
  </div>

  <div class="feature-card">
    <img src="assets/images/community-cook.jpg" alt="">
    <h3>Learn the Craft</h3>
    <p>Culinary and educational resources.</p>
  </div>

</section>

<section class="film-strip">

  <div class="film-track">
    <img src="assets/images/strip1.jpg" alt="">
    <img src="assets/images/strip2.jpg" alt="">
    <img src="assets/images/strip3.jpg" alt="">
    <img src="assets/images/strip4.jpg" alt="">
    <img src="assets/images/strip5.jpg" alt="">
    <img src="assets/images/strip6.jpg" alt="">
    <img src="assets/images/strip7.jpg" alt="">
    <img src="assets/images/strip8.jpg" alt="">
    <img src="assets/images/strip9.jpg" alt="">
    <img src="assets/images/strip10.jpg" alt="">
  </div>

</section>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="learning-resources">

  <div class="learning-inner">

    <header class="learning-header">
      <h2>Learn. Explore. Grow.</h2>
      <p>
        At FoodFusion, our core <b>mission</b> is simple.
        You understand the craft, the culture, and the science behind food.
      </p>
    </header>

    <div class="resources-grid">

      <article class="resource-card">
        <img src="assets/images/culinary.png" alt="">
        <h3>Culinary Resources</h3>
        <p>
          Techniques, traditions, and guides to help you refine your cooking skills.
        </p>
        <div class="resourc-ta">
  <a href="culinary.php" class="learn-btn">
    Learn more →
  </a>
</div>
      </article>

      <article class="resource-card">
        <img src="assets/images/education.png" alt="">
        <h3>Educational Resources</h3>
        <p>
          Learn the cultural, historical, and nutritional foundations of food.
        </p>
        <div class="resourc-ta">
  <a href="educational.php" class="learn-btn">
    Learn more →
  </a>
</div>
      </article>

      <article class="resource-card">
        <img src="assets/images/kitchen.png" alt="">
        <h3>Kitchen Guides</h3>
        <p>
          Practical tools, tips, and workflows for confident cooking.
        </p>
        <div class="resourc-ta">
  <a href="recipes.php" class="learn-btn">
    Learn more →
  </a>
</div>
      </article>

    </div>

  </div>

</section>

<section class="newsfeed-section">

  <div class="newsfeed-header">
    <h2>From the Kitchen</h2>
    <p>Featured recipes, trends, and stories shaping the culinary world.</p>
  </div>

  <div class="newsfeed-grid">

    <!-- News Card 1 -->
    <article class="news-card">

  <div class="news-image">
    <img src="assets/images/news/jollof.jpg" alt="Jollof Rice">
    <div class="image-overlay"></div>
  </div>

  <div class="news-content">
    <span class="news-tag">Featured Recipe</span>
    <h3>Jollof Rice: A Cultural Icon</h3>
    <p>A deep dive into West Africa’s most celebrated dish.</p>
  </div>

</article>


    <!-- News Card 2 -->
    <article class="news-card">
      
    <div class="news-image">
    <img src="assets/images/news/plant-based.jpg" alt="Plant-based food">
    <div class="image-overlay"></div>
  </div>
      
      <div class="news-content">
        <span class="news-tag">Culinary Trend</span>
        <h3>The Rise of Plant-Based Cuisine</h3>
        <p>Why sustainable eating is shaping modern kitchens.</p>
      </div>
    </article>


    <!-- News Card 3 -->
    <article class="news-card">

    <div class="news-image">
    <img src="assets/images/news/community.jpg" alt="Community cooking">
    <div class="image-overlay"></div>
  </div>
      
      <div class="news-content">
        <span class="news-tag">Community</span>
        <h3>Recipes Shared by Real People</h3>
        <p>How shared stories are building a global food community.</p>
      </div>
    </article>

  </div>
  <div class="newsfeed-cta">
  <a href="community.php" class="newsfeed-btn">
    Explore the Community →
  </a>
</div>


</section>

<section class="events-section">

  <div class="events-header">
    <h2>Upcoming Cooking Events</h2>
    <p>Workshops, live sessions, and culinary experiences you don’t want to miss.</p>
  </div>

  <div class="events-carousel">

    <button class="carousel-btn prev" aria-label="Previous event">
      ‹
    </button>

    <div class="events-track">

      <!-- Event Card 1 -->
      <article class="event-card">
        <img src="assets/images/events/jollof-workshop.jpg" alt="Jollof Workshop">
        <div class="event-info">
          <span class="event-date">Aug 24</span>
          <h3>Jollof Rice Masterclass</h3>
          <p>Learn the secrets behind the perfect pot of jollof.</p>
        </div>
      </article>

      <!-- Event Card 2 -->
      <article class="event-card">
        <img src="assets/images/events/street-food.jpg" alt="Street Food Event">
        <div class="event-info">
          <span class="event-date">Sep 02</span>
          <h3>Global Street Food Night</h3>
          <p>A celebration of street food from around the world.</p>
        </div>
      </article>

      <!-- Event Card 3 -->
      <article class="event-card">
        <img src="assets/images/events/plant-b.jpg" alt="Plant-based Cooking">
        <div class="event-info">
          <span class="event-date">Sep 15</span>
          <h3>Plant-Based Cooking Lab</h3>
          <p>Explore creative and sustainable plant-based dishes.</p>
        </div>
      </article>

       <!-- Event Card 4 -->
      <article class="event-card">
        <img src="assets/images/events/mom.jpg" alt="Mom's session">
        <div class="event-info">
          <span class="event-date">Sep 29</span>
          <h3>Mom's Cooking Class</h3>
          <p>Learn traditional recipes from the comfort of home.</p>
        </div>
      </article>

      <!-- Event Card 5 -->
      <article class="event-card">
        <img src="assets/images/events/chef.jpg" alt="A day with chef Youssef">
        <div class="event-info">
          <span class="event-date">Nov 12</span>
          <h3>A day with Chef Youssef</h3>
          <p>Come spend your Saturday with star Chef Youssef Umar.</p>
        </div>
      </article>

      <!-- Event Card 6 -->
      <article class="event-card">
        <img src="assets/images/events/christmas.jpg" alt="Christmas Dinner">
        <div class="event-info">
          <span class="event-date">Dec 23</span>
          <h3>Jingle Bells & Crumbs</h3>
          <p>Join the holiday cheer at our annual Christmas community dinner!</p>
        </div>
      </article>

    </div>

    <button class="carousel-btn next" aria-label="Next event">
      ›
    </button>

  </div>

</section>

<section class="final-cta">

  <!-- Scrolling Image Album -->
  <div class="cta-album">

    <div class="album-row row-left">
  <img src="assets/images/cta/food1.jpg" alt="">
  <img src="assets/images/cta/food2.jpg" alt="">
  <img src="assets/images/cta/food3.jpg" alt="">
  <img src="assets/images/cta/food4.jpg" alt="">
  <img src="assets/images/cta/food5.jpg" alt="">

      <?php for ($i = 1; $i <= 8; $i++): ?>
        <img src="assets/images/cta/food<?= $i ?>.jpg" alt="">
      <?php endfor; ?>
    </div>

    <div class="album-row row-right">
      <?php for ($i = 9; $i <= 16; $i++): ?>
        <img src="assets/images/cta/food<?= $i ?>.jpg" alt="">
      <?php endfor; ?>
    </div>

    <div class="album-row row-left">
      <?php for ($i = 17; $i <= 24; $i++): ?>
        <img src="assets/images/cta/food<?= $i ?>.jpg" alt="">
      <?php endfor; ?>
    </div>

  </div>

  <!-- Dark Overlay -->
  <div class="cta-overlay"></div>

  <!-- CTA Content -->
  <div class="cta-content">
    <h2>
      Join the <span>FoodFusion</span> experience.
    </h2>
    <p>Explore. Learn. Share.</p>

    <a href="/foodfusion/pages/register.php" class="cta-button">
      Get Started →
    </a>
  </div>

</section>

<!-- Note: This was the initial hero poster. it has been switched with the new one -->
   <section class="hero-poster">
    <div class="hero-noise"></div>

  <!-- Background repeated text -->
  <div class="hero-text-outline">
    FOOD FUSION
  </div> 

  <!-- Main solid title -->
  <h1 class="hero-title">
    FOOD<span>f</span>USION
  </h1>

  <!-- 3D Food Image -->
  <div class="hero-object">
    <img src="assets/images/main_pic_i_guess.png" alt="Food Fusion Dish">
  </div>

  
<div class="hero-caption">
  <span class="caption-line"></span>
  <p>Where culture, creativity, and cuisine collide</p>
</div>


</section> 






<div class="cookie-banner" id="cookieBanner">
  <p>
    We use cookies to improve your experience and analyze site traffic.
    <a href="privacy.php">Privacy Policy</a>
  </p>
  <button onclick="acceptCookies()">Accept</button>
</div>


</body>

<?php include 'includes/footer.php'; ?>


<script>
    // Parallax scroll effect
  window.addEventListener('scroll', () => {
    const text = document.querySelector('.transition-text');
    const scrollY = window.scrollY;

    text.style.transform = `translateY(${40 - scrollY * 0.08}px)`;
  });
</script>

<script>
  const revealSection = document.querySelector('.reveal-section');
  const cards = document.querySelectorAll('.feature-card');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        cards.forEach((card, i) => {
          setTimeout(() => {
            card.style.opacity = 1;
            card.style.transform = 'translateY(0)';
          }, i * 150);
        });
      }
    });
  }, { threshold: 0.6 });

  observer.observe(revealSection);
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("joinModal");
  modal.classList.add("active");
});
</script>
<script>
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") closeJoin();
});
</script>
<script>
function openJoin() {
  document.getElementById("joinModal").classList.add("active");
}

function closeJoin() {
  document.getElementById("joinModal").classList.remove("active");
}
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  <?php if (isset($_SESSION['register_error']) || isset($_SESSION['register_success'])): ?>
    openJoin();
  <?php endif; ?>
});
</script>

<script>
const track = document.querySelector('.events-track');
const nextBtn = document.querySelector('.carousel-btn.next');
const prevBtn = document.querySelector('.carousel-btn.prev');

nextBtn.addEventListener('click', () => {
  track.scrollBy({ left: 320, behavior: 'smooth' });
});

prevBtn.addEventListener('click', () => {
  track.scrollBy({ left: -320, behavior: 'smooth' });
});
</script>
