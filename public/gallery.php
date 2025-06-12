<?php
include './../config/config.php'; // database connection

$sql = "SELECT * FROM gallery ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Tourly Travel Agency</title>
  <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/gallery.css">
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

  <section class="hero" id="hero">
    <div class="container">
      <h2 class="h1 hero-title">Our</h2>
      <h2 class="h1 hero-title">Gallery</h2>
      <p class="hero-text">
        Explore moments from our amazing tours and staycations
      </p>
    </div>
  </section>

  <main class="gallery-section">
    <div class="container">
      <h2 class="section-title">Travel Moments</h2>
      
      <div class="carousel-container">
        <div class="carousel-track">
          <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
              <div class="carousel-slide">
                <!-- Photo Card -->
                <div class="photo-card">
                  <div class="gallery-image">
                    <img src="./../uploads/<?php echo htmlspecialchars($row['image']); ?>" 
                         alt="<?php echo htmlspecialchars($row['caption']); ?>">
                  </div>
                  <div class="photo-card-footer">
                    <span class="photo-date"><?php echo date('F j, Y', strtotime($row['date_created'])); ?></span>
                  </div>
                </div>
                
                <!-- Caption Card -->
                <div class="gallery-caption">
                  <?php echo htmlspecialchars($row['caption']); ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
            <div class="no-gallery">
              <p>No gallery items available at the moment.</p>
            </div>
          <?php endif; ?>
        </div>
        
        <button class="carousel-arrow prev-arrow" aria-label="Previous">&#10094;</button>
        <button class="carousel-arrow next-arrow" aria-label="Next">&#10095;</button>
      </div>
    </div>
  </main>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".carousel-track");
    const slides = document.querySelectorAll(".carousel-slide");
    const prevBtn = document.querySelector(".prev-arrow");
    const nextBtn = document.querySelector(".next-arrow");

    let currentIndex = 1;

    function updateCarousel() {
      const slideWidth = slides[0].offsetWidth + 20;
      const container = document.querySelector(".carousel-container");
      const containerWidth = container.offsetWidth;

      const rawOffset = (slideWidth * currentIndex) - (containerWidth / 2 - slideWidth / 2);
      const maxOffset = (slides.length * slideWidth) - containerWidth;
      const totalOffset = Math.max(0, Math.min(rawOffset, maxOffset));

      track.style.transform = `translateX(-${totalOffset}px)`;

      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === currentIndex);
      });
    }


    prevBtn.addEventListener("click", () => {
      if (currentIndex === 0) {
        currentIndex = slides.length - 1; // lompat ke akhir
      } else {
        currentIndex--;
      }
      updateCarousel();
    });

    nextBtn.addEventListener("click", () => {
      if (currentIndex === slides.length - 1) {
        currentIndex = 0; // lompat ke awal
      } else {
        currentIndex++;
      }
      updateCarousel();
    });


    window.addEventListener("load", updateCarousel);
    window.addEventListener("resize", updateCarousel);
  });
</script>


    <!-- Include Footer -->
  <?php include './includes/footer.php'; ?>

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Custom JS -->
  <script src="./assets/js/script.js"></script>
</body>
</html>