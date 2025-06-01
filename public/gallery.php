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
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/gallery.css">
</head>

<body id="top">
  <?php include './includes/header.php'; ?>

  <section class="hero" id="hero">
    <div class="container">
      <h2 class="h1 hero-title">Our Gallery</h2>
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
  document.addEventListener('DOMContentLoaded', function() {
  const track = document.querySelector('.carousel-track');
  const slides = Array.from(document.querySelectorAll('.carousel-slide'));
  const prevBtn = document.querySelector('.prev-arrow');
  const nextBtn = document.querySelector('.next-arrow');
  
  if (slides.length > 0) {
    const slideWidth = slides[0].offsetWidth;
    const gap = 20;
    let currentIndex = 0;
    
    // Initialize carousel
    const initCarousel = () => {
      slides.forEach((slide, index) => {
        slide.style.left = `${(slideWidth + gap) * index}px`;
      });
      centerSlide(currentIndex);
    };
    
    // Center the current slide
    const centerSlide = (index) => {
      const containerWidth = track.parentElement.offsetWidth;
      const slideOffset = (slideWidth + gap) * index;
      const centerOffset = (containerWidth / 2) - (slideWidth / 2) - slideOffset;
      
      track.style.transform = `translateX(${centerOffset}px)`;
      
      // Update active class
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.classList.add('active-slide');
        } else {
          slide.classList.remove('active-slide');
        }
      });
    };
    
    // Event listeners
    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        centerSlide(currentIndex);
      }
    });
    
    nextBtn.addEventListener('click', () => {
      if (currentIndex < slides.length - 1) {
        currentIndex++;
        centerSlide(currentIndex);
      }
    });
    
    // Initialize
    initCarousel();
    
    // Handle window resize
    window.addEventListener('resize', () => {
      centerSlide(currentIndex);
    });
  }
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