<?php include '../includes/header.php'; ?>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: community-guest.php");
  exit;
}
?>


<?php
require_once '../config/db.php';
// session_start();

/* ==========================
   FETCH POSTS
========================== */

$sql = "
SELECT 
  posts.post_id,
  posts.content,
  posts.image,
  posts.created_at,
  users.first_name,
  users.last_name,
  (
    SELECT COUNT(*) 
    FROM post_likes 
    WHERE post_likes.post_id = posts.post_id
  ) AS likes
FROM posts
JOIN users ON posts.user_id = users.user_id
ORDER BY posts.created_at DESC
";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* ==========================
   FETCH COMMENTS FOR EACH POST
========================== */

foreach ($posts as &$post) {
    $commentSql = "
        SELECT comments.comment, users.first_name
        FROM comments
        JOIN users ON comments.user_id = users.user_id
        WHERE comments.post_id = ?
        ORDER BY comments.created_at ASC
    ";

    $commentStmt = $pdo->prepare($commentSql);
    $commentStmt->execute([$post['post_id']]);
    $post['comments'] = $commentStmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<body>

<aside id="sidebar" class="community-sidebar">
  <div class="sidebar-brand">FoodFusion</div>

  <nav class="sidebar-nav">
    <a href="../index.php">🏠 Home</a>
    <a href="recipes.php">🍽 Recipes</a>
    <a href="resources.php">📚 Resources</a>
    <a href="community-main.php" class="active">💬 Community</a>
  </nav>

  <button class="logout-btn" onclick="openLogoutModal()">Logout</button>

</aside>

<button class="collapse-btn" onclick="toggleSidebar()">☰</button>


<main class="community-feed">

  <!-- CREATE POST -->
  <div class="create-post">
    <form method="POST" action="create_post.php" enctype="multipart/form-data">
      <div class="post-input-row">
        <div class="avatar-circle">You</div>
        <textarea name="content" placeholder="Share a recipe..."></textarea>
      </div>

      <div class="post-footer">
        <label class="upload-btn">
          📷 Photo
          <input type="file" name="image" hidden>
        </label>
        <button type="submit" class="post-btn">Post</button>
      </div>
    </form>
  </div>

  <!-- FEED -->
  <section class="posts-feed">

    <?php foreach ($posts as $post): ?>
    <article class="post-card">

      <header class="post-header">
        <div class="avatar">
          <?= strtoupper($post['first_name'][0]) ?>
        </div>
        <div>
          <h4><?= htmlspecialchars($post['first_name']) ?></h4>
          <span><?= date('M d, H:i', strtotime($post['created_at'])) ?></span>
        </div>
      </header>

      <div class="post-content">
        <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
      </div>

      <?php if ($post['image']): ?>
        <img src="../uploads/<?= htmlspecialchars($post['image']) ?>" class="post-image">
      <?php endif; ?>

      <div class="post-actions">
        <form method="POST" action="like_post.php">
          <input type="hidden" name="post_id" value="<?= $post['post_id'] ?>">
          <button class="like-btn">👍 Like (<?= $post['likes'] ?>)</button>
        </form>
      </div>

      <div class="comments">
        <?php foreach ($post['comments'] as $comment): ?>
          <div class="comment">
            <strong><?= htmlspecialchars($comment['first_name']) ?>:</strong>
            <?= htmlspecialchars($comment['comment']) ?>
          </div>
        <?php endforeach; ?>

        <form method="POST" action="add_comment.php">
          <input type="hidden" name="post_id" value="<?= $post['post_id'] ?>">
          <input type="text" name="comment" placeholder="Write a comment...">
        </form>
      </div>

    </article>
    <?php endforeach; ?>

  </section>

</main>

<div id="logoutModal" class="logout-modal">
  <div class="logout-box">
    <h3>We hate to see you go!</h3>
    <p>Please enter your email to confirm you want to exit FoodFusion.</p>

    <form method="POST" action="../auth/confirm_logout.php">
      <input
        type="email"
        name="email"
        placeholder="Your email"
        required
      >

      <div class="logout-actions">
        <button type="button" class="cancel-btn" onclick="closeLogoutModal()">Cancel</button>
        <button type="submit" class="confirm-btn">Confirm Logout</button>
      </div>
    </form>
  </div>
</div>

</body>


<script>
function addPost() {
  const input = document.getElementById("postInput");
  const content = input.value.trim();
  if (!content) return;

  const post = document.createElement("article");
  post.className = "post-card";

  post.innerHTML = `
    <header>
      <div class="avatar">Y</div>
      <div>
        <h4>You</h4>
        <span>Just now</span>
      </div>
    </header>
    <p>${content}</p>
  `;

  document.getElementById("postsFeed").prepend(post);
  input.value = "";
}
</script>


<script>
function toggleSidebar() {
  document.getElementById('sidebar').classList.toggle('active');
}
</script>

<script>
function openLogoutModal() {
  document.getElementById('logoutModal').classList.add('show');
}

function closeLogoutModal() {
  document.getElementById('logoutModal').classList.remove('show');
}
</script>

