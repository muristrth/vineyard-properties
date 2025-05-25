<?php
$properties = include __DIR__ . '/data/properties.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Property Listings | Vineyard Properties</title>
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
      <a href="#rent" class="nav-link">FOR RENT</a>
      <a href="#sale" class="nav-link">FOR SALE</a>
      <a href="#list" class="btn-list">+ list my property</a>
    </nav>
  </header>
  <main style="max-width:1200px;margin:2rem auto;padding:0 1rem;">
    <h1 style="text-align:center;margin-bottom:2rem;color:#2e3a1e;">All Properties</h1>
    <form id="property-filter-form" style="max-width:700px;margin:0 auto 2.5rem auto;display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;background:#fff;padding:1.2rem 1.7rem;border-radius:14px;box-shadow:0 1px 7px #a5bede22;">
      <select name="category" class="search-dropdown">
        <option value="all">Any Category</option>
        <option value="House">House</option>
        <option value="Apartment">Apartment</option>
        <option value="Land">Land</option>
        <option value="Commercial">Commercial</option>
      </select>
      <select name="region" class="search-dropdown">
        <option value="all">Any Location</option>
        <option value="Nairobi">Nairobi</option>
        <option value="Mombasa">Mombasa</option>
        <option value="Kisumu">Kisumu</option>
      </select>
      <input type="number" name="min_price" class="search-input" placeholder="Min price" />
      <input type="number" name="max_price" class="search-input" placeholder="Max price" />
      <button class="btn-search" type="submit">Filter</button>
    </form>
    <div class="category-grid" id="property-list">
      <?php foreach($properties as $property): ?>
        <a href="property.php?id=<?= $property['id'] ?>" class="property-card" style="text-decoration:none;" data-cat="<?= htmlspecialchars($property['category']) ?>" data-loc="<?= htmlspecialchars($property['location']) ?>" data-price="<?= (int)$property['price'] ?>">
          <img src="<?= htmlspecialchars($property['image']) ?>" alt="<?= htmlspecialchars($property['title']) ?>">
          <span class="card-title" style="color:#2e3a1e;"><?= htmlspecialchars($property['title']) ?></span>
          <div style="padding:0.5rem;text-align:left;width:90%;">
            <span style="font-size:0.98rem;color:#75756d;">Location: <?= htmlspecialchars($property['location']) ?></span><br>
            <span style="font-size:1.12rem;font-weight:700;">Ksh <?= number_format($property['price']) ?></span><br>
            <span style="display:inline-block;background:#eaf7d1;color:#528c36;font-size:0.95rem;padding:2px 10px;border-radius:14px;"> <?= htmlspecialchars($property['category']) ?> (<?= htmlspecialchars($property['type']) ?>) </span>
          </div>
        </a>
      <?php endforeach; ?>
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
  <script src="assets/search-filter.js"></script>
</body>
</html>
