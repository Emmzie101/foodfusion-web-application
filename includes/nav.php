

 <nav class="glass-nav">
  <div class="nav-inner">

    <div class="nav-logo">
      FoodFusion
    </div>

    <!-- Desktop Links -->
    <ul class="nav-links">
      <li><a href="/foodfusion/index.php">Home</a></li>
      <a href="pages/about.php">About</a>
      <li><a href="recipes.php">Recipes</a></li>
      <li><a href="pages/community.php">Community</a></li>
      <li><a href="pages/resources.php">Resources</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="navi">
  <a href="/foodfusion/auth/register.php" class="navi-btn">
    Sign Up →
  </a>
</div>
    <!-- Mobile Toggle -->
    <button class="nav-toggle" aria-label="Toggle Menu">
      <span></span>
      <span></span>
    </button>

  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="recipes.php">Recipes</a>
    <a href="community.php">Community</a>
    <a href="resources.php">Resources</a>
    <a href="contact.php">Contact</a>
    <div class="navi">
  <a href="/foodfusion/auth/register.php" class="navi-btn">
    Sign Up →
  </a>
</div>
  </div>
</nav>

<script>
  const nav = document.querySelector('.glass-nav');
  const toggle = document.querySelector('.nav-toggle');

  toggle.addEventListener('click', () => {
    nav.classList.toggle('open');
  });
</script>
