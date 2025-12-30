<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">

<section class="auth-wrapper">
  <div class="auth-card">

    <div class="auth-visual">
      <img src="../assets/images/amara-food.jpg" alt="Food Fusion">
      <div class="auth-overlay">
        <h2>Welcome Back</h2>
        <p>Continue your culinary journey.</p>
      </div>
    </div>

    <div class="auth-form">
      <h1>Login</h1>

      <form action="../auth/login.php" method="POST">

        <div class="form-group">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>

        <div class="form-group">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>

        <button type="submit" class="auth-btn">
          Login
        </button>

        <p class="auth-switch">
          New here?
          <a href="register.html.php">Create account</a>
        </p>

      </form>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
