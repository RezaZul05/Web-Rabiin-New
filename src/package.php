<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/package.css">
  <!-- <link rel="stylesheet" href="../css/navbar.css"> -->
  <!-- <title>Document</title> -->
</head>
<body>
  <style>
    
  </style>
  <!-- Navbar Start -->
  <!-- <header class="sticky">
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
  </script> -->
  <!-- Navbar End -->

  <section>
  <!-- image slider start -->
  <div class="slider">
    <div class="slides">
      <!-- radion button start -->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!-- radion button end -->

      <!-- slide image start -->
      <div class="slide first">
        <img src="../assets/img1.jpg" width="100%" alt="">
      </div>
      <div class="slide">
        <img src="../assets/img2.jpg" width="100%" alt="">
      </div>
      <div class="slide">
        <img src="../assets/img3.jpg" width="100%" alt="">
      </div>
      <div class="slide">
        <img src="../assets/img4.jpg" width="100%" alt="">
      </div>
      <!-- slide image end -->
      <!-- automatic navigation start -->
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <!-- automatic navigation end -->
    </div>
    <!-- manual navigation start -->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!-- manual navigation end -->
  </div>
  <!-- image slider end -->
  </section>
  

  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
  </script>

</body>
</html>