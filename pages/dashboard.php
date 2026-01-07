<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<section class="dashboard">
  <h1>Your Dashboard</h1>

  <div class="dashboard-cards">
    <div class="dash-card">
      <h3>Your Posts</h3>
      <p>5 shared</p>
    </div>

    <div class="dash-card">
      <h3>Recipes Shared</h3>
      <p>3 recipes</p>
    </div>

    <div class="dash-card">
      <h3>Community Likes</h3>
      <p>48 likes</p>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
