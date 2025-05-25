<?php
$properties = include __DIR__ . '/data/properties.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$property = null;
foreach($properties as $p) {
  if ($p['id'] === $id) {
    $property = $p;
    break;
  }
}
if (!$property): ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Property Not Found</title>
  <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
  <p style="margin:2rem;text-align:center;color:red;">Property not found. <a href="listings.php">Back to Listings</a></p>
</body>
</html>
<?php exit; endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($property['title']) ?> | Vineyard Properties</title>
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="navbar">
    <div class="navbar-left">
      <img src="assets/logo.svg" alt="Vineyard Properties Logo" class="logo" />
      <span class="site-name">Vineyard Properties</span>
    </div>
    <nav class="navbar-right">
      <a href="index.html" class="nav-link">HOME</a>
      <a href="listings.php" class="nav-link">LISTINGS</a>
    </nav>
  </header>
  <main style="max-width:700px;margin:2rem auto;padding:1rem;">
    <a href="listings.php" style="color:#2e3a1e;text-decoration:underline;font-size:1.06rem;">&larr; Back to Listings</a>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:2rem;">
      <div style="flex:1;min-width:240px;max-width:320px;">
        <img src="<?= htmlspecialchars($property['image']) ?>" alt="<?= htmlspecialchars($property['title']) ?>" style="width:100%;border-radius:14px;box-shadow:0 2px 12px #0001;" />
      </div>
      <div style="flex:2;min-width:220px;">
        <h1 style="margin-top:0;"><?= htmlspecialchars($property['title']) ?></h1>
        <div style="margin-bottom:1.2rem;font-weight:500;color:#528c36;"> <?= htmlspecialchars($property['category']) ?> | <?= htmlspecialchars($property['type']) ?> </div>
        <span style="font-size:1.13rem;color:#2e3a1e;font-weight:700">Price: Ksh <?= number_format($property['price']) ?></span><br>
        <span style="color:#767676;">Location: <?= htmlspecialchars($property['location']) ?></span>
        <p style="margin:1.3rem 0 0.7rem;line-height:1.6;max-width:480px;"> <?= htmlspecialchars($property['description']) ?> </p>
      </div>
    </div>
    <div style="margin-top:2.5rem;text-align:center;">
      <a href="#contact" class="btn-search" style="font-size:1rem;">Contact Agent</a>
    </div>
  </main>
  <footer class="footer">
    <div class="footer-section"><h4>About us</h4><a href="#privacy">Privacy Policy</a></div>
    <div class="footer-section"><h4>Support</h4><a href="mailto:support@vineyardproperties.co.ke">support@vineyardproperties.co.ke</a></div>
    <div class="footer-section"><h4>Our resources</h4><a href="#">Our FB</a><a href="#">Our Instagram</a><a href="#">Our Twitter</a></div>
    <div class="footer-section countries">
      <img src="https://ext.same-assets.com/111440831/1337107470.svg" alt="Nigeria" />
      <img src="https://ext.same-assets.com/111440831/2592840572.svg" alt="Uganda" />
      <img src="https://ext.same-assets.com/111440831/3308890901.svg" alt="Ghana" />
      <img src="https://ext.same-assets.com/111440831/502354667.svg" alt="Tanzania" />
    </div>
    <div class="footer-bottom">© 2025 Vineyard Properties Kenya</div>
  </footer>
</body>
</html>
