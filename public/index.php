<?php
// Jika ingin menyisipkan PHP, tambahkan di sini
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourly - Travel agancy</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
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
              <a href="#" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>staycation</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="#footer" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary">Login Admin</button>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h4 class="h1 hero-title">Travel To Lagoi Bay-Bintan </h4>

          <p class="hero-text">
              Discover the tropical beauty of Bintan with white-sand beaches, clear waters, and luxury resorts.
              Explore stunning nature and rich Malay culture.
              Relax and unwind—Bintan awaits with Tourly!
          </p>

        </div>
      </section>




      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Uncover place</p>

          <h2 class="h2 section-title">Popular Staycation</h2>

          <p class="section-text">
            Nikmati pengalaman staycation terbaik di berbagai destinasi menarik yang menggabungkan
            kenyamanan dan keindahan lokasi. Mulai dari nuansa tropis hingga kemewahan modern, setiap
            tempat menghadirkan suasana berbeda untuk liburan yang tak terlupakan.
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/Gambar 5.jpg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Indonesia </a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Angsana Bintan</a>
                  </h3>

                  <p class="card-text">
                   
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/Gambar 2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Indonesia</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Nirwana Resort</a>
                  </h3>

                  <p class="card-text">
               
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/Gambar 4.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Indonesia</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Banyan Tree Bintan</a>
                  </h3>

                  <p class="card-text">
                    
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <form action="./staycation.php"method="get">
            <button type="submit" class="btn btn-primary">More Staycation</button>
          </form>

        </div>
      </section>

      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Packages</p>

          <h2 class="h2 section-title">Checkout Our Packages</h2>

          <p class="section-text">
            Temukan berbagai pilihan paket wisata yang dirancang 
            untuk memberikan pengalaman liburan yang berkesan di Bintan dan sekitarnya. Setiap paket kami hadir 
            dengan kombinasi aktivitas menarik, pemandangan alam yang menawan, serta layanan yang profesional dan nyaman.
          </p>

          <ul class="package-list">
            

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/Gambar 6.png" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Bintan East Coast Ride</h3>

                  <p class="card-text">
                    Memanggil semua pesepeda yang berdedikasi 
                    untuk mencari petualangan yang mendebarkan! Bintan East Coast Ride menggabungkan pemandangan pedesaan,
                    medan yang beragam, hutan yang rimbun, pantai yang tenang, dan aksesibilitas yang nyaman dalam satu rute sepanjang 120 km.
                  </p>

                  
                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp.190.000
                    <span>/ per person</span>
                  </p>


                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/Gambar 7.png" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Mangrove Discovery Tour</h3>

                  <p class="card-text">
                    Nikmati petualangan ekowisata selama 60 menit menyusuri Sungai Sebung di Bintan.
                    Jelajahi hutan bakau yang rimbun, saksikan satwa liar seperti monyet, burung raja udang, ular 
                    bakau, dan biawak, serta pelajari peran penting sungai dan hutan bakau bagi kehidupan masyarakat dan perlindungan pesisir Bintan.

                  </p>

                  

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp.380.000
                    <span>/ per person</span>
                  </p>


                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/Gambar 8.png" alt="Santorini Island's Weekend Vacation" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Lagoi Bay Snorkeling Tour</h3>

                  <p class="card-text">
                    Rasakan serunya snorkeling di Lagoi Bay bersama Bintan Watersports! Nikmati panorama bawah 
                    laut yang memukau dengan beragam biota laut eksotis seperti penyu dan pari, serta pemandangan 
                    pantai yang indah. Tur ini cocok untuk semua tingkat kemampuan, tanpa peralatan rumit, dipandu oleh 
                    tim berpengalaman. Jelajahi keindahan ekosistem laut Bintan dan abadikan momen tak terlupakan di perairan jernih Lagoi.

                  </p>

                

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp.600.000
                    <span>/ per person</span>
                  </p>


                </div>

              </div>
            </li>

          </ul>

          <form action="../public/packages.php" method="get">
            <button type="submit" class="btn btn-primary">View All Packages</button>
            
          </form>


        </div>
      </section>





      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
  <div class="container">

    <p class="section-subtitle">Photo Gallery</p>

    <h2 class="h2 section-title">Photo's From Travellers</h2>

    <p class="section-text">
      Lihat momen-momen berkesan yang diabadikan oleh para wisatawan selama perjalanan mereka bersama kami. 
      Setiap foto mencerminkan keindahan destinasi, keseruan aktivitas, dan pengalaman autentik yang dialami langsung di lapangan.
    </p>

    <ul class="gallery-list">

      <li class="gallery-item">
        <figure class="gallery-image">
          <img src="./assets/images/Gallery 3.png" alt="Gallery image">
        </figure>
      </li>

      <li class="gallery-item">
        <figure class="gallery-image">
          <img src="./assets/images/Gallery 2.png" alt="Gallery image">
        </figure>
      </li>

      <li class="gallery-item">
        <figure class="gallery-image">
          <img src="./assets/images/Gallery 1.png" alt="Gallery image">
        </figure>
      </li>

      <li class="gallery-item">
        <figure class="gallery-image">
          <img src="./assets/images/Gallery 4.png" alt="Gallery image">
        </figure>
      </li>

      <li class="gallery-item">
        <figure class="gallery-image">
          <img src="./assets/images/Gallery 5.png" alt="Gallery image">
        </figure>
      </li>

    </ul>

    <!-- Tombol untuk pindah ke halaman gallery.php -->
    <form action="./gallery.php" method="get">
      <button type="submit" class="btn btn-primary">View All Gallery</button>
      
    </form>

  </div>
</section>






      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
              Rencanakan perjalanan impian Anda bersama kami dan nikmati pengalaman
               wisata yang aman, nyaman, dan penuh kesan. Kami hadir untuk memastikan setiap momen liburan Anda menjadi kenangan yang berarti.


            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>
        
        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id ="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="Tourly logo">
          </a>

          <p class="footer-text">
            Tourly adalah perjalanan Anda dalam menjelajahi destinasi wisata terbaik dengan pengalaman
            yang aman, nyaman, dan berkesan. Kami menawarkan berbagai paket liburan yang dirancang untuk memenuhi kebutuhan wisatawan dari berbagai kalangan. 
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+62 853-6340-7399</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>Sebong Lagoi,Kabupaten Bintan</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Subscribe our newsletter for more update & news !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2025 All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>