<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Fusion</title>
    <link rel="stylesheet" href="/foodfusion/assets/css/style.css">


<footer class="site-footer">

  <div class="footer-inner">

    <!-- BRAND -->
    <div class="footer-brand">
      <h3>Food Fusion</h3>
      <p>
        A digital space celebrating culture, creativity,
        and connection through food.
      </p>
    </div>

    <!-- QUICK LINKS -->
    <nav class="footer-links">
      <h4>Explore</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="recipes.php">Recipes</a></li>
        <li><a href="community.php">Community Cookbook</a></li>
        <li><a href="learning.php">Learning & Resources</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <!-- ACCOUNT -->
    <div class="footer-links">
      <h4>Account</h4>
      <ul>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="/foodfusion/auth/login.php">Login</a></li>
          <li><a href="/foodfusion/auth/register.php">Register</a></li>
        <?php endif; ?>
      </ul>
    </div>

    <!-- SOCIAL -->
    <div class="footer-social">
      <h4>Connect</h4>
      <div class="social-icons">
        <a href="#"><span>IG</span></a>
        <a href="#"><span>X</span></a>
        <a href="#"><span>FB</span></a>
      </div>
    </div>

  </div>

  <!-- COPYRIGHT -->
  <div class="footer-bottom">
    <p>© <?php echo date('Y'); ?> Food Fusion. All rights reserved.</p>
  </div>

</footer>


</head>
<body>

  <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="../assets/js/about.js"></script>
