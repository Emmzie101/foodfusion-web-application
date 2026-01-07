<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- HERO SECTION -->
<section class="community-hero">
  <video autoplay muted loop playsinline>
    <source src="../assets/videos/hero.mp4" type="video/mp4">
  </video>
  <div class="hero-overlay">
    <h1>Community Cookbook</h1>
    <p>Discover, share, and celebrate recipes with FoodFusion.</p>
  </div>
</section>

<!-- LOCKED COMMUNITY PREVIEW FOR GUESTS -->
<section class="community-preview">

  <header class="section-header">
    <h2>Peek Inside the <span>Community</span></h2>
    <p>Get a glimpse of what our members share every day.</p>
  </header>

  <div class="preview-wrapper">

    <!-- CARD GRID -->
    <div class="preview-grid is-locked">
      <?php for($i=1; $i<=6; $i++): ?>
        <article class="preview-card">
          <img src="../assets/images/community/placeholder<?php echo $i ?>.jpg" alt="Community Recipe">
          <h3>Recipe Title <?php echo $i ?></h3>
          <p>Short description of the recipe or tip.</p>
        </article>
      <?php endfor; ?>
    </div>

    <!-- LOCK OVERLAY -->
    <div class="preview-lock">
      <div class="lock-content">
        <h3>Access Restricted</h3>
        <p>Only registered members can view and share recipes in the Community Cookbook.</p>
        <a href="../auth/login.php" class="btn-primary">Log In</a>
        <a href="../auth/register.php" class="btn-secondary">Register</a>
      </div>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
