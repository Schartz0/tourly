<?php
include './../config/config.php'; // koneksi database

$sql = "SELECT title, image, description, price FROM packages ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tour Packages - Tourly Travel Agency</title>
  <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/packages.css">
</head>

<body id="top">
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>

            <p class="helpline-number">+62 853-6340-7399</p>
          </div>

        </a>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" alt="Tourly logo">
        </a>

        <div class="header-btn-group">

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/" target="_blank" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          
          <li>
            <a href="https://x.com/" target="_blank" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          
          <li>
            <a href="https://www.youtube.com/" target="_blank" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
          

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="./index.html" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="./staycation.php" class="navbar-link" data-nav-link>staycation</a>
            </li>

            <li>
              <a href="./packages.php" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="./gallery.php" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="#footer" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary">Book Now</button>

      </div>
    </div>

  </header>


  <section class="hero" id="hero">
    <div class="container">
      <h2 class="h1 hero-title">Our Tour Packages</h2>
      <p class="hero-text">
        Explore our selection of amazing travel experiences
      </p>
    </div>
  </section>

  <main class="packages-section">
    <div class="container">
      <h2 class="section-title">Featured Packages</h2>

      <div class="package-list">
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <div class="package-card">
              <div class="package-image">
                <img src="./../uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
              </div>
              
              <div class="package-content">
                <h3 class="package-title"><?php echo htmlspecialchars($row['title']); ?></h3>
                <p class="package-description"><?php echo htmlspecialchars($row['description']); ?></p>
                
                <div class="package-footer">
                  <div class="package-price">
                    Rp <?php echo number_format($row['price'], 0, ',', '.'); ?>
                  </div>
                  <a href="https://wa.me/6281234567890?text=Hi%20Tourly,%20I%20want%20to%20book%20<?php echo urlencode($row['title']); ?>" 
                     class="book-now-btn">Book Now</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <div class="no-packages">
            <p>No packages available at the moment.</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </main>

  <!-- Include Footer -->
  <?php include './includes/footer.php'; ?>

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Custom JS -->
  <script src="./assets/js/script.js"></script>
</body>
</html>