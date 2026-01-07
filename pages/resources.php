
<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<?php
require_once '../config/db.php';

$search = $_GET['search'] ?? '';
$category = $_GET['category'] ?? 'all';

$sql = "SELECT * FROM resources WHERE title LIKE ?";
$params = ["%$search%"];

if ($category !== 'all') {
  $sql .= " AND category = ?";
  $params[] = $category;
}

$sql .= " ORDER BY created_at DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$resources = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>





<div id="videoModal" class="video-modal">
  <div class="video-wrapper">
    <button class="close-video" onclick="closeVideo()">✕</button>
    <video id="videoPlayer" controls></video>
  </div>
</div>

  <body>
<main class="resources-premium">

  <!-- HERO -->
  <section class="resources-hero">
    <h1>FoodFusion Resources</h1>
    <p>Learn deeply. Cook intentionally. Build sustainable knowledge.</p>
  </section>

  <!-- SEARCH -->
  <form class="resource-search">
    <input type="text" name="search" placeholder="Search resources..." value="<?= htmlspecialchars($search) ?>">
    <button>Search</button>
  </form>

  <div class="resource-filters">
  <a href="resources.php?category=all" class="<?= $category==='all'?'active':'' ?>">All</a>
  <a href="resources.php?category=culinary" class="<?= $category==='culinary'?'active':'' ?>">Culinary</a>
  <a href="resources.php?category=energy" class="<?= $category==='energy'?'active':'' ?>">Educational</a>
</div>

<h2 class="category-title">
  <?= ucfirst($category === 'energy' ? 'Educational' : ($category === 'culinary' ? 'Culinary' : 'All')) ?> Resources
</h2>

  <!-- RESOURCES GRID -->
  <section class="resource-grid">

    <?php foreach ($resources as $res): ?>
      <article class="resource-card <?= $res['type'] ?>">

        <div class="resource-media">
          <img src="../assets/resources/<?= $res['thumbnail'] ?>">
          <?php if ($res['type'] === 'video'): ?>
            <button class="play-btn" onclick="openVideo('../assets/resources/<?= $res['file_path'] ?>')">▶</button>
          <?php endif; ?>
        </div>

        <div class="resource-info">
          <span class="tag"><?= strtoupper($res['category']) ?></span>
          <h3><?= htmlspecialchars($res['title']) ?></h3>
          <p><?= htmlspecialchars($res['description']) ?></p>

          <?php if ($res['type'] !== 'video'): ?>
            <a href="download.php?id=<?= $res['resource_id'] ?>" class="download-btn">
              Download
            </a>
          <?php endif; ?>
        </div>

      </article>
    <?php endforeach; ?>

  </section>

</main>


<?php include '../includes/footer.php'; ?>
  </body>


<script>
function showTab(id) {
  document.querySelectorAll('.resources-section').forEach(s => s.classList.remove('active'));
  document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));

  document.getElementById(id).classList.add('active');
  event.target.classList.add('active');
}
</script>

<script>
    function openVideo(src) {
  document.getElementById('videoModal').classList.add('show');
  document.getElementById('videoPlayer').src = src;
}
function closeVideo() {
  document.getElementById('videoPlayer').pause();
  document.getElementById('videoModal').classList.remove('show');
}
</script>