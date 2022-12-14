<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <style>
  *{
  padding: 0;
  margin: 0;
  }

  img, video {
  max-width: 100%;
  height: auto;
  }

  </style>
</head>
<body>
  <!-- Nav Start -->
<header class="sticky">
    <a href="#" class="logo"></a>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="../src/review.php">Gallery</a></li>
      <li><a href="../src/package.php">Package</a></li>
    </ul>
  </header>
  <section class="banner"></section>
  <script type="text/javascript">
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);    
    })
  </script>
    <!-- Nav End -->

    <!-- Profile Start -->
    <section id="profile">
      <div class="wrapper">
        <div class="gradient">
        </div>
        <img class="bg-photo" src="../assets/img3.jpg" alt="">
        <h1 class="bg-text">Rabiin</h1>
        <h1 class="bg-text2">Wedding Orginizer</h1>
        <h1 class="bg-text3">solusi nikah tanpa tutup jalan</h1>
      </div>
    </section>
    
    <section id="tagline">
      <div class="wrapper">
        <h1>One-Stop Event Wedding Planner</h1>
      </div>
    </section>
    <!-- Profile End -->

    <!-- Content Start -->
    <section id="content">
      <div class="deskripsi">
        <p class="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, aut inventore numquam possimus distinctio ipsum eligendi accusamus odio nesciunt. Voluptates magnam numquam, rem doloribus et aperiam aliquid quod recusandae a necessitatibus excepturi dolore autem iste perferendis voluptas ipsum mollitia aspernatur velit? Soluta, aspernatur harum. Error nesciunt amet illum vero dolorum.</p>
        <img class="images" src="../assets/img2.jpg" alt="">
      </div>
      <div class="deskripsi">
        <img class="images" src="../assets/img2.jpg" alt="">
        <p class="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae delectus exercitationem quibusdam nobis neque veniam dolor ducimus dolorum ex tempora consequatur illo eum modi ratione, consequuntur vitae voluptas officia. Error molestias architecto repellat itaque hic! Sunt dignissimos magnam officiis eos eaque quos fugit, commodi asperiores omnis nostrum possimus vitae unde.</p>
      </div>
    </section>
    <!-- Content End -->

    <!-- Pakcage Start -->
    <section id="package">
      <div class="container">
      <div class="package-title">
        <h1>Paket Rabiin</h1>
      </div>
      <div class="border">
        <img src="../assets/border.png" alt="">
      </div>
      <div class="wrapper">
        <div class="kolom">
          <div class="card">
              <h3 class="title">Paket Sakinah</h3>
              <img class="photo" src="../assets/img5.jpeg" alt="">
              <div class="deskripsi">
                <h3>Kami menyediakan paket yang super elegan dan mewah, cocok buat para sultan</h3>
                <a href="../src/sakinah.php" class="see-more">
                  <button class="btn">Lihat Selengkapnya!</button>
                </a>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="card">
              <h3 class="title">Paket Mawadah</h3>
              <img class="photo" src="../assets/img6.jpeg" alt="">
              <div class="deskripsi">
                <h3>Paket yang minimalis tetapi tetap memberikan kesan yang tak terlupakan </h3>
                <a href="../src/mawaddah.php" class="see-more">
                  <button class="btn">Lihat Selengkapnya!</button>
                </a>
            </div>
          </div>
        </div>
        <div class="kolom">
          <div class="card">
              <h3 class="title">Paket Warahmah</h3>
              <img class="photo" src="../assets/img7.png" alt="">
              <div class="deskripsi">
                <h3>Paket pernikahan sesuai yang diinginkan dengan harga terjangkau </h3>
                <a href="../src/warahmah.php" class="see-more">
                  <button class="btn">Lihat Selengkapnya!</button>
                </a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Package End -->

    <!-- Reservation Start -->
    <section id="reservation">
      <div class="wrapper">
         <a href="../crud/reservasi.php">
          <button class="btn">RESERVASI</button>
        </a>
        <!-- <a href="./src/reservasi.html"></a> -->
        </a>
      </div>
    </section>
    <!-- Reservation End -->


    <!-- Contact Start -->
    <section id="contact">
      <div class="wrapper" style="margin: 5%; position: relative;">
        <div class="gradient" style="position: absolute; width: 100%; height: 50%; bottom:0; left: 0; z-index: 2; background: linear-gradient(to top, #FFF9B0, rgba(255, 0, 0, 0));">    
        </div>
        <h3 class="text">CONTACT US</h3>
      </div>

      <div class="medsos">
          <a href="https://www.instagram.com/?hl=id"> <img src="../assets/instagram.png" alt=""></a>
          <a href="https://id-id.facebook.com/"> <img src="../assets/facebook.png" alt=""></a>
          <a href="https://www.whatsapp.com/?lang=id"> <img src="../assets/whatsapp.png" alt=""></a>
      </div>
    </section>
    <!-- Contact End -->

  </main>
</body>
</html>