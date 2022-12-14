<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang Di Website Kami</title>
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/gl.css">
  <!-- <style>
    *{
      font-family: Arial, Helvetica, sans-serif;
      line-height: 20px;
      font-size: 15px;
    }

    html{
      margin: 0px;
      padding: 0px;
      background-color: #ddd;
    }
    body{
      margin: 0px;
      padding: 0px;
    }
  </style> -->
</head>

<body>
  <main>
    <!-- Nav Start -->
      <header class="sticky">
      <a href="#" class="logo"></a>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Gallery</a></li>
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
    <!-- Nav End -->
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="../assets/video-indonesia.mp4" type="video/mp4"/>
        </video>
        <div class="intro">
          <h3>Galery Kami</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure aut ex molestias tenetur laboriosam voluptatem
          </p>
          <p>
            <a href="" class="tombol"> More Info</a>
          </p>
        </div>
      </header>
    </div>
    
    <section>
      <h3 class="dekor">Foto Dekorasi</h1>
      <div id="list-foto">
        <div><img src="../assets/1.jpg"/></div>
        <div><img src="../assets/2.jpg"/></div>
        <div><img src="../assets/3.jpg"/></div>
        <div><img src="../assets/4.jpg"/></div>
        <div><img src="../assets/5.jpg"/></div>
        <div><img src="../assets/6.jpeg"/></div>
        <div><img src="../assets/1.jpg"/></div>
        <div><img src="../assets/2.jpg"/></div>  
      </div>  
    </section>

    <section class="quote">
      <div class="layar-dalam">
        <p>Rabiin adalah sebuah Website yang menawarkan sebuah paket untuk pernikahan</p>
      </div>
    </section>
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
</body>

</html>