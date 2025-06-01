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
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/staycation.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">
  <!-- Include Header -->
  <?php include './includes/header.php'; ?>

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
                <a href="https://wa.me/6281234567890?text=Hi%20Tourly,%20I%20want%20to%20book%20<?php echo urlencode($row['title']); ?>" 
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