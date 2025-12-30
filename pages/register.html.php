<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../assets/css/style.css">

<section class="auth-wrapper">
  <div class="auth-card">

    <!-- Image Side -->
    <div class="auth-visual">
      <img src="../assets/images/amara.jpg" alt="Food Fusion">
      <div class="auth-overlay">
        <h2>Join Food Fusion</h2>
        <p>Share culture. Share recipes. Share stories.</p>
      </div>
    </div>

    <!-- Form Side -->
    <div class="auth-form">
      <h1>Create Account</h1>

      <form action="../auth/register.php" method="POST">

        <div class="form-group">
          <input type="text" name="first_name" required>
          <label>First Name</label>
        </div>

        <div class="form-group">
          <input type="text" name="last_name" required>
          <label>Last Name</label>
        </div>

        <div class="form-group">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>

        <div class="form-group">
          <input type="password" name="password" required minlength="8">
          <label>Password</label>
        </div>

        <button type="submit" class="auth-btn">
          Create Account
        </button>

        <p class="auth-switch">
          Already have an account?
          <a href="login.html.php">Login</a>
        </p>

      </form>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
