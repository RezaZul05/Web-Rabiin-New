<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/review.css">
  <link rel="stylesheet" href="../css/gl.css">
</head>
<body>

  <!-- Navbar Start -->
  <header class="sticky">
    <a href="#" class="logo"></a>
    <ul>
      <li><a href="../crud/index.php">Home</a></li>
      <li><a href="../src/review.php">Gallery</a></li>
      <li><a href="#">Package</a></li>
    </ul>
  </header>
  <section class="banner"></section>
  <script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);    
    })
  </script>
  <!-- Navbar End -->

  <!-- Review Customer Start -->
  <div class="title">
    <h1>Review</h1>
  </div>

  <div class="container">
    <!-- Customer 2 -->
    <div class="box">
      <img src="../img/img1.jpg" alt="">
      <h2>Nana & Reza</h2>
      <p>Rabiin emang WO terbaik, gak salah milih Rabiin buat koordinir nikahan ku</p>
    </div>
    <!-- Customer 2 -->
    <div class="box">
      <img src="../img/img2.jpg" alt="">
      <h2>Reza Zulkifli</h2>
      <p>Kesini karna dulu saudara pernah pake buat nikahan mereka, dan ternyata memang hasilnya gak mengecewakan. Semangat terus Rabiin</p>
    </div>
    <!-- Customer 3 -->
    <div class="box">
      <img src="../img/img3.jpg" alt="">
      <h2>Safi Anwar</h2>
      <p>Gak salah milih tempat WO, udah murah, terus mereka all out buat acara yang sedang mereka handle, Rabiin emang the best</p>
    </div>
    <!-- Customer 4 -->
    <div class="box">
      <img src="../img/img4.jpg" alt="">
      <h2>Judul</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolorum facilis? Repudiandae eos sed rem.</p>
    </div>
    <!-- Customer 5 -->
    <div class="box">
      <img src="../img/img5.jpg" alt="">
      <h2>Judul</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolorum facilis? Repudiandae eos sed rem.</p>
    </div>
    <!-- Customer 6 -->
    <div class="box">
      <img src="../img/img6.jpg" alt="">
      <h2>Judul</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolorum facilis? Repudiandae eos sed rem.</p>
    </div>
    <!-- Customer 7 -->
    <div class="box">
      <img src="../img/img7.jpg" alt="">
      <h2>Judul</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolorum facilis? Repudiandae eos sed rem.</p>
    </div>
    <!-- Customer 8 -->
    <div class="box">
      <img src="../img/img8.jpg" alt="">
      <h2>Judul</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolorum facilis? Repudiandae eos sed rem.</p>
    </div>
  </div>
  <!-- Review Customer End -->


  <!-- Quote Start -->

  <section class="quote">
      <div class="layar-dalam">
        <p>Rabiin adalah sebuah Website yang menawarkan sebuah paket untuk pernikahan</p>
      </div>
  </section>
    <!-- Quote End -->

    <!-- Team Start -->
    <section id="team">
      <div class="layar-dalam ">
        <h3>Our Team</h3>
        <div class="ringkasan">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, pariatur?</p>
          <div class="tim">
            <div>
              <img src="../assets/tasya.jpeg">
              <h6>Talitha Naifa Audrey</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="../assets/hanif.jpeg">
              <h6>Hanif Prasetyo</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="../assets/safi.jpeg">
              <h6>M Safi Anwar Anas</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="../assets/reza.JPG">
              <h6>Reza Zulkifli Ferdiansyah</h6>
              <span>Indonesia</span>
            </div>
          </div>
      </div>
    </section>
    <!-- Team End -->
</body>
</html>