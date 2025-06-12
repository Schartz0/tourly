<?php
include './../config/config.php'; // koneksi database

$sql = "SELECT * FROM staycation ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staycation - Tourly Travel Agency</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/svg+xml">

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/staycation.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
  <!-- Include Header -->
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
              <a href="./index.php" class="navbar-link" data-nav-link>home</a>
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

        <a href="https://wa.me/62895600300318?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20staycation" target="_blank" class="btn btn-primary">
          book now
        </a>

      </div>
    </div>

  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero">
    <div class="container">
      <h2 class="h1 hero-title">Discover Amazing Staycations</h2>
      <p class="hero-text">
        Explore our collection of beautiful staycation destinations perfect for your next getaway.
      </p>
    </div>
  </section>

  <main class="content-section">
    <div class="container">
      <h2 class="section-title">Our Staycation Collection</h2>

      <ul class="content-list">
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <li>
              <div class="content-card">
                <a href="https://wa.me/62895600300318?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20staycation"<?php echo urlencode($row['title']); ?>" 
                   class="book-now-btn">Book Now</a>
                <figure class="card-img">
                  <img src="./../uploads/<?php echo htmlspecialchars($row['image']); ?>" 
                       alt="<?php echo htmlspecialchars($row['title']); ?>" loading="lazy">
                </figure>

                <div class="card-body">
                  <p class="card-location">
                    <?php echo htmlspecialchars($row['location']); ?>
                  </p>

                  <h3 class="card-title">
                    <a href="staycation-detail.php?id=<?php echo $row['id']; ?>">
                      <?php echo htmlspecialchars($row['title']); ?>
                    </a>
                  </h3>

                  <p class="card-description">
                    <?php echo htmlspecialchars($row['description']); ?>
                  </p>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <div class="no-data">
            <p>No staycation options available at the moment.</p>
            <a href="index.php" class="btn btn-primary">Back to Home</a>
          </div>
        <?php endif; ?>
      </ul>
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